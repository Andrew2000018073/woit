@extends('layouts.app')

@section('title', 'General Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <div class="section">
            @auth
                <div class="section-header">
                    <h1>Dashboard</h1>
                </div>

            @endauth

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-truck-arrow-right" style="color: #ffffff;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Eksternal</h4>
                            </div>
                            <div class="card-body">
                                10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-exclamation fa-bounce" style="color: #ffffff;"></i>
                            <i class="fas fa-exclamation fa-bounce" style="color: #ffffff;"></i>
                            <i class="fas fa-exclamation fa-bounce" style="color: #ffffff;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Prioritas Tinggi </h4>
                            </div>
                            <div class="card-body">
                                42
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-exclamation fa-bounce" style="color: #ffffff;"></i>
                            <i class="fas fa-exclamation fa-bounce" style="color: #ffffff;"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Prioritas Menengah</h4>
                            </div>
                            <div class="card-body">
                                1,201
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-exclamation fa-bounce" style="color: #ffffff;"></i>

                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Prioritas Rendah</h4>
                            </div>
                            <div class="card-body">
                                47
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chart -->
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tabel Servis Yang Dilakukan Pada Tahun Ini</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="filterByjenis" height="100"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Total Perangkat Yang Diservis</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="kategoriwo"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Akurasi</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="akurasi" height="315"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush
