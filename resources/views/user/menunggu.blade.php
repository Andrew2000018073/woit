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
                        <div class="card card-danger h-100% mb-5">
                            <div class="card-body">
                                <div class="row">
                                    <img src="{{ asset('img/wait-2.svg ') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="row">
                                    <div class="col content-center mt-4">
                                        <h4 class="text-center">Permintaan anda belum ditanggapi</h4>
                                    </div>
                                </div>
                                <p class="mt-3">Permintaan Anda sedang kami proses. Mohon tunggu sejenak, kami akan
                                    memberikan pembaruan segera. Terima kasih atas kesabaran Anda.
                                </p>
                                <p>We are currently
                                    processing your request. Please wait a moment, we will provide an update shortly. Thank
                                    you for your patience.</p>
                                <p>"現在、お客様のリクエストを処理中です。しばらくお待ちいただきますようお願い申し上げます。ご辛抱いただきありがとうございます。"</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-5">
                        <div class="card card-danger h-100% mb-5">
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
                                                        {{-- {{ $data->kategoriwo->nama_kategori }} --}}
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
