<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;


class CreateResourceController extends Controller
{
    //
    public function index(){
        $resources = Resource::paginate(6);
        return view('resources.index', compact('resources'));
    }

    public function create(){
        return view('resources.create');
    }

    public function store(Request $request){
        $resource = new Resource();
    
    $resource->author = $request->input('author');
    $resource->title = $request->input('title');
    $resource->id_themes = $request->input('id_themes');
    $resource->id_extraresources = $request->input('id_extraresources');
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