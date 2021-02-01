<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function users(){
        return $this->hasMany(User::class);
        // return $this->belongsToMany(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
