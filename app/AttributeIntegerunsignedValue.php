<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeIntegerunsignedValue extends Model
{
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
}
