@extends('layouts.plantilla')

@section('title', 'Resource' . $resource->name)

@section('content')

<h1> {{$resource->title}} </h1>
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
    <a href="{{route('resources.edit', $resource)}}">Editar recurso</a>

    @if(Session::has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: '{{ Session::get("success") }}',
            showConfirmButton: true,
            timer: 2000
        });
    </script>
    @endif

    <br>
    <br>
    <a href="{{route('index')}}">Volver a recursos</a>
</form>

@endsection