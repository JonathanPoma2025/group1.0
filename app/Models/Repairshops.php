<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repairshops extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    //public function users()
    //{
      //  return $this->through('clients')->has('users');
    //}

    public function clients()
    {
        return $this->belongsToMany(User::class, 'client_repairshops', 'repairshops_id', 'user_id');
    }
}
