<?php

namespace App\Actions\CarDelivery;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class CreateCarDeliveryAction extends BaseCarDeliveryAction
{
    /**
     * @param array $data
     * I set these as required because in database these fields are not nullable but action is independent of the array values.
     * So later if we want to add another field then we don't need to change the action class at all.
     * $data = [
     *      "user_id" => required|int,
     *      "car_id" => required|int,
     *      "model_id" => required|int,
     *      "state_id" => required|int,
     * ]
     * @return Builder|Model
     */
    public function execute(array $data): Builder|Model
    {
        return $this->create($data);
    }
}
