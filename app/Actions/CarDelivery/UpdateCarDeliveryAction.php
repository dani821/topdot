<?php

namespace App\Actions\CarDelivery;

class UpdateCarDeliveryAction extends BaseCarDeliveryAction
{
    public function execute(int $id, array $data = []): int
    {
        return $this->update(
            id: $id,
            data: $data
        );
    }
}
