<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $fillable = ['title', 'country', 'year'];

    public function car_models(){
        return $this->hasMany('App\Models\CarModel');
    }

    public function clients(){
        return $this->hasMany('App\Models\Client');
    }

}
