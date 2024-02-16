@extends('layouts.plantilla')

@section('title', 'Resources create')

@section('content')
<h1>Aquí podrás crear un nuevo curso</h1>
<form action="{{route('resources.store')}}" method="POST">

    @csrf

    <label>
        Name:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
    <br>
    <spam>*{{ $message }}</spam>
    <br>
    @enderror

    <br>

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
        <textarea name="description" rows="5">{{old('description')}}</textarea>
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
        <input type="text" name="category" value="{{old('category')}}">
    </label>

    @error('category')
    <br>
    <spam>*{{ $message }}</spam>
    <br>
    @enderror
    <br>
    <br>
    <button type="submit">Enviar formulario</button>
    <br>
    <br>
    <a href="{{route('resources.index')}}">Volver a cursos</a>



</form>
@endsection