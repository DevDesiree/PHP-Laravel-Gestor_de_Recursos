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
        $resources =  new Resource();
        
        $resources->$request->author;
        $resources->$request->title;
        $resources->$request->id_themes;
        $resources->$request->id_extraresources;
        $resources->$request->id_resourcestype;
        
        $resources->save();
    }

    public function show($id){

        $resource= Resource::findOrFail($id);
        return view ('resources.show', compact('resource'));
    }

    public function edit(){

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