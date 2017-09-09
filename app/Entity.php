<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    public function attributes()
    {
        return $this->hasMany('App\Attribute');
    }

    public function attributeBooleanValues()
    {
        return $this->hasManyThrough('App\AttributeBooleanValue', 'App\Attribute');
    }

    public function attributeDatetimeValues()
    {
        return $this->hasManyThrough('App\AttributeDatetimeValue', 'App\Attribute');
    }

    public function attributeDateValues()
    {
        return $this->hasManyThrough('App\AttributeDateValue', 'App\Attribute');
    }

    public function attributeDoubleValues()
    {
        return $this->hasManyThrough('App\AttributeDoubleValue', 'App\Attribute');
    }

    public function attributeEnumValues()
    {
        return $this->hasManyThrough('App\AttributeEnumValue', 'App\Attribute');
    }

    public function attributeFloatValues()
    {
        return $this->hasManyThrough('App\AttributeFloatValue', 'App\Attribute');
    }

    public function attributeIncrementValues()
    {
        return $this->hasManyThrough('App\AttributeIncrementValue', 'App\Attribute');
    }

    public function attributeIntegerunsignedValues()
    {
        return $this->hasManyThrough('App\AttributeIntegerunsignedValue', 'App\Attribute');
    }

    public function attributeIntegerValues()
    {
        return $this->hasManyThrough('App\AttributeIntegerValue', 'App\Attribute');
    }

    public function attributeLongtextValues()
    {
        return $this->hasManyThrough('App\AttributeLongtextValue', 'App\Attribute');
    }

    public function attributeStringValues()
    {
        return $this->hasManyThrough('App\AttributeStringValue', 'App\Attribute');
    }

    public function attributeTextValues()
    {
        return $this->hasManyThrough('App\AttributeTextValue', 'App\Attribute');
    }

    public function attributeTimeValues()
    {
        return $this->hasManyThrough('App\AttributeTimeValue', 'App\Attribute');
    }
}
