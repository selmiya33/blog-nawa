<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\DepartmentRequest;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::paginate();
        return view('admin.departments.index', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.departments.create', ['department' => new Department()]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store("uploads/departments", ['disk'=>'public']);
            $data['image'] = $path;
        }

        $department = Department::create($data);

        return redirect()->route('departments.index')
            ->with('success', "Done..., created a New Department {$department->name}");
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
    public function edit(Department $department)
    {
        return view('Admin.departments.edit', ['department' => $department]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartmentRequest $request,Department $department)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store("uploads/departments", ['disk'=>'public']);
            $data['image'] = $path;
        }

        $old_image = $department->image;
        $department->update($data);

        if($old_image && $old_image != $department->image){
            Storage::disk('public')->delete($old_image);
        }

        return redirect()->route('departments.index')
            ->with('success', "Done... {{$department->name}} updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')
        ->with('success', "Done... {{$department->name}} deleted");

    }
}
