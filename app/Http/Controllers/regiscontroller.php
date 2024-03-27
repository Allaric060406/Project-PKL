<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\session;

class regiscontroller extends Controller
{
    public function regis()
    {
        return view ('registrasi',[
            'title'=>'register' 
        ]);
    }
    public function store(Request $request)
    {
    $validateData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email:dns',
        'password' => 'required|min:5|max:16',
    ]);
    
    // $validateData['password'] = bcrypt($validateData ['password']);
    $validateData['password'] = Hash::make($validateData['password']);
    
    User::create($validateData);

    // $request->session()->flash('success', 'Registration successfull! Please login');
    return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
