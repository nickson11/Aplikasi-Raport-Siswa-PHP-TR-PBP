
@extends('layouts.master')
@section('title', "Dashboard - Admin")
@section('content')
            <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard Admin</h1>
                        <!-- Topbar Search -->
                        
                    </div>

                    
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">

                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-warning text-uppercase mb-1">
                                                Data Guru</div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800">
                                            {{$guru}}
                                            </div>
                                            <br>
                                            <a style="float: right;"class="btn btn-dark" href="/admin/guru"> Lihat Data Guru </a>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-success text-uppercase mb-1">
                                                Data Siswa</div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800">
                                            {{$siswa}}   
                                            </div>
                                            <br>
                                            <a style="float: right;" class="btn btn-dark" href="/admin/siswa"> Lihat Data Siswa </a>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection


