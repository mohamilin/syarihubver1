<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_mentor = \App\Mentor::where('nama_lengkap','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_mentor = \App\Mentor::all();
        }
        return view('admin.masterData.mentor',['data_mentor'=>$data_mentor]);
    }

    public function create(Request $request)
    {
        \App\Mentor::create($request->all());
        return redirect('/mentor');
    }

    public function edit($id)
    {
        $data_mentor = \App\Mentor::find($id);
        return view('admin.masterData.mentorEdit',['data_mentor'=>$data_mentor]);
    }

    public function update(Request $request, $id)
    {
        $data_mentor = \App\Mentor::find($id);
        $data_mentor->update($request->all());
        return redirect('/mentor');
    }

    public function delete($id)
    {
        $data_mentor = \App\Mentor::find($id);
        $data_mentor->delete($id);
        return redirect('/mentor');
    }

    public function profil($id)
    {
        $data_mentor = \App\Mentor::find($id);
        return view('admin.masterData.mentorProfil',['data_mentor'=>$data_mentor]);
    }
}
