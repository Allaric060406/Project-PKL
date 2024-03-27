<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    public function index(){
        $data = Category::all();
        return view('pesanan',compact('data'));
    }
}
