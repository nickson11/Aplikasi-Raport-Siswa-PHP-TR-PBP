<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Guru;
use App\Siswa;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function postlogin(Request $request){
        $admin = Admin::where('name',$request->username)->first();
        $admin = Admin::where('password',$request->password)->first();
        if ($admin) {
            if(Hash::check($request->password,$admin->password)){
                return redirect('/admin');
            } else {
                return redirect('/admin');
            }

        }
        return redirect('/login')->with('message','Nama atau Password salah');
    }

    public function postloginguru(Request $request){

        $guru = Guru::where('nip',$request->username)->first();
        $guru = Guru::where('pass_guru',$request->password)->first();
        if ($guru) {
            if(Hash::check($request->password,$guru->password)){
                return redirect('/guru');
            } else {
                return redirect('/guru');
            }

        }
        return redirect('/loginguru')->with('message','Kode Guru atau Password salah');

    }

    public function postloginsiswa(Request $request){

        $siswa = Siswa::where('nis',$request->username)->first();
        $siswa = Siswa::where('pass_siswa',$request->password)->first();
        if ($siswa) {
            if(Hash::check($request->password,$siswa->password)){
                return redirect('/siswa');
            } else {
                return redirect('/siswa');
            }

        }
        return redirect('/loginguru')->with('message','NIS Siswa atau Password salah');

    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
