<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function get_login()
    {
        return view('login');
    }
    public function get_register()
    {
        return view('register');
    }

    public function post_login(Request $request)
    {
    }
    public function post_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        return $request;

        $user = User::create($request->except(['_token']));

        event(new Registered($user));

        auth()->login($user);
        return redirect()->route('verification.notice')->with('success', 'Akun berhasil dibuat, silahkan verifikasi email anda');
    }
}
