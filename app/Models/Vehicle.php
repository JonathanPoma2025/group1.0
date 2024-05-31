<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model  
{
    use HasFactory;
    protected $fillable = ['car_type_id', 'Brand_id', 'model', 'year', 'placa'];

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }


}
