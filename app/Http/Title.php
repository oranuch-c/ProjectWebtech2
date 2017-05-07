<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = ['name','price','author','year','pageSize','publishComp'];
    // protected $visible = ['id','name', 'description'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
