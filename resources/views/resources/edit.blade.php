@extends('layouts.plantilla')

@section('title', 'Resources edit')

@section('content')
<h1>Aquí podrás editar un nuevo curso</h1>
<form action="{{ route('resources.update', $resource->id) }}" method="POST">

    @csrf
    @method('PUT')

    <label>
        Author:
        <br>
        <input type="text" name="author" value="{{ old('author', $resource->author) }}">
    </label>

    @error('author')
    <br>
    <spam>*{{ $message }}</spam>
    <br>
    @enderror

    <br>
    <label>
        title:
        <br>
        <input type="text" name="title" value="{{ old('title', $resource->title) }}">
    </label>

    @error('title')
    <br>
    <spam>*{{ $message }}</spam>
    <br>
    @enderror


    <br>

    <br>


    <label>
        Tema:
        <select name="id_themes">
            @foreach ($themes as $theme)
            <option value="{{ $theme->id }}" {{ $theme->id == $resource->id_themes ? 'selected' : '' }}>{{ $theme->title }}</option>
            @endforeach
        </select>
    </label>
    <br>
    <label>
        Recurso Extra URL:
        <br>
        <input type="text" name="url" value="{{ old('url', $resource->url) }}">
    </label>
    <!--   @foreach ($extraResources as $extraResource) -->
    <!-- <option value="{{ $extraResource->id }}">{{ $extraResource->url }}</option> -->
    <!-- @endforeach -->
    </input>
    </label>
    <br>
    <label>
        Tipo de Recurso:

        <select name="id_resourcestype">
            @foreach ($resourceTypes as $resourceType)
            <option value="{{ $resourceType->id }}" {{ $resourceType->id == $resource->id_resourcestype ? 'selected' : '' }}>{{ $resourceType->titleResource }}</option>
            @endforeach
        </select>
    </label>
    <br>
    <button type="submit">Enviar formulario</button>
    <br>
    <a href="{{ route('resources.index') }}">Volver a cursos</a>

    <input type="hidden" name="id" value="{{ $resource->id }}">
</form>
@endsection
