@extends('layouts.plantilla')

@section('title', 'Resources')

@section('content')
<h1>Bienvenido a la página de cursos</h1>
<a href="{{route('resources.create')}}">Crear Curso</a>
<ul>
    @foreach ($resources as $resource)
    <li>
        <a href="{{route('resources.show', $resource)}}">{{$resource->title}}</a>
        <br>
    </li>
    @endforeach
</ul>

{{$resources->links()}}
@endsection