<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Guru;
use App\Siswa;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    public function data(){
        $guru = Guru::count();
        $siswa = Siswa::count();
        return view('admin/welcome', ['guru' => $guru,'siswa'=>$siswa]);
    }

}
