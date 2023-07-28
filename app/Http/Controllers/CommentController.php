<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $data =$request->validate([
            'articale_id' => 'required',
            'comment' => 'required|string',
        ]);

        $data['user_id'] = auth('web')->id();

        Comment::create($data);

        return redirect()->back();

    }
}
