<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeDateValue extends Model
{
    public function attributes()
    {
        return $this->belongsToMany('App\Attribute');
    }
}
