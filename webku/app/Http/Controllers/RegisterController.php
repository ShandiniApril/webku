<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        // return $request->file('image')->store('user-images');

        $validatedData = $request->validate([
            'level' => 'required',
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:255'],
            'password' => 'required|min:3|max:255',
            // 'image' => 'image|file|max:1024'
        ]);

        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('user-images');
        // }

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Akun anda berhasil daftar! Silakan login!');
    }
}
