<?php

namespace App\Http\Controllers\Authore;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::where('authore_id', auth('authore')->id())->get();
        return view('authore.accounts.index',["accounts" => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authore.accounts.create', ["account" => new Account()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'platform' => 'required|string|max:30',
            'Link'=> 'required|url',
            'icon' => 'required|string',
        ]);

        $data['authore_id'] = auth('authore')->id();

        $account = Account::create($data);

        return redirect()->route("MyAccounts.index")
        ->with('success', "Done..., Created a Artical {$account->platform}");
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
    public function edit($id)
    {
        $data = Account::findOrFail($id);

        return view('authore.accounts.edit', ["account" => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $account = Account::findOrFail($id);
        $data = $request->validate([
            'platform' => 'required|string|max:30',
            'Link'=> 'required|url',
            'icon' => 'required|string',
        ]);

        $data['authore_id'] = auth('authore')->id();

        $account->update($data);

        return redirect()->route("MyAccounts.index")
        ->with('success', "Done..., Created a Artical {$account->platform}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
