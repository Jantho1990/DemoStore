@extends('layouts.superadmin')

@section('content')

    <div class="section">
        <div class="container">
            <h1>Create Entity Template</h1>
            <div class="columns">
                <div class="column">
                    @include('entity.form')
                </div>
            </div>
        </div>
    </div>


@stop