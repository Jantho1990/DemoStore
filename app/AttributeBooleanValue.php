<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeBooleanValue extends AttributeValue
{


    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
}
