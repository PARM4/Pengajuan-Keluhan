<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title ?? 'Sistem Pengaduan Mahasiswa' }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- AdminLTE -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition layout-top-nav">

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-danger">
    <div class="container">
      <a href="/" class="navbar-brand">
        <span class="brand-text font-weight-bold">Sistem Pengaduan Mahasiswa</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          
            <li class="nav-item">
              <a href="/" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="/login">
                <button type="submit" class="btn btn-link nav-link">Login</button>
            </a>
              
            </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Hero / Banner -->
  <div class="content-wrapper" style="background: url('{{ asset('images/kampus.webp') }}') no-repeat center center; background-size: cover;">
    <div class="content-header" ></div>
    <div class="content" >
      <div class="container" >

        <div class="jumbotron text-white text-center py-5 mb-5" 
     style="position: relative; 
            background: url('{{ asset('images/kampus.jpg') }}') no-repeat center center; 
            background-size: cover;">
  
  <!-- Overlay merah transparan -->
  {{-- <div style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(220,53,69,0.5);"></div> --}}
  
  <!-- Konten teks -->
  <div style="position: relative; z-index: 2;">
      <h1 class="display-4 font-weight-bold">Menyampaikan Kritik & Saran Dengan Mudah</h1>
      <p class="lead font-weight-normal">
        Sistem Pengaduan Mahasiswa Universitas Sulawesi Barat dirancang sebagai platform yang membantu mahasiswa
        menyampaikan aspirasi secara efektif, responsif, dan transparan.
      </p>
  </div>
</div>


        <!-- Fitur / Kelebihan -->
        {{-- <div class="row text-center">
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <i class="fas fa-bullhorn fa-3x text-danger mb-3"></i>
                <h5 class="card-title font-weight-bold">Mudah & Cepat</h5>
                <p class="card-text">Ajukan pengaduan kapan saja dan langsung diterima oleh pihak kampus.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <i class="fas fa-shield-alt fa-3x text-danger mb-3"></i>
                <h5 class="card-title font-weight-bold">Aman & Terpercaya</h5>
                <p class="card-text">Data pengaduan dijaga kerahasiaannya dan diproses secara profesional.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <i class="fas fa-sync-alt fa-3x text-danger mb-3"></i>
                <h5 class="card-title font-weight-bold">Responsif</h5>
                <p class="card-text">Setiap pengaduan akan mendapatkan tindak lanjut dari pihak universitas.</p>
              </div>
            </div>
          </div>
        </div> --}}

      </div><!-- /.container -->
    </div><!-- /.content -->
  </div><!-- /.content-wrapper -->

  <!-- Footer -->
  <footer class="main-footer text-center">
    <strong>© 2025 Universitas Sulawesi Barat</strong> - Sistem Pengaduan Mahasiswa
  </footer>

</div><!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>
