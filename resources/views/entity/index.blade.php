@extends('layouts.superadmin')

@section('content')

    <div class="section">
        <div class="container">
            <h1>Entity Templates</h1>
            <div class="columns is-multiline">
                @foreach($entities as $e=>$entity)
                <div class="column is-one-quarter">
                    <div class="box">
                        <h3>{{ $entity->entityName ?? 'Nothing' }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


@stop