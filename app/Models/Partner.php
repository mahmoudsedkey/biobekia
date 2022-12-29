<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model{

    protected $table='partners';
    protected $fillable=['id','name','photo','created_at'];
    protected $hidden=['updated_at'];
    public $timestamp=true;

}
