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
            <form action="" method="get">
                <div class="section-header">
                    <h1>Tambahkan tugas, {{ $respon->nomor_referensi }}</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item">Respon </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title">Jenis servis</div>
                            <div class="form-group">
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item col-5.5">
                                        <input type="radio" name="kategori" value="internal" class="selectgroup-input"
                                            onclick="enablepriority()">
                                        <span class="selectgroup-button">Internal</span>
                                    </label>
                                    <div class="col-1"></div>
                                    <label class="selectgroup-item col-5.5">
                                        <input type="radio" name="kategori" value="external" class="selectgroup-input"
                                            onclick="disablepriority()">
                                        <span class="selectgroup-button">External</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse" id="mario">
                    <div class="container">
                        <div class="row  ">
                            <div class="card col-12 gap-3">
                                <div class="section-title2" id="titleprioritas">Prioritas</div>
                                <div class="form-group">
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="priority" value="rendah" class="selectgroup-input"
                                                id="rendah" required>
                                            <span class="selectgroup-button selectgroup-button-icon" id="btnrendah">Rendah
                                                (1 hingga 4 Minggu)</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="priority" value="sedang" class="selectgroup-input"
                                                id="sedang" required>
                                            <span class="selectgroup-button selectgroup-button-icon" id="btnsedang">Sedang
                                                (2 hingga 7 hari) </span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="priority" value="tinggi" class="selectgroup-input"
                                                id="tinggi" required>
                                            <span class="selectgroup-button selectgroup-button-icon" id="btntinggi">Tinggi
                                                (Kurang dari 24 jam) </span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title">Kategori Wo</div>
                            <div class="form-group">

                                <select class="form-control select2" name="servis" required>
                                    <option value="">Pilih dulu</option>
                                    <option value="aset">Aset</option>
                                    <option value="jaringan">Jaringan</option>
                                    <option value="konfigurasi-sistem">Konfigurasi Sistem</option>
                                    <option value="pemeliharaan-software">Pemeliharaan Software</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title">Perangkat</div>

                            <div class="form-group">
                                <label>Jenis Perangkat</label>
                                <select class="form-control select2" required name="perangkat">
                                    <option value="">Pilih terlebih dahulu</option>
                                    <option value="cpu">CPU</option>
                                    <option value="keyborad">Keyboard</option>
                                    <option value="monitor">Monitor</option>
                                    <option value="mouse">Mouse</option>
                                    <option value="network">Network</option>
                                    <option value="printer">Printer</option>
                                    <option value="speaker">Speaker</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>ID Perangkat</label>
                                <select class="form-control select2" name="id-perangkat">
                                    <option value="null"> Pilih dulu</option>
                                    <option value="null">1ac4e377-0722-4167-957b-aca8157326e0</option>
                                    <option value="null">87e267e5-763a-4699-a6cc-745fa392e516</option>
                                    <option value="null">1841b356-f62f-4105-a633-be03d78bcc14</option>
                                    <option>12623319-38a4-4f96-8aa1-9bced69e53a9</option>
                                    <option>b1ec6995-46d0-4144-b1d5-6d5cdb6ee4be</option>
                                    <option>d259d3fa-f020-4a0c-b2b8-38dce01f5948</option>
                                    <option>f2445ac6-fd9e-472d-9c3c-e9266c97feb6</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title">Opsional</div>

                            <div class="form-group">
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="selesai" class="selectgroup-input"
                                            onclick="enable()">
                                        <span class="selectgroup-button selectgroup-button-icon"><i
                                                class="fa-regular fa-circle-check"> </i> Tandai Selesai</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="diambil" class="selectgroup-input"
                                            onclick="disable()">
                                        <span class="selectgroup-button selectgroup-button-icon"><i
                                                class="fa-solid fa-screwdriver-wrench"></i> Tandai Sebagai Diambil</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="card col-12 gap-3 p-3">
                            <div class="section-title">Detail Work Order</div>
                            <div class="form-group mb-0">
                                <label>Masalah</label>
                                <textarea name="masalah" class="form-control" data-height="150" required=""></textarea>
                                <div class="invalid-feedback">
                                    Mohon di isi terlebih dahulu
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-primary" id="btn-biasa">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse" id="luigi">

                    <div class="container">
                        <div class="row  ">
                            <div class="card col-12 gap-3">
                                <div class="section-title1" id="titlewaktu">Status:selesai</div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Waktu Ambil</label>

                                            <input type="text" value="" name="waktuambil"
                                                class="form-control datetimepicker" disabled id="waktuambil">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Waktu Selesai</label>
                                            <input type="text" class="form-control datetimepicker" disabled
                                                id="waktuselesai">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group  ">
                                    <label class="mt-3">Solusi</label>
                                    <textarea class="form-control" name="solusi" data-height="150" required="" disabled id="solusi"></textarea>
                                    <div class="invalid-feedback">
                                        Mohon di isi terlebih dahulu
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <script>
        function enable() {
            document.getElementById("btn-biasa").setAttribute("class", "collapse");
            document.getElementById("luigi").setAttribute("class", "collapse-show");
            document.getElementById("titlewaktu").setAttribute("class", "section-title2");
            document.getElementById("waktuambil").disabled = false;
            document.getElementById("waktuselesai").disabled = false;
            document.getElementById("solusi").disabled = false;
        }

        function disable() {
            document.getElementById("luigi").setAttribute("class", "collapse");
            document.getElementById("btn-biasa").setAttribute("class", "btn btn-primary");
            document.getElementById("titlewaktu").setAttribute("class", "section-title1");
            document.getElementById("waktuambil").disabled = true;
            document.getElementById("waktuselesai").disabled = true;
            document.getElementById("solusi").disabled = true;
        }

        function disablepriority() {
            document.getElementById("mario").setAttribute("class", "collapse");
            //     document.getElementById("titleprioritas").setAttribute("class", "section-title1");
            //     document.getElementById("btnrendah").setAttribute("class", "selectgroup-button-disabled");
            //     document.getElementById("rendah").disabled = true;
            //     document.getElementById("rendah").checked = false;
            //     document.getElementById("sedang").disabled = true;
            //     document.getElementById("sedang").checked = false;
            //     document.getElementById("tinggi").disabled = true;
            //     document.getElementById("tinggi").checked = false;
        }

        function enablepriority() {
            document.getElementById("mario").setAttribute("class", "collapse-show");
            //     document.getElementById("titleprioritas").setAttribute("class", "section-title2");
            //     document.getElementById("rendah").disabled = false;
            //     document.getElementById("sedang").disabled = false;
            //     document.getElementById("tinggi").disabled = false;
        }
    </script>

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
@endpush
