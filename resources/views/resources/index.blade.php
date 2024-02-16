@extends('layouts.plantilla')

@section('title', 'resources')

@section('content')
<h1>Bienvenido a la página de cursos</h1>
<a href="{{route('resources.create')}}">Crear Curso</a>
<ul>
    @foreach ($resources as $resource)
    <li>
        <a href="{{route('resources.show', $resource)}}">{{$resource->name}}</a>
        <br>
    </li>
    @endforeach
</ul>

{{$resources->links()}}
@endsection