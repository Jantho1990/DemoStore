<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Entity extends Model
{
    // Using this magic method to mimic the appearance of accessing
    // model properties when we are really accessing an attribute
    // model.
    public function __get($name)
    {
//        dd($name);
//        dd($this->attributes);
//        dd(property_exists($this, $name)); // WHY IS THIS TRUE?!?
        /*if(property_exists($this,$name)){
//            dd([$name, $this->name]);
        }
        if($this->attributes()->get()->count() > 1) {
//            dd($this->attributes()->get());
        }
        if(property_exists($this, $name) && $this->$name instanceof Collection){
            dd('collect');
        }*/
        /*if($this->attributes()->get()->count() > 2){
            echo "\n$name cakes";
            dd($this->attributesHasName($name));
            dd($this->attributes()->get()->has('some_text'));
        }*/
        // Todo: Fix all this junk
        if(!!($key = $this->attributesHasName($name))){
//            dd('cakce');
            $type = $key->type;
            $typeName = 'attribute'.ucfirst($type).'Values';
//            dd($typeName);
            echo $typeName . " $name";
            return $key;
        }else{
            echo $name;
            return parent::__get($name);
        }
    }

    //Todo: clean this up
    /**
     * Determine if attribute has name.
     * @param $name
     * @return bool
     */
    protected function attributesHasName($name){
        $attributes = $this->attributes()->get();
        return $attributes->reduce(function($carry,$attribute)use($name){
            if($carry !== false){return $carry;}
            if($attribute->name === $name){$carry = $attribute; return $carry;}
            return false;
        }, false);
    }

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
