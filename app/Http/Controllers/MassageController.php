<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_massage = \App\Massage::where('nama_lengkap','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_massage = \App\Massage::all();
        }
        return view('admin.masterData.massage',['data_massage'=>$data_massage]);
    }

    public function create(Request $request)
    {
        \App\Massage::create($request->all());
        return redirect('/massage');
    }

    public function edit($id)
    {
        $data_massage = \App\Massage::find($id);
        return view('admin.masterData.massageEdit',['data_massage'=>$data_massage]);
    }

    public function update(Request $request, $id)
    {
        $data_massage = \App\Massage::find($id);
        $data_massage->update($request->all());
        return redirect('/massage');
    }

    public function delete($id)
    {
        $data_massage = \App\Massage::find($id);
        $data_massage->delete($id);
        return redirect('/massage');
    }

    public function profil($id)
    {
        $data_massage = \App\Massage::find($id);
        return view('admin.masterData.massageProfil',['data_massage'=>$data_massage]);
    }
}
