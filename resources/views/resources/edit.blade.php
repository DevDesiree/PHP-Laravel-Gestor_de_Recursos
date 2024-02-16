@extends('layouts.plantilla')

@section('title', 'Resources edit')

@section('content')
<h1>Aquí podrás editar un nuevo curso</h1>
<form action="{{route('resources.update', $resource)}}" method="POST">

    @csrf

    @method('put')

    <label>
        Name:
        <br>
        <input type="text" name="name" value="{{ old('name', $resource->name) }}">
    </label>

    <br>

    @error('name')
    <br>
    <spam>*{{ $message }}</spam>
    <br>
    @enderror

    <label>
        Slug:
        <br>
        <input type="text" name="slug" value="{{old('slug')}}">
    </label>

    @error('slug')
    <br>
    <spam>*{{ $message }}</spam>
    <br>
    @enderror
    <br>
    <label>
        Description:
        <br>
        <textarea name="description" rows="5">{{ old('description', $resource->description) }}"</textarea>
    </label>

    @error('description')
    <br>
    <spam>*{{ $message }}</spam>
    <br>
    @enderror

    <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="category" value="{{ old('category', $resource->category) }}">
    </label>

    @error('category')
    <br>
    <spam>*{{ $message }}</spam>
    <br>
    @enderror


    <br>
    <button type="submit">Actualizar formulario</button>



</form>
@endsection