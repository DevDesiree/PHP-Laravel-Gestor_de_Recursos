<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resource;


class CreateResourcesController extends Controller
{
    //
    public function index(){
        $resources = Resource::paginate(6);
        return view('courses.index', compact('resources'));
    }

    public function create(){
        return view('courses.create');
    }

    public function store(Request $request){
        $resources =  new Resource();
        
        $resources->$request->author;
        $resources->$request->title;
        $resources->$request->id_themes;
        $resources->$request->id_extra_resources;
        $resources->$request->id_resources_type;
        
        $resources->save();
    }

    public function show($id){

        $resource= Resource::findOrFail($id);
        return view ('courses.show', compact('resource'));
    }

    public function edit(){

        return view('resources.edit', compact('resource'));
    }

    public function update(Request $request, $id) {
        $resource = Resource::findOrFail($id);
        $resource ->update($request->all());

        $resource->save();
        return redirect('courses.show');
    }

    public function destroy($id) {
        $resource = Resource::findOrFail($id);
        $resource->delete();

        return redirect('courses.index');
    }

    
}
