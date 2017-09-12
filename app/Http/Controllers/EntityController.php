<?php

namespace App\Http\Controllers;

use App\Entity;
use App\Factory\AttributeFactory;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Test
        $entity = new Entity();
//        dd($entity->id);
        $entity->entityName = 'fake' . random_int(0, 999999) . random_int(0, 99999);
//        $entity->attributes = json_encode([]);
        $entity->save(); // gotta do this to get the id
//        dd($entity);
        $request['attributes'] = [
            ['name' => 'is_active', 'type' => 'Boolean', 'value' => false],
            ['name' => 'some_text', 'type' => 'String', 'value' => 'This is a string'],
            ['name' => 'a_number', 'type' => 'Integer', 'value' => 197]
        ];
        $attributes = [];
        foreach($request['attributes'] as $newAttribute){
            $name = $newAttribute['name'];
            $attributes[$name] = AttributeFactory::create($entity, $newAttribute['name'], $newAttribute['type'], $newAttribute['value']);
        }
//        $entity->attributes = json_encode($attributes);
//        $entity->save();
//        dd($entity->attributes);
//        $dummy = $entity->attributes;
//        dd('bah');
        dd($entity->some_text);
        return collect('Saved', $entity);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function show(Entity $entity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function edit(Entity $entity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entity $entity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entity $entity)
    {
        //
    }
}
