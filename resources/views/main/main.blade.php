@extends('layouts.navbar')

@section('content')
    
<div class="container-fluid bg-success text-center p-5">
    <h2>Aplikasi Manajemen Keuangan Terbaik</h2>
    <p>Duitsaku adalah solusi terbaik untuk membantu Anda mengelola keuangan pribadi Anda dengan mudah dan efisien. Dengan fitur-fitur canggih, Duitsaku memberikan kemudahan dalam mencatat pengeluaran, mengatur anggaran, dan melacak performa keuangan Anda.</p>

    <h2>Mengapa Memilih Duitsaku?</h2>
    <p>Duitsaku menyediakan berbagai fitur unggulan untuk mendukung perencanaan keuangan Anda:</p>
    <ul>
        <li>Pencatatan Pengeluaran Harian</li>
        <li>Monitoring Anggaran Bulanan</li>
        <li>Laporan Keuangan Interaktif</li>
        <li>Notifikasi Pengingat Pembayaran</li>
        <!-- Tambahkan fitur lainnya sesuai kebutuhan -->
    </ul>


    

    <div class="text-center mt-4">
    <a class="btn text-white btn-floating m-1" style="background-color: #333333;"><i class="fa fa-server"></i></a>
    <h2>Your Finance,safe and secure</h2>
    <p>Data anda dijamin aman, kami akan melindungi data anda</p>
    </div>

</div>








<div class="container mt-5 mb-5">
    <div class="row align-items-center">
        <!-- Kolom Teks -->
        <div class="col-lg-6" style="padding-bottom: 50px;">
            <h2>Keep your cashflow crystal clear</h2>
            <p>Effortlessly track your cashflow and gain insights 
                that’ll help you see easy opportunities to save.</p>
            <a href="#" class="btn btn-primary btn-lg">Sign Up</a>
        </div>
        <!-- Kolom Gambar Lingkaran -->
        <div class="col-lg-6 text-center">
            <div class="rounded-circle overflow-hidden mx-auto" style="width: 350px; height: 350px;">
                <img src="{{ asset('image/2.jpg') }}" alt="Cashflow Icon" class="img-fluid">
            </div>
        </div>

    </div>
</div>

<div class="container mt-7 mb-5">
    <div class="row align-items-center">
        <div class="col-lg-6 text-center">
            <div class="rounded-circle overflow-hidden mx-auto" style="width: 350px; height: 350px;">
                <img src="{{ asset('image/2.jpg') }}" alt="Cashflow Icon" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-6">
            <h2>Keep your cashflow crystal clear</h2>
            <p>Ayo bergabung dengan Duitsaku sekarang! Kelola keuangan Anda dengan mudah. Jika sudah memiliki akun, silakan login. Jika belum, daftar sekarang juga!</p>
            <a href="#" class="btn btn-primary btn-lg">Sign Up</a>
        </div>

    </div>
</div>




@endsection