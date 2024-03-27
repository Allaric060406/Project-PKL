<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\regis;
use Sentinel;
class forgotcontroller extends Controller
{
    public function forgot(){
        return view('Forgot');
    }
    public function password(Request $request)
    {
       $regis =regis::whereEmail($request->email)->first();

       if($regis == null){
        return redirect()->back()->with(['error'=>'email not exits']);
       }

       $user = regis::find($regis->id);
       $reminder = regis:: exists($user)? :regis::create($user);
       $this->sendEmail($user,$reminder);
       return redirect()->back()->with(['succes'=>'reset code']);
    }
    public function sendEmail($regis,$code)
    {
            regis::find(
            'Forgot',
            ['regis'=> $regis,$code],
            function($message) use ($regis){
                $message->to($regis->email);
                $message->subject("hello $regis->name","Active your Acount.");
            }
        );
    }
}
