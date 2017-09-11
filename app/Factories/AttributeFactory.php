<?php namespace App\Factory;

use App\{Attribute, AttributeBooleanValue, AttributeDatetimeValue, AttributeDateValue, AttributeDoubleValue, AttributeEnumValue, AttributeFloatValue, AttributeIncrementValue, AttributeIntegerunsignedValue, AttributeIntegerValue, AttributeLongtextValue, AttributeStringValue, AttributeTextValue, AttributeTimeValue};

class AttributeFactory
{

    public function __construct($name)
    {
        if(class_exists($name . 'Value', $value = null)){
            return new $name . 'Value'(['value': $value]);
        }
    }

}