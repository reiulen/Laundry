<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        $admin = User::whereUsername($request->username)->first();
        if($admin){
            if(Hash::check($request->password, $admin->password)){
                Auth::login($admin);
                $request->session()->regenerate();
                return redirect()->intended('dashboard');
            }
            return back()->with('pesan', 'Password Salah!');
        }
        return back()->with('pesan', 'Username Tidak Ditemukan!');
    }

    public function logout()
    {
        Auth::logout();
        Request()->session()->regenerateToken();
        Request()->session()->invalidate();

        return redirect('/')->with('pesan', 'Anda berhasil logout!');
    }
}
