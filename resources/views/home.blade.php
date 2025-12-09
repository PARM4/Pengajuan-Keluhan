@extends('layout.master')

@section('content')
<style>
    .hero-section {
        position: relative;
        width: 100%;
        height: 90vh;
        background: url('/images/kampus.webp') center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .hero-overlay {
        background: rgba(0, 0, 0, 0.55);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 700px;
        padding: 20px;
    }

    .hero-title {
        font-size: 32px;
        font-weight: 700;
        color: #ff3b3b;
        letter-spacing: 1px;
    }

    .hero-desc {
        font-size: 16px;
        color: #ffffff;
        margin-top: 15px;
        line-height: 1.6;
    }
</style>

<div class="hero-section">
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1 class="hero-title">
            SISTEM LAYANAN KRITIK DAN SARAN MAHASISWA
        </h1>

        <p class="hero-desc">
            Platform digital untuk menampung, mengelola, dan menindaklanjuti setiap kritik,
            saran, serta masukan dari mahasiswa terhadap layanan akademik maupun non-akademik
            di lingkungan kampus. Bersama, kita wujudkan layanan kampus yang lebih transparan,
            responsif, dan partisipatif.
        </p>
    </div>
</div>

@endsection
