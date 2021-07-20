@extends('layouts.masterguru')

@section('content')
<div style="padding: 3.5rem;
        margin: 3rem auto;
        width: 30%;
        max-height:80%;
        box-shadow: 0px 0px 35px #EFEFEF;
        background-color: white;">
      <h2>Edit Nilai Siswa</h2>
      @if(session('sukses'))
          <div class="alert alert-success" role="alert">
              {{session('sukses')}}
          </div>
      @endif
        <div class="row">
          <div class="col-lg-12">
           <form action="/guru/siswa/{{$siswa->id}}/updatesiswa" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                        <label for="nis">NIS</label>
                        <input name="nis" type="text" class="form-control" id="nis" aria-describedby="nis" value="{{$siswa->nis}}" disabled="">
                      </div>
                      <div class="form-group">
                        <label for="nama_siswa">Nama Siswa</label>
                        <input name="nama_siswa" type="text" class="form-control" id="nama_siswa" aria-describedby="nama_siswa" value="{{$siswa->nama_siswa}}" disabled="">
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
                      <button type="submit" class="btn btn-warning mt-3">Update Data</button>
                  </form>
             </div>
        </div>
      </div>
@endsection
 
