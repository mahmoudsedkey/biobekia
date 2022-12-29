<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $fillable=['id','name','discription','photo','price','created_at'];
    protected $hidden=['updated_at'];
    //public $timestamps=FALSE; if i do not want to insert time in created at and updated at
}
