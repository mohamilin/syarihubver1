<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NannyController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_nanny = \App\Nanny::where('nama_lengkap','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_nanny = \App\Nanny::all();
        }
        return view('admin.masterData.Nanny',['data_nanny'=>$data_nanny]);
    }

    public function create(Request $request)
    {
        \App\Nanny::create($request->all());
        return redirect('/nanny');
    }

    public function edit($id)
    {
        $data_nanny = \App\Nanny::find($id);
        return view('admin.masterData.nannyEdit',['data_nanny'=>$data_nanny]);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $data_nanny = \App\Nanny::find($id);
        $data_nanny->update($request->all());
        if($request->hasFile('foto_ktp')){
            $request->file('foto_ktp')->move('/img',$request->file('foto_ktp')->getClientOriginalName());
            $data_nanny->foto_ktp = $request->file('foto_ktp')->getClientOriginalExtension();
            $data_nanny->save();
        }
        return redirect('/nanny');
    }

    public function delete($id)
    {
        $data_nanny = \App\Nanny::find($id);
        $data_nanny->delete($id);
        return redirect('/nanny');
    }

    public function profil($id)
    {
        $data_nanny = \App\Nanny::find($id);
        return view('admin.masterData.nannyProfil',['data_nanny'=>$data_nanny]);
    }
}
