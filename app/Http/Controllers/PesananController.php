<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tarif;
use App\Models\Pesanan;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Notifications\PesananNotification;
use Illuminate\Support\Facades\Notification;


class PesananController extends Controller
{
    public function pesanan()
    {
            $User = auth()->id();
            $pesanan = Pesanan::where('user_id', $User)->get();
            return view('pesanan1',compact('pesanan'));
    }

    public function admin()
    {       
        return view('pesanan1',[
            'pesanan'=> Pesanan::all()
        ]); 
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'user_id'=> 'required',
            'category_id'=> 'required',
            'nama' => 'required|max:255',
            'tujuan' => 'required|max:255',
            'keperluan' => 'required|max:255',
            'telfon' => 'required|max:12',
            'Request' => 'max:255',
            'berangkat' => 'required|date',
            'pulang' => 'required|date',
            'Biaya' => 'required',
        ]);
         $pemesanan = Pesanan::create($validateData);
         $useroperator = User::where ('Level', 'admin')->first();
         Notification::send($pemesanan, new PesananNotification($useroperator));
        return redirect('/pesanan')->with('success','your cv hassbeen send');
    }
    //munculkan Data table  
    public function tampilkandata($id){
        $data =pesanan::find($id);
        $datadriver =Category::all();
        $databiaya =Tarif::all();
        return view ('tampildata',compact('data','datadriver','databiaya'));
    }

    public function updatedata(Request $request,$id){
        $data =pesanan::find($id);
        $data->update($request->all());   
        return redirect('pesanan')->with('success','data di ubah');
    }

    public function detele($id){
        $data = pesanan::find($id);
        $data->delete();
        return redirect('/pesanan')->with('success','data dihapus');

    }
    public function print($id){
        $data =pesanan::find($id);
        return view ('print-passangger',compact('data'));
    }
    public function print2($id){
        $data =pesanan::find($id);
        return view ('print-2',compact('data'));
    }
    public function detail($id){
        $data=pesanan::find($id);
        return view('detaildata',compact('data'));
    }
}
