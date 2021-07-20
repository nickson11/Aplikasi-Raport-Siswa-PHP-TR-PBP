<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class SiswaController extends Controller
{
    public function search(Request $request)
    {
        if($request->has('cari')){
            $data_siswa = \App\Siswa::where('nama_siswa','LIKE','%'.$request->cari.'%')->paginate(5);
        } else {
            $data_siswa = \App\Siswa::paginate(5);
        }
        return view('admin/siswa/index',['data_siswa' => $data_siswa]);
    }
    
    public function index()
    {
    	$data_siswa = \App\Siswa::paginate(5);
    	return view('admin/siswa/index',['data_siswa' => $data_siswa]);
    }

    public function createsiswa(Request $request)
    {
    	\App\Siswa::create($request->all());
    	return redirect('/admin/siswa')->with('sukses','Data Berhasil Ditambahkan!');
    }

    public function editsiswa($id)
    {
    	$siswa = \App\Siswa::find($id);
    	return view('admin/siswa/editsiswa',['siswa' => $siswa]);

    }

    public function detailsiswa($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('/siswa/detailsiswa',['siswa' => $siswa]);

    }

    public function updatesiswa(Request $request,$id)
    {
    	$siswa = \App\Siswa::find($id);
    	$siswa->update($request->all());
    	return redirect('/admin/siswa')->with('sukses','Data Berhasil Diupdate!');
    }

    public function deletesiswa($id)
    {
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/admin/siswa')->with('sukses','Data Berhasil Dihapus!');
    }

        
}
