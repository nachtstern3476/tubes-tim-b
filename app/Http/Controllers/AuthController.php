<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function do_login(Request $request)
    {
        $user = User::where(['email' => $request->input('email'), 'password' => $request->input('password')])->first();
        if ($user) {
            $session = ['id' => $user->id, 'email' => $user->email, 'nama' => $user->name];
            session($session);
            return redirect('/');
        }

        return redirect(route('login'))->with(['message' => 'Pastikan Email atau Password Sudah Benar']);
    }
    public function register()
    {
        return view('auth.register');
    }

    public function do_register(Request $request)
    {
        $user = User::create([
            'name' => $request->input('fullname'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if ($user) {
            return redirect(route('login'))->with(['message' => 'Berhasil melakukan register']);
        }

        return redirect(route('register'))->with(['message' => 'Gagal melakukan register']);
    }

    public function logout()
    {
        session()->flush();
        return redirect('/');
    }
}
