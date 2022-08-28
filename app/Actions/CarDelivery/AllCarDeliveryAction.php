<?php

namespace App\Actions\CarDelivery;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AllCarDeliveryAction extends BaseCarDeliveryAction
{
    public function execute(bool $all = false, $relations = []): Collection|LengthAwarePaginator|array
    {
        return $this->getAll(
            all: $all,
            relations: $relations
        );
    }
}
