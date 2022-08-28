<?php

namespace App\Actions\CarDelivery;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class DeleteCarDeliveryAction extends BaseCarDeliveryAction
{
    public function execute(int $id): int
    {
        return $this->delete($id);
    }
}
