<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = ['name','status','price','author','year','pageSize','publishComp'];
    protected $visible = ['id','name','status','price','author','year','pageSize','publishComp','img'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
