<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Vehicle extends Model
{


    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'car_type_id',
        'brand_id',
        'model',
        'year',
        'user_id',
        'placa',
        'color',
        'motor'
    ];


public function brand()
{
    return $this->belongsTo(Brand::class);
}

public function carType()
{
    return $this->belongsTo(CarType::class);
}

}
