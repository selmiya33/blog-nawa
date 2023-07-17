<?php

namespace App\Http\Controllers;

use App\Models\Articale;
use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $departments =Department::all();
        $articales = Articale::paginate(3);

        return view('home',[
            'departments' =>$departments,
            'articales' => $articales,
        ]);
    }
}
