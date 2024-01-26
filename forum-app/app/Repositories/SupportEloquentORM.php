<?php

namespace App\Repositories;
use App\DTO\{CreateSuppDTO, UpdateSuppDTO};
use App\Models\Support;
use App\Repositories\SuppRepoInterface;
use stdClass;

class SupportEloquentORM implements SuppRepoInterface {

    public function __construct(
       protected Support $model
    )
    {
        
    }

    public function getAll(string $filter = null): array {

        return $this->model
            ->where(function($query) use ($filter) {
                if($filter) {
                    $query->where('subject', $filter);
                    $query->orWhere('content', 'like', "%{filter}%");
                }
            })
            ->get()
            ->toArray();
    }

    public function getSingle(string $id): stdClass|null {

        $support = $this->model->find($id);

        return $support ? (object) $support->toArray() : null;

    }

    public function delete(string $id): void {

        $this->model->findOrFail($id)->delete();

    }

    public function create(CreateSuppDTO $dto): stdClass {

        $support = $this->model->create((array) $dto);
        return (object) $support->toArray();

    }

    public function update(UpdateSuppDTO $dto): stdClass|null {

        $support = $this->model->find($dto->id);

       if(!$support) {
        return null;
       }

       $support->update((array) $dto);

       return (object) $support->toArray();

    }

}
