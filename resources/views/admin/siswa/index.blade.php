@extends('layouts.master')
@section('title', 'Admin - Data Siswa')
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
        <h4>Data Siswa</h4>
        <div class="row mt-5">
            <div class="col-6">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Siswa
              </button>
                
            </div>
            <div class="col-6">
                <form class="form-inline " method="GET" action="/admin/siswa/search">
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
           
            <table class="table table-hover" border="1">
                <tr>
                <thead class="thead-dark">
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Password</th>
                    <th>Agama</th>
                    <th>Alamat</th>
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
                    <td>{{$siswa->pass_siswa}}</td>
                    <td>{{$siswa->agama}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td>{{$siswa->nilai_mtk}}</td>
                    <td>{{$siswa->nilai_indo}}</td>
                    <td>{{$siswa->nilai_inggris}}</td>
                    <td>{{$siswa->nilai_agama}}</td>
                    <td>{{$siswa->nilai_jurusan}}</td>
                    <td>
                      <a href="/admin/siswa/{{$siswa->id}}/editsiswa" class="btn btn-warning btn-sm">Edit</a>
                      <a href="/admin/siswa/{{$siswa->id}}/deletesiswa" class="btn btn-danger btn-sm " onclick="return confirm('Yakin Menghapus Data {{$siswa->nama_siswa}} ?')">Delete</a>
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
                    <form action="/admin/siswa/createsiswa" method="POST">
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
                        <label for="agama">Pilih Agama</label>
                        <select name="agama" class="form-control" id="agama" value="{{$siswa->agama}}">
                          <option value="Kristen Protestan" @if($siswa->agama == 'Kristen Protestan') @endif>Kristen Protestan</option>
                          <option value="Islam" @if($siswa->agama =='Kristen Protestan') selected @endif>Islam</option>
                          <option value="Khatolik" @if($siswa->agama =='Khatolik') selected @endif>Khatolik</option>
                          <option value="Budha" @if($siswa->agama =='Budha') selected @endif>Budha</option>
                          <option value="Hindu" @if($siswa->agama =='Hindu') selected @endif>Hindu</option>
                          <option value="Konghuchu" @if($siswa->agama =='Konghuchu') selected @endif>Konghuchu</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" aria-describedby="alamat" rows="3"></textarea>
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