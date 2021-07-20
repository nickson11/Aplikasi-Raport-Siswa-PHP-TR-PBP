<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuruSiswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nis','nama_siswa','pass_siswa','agama','alamat',
    'nilai_mtk','nilai_indo','nilai_inggris','nilai_agama','nilai_jurusan'];
}
