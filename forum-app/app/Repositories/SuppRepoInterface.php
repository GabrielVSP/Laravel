<?php

namespace App\Repositories;

use App\DTO\{CreateSuppDTO, UpdateSuppDTO};
use stdClass;

interface SuppRepoInterface {

    public function paginate(int $page = 1, int $maxPerPage = 2, string $filter = null): PaginateInterface;
    public function getAll(string $filter = null): array;
    public function getSingle(string $id): stdClass|null;
    public function delete(string $id): void;
    public function create(CreateSuppDTO $dto): stdClass;
    public function update(UpdateSuppDTO $dto): stdClass|null;

}