<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_sell extends Model
{
    use HasFactory;
    protected $table = 'car_sells';

    protected $fillable = [];

  //      public function multiple_images()
  // {
  //  return $this->hasMany('App\Models\Multiple_image', 'car_sells_id');
  // }
}
