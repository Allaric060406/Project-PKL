<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pesanan;
use App\Models\Tarif;
use Illuminate\Http\Request;
use App\Models\User;

class PassengerController extends Controller
{
    public function index()
    {
        $datadriver = Category::all();
        $databiaya = Tarif::all();
        $datapesanan = Pesanan::all();
        return view('dashboard.Passenger',compact('datadriver','databiaya','datapesanan'));
    }
}
