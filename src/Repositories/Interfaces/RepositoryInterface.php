<?php

namespace Devjs\EloquentResources\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function all(): Collection;

    public function find(int $id): Model;

    public function findBy(array $params): Collection;

    public function create(array $data): Model;

    public function update(int $id, array $data): Model;

    public function destroy(int $id): int;
}
