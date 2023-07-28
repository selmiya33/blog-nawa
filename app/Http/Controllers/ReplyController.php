<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $data =$request->validate([
            'articale_id' => 'required',
            'reply' => 'required|string',
            'comment_id' =>'required',
        ]);

        $data['authore_id'] = auth('authore')->id();

        Reply::create($data);

        return redirect()->back();

    }
}
