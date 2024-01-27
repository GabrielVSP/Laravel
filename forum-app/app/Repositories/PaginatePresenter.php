<?php

namespace App\Repositories;
use Illuminate\Pagination\LengthAwarePaginator;
use stdClass;

class PaginatePresenter implements PaginateInterface {

    /**
     * @var stdClass[]
     */
    private array $items;

    public function __construct(
        protected LengthAwarePaginator $paginator
    ) {

        $this->items = $this->resolveItems($this->paginator->items());

    }

    /**
     * @return stdClass[]
     */

    public function items() : array {
        //return $this->paginator->items();
        return $this->items;
    }

    public function total() : int {
        return $this->paginator->total() ?? 0;
    }

    public function isFirst() : bool {
        return $this->paginator->onFirstPage();
    }

    public function isLast() : bool {
        return $this->paginator->onLastPage();
    }

    public function currentPage() : int {
        return $this->paginator->currentPage() ?? 1;
    }

    public function nextPage() : int {
        return $this->paginator->currentPage() + 1;
    }

    public function previousPage() : int {
        return $this->paginator->currentPage() - 1;
    }

    private function resolveItems(array $items): array {

        $response = [];
        foreach($items as $item) {

            $stdClassObj = new stdClass;
            foreach($item->toArray() as $key => $value) {

                $stdClassObj->{$key} = $value;

            }
            array_push($response, $stdClassObj);

        }

        return $response;
 
    }

}
