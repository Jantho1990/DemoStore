<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $fillable = [
        'entityName'
    ];

    public function thingies()
    {
        return $this->hasMany('App\Thingy');
    }
}
