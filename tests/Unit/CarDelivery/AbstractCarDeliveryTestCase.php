<?php

namespace Tests\Unit\CarDelivery;

use Tests\TestCase;
use App\Models\CarDelivery;
use Illuminate\Foundation\Testing\RefreshDatabase;

abstract class AbstractCarDeliveryTestCase extends TestCase
{
    use RefreshDatabase;

    protected string $databaseTable;

    protected function setUp(): void
    {
        parent::setUp();

        // Changing database name will not break the test. because I'm getting the name from model not hard-quoting.
        $this->databaseTable = (new CarDelivery())->getTable();
    }
}
