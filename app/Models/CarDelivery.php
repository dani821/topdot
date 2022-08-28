<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDelivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'car_model_id',
        'state_id',
    ];

    // Get the user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Get the car
    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    // Get the car model
    public function model(): BelongsTo
    {
        return $this->belongsTo(CarModel::class);
    }

    // Get the state or delivery location
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
