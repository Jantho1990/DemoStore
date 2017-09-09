<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeEnumValue extends Model
{
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
}
