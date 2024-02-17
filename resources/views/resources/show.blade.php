
@extends('layouts.plantilla')

@section('title', 'Resource' . $resource->name)

@section('content')

<h1> Bienvenido al curso {{$resource->title}} </h1>
<br>
<p><strong>Autor:</strong> {{$resource->author}}</p>
<p><strong>Título:</strong> {{$resource->title}}</p>
<p><strong>Tema:</strong> {{$resource->theme->title}}</p>
<p><strong>Tipo de Recurso:</strong> {{$resource->resourcetype->titleResource}}</p>

<p><strong>Recurso Extra:</strong> {{$resource->extraResource->url}}</p>

<p>{{$resource->description}}</p>

<form action="{{route('resources.destroy', $resource)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
<br>
<br>
<a href="{{route('resources.edit', $resource)}}">Editar curso</a>
   

<br>
<br>
<a href="{{route('resources.index')}}">Volver a cursos</a>
</form>

@endsection
