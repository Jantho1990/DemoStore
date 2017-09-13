<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Entity, Thingy}

class TestController extends Controller
{
    // Just a test
    public function testEntityAttributeRelationship()
    {
        $entityData = [
            'entityName' => 'TestEntity'
        ];
        $entity = Entity::create([
            $entityData
        ]);
    }

}
