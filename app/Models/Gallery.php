<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['image', 'product_id', 'user_id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    // public function user(){
    //     return $this->belongsTo(User::class);
    // }
}