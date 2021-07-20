<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruSiswaController extends Controller
{
     public function search(Request $request)
    {
        if($request->has('cari')){
            $data_siswa = \App\Siswa::where('nama_siswa','LIKE','%'.$request->cari.'%')->paginate(5);
        } else {
            $data_siswa = \App\Siswa::paginate(5);
        }
        return view('guru/siswa.index',['data_siswa' => $data_siswa]);
    }

     public function index()
    {
    	$data_siswa = \App\GuruSiswa::paginate(5);
    	return view('guru/siswa.index',['data_siswa' => $data_siswa]);
    }

     public function creategurusiswa(Request $request)
    {
    	\App\GuruSiswa::create($request->all());
    	return redirect('/guru/siswa')->with('sukses','Data Berhasil Ditambahkan!');
    }

     public function editgurusiswa($id)
    {
    	$siswa = \App\GuruSiswa::find($id);
    	return view('guru/siswa/editsiswa',['siswa' => $siswa]);

    }

    public function updategurusiswa(Request $request,$id)
    {
    	$siswa = \App\GuruSiswa::find($id);
    	$siswa->update($request->all());
    	return redirect('/guru/siswa')->with('sukses','Data Berhasil Diupdate!');
    }
    public function deletegurusiswa($id)
    {
        $siswa = \App\GuruSiswa::find($id);
        $siswa->delete($siswa);
        return redirect('/guru/siswa')->with('sukses','Data Berhasil Dihapus!');
    }
}
