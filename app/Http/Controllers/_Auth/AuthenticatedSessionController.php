<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    // protected $guard = 'web';

    // public function __construct(Request $request)
    // {
    //     if ($request->is('admin/*')) {
    //         $this->guard = 'admin';
    //     } elseif ($request->is('authore/*')) {
    //         $this->guard = 'authore';
    //     }
    // }
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view(
            'auth.login',
            // ['routePrefix' => $this->guard == 'admin'? 'admin.':''],
        );
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return  redirect()->intended('/');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
