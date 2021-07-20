@extends('layouts.master')

@section('content')
<div style="padding: 3.5rem;
        margin: 3rem auto;
        width: 30%;
        max-height:80%;
        box-shadow: 0px 0px 35px #EFEFEF;
        background-color: white;">
      <h2>Edit Data Guru</h2>
      @if(session('sukses'))
          <div class="alert alert-success" role="alert">
              {{session('sukses')}}
          </div>
      @endif
        <div class="row">
          <div class="col-lg-12">
            
           <form action="/admin/guru/{{$guru->id}}/updateguru" method="POST">
                        {{csrf_field()}}
                      <div class="form-group">
                        <label for="nip">NIP</label>
                        <input name="nip" type="text" class="form-control" id="nip" aria-describedby="nip" value="{{$guru->nip}}">
                      </div>
                      <div class="form-group">
                        <label for="nama_guru">Nama Guru</label>
                        <input name="nama_guru" type="text" class="form-control" id="nama_guru" aria-describedby="nama_guru" value="edit_{{$guru->nama_guru}}">
                      </div>
                      <div class="form-group">
                        <label for="pass_guru">Password</label>
                        <input name="pass_guru" type="password" class="form-control" id="pass_guru" value="{{$guru->pass_guru}}">
                      </div>
                      <div class="form-group">
                        <label for="agama">Pilih Agama</label>
                        <select name="agama" class="form-control" id="agama" value="{{$guru->agama}}">
                          <option value="Kristen Protestan" @if($guru->agama == 'Kristen Protestan') @endif>Kristen Protestan</option>
                          <option value="Islam" @if($guru->agama =='Islam') selected @endif>Islam</option>
                          <option value="Khatolik" @if($guru->agama =='Khatolik') selected @endif>Khatolik</option>
                          <option value="Budha" @if($guru->agama =='Budha') selected @endif>Budha</option>
                          <option value="Hindu" @if($guru->agama =='Hindu') selected @endif>Hindu</option>
                          <option value="Konghuchu" @if($guru->agama =='Konghuchu') selected @endif>Konghuchu</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                        <select name ="jenis_kelamin" class="form-control" id="jenis_kelamin" value="{{$guru->nis}}">
                          <option value="Laki-Laki"@if($guru->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                          <option value="Perempuan"@if($guru->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" aria-describedby="alamat" rows="3" >{{$guru->alamat}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select name ="jabatan" class="form-control" id="jabatan" value="{{$guru->nis}}">
                          <option value="Kepala Sekolah" @if($guru->jabatan == 'Kepala Sekolah') selected @endif>Kepala Sekolah</option>
                          <option value="Wakil Kepala Sekolah" @if($guru->jabatan == 'Wakil Kepala Sekolah') selected @endif>Wakil Kepala Sekolah</option>
                          <option value="Pengajar Fisika" @if($guru->jabatan == 'Pengajar Fisika') selected @endif>Pengajar Fisika</option>
                          <option value="Pengajar Kimia" @if($guru->jabatan == 'Pengajar Kimia') selected @endif>Pengajar Kimia</option>
                          <option value="Pengajar Biologi" @if($guru->jabatan == 'Pengajar Biologi') selected @endif>Pengajar Biologi</option>
                          <option value="Pengajar Matematika" @if($guru->jabatan == 'Pengajar Matematika') selected @endif>Pengajar Matematika</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-warning">Update Data</button>
                  </div>

                      
                  </form>
                 
             </div>
        </div>
         
@endsection
 
