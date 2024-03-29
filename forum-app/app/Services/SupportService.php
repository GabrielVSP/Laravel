<?php

namespace App\Services;

use App\DTO\CreateSuppDTO;
use App\DTO\UpdateSuppDTO;
use App\Repositories\PaginateInterface;
use App\Repositories\SuppRepoInterface;
use stdClass;

class SupportService {

    public function __construct(
        protected SuppRepoInterface $repository
    ) {

    }

    public function paginate(int $page = 1, int $maxPerPage = 2, string $filter = null): PaginateInterface {

        return $this->repository->paginate(
            page: $page,
            maxPerPage: $maxPerPage, 
            filter: $filter
        );

    }

    public function getAll(string $filter = null): array {

        return $this->repository->getAll($filter);

    }

    public function getSingle(string $id): stdClass | null {

        return $this->repository->getSingle($id);

    }

    public function create(CreateSuppDTO $dto): stdClass {

        return $this->repository->create($dto);

    }

    public function update(UpdateSuppDTO $dto): stdClass | null {

        return $this->repository->update($dto);

    }

    public function delete(string $id): void {

        $this->repository->delete($id);

    }

}