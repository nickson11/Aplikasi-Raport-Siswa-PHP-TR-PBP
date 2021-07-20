@extends('layouts.masterguru')
@section('title', 'Dashboard Guru')
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
                <h4>Data Guru (Guru)</h4>
            </div>
            <table class="table table-hover">
                <tr>
                <thead class="thead-dark">
                    <th>ID</th>
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
                    <td>{{$guru->id}}</td>
                    <td>{{$guru->nip}}</td>
                    <td>{{$guru->nama_guru}}</td>
                    <td>{{$guru->pass_guru}}</td>
                    <td>{{$guru->agama}}</td>
                    <td>{{$guru->jenis_kelamin}}</td>
                    <td>{{$guru->alamat}}</td>
                    <td>{{$guru->jabatan}}</td>
                    <td>
                      <a href="#" class="btn btn-warning btn-sm">Lihat Detail</a>
                      
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
    
    
@endsection        