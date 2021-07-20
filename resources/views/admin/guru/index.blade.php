@extends('layouts.master')

@section('title', "Data Guru")
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

      
        <h4> Data Guru </h4>
        <div class="row mt-5">
            <div class="col-md-6">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Guru
              </button>
            </div>
            <div class="col-md-6">
                <form class="form-inline " method="GET" action="/admin/guru/search">
                  {{csrf_field()}}
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
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Password</th>
                    <th>Agama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                 </thead>
                </tr>
                    @foreach($data_guru as $guru)
                <tr>
                    <td>{{$guru->nip}}</td>
                    <td>{{$guru->nama_guru}}</td>
                    <td>{{$guru->pass_guru}}</td>
                    <td>{{$guru->agama}}</td>
                    <td>{{$guru->jenis_kelamin}}</td>
                    <td>{{$guru->alamat}}</td>
                    <td>{{$guru->jabatan}}</td>
                    <td>
                      <a href="/admin/guru/{{$guru->id}}/editguru" class="btn btn-warning btn-sm">Edit</a>
                      <a href="/admin/guru/{{$guru->id}}/deleteguru" class="btn btn-danger btn-sm " onclick="return confirm('Yakin Menghapus Data {{$guru->nama_guru}} ?')">Delete</a>
                    </td>
                </tr>
                    @endforeach
                    
    </table>
    
        </div>
        <div style="margin-top: 20px; float: right;">
      {{$data_guru->links()}}
      </div>
      <br>
      <br>
    </div>
    
     <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="/admin/guru/createguru" method="POST">
                        {{csrf_field()}}
                      <div class="form-group">
                        <label for="nip">NIP</label>
                        <input name="nip" type="text" class="form-control" id="nip" aria-describedby="nip">
                      </div>
                      <div class="form-group">
                        <label for="nama_siswa">Nama Guru</label>
                        <input name="nama_guru" type="text" class="form-control" id="nama_guru" aria-describedby="nama_guru">
                      </div>
                      <div class="form-group">
                        <label for="pass_guru">Password</label>
                        <input name="pass_guru" type="password" class="form-control" id="pass_guru">
                      </div>
                      <div class="form-group">
                        <label for="agama">Pilih Agama</label>
                        <select name="agama" class="form-control" id="agama">
                          <option value="Kristen Protestan">Kristen Protestan</option>
                          <option value="Islam">Islam</option>
                          <option value="Khatolik">Khatolik</option>
                          <option value="Budha">Budha</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Konghuchu">Konghuchu</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="jenis_kelamin">Pilih Jenis Kelamin</label>
                        <select name ="jenis_kelamin" class="form-control" id="jenis_kelamin">
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" aria-describedby="alamat" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select name="jabatan" class="form-control" id="jabatan">
                          <option value="Kepala Sekolah">Kepala Sekolah</option>
                          <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                          <option value="Pengajar Fisika">Pengajar Fisika</option>
                          <option value="Pengajar Kimia">Pengajar Kimia</option>
                          <option value="Pengajar Biologi">Pengajar Biologi</option>
                          <option value="Pengajar Matematika">Pengajar Matematika</option>
                        </select>
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