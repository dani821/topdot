<?php

namespace App\Actions\Common;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CommonActions implements CommonActionsContract
{
    public function __construct(protected Model $model)
    {
    }

    public function create(array $data): Model|Builder
    {
        return $this->model->newQuery()->create($data);
    }

    public function findOrFail(int $id, array $relations = []): Model|Collection|Builder|array|null
    {
        return $this->model
            ->newQuery()
            ->with($relations)
            ->findOrFail($id);
    }

    public function getAll(bool $all = false, array $relations = []): Collection|LengthAwarePaginator|array
    {
        $result = $this->model
            ->newQuery()
            ->with($relations);

        return $all
            ? $result->get()
            : $result->paginate();
    }

    public function update(int $id, array $data): int
    {
        return $this->model
            ->newQuery()
            ->where('id', $id)
            ->update($data);
    }

    public function delete(int $id): mixed
    {
        return $this->model
            ->newQuery()
            ->where('id', $id)
            ->delete();
    }
}
