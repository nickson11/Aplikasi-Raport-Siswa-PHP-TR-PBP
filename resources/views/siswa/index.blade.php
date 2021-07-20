@extends('layouts.mastersiswa')
@section('title', 'Penilaian Siswa')
@section('content')
<div style="padding: 3.5rem;
        margin: 3rem auto;
        width: 80%;
        max-height:80%;
        box-shadow: 0px 0px 35px #EFEFEF;
        background-color: white;">
      @if(session('sukses'))
          <div class="alert alert-success" role="alert">
              {{session('sukses')}}
          </div>
      @endif


        <div class="row">
            <div class="col-6">
                <h4>Data Siswa (Siswa)</h4>
            </div>
            <div class="col-6">
             <form class="form-inline " method="GET" action="/siswa/search">
                  <div class="input-group input-group-sm ml-auto mb-3">
                    <input class="form-control form-control-navbar" type="text" placeholder="Search" aria-label="Search" name="cari">
                    <div class="input-group-append">
                      <button class="btn btn-secondary" type="submit">
                        Search&nbsp; <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
              </form> 
            </div>
            <table class="table table-hover">
                <tr>
                <thead class="thead-dark">
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>MTK</th>
                    <th>B.Indo</th>
                    <th>B.Inggris</th>
                    <th>Agama</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                 </thead>
                </tr>
                    @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa->nis}}</td>
                    <td>{{$siswa->nama_siswa}}</td>
                    <td>{{$siswa->nilai_mtk}}</td>
                    <td>{{$siswa->nilai_indo}}</td>
                    <td>{{$siswa->nilai_inggris}}</td>
                    <td>{{$siswa->nilai_agama}}</td>
                    <td>{{$siswa->nilai_jurusan}}</td>
                    <td>
                     <a href="/siswa/{{$siswa->id}}/detailsiswa" class="btn btn-warning btn-sm">Lihat Detail</a></td>
                    </tr>
               
                    @endforeach
    </table>
        </div>
        <div style="margin-top: 20px; float: right;">
      {{$data_siswa->links()}}
      </div>
      <br>
      <br>
    </div>


    
   
@endsection        