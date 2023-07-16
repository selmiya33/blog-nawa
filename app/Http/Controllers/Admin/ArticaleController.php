<?php

namespace App\Http\Controllers\Admin;

use App\Models\Articale;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ArticaleRequest;

class ArticaleController extends Controller
{

    public function __construct(Request $request)
    {
        if ($request->method() == "GET") {

            $departments = Department::all();
            View::share([
                'departments' => $departments,
            ]);
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articales = Articale::paginate();
        return view('admin.articales.index',["articales"=>$articales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articales.create', ['articale' => new Articale()]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticaleRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store("uploads/articales", ['disk'=>'public']);
            $data['image'] = $path;
        }

        // $data['user_id'] = Auth::id();
        $data['user_id'] = 1;


        $articale = Articale::create($data);
        dd($articale);

        return redirect()->route('articales.index')
            ->with('success', "Done..., created a New Department {$articale->name}");


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articale $articale)
    {
        $articale->delete();
    }
}
