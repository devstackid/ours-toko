<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:40|min:5|unique:users',
            'phone' => 'required|min:10|max:20|unique:users',
            'password' => 'required|min:5|max:255'
        ]);


        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Berhasil!');

        return redirect('/login');
    }
}
