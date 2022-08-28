<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'capital',
        'year',
    ];

    // Get all the user of state
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    // Get all the car deliveries of state
    public function carDeliveries(): HasMany
    {
        return $this->hasMany(CarDelivery::class);
    }
}
