<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class User extends Model{

    protected $table='users';
    protected $fillable=['id','userName','password','fullName','email','phone','ative','created_at'];
    protected $hidden=['updated_at'];
    public $timestamp=True;

}
