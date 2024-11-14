<?php

namespace App\Models;
use Iluminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    use HasFactory;
    
    public function roles(){

        return $this -> belongToMany(Role::class)->withTimestamps();
    }
}
