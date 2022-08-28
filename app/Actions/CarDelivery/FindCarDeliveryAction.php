<?php

namespace App\Actions\CarDelivery;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class FindCarDeliveryAction extends BaseCarDeliveryAction
{
    public function execute(int $id, array $relations = []): Builder|Model
    {
        return $this->findOrFail(
            id: $id,
            relations: $relations
        );
    }
}
