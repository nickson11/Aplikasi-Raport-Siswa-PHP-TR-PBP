@extends('layouts.masterguru')
@section('title', 'Guru - Data Siswa')
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
                <h4>Data Siswa (Guru)</h4>
            </div>
            <div class="col-6">
             <form class="form-inline " method="GET" action="/guru/siswa/search">
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
                      <a href="/guru/siswa/{{$siswa->id}}/editsiswa" class="btn btn-warning btn-sm">Edit Nilai</a>
                      
                    </td>
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
    
     <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="/guru/siswa/createsiswa" method="POST">
                        {{csrf_field()}}
                      <div class="form-group">
                        <label for="nis">NIS</label>
                        <input name="nis" type="text" class="form-control" id="nis" aria-describedby="nis">
                      </div>
                      <div class="form-group">
                        <label for="nama_siswa">Nama Siswa</label>
                        <input name="nama_siswa" type="text" class="form-control" id="nama_siswa" aria-describedby="nama_siswa">
                      </div>
                      <div class="form-group">
                        <label for="pass_siswa">Password</label>
                        <input name="pass_siswa" type="password" class="form-control" id="pass_siswa">
                      </div>
                      <div class="form-group">
                        <label for="agama">Agama</label>
                        <input name="agama" type="text" class="form-control" id="agama" aria-describedby="agama">
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" aria-describedby="alamat" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="nilai_mtk">Nilai MTK</label>
                        <input name = "nilai_mtk" type="number" class="form-control" id="nilai_mtk" aria-describedby="nilai_mtk">
                      </div>
                      <div class="form-group">
                        <label for="nilai_indo">Nilai B.INDONESIA</label>
                        <input name = "nilai_indo" type="number" class="form-control" id="nilai_indo" aria-describedby="nilai_indo">
                      </div>
                      <div class="form-group">
                        <label for="nilai_inggris">Nilai B.INGGRIS</label>
                        <input name="nilai_inggris" type="number" class="form-control" id="nilai_inggris" aria-describedby="nilai_inggris">
                      </div>
                      <div class="form-group">
                        <label for="nilai_agama">Nilai AGAMA</label>
                        <input name="nilai_agama" type="number" class="form-control" id="nilai_agama" aria-describedby="nilai_agama">
                      </div>
                      <div class="form-group">
                        <label for="nilai_jurusan">Nilai JURUSAN</label>
                        <input name="nilai_jurusan" type="number" class="form-control" id="nilai_jurusan" aria-describedby="nilai_jurusan">
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection        