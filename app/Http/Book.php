<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['book_name','status','price','author','year','pageSize','publishComp'];
    protected $visible = ['book_id','book_name','status','price','author','year','pageSize','publishComp','img'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
