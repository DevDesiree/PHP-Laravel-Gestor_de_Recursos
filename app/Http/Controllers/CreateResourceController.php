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
    public function index(Request $request){
        $themes = Themes::all();
        $resourceTypes = ResourceType::all();
        
        $selectedThemeId = $request->input('theme');
        $selectedResourceTypeId = $request->input('resource_type');

        $filteredResources = Resource::when($selectedThemeId, function ($query) use ($selectedThemeId) {
            return $query->where('id_themes', $selectedThemeId);
        })
        ->when($selectedResourceTypeId, function ($query) use ($selectedResourceTypeId) {
            return $query->where('id_resourcestype', $selectedResourceTypeId);
        })
        ->paginate(15);

        $themeColors = [
            'Tema 1' => 'bg-red-500',
            'Tema 2' => 'bg-green-500',
            // Añade más temas aquí
        ];

        $resourceTypeColors = [
            'Masterclass' => 'bg-blue-500',
            'Píldora' => 'bg-yellow-500',
            'Coding Live' => 'bg-purple-500',
            'Transversal' => 'bg-orange-500',
        ];

        return view('resources.index', compact('filteredResources', 'themes', 'resourceTypes', 'themeColors', 'resourceTypeColors'));
    }
    
    public function create(){
        $themes = Themes::all();
        $extraResources = ExtraResource::all();
        $resourceTypes = ResourceType::all(); 
        
        return view('resources.create', compact('themes', 'extraResources', 'resourceTypes'));
    }

    public function store(Request $request){
    $resource = new Resource();
    
    $resource->author = $request->input('author');
    $resource->title = $request->input('title');
    $resource->id_themes = $request->input('id_themes');

    $extraResource = new ExtraResource;
    $extraResource->url = $request->input('url');
    $extraResource->save();
    $resource->id_extraresources = $extraResource->id;

    $resource->id_resourcestype = $request->input('id_resourcestype');
    
    $resource->save();

    return redirect()->route('index')->with('success', 'El recurso se ha creado correctamente.');
}

    public function show($id){
        $resource = Resource::findOrFail($id);
        $creationDate = $resource->created_at;
        return view('resources.show', compact('resource', 'creationDate'));
    }

    public function edit($id)
    {
        $resource = Resource::findOrFail($id);
        $themes = Themes::all();
        $resourceTypes = ResourceType::all();
        $extraResources = ExtraResource::all();
        return view('resources.edit', compact('resource', 'themes', 'resourceTypes', 'extraResources'));
    }
    

    public function update(Request $request, $id) {
    
        $resource = Resource::findOrFail($id);
        $resource ->update($request->all());
    
        $resource->extraResource->update([
            'url' => $request->input('url'),
        ]);
    
        return redirect()->route('index', $resource->id)->with('success', 'Recurso actualizado correctamente.');
    }

    public function destroy($id) {
        $resource = Resource::findOrFail($id);
        $resource->delete();

        return redirect()->route('index')->with('success', 'Recurso eliminado correctamente.');
    }

    
}