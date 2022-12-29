<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model{

    protected $table='orders';
    protected $fillable=['id','userName','address','phone','photo','state','date'];
    protected $hidden=['created_at','updated_at'];
    public $timestamp=true;//it is by default true but this for learning
}

?>
