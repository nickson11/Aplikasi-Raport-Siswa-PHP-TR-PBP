<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    
    public function search(Request $request)
    {
        if($request->has('cari')){
            $data_guru = \App\Guru::where('nama_guru','LIKE','%'.$request->cari.'%')->paginate(5);
        } else {
            $data_guru = \App\Guru::paginate(5);
        }
        return view('admin/guru/index',['data_guru' => $data_guru]);
    }

    public function index()
    {
    	$data_guru = \App\Guru::paginate(5);
    	return view('admin/guru.index',['data_guru' => $data_guru]);
    }

    public function createguru(Request $request)
    {
    	\App\Guru::create($request->all());
    	return redirect('/admin/guru')->with('sukses','Data Berhasil Ditambahkan!');
    }

     public function editguru($id)
    {
    	$guru = \App\Guru::find($id);
    	return view('admin/guru/editguru',['guru' => $guru]);

    }

    public function updateguru(Request $request,$id)
    {
    	$guru = \App\Guru::find($id);
    	$guru->update($request->all());
    	return redirect('/admin/guru')->with('sukses','Data Berhasil Diupdate!');
    }

    public function deleteguru($id)
    {
        $guru = \App\Guru::find($id);
        $guru->delete($guru);
        return redirect('/admin/guru')->with('sukses','Data Berhasil Dihapus!');
    }
}
