@extends('layouts.plantilla')

@section('title', 'Resources edit')

@section('content')



<form action="{{ route('resources.update', $resource->id) }}" method="POST">

    @csrf
    @method('PUT')

    <section class="bg-white dark:bg-gray-900 w-screen">
        <div class="flex flex-col lg:py-16">
            <h2 class="my-4 ml-12 text-xl font-bold text-gray-900 dark:text-white">Editar Recurso</h2>
            <div class="w-6/12 ml-12 mb-12">
                <form action="{{route('resources.store')}}" method="POST">

                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="author"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Autor
                                Recurso</label>
                            <input type="text" name="author" value="{{ old('author', $resource->author) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 
                            focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 
                            dark:focus:border-primary-500" placeholder="Nombre del autor " required="">
                        </div>

                        <div>
                            <label for="author_image"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen del
                                autor</label>
                            <select name="author_image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 
                            focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 
                            dark:focus:border-primary-500">
                                {{-- <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ url('/img/Atefa_1.png') }}"
                                alt="author image" /> --}}
                                <option value="img/Atefa_1.png">Atefa</option>
                                <option value="img/Desiree_leonardoAI.webp">Desiree</option>
                                <option value="img/Marta_N.png">Marta.N.</option>
                                <option value="img/Marta_P.png">Marta P</option>
                                <option value="img/Yamila.IA.png">Yamila</option>
                            </select>
                        </div>
                        <div>
                            <label for="id_themes"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Selecciona
                                Tema</label>
                            <select name="id_themes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 
                            focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 
                            dark:focus:border-primary-500">
                                <option selected="">Selecciona tema</option>
                                @foreach ($themes as $theme)
                                <option value="{{ $theme->id }}"
                                    {{ $theme->id == $resource->id_themes ? 'selected' : '' }}>
                                    {{ $theme->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="id_resourcestype"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo
                                recurso</label>
                            <select name="id_resourcestype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 
                            focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 
                            dark:focus:border-primary-500">
                                <option selected="">Tipo recurso</option>
                                @foreach ($resourceTypes as $resourceType)
                                <option value="{{ $resourceType->id }}"
                                    {{ $resourceType->id == $resource->id_resourcestype ? 'selected' : '' }}>
                                    {{ $resourceType->titleResource }}</option>
                                @endforeach
                            </select>
                        </div>
                </form>
                <br>
                <div class="flex mt-6 md:mt-6">

                    <button
                        class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 
                        focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="submit">Actualizar</button>

                    <a href="{{route('index')}}" class="px-4 py-2 ms-2 text-sm font-medium text-white text-center focus:outline-none bg-green-600 rounded-lg border border-gray-200 
                            hover:bg-green-800 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 
                            dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Salir</a>
                </div>
            </div>
        </div>

        @endsection