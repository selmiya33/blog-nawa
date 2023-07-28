<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class SiteSettingController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth.type:admin']);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = SiteSetting::all();
        return view('admin.siteSetting.index', ["settings" => $settings]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.siteSetting.create', ['site' => new SiteSetting()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:20|min:3',
            'icon' => 'required|image|max:500'
        ]);

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $path = $file->store("uploads/site", ['disk' => 'public']);
            $data['icon'] = $path;
        }

        $site = SiteSetting::create($data);

        return redirect()->route('site.index')
            ->with('success', "Done..., created a New icon site {$site->name}");
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
    public function edit(SiteSetting $site)
    {
        return view('admin.siteSetting.edit', ['site' => $site]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,SiteSetting $site)
    {
        $data = $request->validate([
            'name' => 'required|string|max:20|min:3',
            'icon' => 'required|image|max:500'
        ]);

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $path = $file->store("uploads/site", ['disk' => 'public']);
            $data['icon'] = $path;
        }

        $old_icon = $site->icon;
        $site->update($data);

        if ($old_icon && $old_icon != $site->image) {
            Storage::disk('public')->delete($old_icon);
        }

        return redirect()->route('site.index')
            ->with('success', "Done... {{$site->name}} updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiteSetting $site)
    {
        $site->delete();

        if ($site->image) {
            Storage::disk('public')->delete($site->image);
        }



        return redirect()->route('site.index')
        ->with('success', "Site setting '{$site->name}' deleted successfully.");
    }
}
