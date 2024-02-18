<?php

// namespace App\Http\Controllers;

// use App\Models\Resource; 

// use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function __invoke() {
//         return view('home');
//     }
// }

namespace App\Http\Controllers;

use App\Models\Resource; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() {
        $resources = Resource::paginate(10);

        return view('home', compact('resources')); 
    }
}
