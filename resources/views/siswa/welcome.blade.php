@extends('layouts.mastersiswa')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard Siswa</h1>
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
                                                Nilai Siswa</div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800">22</div>
                                            <br>
                                            <a style="float: right;"class="btn btn-dark" href="/siswa/datasiswa"> Lihat Nilai </a>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            
@endsection