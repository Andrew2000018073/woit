@extends('layouts.app')

@section('title', 'Tambah Tugas')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
<link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Request oleh Bayu Skak</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Respon permintaan</div>
            </div>
        </div>

        <div class="section-body h-100 mb-5">
            <div class="card card-danger h-100% mb-5">
                <div class="card-header">
                    <h4 style="color: Black;">Keluhan</h4>
                </div>
                <div class="card-body">
                    <p>Permisi para master / suhu, kalo layar masuk bios sendiri tidak bisa keluar bios kenapa ya, hanya laptop murah advan soutmate punya adik, untuk blajar di sekolah, ga mampu bli. In yg bagus, faktor ekonomi, hanya ingin dan berharap adik saya bisa belajar. </p>
                </div>
                <div class="card-footer text-right">
                    <a href="/admintambahtugas">
                        <button class=" btn btn-primary">
                            Selanjutnya
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </a>
                </div>

            </div>
        </div>

    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
<script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush