<!-- resources/views/keuangan/index.blade.php -->

@extends('auth.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h5>Data Keuangan</h5>
                    <p>Total Pemasukan: Rp {{ number_format($totalPemasukan, 2, ',', '.') }}</p>
                    <p>Total Pengeluaran: Rp {{ number_format($totalPengeluaran, 2, ',', '.') }}</p>
                </div>
            </nav>
            

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <h2>Data Keuangan</h2>
            
                <!-- Tambahkan ini di tempat di halaman Anda -->
                <div id="apexchart" style="width: 300px; height: 200px;"></div>


                @foreach ($keuangans as $keuangan)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $keuangan->judul }}</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text">{{ \Carbon\Carbon::parse($keuangan->created_at)->isoFormat('Do MMMM YYYY') }}</p>
                                <p class="card-text">
                                    @if ($keuangan->jenis === 'pengeluaran')
                                        <span class="text-danger">- Rp {{ number_format($keuangan->nominal, 2, ',', '.') }}</span>
                                    @else
                                        <span class="text-success">+ Rp {{ number_format($keuangan->nominal, 2, ',', '.') }}</span>
                                    @endif
                                </p>
                                <div class="btn-group mb-2 mt-0">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $keuangan->id }}">Edit</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#hapusModal">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        
                    </div>

                    



                @endforeach

                <div class="card mb-3">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="custom-spacing">
                                <i class="fas fa-wallet fa-2x"></i>
                            </div>
                            <h5 class="d-inline">Missing Transactions ?</h5>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahModal">
                                Tambah Data
                            </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        // Get the total income and expenses values from your PHP variables
        var totalPemasukan = {{ $totalPemasukan }};
        var totalPengeluaran = {{ $totalPengeluaran }};
    
        // Calculate the remaining balance
        var remainingBalance = totalPemasukan - totalPengeluaran;
    
        // Inisialisasi chart menggunakan ApexCharts
        var options = {
            chart: {
                type: 'area', // Mengubah tipe chart menjadi 'area'
            },
            series: [{
                name: 'Income',
                data: [totalPemasukan],
            }, {
                name: 'Expenses',
                data: [totalPengeluaran],
            }, {
                name: 'Remaining Balance',
                data: [remainingBalance],
            }],
            xaxis: {
                categories: ['Total'],
            },
            colors: ['#008000', '#FF0000', '#0000FF']
        };
    
        var chart = new ApexCharts(document.querySelector("#apexchart"), options);
        chart.render();
    </script>


  @include('keuangan.create')
  @include('keuangan.edit')
  @include('keuangan.delete')


@endsection
