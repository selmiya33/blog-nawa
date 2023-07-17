<?php

namespace App\Http\Controllers;

use App\Models\Articale;
use App\Models\ArticaleImage;
use Illuminate\Http\Request;

class ArticaleController extends Controller
{
    public function classic()
    {
        $articales = Articale::latest('created_at')->paginate(6);
        return view('blog.articales-classic',[
            'articales' => $articales,
        ]);
    }

    public function simpel()
    {
        $articales = Articale::latest('created_at')->paginate(4);
        $gallery = ArticaleImage::inRandomOrder()->paginate(6);
        return view('blog.articales',[
            'articales' => $articales,
            'gallery' =>$gallery ,
        ]);
    }

    public function single($id)
    {
        $gallery = ArticaleImage::where('articale_id',$id)->inRandomOrder()->paginate(6);
        $articale = Articale::Where('id','=',$id)->first();
        return view('blog.singel-articale',[
            'articale' => $articale,
            "gallery"=>$gallery,
        ]);
    }
}
