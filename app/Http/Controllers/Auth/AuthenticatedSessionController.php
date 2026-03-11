<?php

namespace App\Http\Controllers\Auth;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
   public function store(LoginRequest $request): RedirectResponse


    {
        $request->authenticate();
        $request->session()->regenerate();

        $user = Auth::user();

        /*dd(
        auth()->id(),
        auth()->user()->email,
        $user->hasRole('admin'),
        \DB::table('model_has_roles')->where('model_id', auth()->id())->get()
        );*/



        if ($user->hasRole('admin')) {
            return redirect()->route('home');
        }

        return redirect()->route('homepersonas');
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
