@extends('layouts.user')

@section('title', 'Request Servis')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">

            <div class="section-body h-100 mb-5">
                <div class="row">
                    <div class="col-7">
                        <div class="card card-warning h-100% mb-5">
                            <div class="card-header">
                                <h4>Lembar detail</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">Admin yang menangani</p>
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">{{ $data->admin->nama }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row ">
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">Nomor Komplain</p>

                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">
                                            {{ $data->nomor_komplain }}
                                        </p>
                                    </div>

                                </div>
                                <hr>
                                <div class="row ">
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">Nomor Referensi</p>
                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">
                                            {{ $data->nomor_referensi }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row ">
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">Perangkat</p>

                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">
                                            {{ $data->perangkat }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row ">
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">Perangkat</p>

                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">
                                            {{ $data->perangkat }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row ">
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">Estimasi</p>

                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">
                                            {{ $data->prioritas }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row ">
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">Analisis</p>

                                    </div>
                                    <div class="col d-flex align-items-center">
                                        <p class="m-0">
                                            {{ $data->analisis }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="card card-warning h-100% mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="activities">
                                            <div class="activity">
                                                <div class="activity-icon bg-primary shadow-primary text-white">
                                                    <i class="fas fa-hand-point-up"></i>
                                                </div>
                                                <div class="activity-detail">
                                                    <div class="mb-2">
                                                        <span class="text-job">Pengajuan</span>
                                                        <span class="bullet"></span>
                                                        <span class="text-job">{{ $data->waktu_pengajuan }}</span>
                                                    </div>
                                                    <p>
                                                        {{ $data->user }} mengajukan permintaan perbaikan
                                                        {{ $data->kategoriwo->nama_kategori }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="activity">
                                                <div class="activity-icon bg-primary shadow-primary text-white">
                                                    <i class="fas fa-screwdriver-wrench"></i>
                                                </div>
                                                <div class="activity-detail">
                                                    <div class="mb-2">
                                                        <span class="text-job">Dikerjakan</span>
                                                        <span class="bullet"></span>
                                                        <span class="text-job">{{ $data->waktu_ambil }}</span>
                                                    </div>
                                                    <p>
                                                        {{ $data->admin->nama }} Mengerjakan perbaikan kepada perbaikan
                                                        dengan nomor komplain
                                                        {{ $data->nomor_komplain }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>
@endsection

@push('scripts')
@endpush
