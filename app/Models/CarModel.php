<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'title',
        'value',
    ];

    // Get a car from model
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    //Get car deliveries
    public function deliveries(): HasMany
    {
        return $this->hasMany(CarDelivery::class);
    }
}
