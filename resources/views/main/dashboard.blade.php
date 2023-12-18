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

                <div class="col">
                    <div class="card card-statistic-1">
                        <a href="{{ url('respond') }}">
                            <div class="card-icon bg-danger">
                                <i class="fas fa-exclamation fa-bounce" style="color: #ffffff;"></i>
                                <i class="fas fa-exclamation fa-bounce" style="color: #ffffff;"></i>
                                <i class="fas fa-exclamation fa-bounce" style="color: #ffffff;"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Belum diambil </h4>
                                </div>
                                <div class="card-body">
                                    {{ $belum }}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-statistic-1">
                        <a href="{{ url('tugas') }}">
                            <div class="card-icon bg-warning">
                                <i class="fas fa-screwdriver-wrench" style="color: #ffffff;"></i>

                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Sedang dikerjakan</h4>
                                </div>
                                <div class="card-body">
                                    {{ $sedang }}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col" href>
                    <div class="card card-statistic-1">
                        <a href="{{ url('daftar-wo') }}">
                            <div class="card-icon bg-success">
                                <i class="fas fa-circle-check " style="color: #ffffff;"></i>

                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Sudah Selesai</h4>
                                    <div class="card-body">
                                        {{ $sudah }}
                                    </div>
                        </a>
                    </div>
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush
