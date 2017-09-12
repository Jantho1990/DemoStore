<?php namespace App\Factory;

use App\{Attribute, Entity, AttributeBooleanValue, AttributeDatetimeValue, AttributeDateValue, AttributeDoubleValue, AttributeEnumValue, AttributeFloatValue, AttributeIncrementValue, AttributeIntegerunsignedValue, AttributeIntegerValue, AttributeLongtextValue, AttributeStringValue, AttributeTextValue, AttributeTimeValue};

class AttributeFactory
{

    public static function create(Entity $entity, $name, $type, $value = null)
    {
//        dd(['FACE', $entity->id]);
        $attribute = Attribute::create([
            'name' => $name,
            'entity_id' => $entity->id
        ]);
        $className = 'App\Attribute' . $type . 'Value';
//        dd($className);
        $attributeValue = $className::create([
            'value' => $value,
            'attribute_id' => $attribute->id
        ]);
        return $attribute;
    }

}