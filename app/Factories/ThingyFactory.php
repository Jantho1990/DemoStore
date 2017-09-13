<?php namespace App\Factories;

use App\Thingy;
class ThingyFactory
{

    public static function create($name, $type, $value, $entityId)
    {
        $valueName = $type . '_value';
//        dd($entityId);
        return Thingy::create([
           'name' => $name,
           'type' => $type,
            $valueName => $value,
           'entity_id' => $entityId
        ]);
    }

}