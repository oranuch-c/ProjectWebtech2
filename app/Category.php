<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    protected $visible = ['name', 'id'];
    
    public function books()
    {
        return $this->hasMany('App\Book');
    }
}
