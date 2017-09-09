<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeBooleanValue extends Model
{
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
}
