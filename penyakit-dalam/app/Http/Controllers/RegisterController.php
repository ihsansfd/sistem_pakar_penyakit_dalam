<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register/index", [
            "title" => "Register"
        ]);
    }
    public function register(Request $request)
    {
        $credentials = $request->validate([
            'nama_depan' => ['required','max:50'],
            'nama_belakang' => ['max:50'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'max:255', 'min:8','confirmed'],
            'password_confirmation' => ['required']
        ]);

        $credentials['password'] = Hash::make($credentials['password']);

        User::create($credentials);

        return redirect("/login")->with("success", "Registrasi sukses! Silakan login.");

    }
}
