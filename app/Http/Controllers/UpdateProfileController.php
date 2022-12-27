<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateProfileController extends Controller
{
    public function edit()
    {
        return view('users.edit', [
            'title' => 'Edit Profile'
        ]);
    }

    public function update(Request $request)
    {
        $rules = [
            'username' => 'required|max:40|min:5|unique:users',
            'phone' => 'required|min:10|max:20|unique:users',
            'alamat' => 'min:5|max:225',
            'image' => 'image|file|max:1024'
        ];

        $validateData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('product-images');
        }
        
        auth()->user()->update($validateData);

        // return back()->with('message', 'Your Profile Berhasil Di update');

        return redirect('/user')->with('success', 'Profile Updated');
    }
}
