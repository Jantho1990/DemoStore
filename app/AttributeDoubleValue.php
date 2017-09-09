<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeDoubleValue extends Model
{
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
}
