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
            <form action="{{ url('tugas/' . $workorder->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Judul --}}
                <div class="section-header">
                    <h1>Tanggapi permintaan dengan nomor referensi, {{ $workorder->nomor_referensi }}</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item">Respon </div>
                    </div>
                </div>
                {{-- Masalah --}}
                <div class="container">
                    <div class="row">
                        <div class="card col-12 gap-3">
                            <div class="section-title">
                                Detail Work Order
                            </div>
                            <label>
                                <h6>
                                    Masalah oleh unit {{ $workorder->unit }}
                                </h6>
                            </label>
                            <p>
                                {{ $workorder->keluhan }}
                            </p>
                            <br>
                            <label>
                                <h6>
                                    Jenis Work Order & Prioritas
                                </h6>
                            </label>
                            <p>
                                {{ $workorder->jenis_servis }} & {{ $workorder->prioritas }}
                            </p>
                        </div>
                    </div>
                </div>

                {{-- perangkat --}}
                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title">Perangkat </div>

                            <div class="form-group">
                                <label>Jenis Perangkat</label>
                                <select class="form-control select2" required name="perangkat">
                                    <option value="" @if ($workorder->perangkat == 'LAINNYA') selected @endif>Pilih terlebih
                                        dahulu</option>
                                    <option value="CPU" @if ($workorder->perangkat == 'CPU') selected @endif>CPU</option>
                                    <option value="KEYBOARD" @if ($workorder->perangkat == 'KEYBOARD') selected @endif>Keyboard
                                    </option>
                                    <option value="MONITOR" @if ($workorder->perangkat == 'MONITOR') selected @endif>Monitor
                                    </option>
                                    <option value="MOUSE" @if ($workorder->perangkat == 'MOUSE') selected @endif>Mouse</option>
                                    <option value="NETWORK" @if ($workorder->perangkat == 'NETWORK') selected @endif>Network
                                    </option>
                                    <option value="PRINTER" @if ($workorder->perangkat == 'PRINTER') selected @endif>Printer
                                    </option>
                                    <option value="SPEAKER" @if ($workorder->perangkat == 'SPEAKER') selected @endif>Speaker
                                    </option>
                                    <option value="JARINGAN" @if ($workorder->perangkat == 'JARINGAN') selected @endif>Jaringan
                                    </option>
                                </select>
                            </div>
                            {{-- IDperangkat --}}
                            <div class="form-group">
                                <label>ID Perangkat</label>
                                <select class="form-control select2" name="id_perangkat">
                                    <option value=""> Pilih dulu</option>
                                    <option value="1ac4e377-0722-4167-957b-aca8157326e0">
                                        1ac4e377-0722-4167-957b-aca8157326e0</option>
                                    <option value="87e267e5-763a-4699-a6cc-745fa392e516">
                                        87e267e5-763a-4699-a6cc-745fa392e516</option>
                                    <option value="1841b356-f62f-4105-a633-be03d78bcc14">
                                        1841b356-f62f-4105-a633-be03d78bcc14</option>
                                    <option value="12623319-38a4-4f96-8aa1-9bced69e53a9">
                                        12623319-38a4-4f96-8aa1-9bced69e53a9</option>
                                    <option value="1ac4e377-0722-4167-957b-aca8157326e0">
                                        b1ec6995-46d0-4144-b1d5-6d5cdb6ee4be</option>
                                    <option value="1ac4e377-0722-4167-957b-aca8157326e0">
                                        d259d3fa-f020-4a0c-b2b8-38dce01f5948</option>
                                    <option value="1ac4e377-0722-4167-957b-aca8157326e0">
                                        f2445ac6-fd9e-472d-9c3c-e9266c97feb6</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Kategori WO --}}
                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title">Kategori Wo</div>
                            <div class="form-group">

                                <select class="form-control select2" name="kategoriwo_id" required>
                                    <option value="">Pilih dulu</option>
                                    @foreach ($kategori as $category)
                                        <option value="{{ $category->id }}"
                                            @if ($category->id == $workorder->kategoriwo_id) selected @endif>
                                            {{ $category->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div>
                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title">Jenis servis</div>
                            <div class="form-group">
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item col-5.5">
                                        <input type="radio" name="jenis_servis" value="internal" class="selectgroup-input"
                                            @if ($workorder->jenis_servis == 'internal') @checked(true) @endif
                                            onclick="enablepriority()">
                                        <span class="selectgroup-button">Internal</span>
                                    </label>
                                    <div class="col-1"></div>
                                    <label class="selectgroup-item col-5.5">
                                        <input type="radio" name="jenis_servis" value="external" class="selectgroup-input"
                                            @if ($workorder->jenis_servis == 'external') @checked(true) @endif
                                            onclick="disablepriority()">
                                        <span class="selectgroup-button">External</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title2" id="titleprioritas">Prioritas</div>
                            <div class="form-group">
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="prioritas" value="rendah" class="selectgroup-input"
                                            id="rendah" required>
                                        <span class="selectgroup-button selectgroup-button-icon" id="btnrendah">Rendah
                                            (1 hingga 4 Minggu)</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="prioritas" value="menengah"
                                            class="selectgroup-input" id="sedang" required>
                                        <span class="selectgroup-button selectgroup-button-icon" id="btnsedang">Sedang
                                            (2 hingga 7 hari) </span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="prioritas" value="tinggi" class="selectgroup-input"
                                            id="tinggi" required>
                                        <span class="selectgroup-button selectgroup-button-icon" id="btntinggi">Tinggi
                                            (Kurang dari 24 jam) </span>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}

                {{-- Solusi --}}
                <div class="container">
                    <div class="row">
                        <div class="card col-12 gap-3 p-3">
                            <div class="section-title">Solusi</div>
                            <div class="form-group mb-0">
                                {{-- <label>Solusi</label> --}}
                                <textarea name="solusi" class="form-control" data-height="150" required=""></textarea>
                                <div class="invalid-feedback">
                                    Mohon di isi terlebih dahulu
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-primary" id="btn-biasa" type="submit">Selesai</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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

    <script></script>
@endpush
