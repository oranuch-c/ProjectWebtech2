<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    public $fillable = ['loan_date','returned_date','total'];

}
