<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factories\ThingyFactory;
use App\{Entity, Thingy};

class TestController extends Controller
{
    // Just a test
    public function testEntityAttributeRelationship()
    {
        $entityData = [
            'entityName' => 'TestEntity'
        ];
        $entity = Entity::create(
            $entityData
        );
        $entity->save();
//        dd($entity);
        $id = $entity->id;
//        dd($id);

        $attributes = [
            ['name' => 'a_string', 'type' => 'string', 'value' => 'This is a string'],
            ['name' => 'a_number', 'type' => 'integer', 'value' => 42],
            ['name' => 'a_boolean', 'type' => 'boolean', 'value' => true]
        ];
        foreach($attributes as $attribute){
            ThingyFactory::create(
              $attribute['name'],
              $attribute['type'],
              $attribute['value'],
              $id
            );
        }
        dd($entity->thingies);
    }

    public function testGetEntity(Entity $entity)
    {
        dd($entity->thingies);
        return response()->json($entity);
    }

    public function testGetEntityAttribute(Entity $entity, $attr)
    {
        return $entity->$attr;
    }

    public function testHome()
    {
        return view('test.home');
    }

}
