<?php

namespace App\Services;
use stdClass;

class SupportService {

    protected $repository;

    public function __construct() {

        
    }

    public function getAll(string $filter = null): array {

        return $this->repository->getAll($filter);

    }

    public function getSingle(string $id): stdClass | null {

        return $this->repository->getSingle($id);

    }

    public function create(string $subject, string $status, string $content): stdClass {

        return $this->repository->create($subject, $status, $content);

    }

    public function update(string $id, string $subject, string $status, string $content): stdClass | null {

        return $this->repository->update($id, $subject, $status, $content);

    }

    public function delete(string $id): void {

        $this->repository->delete($id);

    }

}