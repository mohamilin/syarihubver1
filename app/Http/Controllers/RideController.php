<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RideController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pengendara = \App\Ride::where('nama_lengkap','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_pengendara = \App\Ride::all();
        }
        return view('admin.masterData.ride',['data_pengendara'=>$data_pengendara]);
    } 

    public function create(Request $request)
    {
        \App\Ride::create($request->all());
        return redirect('/ride');
    } 
    

    public function edit($id)
    {
        $data_pengendara = \App\Ride::find($id);
        return view('admin.masterData.rideEdit',['data_pengendara'=>$data_pengendara]);
    }

    public function update(Request $request, $id)
    {
        $data_pengendara = \App\Ride::find($id);
        $data_pengendara->update($request->all());
        return redirect('/ride');
    }

    public function delete($id)
    {
        $data_pengendara = \App\Ride::find($id);
        $data_pengendara->delete($id);
        return redirect('/ride');
    }

    public function profil($id)
    {
        $data_pengendara = \App\Ride::find($id);
        return view('admin.masterData.rideProfil',['data_pengendara'=>$data_pengendara]);
    }

    public function booking()
    {
        return view('admin.booking.ride');
    }
} 

