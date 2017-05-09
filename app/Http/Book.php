<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','status','price','author','year','pageSize','publishComp','description'];
    protected $visible = ['id','name','status','price','author','year','pageSize','publishComp','description','img'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
