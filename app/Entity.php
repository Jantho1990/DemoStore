<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $fillable = [
        'entityName'
    ];

    public function __get($key)
    {
        if(!isset($this->$key)){
            $attr = $this->thingies->where('name', $key)->first();
            $val = $attr->type . "_value";
            return $attr->$val;
        }
        return $this->getAttribute($key);
    }

    public function thingies()
    {
        return $this->hasMany('App\Thingy');
    }
}
