<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeStringValue extends AttributeValue
{
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
}
