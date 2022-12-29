<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Country extends Model{

    protected $table='country';
    protected $fillable=['c_name'];
    protected $hidden=['created_at','updated_at'];
    //public $timestamp=true;
}
