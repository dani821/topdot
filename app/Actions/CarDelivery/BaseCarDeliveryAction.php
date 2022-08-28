<?php

namespace App\Actions\CarDelivery;

use App\Models\CarDelivery;
use App\Actions\Common\CommonActions;

abstract class BaseCarDeliveryAction extends CommonActions
{
    public function __construct()
    {
        parent::__construct(
            new CarDelivery()
        );
    }
}
