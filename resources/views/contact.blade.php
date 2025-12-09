@extends('layout.master')

@section('content')
<div class="content-wrapper">

    <!-- Header -->
    <div class="content-header">
        <div class="container-fluid">
            <h4><b>Kontak</b></h4>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">

                <!-- Kiri: Informasi Kontak -->
                <div class="col-md-5">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Kontak</h3>
                        </div>
                        <div class="card-body">

                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-phone fa-2x text-danger mr-3"></i>
                                <div>
                                    <b>Telepon / WA:</b><br>
                                    0822-1234-5678
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-envelope fa-2x text-danger mr-3"></i>
                                <div>
                                    <b>Email:</b><br>
                                    layanan@kampus.ac.id
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-map-marker-alt fa-2x text-danger mr-3"></i>
                                <div>
                                    <b>Alamat:</b><br>
                                    Universitas Sulawesi Barat<br>
                                    Majene, Sulawesi Barat
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Kanan: Form Pesan -->
                <div class="col-md-7">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Kirim Pesan</h3>
                        </div>

                        <form action="/kontak/kirim" method="POST">
                            @csrf

                            <div class="card-body">

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                                </div>

                                <div class="form-group">
                                    <label>Email / No. HP</label>
                                    <input type="text" name="kontak" class="form-control" placeholder="Email atau WhatsApp" required>
                                </div>

                                <div class="form-group">
                                    <label>Pesan Anda</label>
                                    <textarea name="pesan" rows="5" class="form-control" placeholder="Tulis pesan Anda..." required></textarea>
                                </div>

                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane"></i> Kirim Pesan
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </section>

</div>
@endsection
