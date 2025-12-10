@extends('layout.master')

@section('content')

    {{-- @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between align-items-center"
        style="padding: 15px 20px; font-size: 16px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.2); margin-bottom: 20px; background: #28a745; color: #fff;">
        <span><i class="fas fa-check-circle"></i> {{ session('success') }}</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:#fff;">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif --}}

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-4 col-md-6 col-12">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahAduan }}</h3> 
                <p>Aduan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahUser }}</h3>
                <p>Pengguna</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahProses }}</h3>  
                <p>Proses</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section>

@endsection
