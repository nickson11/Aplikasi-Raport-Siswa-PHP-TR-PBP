<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaGuruController extends Controller
{
    public function index()
    {
    	$data_guru = \App\SiswaGuru::all();
    	return view('siswa/guru.index',['data_guru' => $data_guru]);
    }
}
