<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ContactMessageNotification;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('throttle:2,10')->except('index');//manytimes ,minte
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('blog.contact', ['departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'department_id' => 'required',
            'message' => 'required|string',
            'phone' => 'nullable|numeric',
        ]);

        $data['user_id'] = Auth::id() ?? null;

        $Contact = Contact::create($data);

        //send notification to admin
        $admin = Admin::first();
        // $admin = Admin::firstOrFail();
        $admin->notify(new ContactMessageNotification($Contact));

        // foreach ($admins as $admin) {
        //     $admin->notify(new ContactMessageNotification($Contact));
        // }

        return redirect()->route('contact.index')
            ->with('success', "Thank you {{$Contact->name}} for Contact us ");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
