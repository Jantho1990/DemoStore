<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeIntegerValue extends AttributeValue
{
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
}
