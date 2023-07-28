<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Slide;
use App\Models\Account;
use App\Models\Authore;
use App\Models\Articale;
use App\Models\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $departments =Department::all();
        $articales = Articale::inRandomOrder()->status('active')->paginate(3);
        $authores = Authore::with('department')->paginate();
        $slides = Slide::latest('created_at')->paginate();
        $accounts = Account::all();

        return view('home',[
            'departments' =>$departments,
            'articales' => $articales,
            'authores'=>$authores,
            'slides'=> $slides,
            'accounts' => $accounts,
        ]);
    }
}
