<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // menampilkan hasil request
        // return $request->all();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'], // usernmae harus unik dalam tabel users
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255' 
        ]);

        // kode di bawah ini akan dijalankan apabila validasi di atas berhasil
        // dd($request);

        // keduanya sama menggunakan bcrypt
        // $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        $request->session()->flash('success', 'Registration success! Please login');

        return redirect('/login');
    }
}
