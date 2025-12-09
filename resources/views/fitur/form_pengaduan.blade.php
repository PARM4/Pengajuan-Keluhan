@extends('layout.master')

@section('content')
<div class="content-wrapper">

    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <h4><b>Form Pengaduan</b></h4>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ajukan Pengaduan Baru</h3>
                </div>

                <form action="/fitur/pengaduan/store" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <!-- Nama -->
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required>
                        </div>

                        <!-- Nim -->
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" required>
                        </div>

                        <!-- Prodi -->
                        <div class="form-group">
                            <label>Program Studi</label>
                            <select class="form-control" name="prodi" required>
                                <option value="">-- Pilih Program Studi --</option>
                                <option>Informatika</option>
                                <option>Sistem Informasi</option>
                                <option>Teknik Sipil</option>
                                <option>Agroteknologi</option>
                                <option>Keperawatan</option>
                            </select>
                        </div>

                        <!-- Judul Pengaduan -->
                        <div class="form-group">
                            <label for="judul">Judul Pengaduan</label>
                            <input type="text" class="form-control" name="judul" placeholder="Masukkan judul pengaduan" required>
                        </div>

                        <!-- Isi pengaduan -->
                        <div class="form-group">
                            <label for="isi">Isi Pengaduan</label>
                            <textarea class="form-control" name="isi" rows="5" placeholder="Tuliskan pengaduan Anda di sini..." required></textarea>
                        </div>

                        <!-- Upload Bukti -->
                        <div class="form-group">
                            <label for="bukti">Upload Bukti (Opsional)</label>
                            <input type="file" name="bukti" class="form-control">
                            <small class="text-muted">Format: jpg, png, pdf | Maks 2MB</small>
                        </div>

                    </div>

                    <div class="card-footer center">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Kirim Pengaduan
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </section>

</div>
@endsection
