<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function index()
    {
        $data_massage = \App\Massage::all();
        return view('admin.masterData.massage',['data_massage'=>$data_massage]);
    }
}
