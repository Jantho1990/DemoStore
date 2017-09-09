<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function entities()
    {
        return $this->belongsToMany('App\Entity');
    }

    public function attributeBooleanValues()
    {
        return $this->hasMany('App\AttributeBooleanValue');
    }

    public function attributeDatetimeValues()
    {
        return $this->hasMany('App\AttributeDatetimeValue');
    }

    public function attributeDateValues()
    {
        return $this->hasMany('App\AttributeDateValue');
    }

    public function attributeDoubleValues()
    {
        return $this->hasMany('App\AttributeDoubleValue');
    }

    public function attributeEnumValues()
    {
        return $this->hasMany('App\AttributeEnumValue');
    }

    public function attributeFloatValues()
    {
        return $this->hasMany('App\AttributeFloatValue');
    }

    public function attributeIncrementValues()
    {
        return $this->hasMany('App\AttributeIncrementValue');
    }

    public function attributeIntegerunsignedValues()
    {
        return $this->hasMany('App\AttributeIntegerunsignedValue');
    }

    public function attributeIntegerValues()
    {
        return $this->hasMany('App\AttributeIntegerValue');
    }

    public function attributeLongtextValues()
    {
        return $this->hasMany('App\AttributeLongtextValue');
    }

    public function attributeStringValues()
    {
        return $this->hasMany('App\AttributeStringValue');
    }

    public function attributeTextValues()
    {
        return $this->hasMany('App\AttributeTextValue');
    }

    public function attributeTimeValues()
    {
        return $this->hasMany('App\AttributeTimeValue');
    }
    
}
