@extends('layouts.user')

@section('title', 'Request Servis')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Nomor komplain {{ $data->nomor_komplain }}</h1>
            </div>

            <div class="section-body h-100 mb-5">
                <div class="card card-danger h-100% mb-5">
                    <div class="card-header">
                        <h4 style="color: Black;">Analisa</h4>
                    </div>
                    <div class="card-body">
                        {{ $data->analisis }}
                    </div>
                    <div class="card-footer text-right">
                        <a href="/admintambahtugas">
                            <button class=" btn btn-primary">
                                Kembali
                            </button>
                        </a>
                    </div>

                </div>
            </div>

        </section>
    </div>
@endsection

@push('scripts')
@endpush
