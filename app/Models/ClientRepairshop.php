<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRepairshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'vehicle',
        'last_maintenance',
    ];
}
