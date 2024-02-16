@extends('layouts.plantilla')

@section('title', 'Resource' . $resource->name)

@section('content')

<h1> Bienvenido al curso {{$resource->name}} </h1>

<a href="{{route('resources.index')}}">Volver a cursos</a>
<br>
<br>
<a href="{{route('resources.edit', $resource)}}">Editar curso</a>
<br>
<p><strong>Categoria:</strong> {{$resource->category}}</p>

<p>{{$resource->description}}</p>

<form action="{{route('resources.destroy', $resource)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>

@endsection