<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    public $fillable = ['title', 'popular_in', 'brand_id'];

    public function brand(){
        return $this->belongsTo('App\Models\Brand');
    }

}
