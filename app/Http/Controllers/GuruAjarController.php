<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruAjarController extends Controller
{
    public function index()
    {
    	$data_guru = \App\GuruAjar::all();
    	return view('guru.index',['data_guru' => $data_guru]);
    }
}
