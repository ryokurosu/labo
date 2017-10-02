<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class MovieTag extends Model
{
    protected $fillable = ['movie_id','tag_id'];
}