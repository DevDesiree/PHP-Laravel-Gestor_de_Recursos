@extends('layouts.plantilla')

@section('title', 'Resource' . $resource->name)

@section('content')

<h2 class="mt-4 mb-8 ml-12 text-xl font-bold text-gray-900 dark:text-white">{{$resource->title}}</h2>
<div class="flex flex-col gap-2 ml-12">
    <p><strong>Autor:</strong> {{$resource->author}}</p>
    <p><strong>Título:</strong> {{$resource->title}}</p>
    <p><strong>Tema:</strong> {{$resource->theme->title}}</p>
    <p><strong>Tipo de Recurso:</strong> {{$resource->resourcetype->titleResource}}</p>
    <p><strong>Fecha de creación: </strong>{{ $creationDate->format('d/m/Y') }}</p>

    <p><strong>Recurso Extra:</strong><a href="{{ $resource->extraResource->url }}"
            class="mb-1 text-xxl text-center font-small text-gray-900 hover:text-blue-500">{{ $resource->extraResource->url }}</a>
    </p>
    <p>{{$resource->description}}</p>
</div>

<div class="ml-12">
    <form action="{{route('resources.destroy', $resource)}}" method="POST" class="flex flex-row gap-2 my-8">
        @csrf
        @method('delete')
        <button
            class="inline-flex items-center px-4 py-2  text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 
                        focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"
            type="submit">Eliminar</button>
        <br>
        <br>
        <button
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 
                        focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"><a
                href="{{route('resources.edit', $resource)}}">Editar recurso</a></button>

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
        <button
            class="inline-flex items-center px-4 py-2  text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 
                        focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
                href="{{route('index')}}">Volver a recursos</a></button>
    </form>
</div>


@endsection