## Installations

### Requriements
```json
php version >= 8.1
```

### Clone
```json
git clone git@github.com:dani821/topdot.git 
```

### Install Composer
```json
composer install 
```

## Design Pattern
I have used action classes design pattern, where each class handles an only one specific task. you can use this action in anywhere in the application like in controller or models. I have only created actions for CarDelivery Model. Actions are independent to datasets, and you don't have to change the business logic if you change any dataset. 

## Concepts/Features/Libs used
* Enums
* Abstract Classes
* Inheritance
* Interfaces
* Laravel relationships
* Models
* Factories
* PHP Unit
* DRY
* Constructor property promotion
* Named Argument
* Union types

## Models
I have created 5 models which are following.
* Car.php
* CarModel.php
* CarDelivery.php
* State.php
* User.php

All the relations to other models are defined in every model.

### Car.php
````php
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
````

### CarModel.php
````php
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
````

### CarDelivery.php
````php
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
````

### State.php
````php
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
````

### User.php
````php
// Get location or state of user
public function state(): BelongsTo
{
    return $this->belongsTo(State::class);
}

// Get all the deliveries of user
public function carDeliveries(): HasMany
{
    return $this->hasMany(CarDelivery::class);
}
````

## Actions

* AllCarDeliveryAction.php
* CreateCarDeliveryAction.php
* DeleteCarDeliveryAction.php
* CreateCarDeliveryAction.php
* FindCarDeliveryAction.php
* UpdateCarDeliveryAction.php


## Tests
Test covered is 100% all the actions and relationship are covered in tests. Please run this command to run all the tests.

````
php artisan test
````


#### If I miss something, or you have some questions regarding my solution we can discuss them on call. 

