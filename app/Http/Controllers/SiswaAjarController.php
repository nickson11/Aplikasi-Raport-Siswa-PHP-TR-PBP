<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaAjarController extends Controller
{
    public function search(Request $request)
    {
        if($request->has('cari')){
            $data_siswa = \App\Siswa::where('nama_siswa','LIKE','%'.$request->cari.'%')->paginate(5);
        } else {
            $data_siswa = \App\Siswa::paginate(5);
        }
        return view('siswa.index',['data_siswa' => $data_siswa]);
    } 
     public function index()
    {
    	$data_siswa = \App\SiswaAjar::paginate(5);
    	return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function guruindex()
    {
    	$data_guru = \App\SiswaAjar::all();
    	return view('guru.index',['data_guru' => $data_guru]);
    }
}
