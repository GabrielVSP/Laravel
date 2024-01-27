<?php

namespace App\Repositories;

interface PaginateInterface {
    /**
     * @return stdClass[]
     */
    public function items() : array;
    public function total() : int;
    public function isFirst() : bool;
    public function isLast() : bool;
    public function currentPage() : int;
    public function nextPage() : int;
    public function previousPage() : int;
}