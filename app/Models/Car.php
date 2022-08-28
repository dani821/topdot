<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'value',
    ];

    //Get car models
    public function models(): HasMany
    {
        return $this->hasMany(CarModel::class);
    }

    //Get car deliveries
    public function deliveries(): HasMany
    {
        return $this->hasMany(CarDelivery::class);
    }
}
