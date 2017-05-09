<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

    public $fillable = ['id','title','description','expired_date'];

}
