<?php

namespace App\Actions\Common;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface CommonActionsContract
{
    public function create(array $data): Model|Builder;

    public function findOrFail(int $id, array $relations = []): Model|Collection|Builder|array|null;

    public function getAll(bool $all = false, array $relations = []): Collection|LengthAwarePaginator|array;

    public function update(int $id, array $data): int;

    public function delete(int $id): mixed;
}
