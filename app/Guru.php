<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nip','nama_guru','pass_guru','agama','jenis_kelamin',
    'alamat','jabatan'];
}
