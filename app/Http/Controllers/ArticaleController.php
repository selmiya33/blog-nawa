<?php

namespace App\Http\Controllers;

use App\Models\Articale;
use App\Models\ArticaleImage;
use App\Models\Comment;
use App\Models\Department;
use App\Models\Reply;
use Illuminate\Http\Request;

class ArticaleController extends Controller
{
    public function classic()
    {
        $articales = Articale::latest('created_at')->paginate(6);
        return view('blog.articales-classic', [
            'articales' => $articales,
        ]);
    }

    public function simpel()
    {
        $articales = Articale::latest('created_at')->paginate(4);
        $gallery = ArticaleImage::inRandomOrder()->paginate(6);
        $departments = Department::withCount('articales')->inRandomOrder()->paginate(6);

        return view('blog.articales', [
            'articales' => $articales,
            'gallery' => $gallery,
            'departments'  => $departments,
        ]);
    }

    public function single(Request $request, string $id)
    {
        $gallery = ArticaleImage::where('articale_id', $id)->inRandomOrder()->paginate(6);
        $articale = Articale::Where('id', '=', $id)->with('department')->first();
        $departments = Department::withCount('articales')->inRandomOrder()->paginate(6);
        $comments = Comment::with('articale')->withCount('replies')->where('articale_id', $id)->latest()->get();

        return view('blog.singel-articale', [
            'articale' => $articale,
            "gallery" => $gallery,
            'departments'  => $departments,
            "comments" => $comments,
        ]);
    }
}
