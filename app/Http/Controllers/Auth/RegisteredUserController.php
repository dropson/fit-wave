<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserRoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    public function showLoginForm(): View
    {
        return view('auth.login');
    }
    public function showRegisterForm(): View
    {
        return view('auth.register');
    }


    public function registerCoach(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        $user = User::create($data);
        $user->assignRole(UserRoleEnum::Coach->value);

        Coach::create([
            'user_id' => $user->id,
        ]);

        event(new Registered($user));
        Auth::login($user);

        return redirect()->route('coach.dashboard');
    }
}
