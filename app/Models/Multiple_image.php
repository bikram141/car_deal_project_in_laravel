<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Multiple_image extends Model
{
    use HasFactory;
    protected $table = 'multiple_images';

    protected $fillable = [
      'Car_sells_id','images'
    ];
// public function car_sells()
// {
//   return $this->belongsTo('App\Models\Car_sell', 'car_sells_id');
// }
// public function setFilenamesAttributes($value){
//   $this->attributes['images']=json_encode($value);
// }
}
