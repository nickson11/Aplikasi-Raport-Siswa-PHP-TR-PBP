@extends('layouts.master')

@section('content')
<div style="padding: 3.5rem;
        margin: 3rem auto;
        width: 50%;
        max-height:90%;
        box-shadow: 0px 0px 35px #EFEFEF;
        background-color: white;">
      <h2>Edit Data Siswa</h2>
      @if(session('sukses'))
          <div class="alert alert-success" role="alert">
              {{session('sukses')}}
          </div>
      @endif
        <div class="row mt-5">
          <div class="col-lg-12">
           <form action="/admin/siswa/{{$siswa->id}}/updatesiswa" method="POST">
                        {{csrf_field()}}
                      <div class="form-group">
                        <label for="nis">NIS</label>
                        <input name="nis" type="text" class="form-control" id="nis" aria-describedby="nis" value="{{$siswa->nis}}">
                      </div>
                      <div class="form-group">
                        <label for="nama_siswa">Nama Siswa</label>
                        <input name="nama_siswa" type="text" class="form-control" id="nama_siswa" aria-describedby="nama_siswa" value="{{$siswa->nama_siswa}}">
                      </div>
                      <div class="form-group">
                        <label for="pass_siswa">Password</label>
                        <input name="pass_siswa" type="password" class="form-control" id="pass_siswa" value="{{$siswa->pass_siswa}}">
                      </div>
                      <div class="form-group">
                        <label for="agama">Pilih Agama</label>
                        <select name="agama" class="form-control" id="agama" value="{{$siswa->agama}}">
                          <option value="Kristen Protestan" @if($siswa->agama == 'Kristen Protestan') @endif>Kristen Protestan</option>
                          <option value="Islam" @if($siswa->agama =='Islam') selected @endif>Islam</option>
                          <option value="Khatolik" @if($siswa->agama =='Khatolik') selected @endif>Khatolik</option>
                          <option value="Budha" @if($siswa->agama =='Budha') selected @endif>Budha</option>
                          <option value="Hindu" @if($siswa->agama =='Hindu') selected @endif>Hindu</option>
                          <option value="Konghuchu" @if($siswa->agama =='Konghuchu') selected @endif>Konghuchu</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" aria-describedby="alamat" rows="3" >{{$siswa->alamat}}</textarea>
                      </div>
                      <div class="form-group">
                        <label for="nilai_mtk">Nilai MTK</label>
                        <input name = "nilai_mtk" type="number" class="form-control" id="nilai_mtk" aria-describedby="nilai_mtk" value="{{$siswa->nilai_mtk}}">
                      </div>
                      <div class="form-group">
                        <label for="nilai_indo">Nilai B.INDONESIA</label>
                        <input name = "nilai_indo" type="number" class="form-control" id="nilai_indo" aria-describedby="nilai_indo" value="{{$siswa->nilai_indo}}">
                      </div>
                      <div class="form-group">
                        <label for="nilai_inggris">Nilai B.INGGRIS</label>
                        <input name="nilai_inggris" type="number" class="form-control" id="nilai_inggris" aria-describedby="nilai_inggris" value="{{$siswa->nilai_inggris}}">
                      </div>
                      <div class="form-group">
                        <label for="nilai_agama">Nilai AGAMA</label>
                        <input name="nilai_agama" type="number" class="form-control" id="nilai_agama" aria-describedby="nilai_agama" value="{{$siswa->nilai_agama}}">
                      </div>
                      <div class="form-group">
                        <label for="nilai_jurusan">Nilai JURUSAN</label>
                        <input name="nilai_jurusan" type="number" class="form-control" id="nilai_jurusan" aria-describedby="nilai_jurusan" value="{{$siswa->nilai_jurusan}}">
                      </div>

                      <button type="submit" class="btn btn-warning">Update Data</button>
                  </form>
             </div>
        </div>
      </div>
@endsection
 
