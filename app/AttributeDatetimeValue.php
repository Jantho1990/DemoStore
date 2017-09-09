<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeDatetimeValue extends Model
{
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
}
