<?php

namespace App\Http\Controllers\Admin;

use App\Models\Articale;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ArticaleRequest;
use App\Models\ArticaleImage;
use Illuminate\Support\Facades\Storage;

class ArticaleController extends Controller
{

    public function __construct(Request $request)
    {
        // $this->middleware(['auth.type:admin,author']);
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
        $allArticales = Articale::latest('created_at')->paginate(); ///admin show all articales
        return view('admin.articales.index', [
            "allArticales"=>$allArticales
        ]);
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
            $path = $file->store("uploads/articales", ['disk' => 'public']);
            $data['image'] = $path;
        }

        $data['user_id'] = Auth::id();

        // dd($data);
        $articale = Articale::create($data);

        if ($request->hasFile('gallery')) {
            //array of uploadfile
            foreach ($request->file('gallery') as $file) {
                ArticaleImage::create([
                    'articale_id' => $articale->id,
                    'image' => $file->store("uploads/articales/$articale->id", ['disk' => 'public'])
                ]);
            }
        }

        return redirect()->route('articales.index')
            ->with('success', "Done..., Created a Artical {$articale->title}");
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
    public function edit(Articale $articale)
    {

        return view('admin.articales.edit', ['articale' => $articale]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticaleRequest $request, Articale $articale)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $file = $request->file('image'); //return uploadedfile object
            $path = $file->store('uploads/articales', ['disk' => 'public']);
            $data['image'] = $path;
        }

        $old_image = $articale->image;
        $articale->update($data);

        if ($old_image && $old_image != $articale->image) {
            Storage::disk('public')->delete($old_image);
        }

        if ($request->hasFile('gallery')) {
            //array of uploadfile
            foreach ($request->file('gallery') as $file) {
                ArticaleImage::create([
                    'articale_id' => $articale->id,
                    'image' => $file->store("uploads/articales/$articale->id", ['disk' => 'public'])
                ]);
            }
        }


        return redirect()->route('articales.index')
            ->with('success', "Done... {{$articale->title}} updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articale $articale)
    {
        $articale->delete();

        if ($articale->image) {
            Storage::disk('public')->delete($articale->image);
        }

        return redirect()->route('articales.index')
            ->with('success', "Done..., Deleted a Artical {$articale->title}");
    }
}
