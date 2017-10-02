<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class User extends Model
{
    protected $fillable = ['screen_name','fav_movie'];
}
