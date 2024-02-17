<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ExtraResourceController;
use App\Http\Controllers\ResourceTypeController;
use App\Models\Themes;
use App\Models\ResourceType;
use App\Models\ExtraResource; 


class CreateResourceController extends Controller
{
    //
    public function index(){
        $resources = Resource::paginate(6);
        return view('resources.index', compact('resources'));
    }
    
    public function create(){
        $themes = Themes::all(); // Suponiendo que Theme es el modelo para la tabla de temas
        $extraResources = ExtraResource::all(); // Suponiendo que ExtraResource es el modelo para la tabla de recursos extra
        $resourceTypes = ResourceType::all(); // Suponiendo que ResourceType es el modelo para la tabla de tipos de recursos
        
        return view('resources.create', compact('themes', 'extraResources', 'resourceTypes'));
    }

    /* public function create(){
        return view('resources.create');
    }
 */
    public function store(Request $request){
    $resource = new Resource();
    
    $resource->author = $request->input('author');
    $resource->title = $request->input('title');
    $resource->id_themes = $request->input('id_themes');

    // Crear un nuevo ExtraResource y guardar su ID
    $extraResource = new ExtraResource;
    $extraResource->url = $request->input('url');
    $extraResource->save();
    $resource->id_extraresources = $extraResource->id;

    $resource->id_resourcestype = $request->input('id_resourcestype');
    
    $resource->save();

    return redirect()->route('resources.index');
}

    public function show($id){

        $resource= Resource::findOrFail($id);
        return view ('resources.show', compact('resource'));
    }

   public function edit($id)
{
    $resource = Resource::findOrFail($id);
    return view('resources.edit', compact('resource'));
}

    public function update(Request $request, $id) {
        $resource = Resource::findOrFail($id);
        $resource ->update($request->all());

        $resource->save();
        return redirect('resources.show');
    }

    public function destroy($id) {
        $resource = Resource::findOrFail($id);
        $resource->delete();

        return redirect('resources.index');
    }

    
}