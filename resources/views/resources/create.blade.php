@extends('layouts.plantilla')

@section('title', 'Resources create')

@section('content')
<h1>Aquí podrás crear un nuevo curso</h1>
<form action="{{route('resources.store')}}" method="POST">

    @csrf

    <label>
        Author:
        <br>
        <input type="text" name="author" value="{{old('author')}}">
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
        <input type="text" name="title" value="{{old('title')}}">
    </label>

    @error('title')
    <br>
    <spam>*{{ $message }}</spam>
    <br>
    @enderror

    <br>
    <button type="submit">Enviar formulario</button>
    <br>
    <br>
    <a href="{{route('resources.index')}}">Volver a cursos</a>


    <label>
        Tema:
        <br>
        <select name="id_themes">
            @foreach ($themes as $theme)
            <option value="{{ $theme->id }}">{{ $theme->title }}</option>
            @endforeach
        </select>
    </label>

    <label>
        Recurso Extra:
        <br>
        <select name="id_extraresources">
            @foreach ($extraResources as $extraResource)
            <option value="{{ $extraResource->id }}">{{ $extraResource->url }}</option>
            @endforeach
        </select>
    </label>

    <label>
        Tipo de Recurso:
        <br>
        <select name="id_resourcestype">
            @foreach ($resourceTypes as $resourceType)
            <option value="{{ $resourceType->id }}">{{ $resourceType->titleResource }}</option>
            @endforeach
        </select>
    </label>




</form>
@endsection