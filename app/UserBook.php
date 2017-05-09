<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class UserBook extends Model
{

    public $fillable = ['user_id','book_id','cart_id'];

}
