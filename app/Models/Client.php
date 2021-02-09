<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $fillable = ['name', 'surname', 'email', 'phone', 'brand_id'];

    public function brand(){
        return $this->belongsTo('App\Models\Brand');
    }

}
