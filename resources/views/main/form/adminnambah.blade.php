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
        {{-- Da From --}}
        <form action="/admintambahtugas" method="POST">
            @csrf

            <section class="section">
                <div class="section-header">
                    <h1>Tambahkan Tugas</h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                        <div class="breadcrumb-item">Tambahkan Tugas</div>
                    </div>
                </div>

                {{-- Da PI AI SI --}}
                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3 p-3">
                            <div class="section-title">Person in Control</div>
                            <div class="form-group row mb-4">
                                <div class="col-12">
                                    <input type="text" class="form-control @error('user') is-invalid @enderror mb-3"
                                        name="user" id="user" placeholder="Nama PIC">
                                    @error('user')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-12 mt-3">
                                    <select class="form-control select2 @error('unit') is-invalid @enderror" required
                                        name="unit" id="unit">
                                        <option value="">Unit</option>
                                        <option value="IT">IT</option>
                                        <option value="RND">Manajemen</option>
                                        <option value="Pengembangan">Pengembangan</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Manajemen">Manajemen</option>
                                    </select>
                                    @error('unit')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>

                        </div>
                        <div class="card col-12 gap-3">
                            <div class="section-title">Masalah</div>
                            <div class="col-12">
                                {{-- <input type="text" name="keluhan" id="keluhan" class="form-control"> --}}
                                <textarea class="summernote-simple w-100 @error('keluhan') is-invalid @enderror" data-height="150" name="keluhan"
                                    id="keluhan"></textarea>
                                @error('keluhan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Da Perangkat --}}
                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title">Perangkat </div>

                            <div class="form-group">
                                <label>Jenis Perangkat</label>
                                <select class="form-control select2" required name="perangkat">
                                    <option value="">Pilih terlebih
                                        dahulu</option>
                                    <option value="CPU">CPU</option>
                                    <option value="KEYBOARD">
                                        Keyboard
                                    </option>
                                    <option value="MONITOR">Monitor
                                    </option>
                                    <option value="MOUSE">Mouse</option>
                                    <option value="JARINGAN">Network
                                    </option>
                                    <option value="PRINTER">Printer
                                    </option>
                                    <option value="SPEAKER">Speaker
                                    </option>
                                    <option value="JARINGAN" f>Jaringan
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
                                        <option value="{{ $category->id }}">
                                            {{ $category->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- Jenis Servis --}}
                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title">Jenis servis</div>
                            <div class="form-group">
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item col-5.5">
                                        <input type="radio" name="jenis_servis" value="internal" class="selectgroup-input"
                                            onclick="enablepriority()">
                                        <span class="selectgroup-button">Internal</span>
                                    </label>
                                    <div class="col-1"></div>
                                    <label class="selectgroup-item col-5.5">
                                        <input type="radio" name="jenis_servis" value="external"
                                            class="selectgroup-input" onclick="disablepriority()">
                                        <span class="selectgroup-button">External</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Prioritas --}}
                <div class="collapse" id="mario">
                    <div class="container">
                        <div class="row  ">
                            <div class="card col-12 gap-3">
                                <div class="section-title2" id="titleprioritas">Prioritas</div>
                                <div class="form-group">
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="prioritas" value="rendah"
                                                class="selectgroup-input" id="rendah">
                                            <span class="selectgroup-button selectgroup-button-icon" id="btnrendah">Rendah
                                                (1 hingga 4 Minggu)</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="prioritas" value="menengah"
                                                class="selectgroup-input" id="menengah">
                                            <span class="selectgroup-button selectgroup-button-icon" id="btnsedang">Sedang
                                                (2 hingga 7 hari) </span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="prioritas" value="tinggi"
                                                class="selectgroup-input" id="tinggi">
                                            <span class="selectgroup-button selectgroup-button-icon" id="btntinggi">Tinggi
                                                (Kurang dari 24 jam) </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Da Opsional De Status De Lune --}}
                <div class="container">
                    <div class="row  ">
                        <div class="card col-12 gap-3">
                            <div class="section-title">Opsional</div>

                            <div class="form-group">
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="Belum Dikerjakan"
                                            class="selectgroup-input" onclick="matiin()">
                                        <span class="selectgroup-button selectgroup-button-icon">
                                            <i class="fa-regular fa-clipboard"></i> Tandai Belum Selesai</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="Sedang dikerjakan"
                                            class="selectgroup-input" onclick="diambil()">
                                        <span class="selectgroup-button selectgroup-button-icon"><i
                                                class="fa-solid fa-screwdriver-wrench"></i> Tandai Sebagai
                                            Diambil</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="Selesai" class="selectgroup-input"
                                            onclick="selesai()">
                                        <span class="selectgroup-button selectgroup-button-icon"><i
                                                class="fa-regular fa-circle-check"> </i> Tandai Selesai</span>
                                    </label>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button class="btn btn-primary" id="btn-biasa">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Da selesai --}}
                <div class="collapse" id="stats_selesai">
                    {{-- Da Analisa --}}
                    <div class="container">
                        <div class="row">
                            <div class="card col-12 gap-3 p-3">
                                <div class="section-title">Analisa</div>
                                <div class="form-group mb-0">
                                    <textarea name="analisis" class="form-control @error('analisis') is-invalid @enderror" data-height="150"></textarea>
                                    @error('analisis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row  ">
                            <div class="card col-12 gap-3">
                                <div class="section-title1" id="titlewaktu">Status:selesai</div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Waktu Ambil</label>

                                            <input type="text" value="" name="waktu_ambil"
                                                class="form-control datetimepicker" disabled id="waktuambil">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label>Waktu Selesai</label>
                                            <input type="text" class="form-control datetimepicker"
                                                name="waktu_selesai" disabled id="waktuselesai">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- Da Solusi --}}
                    <div class="container">
                        <div class="row">
                            <div class="card col-12 gap-3 p-3">
                                <div class="section-title">Solusi</div>
                                <div class="form-group mb-0">
                                    <textarea name="solusi" class="form-control" data-height="150" disabled id="solusi"></textarea>
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

                {{-- Diambil --}}
                <div class="collapse" id="stats_diambil">
                    {{-- Da Admin yang mengerjakan --}}
                    <div class="container">
                        <div class="row">
                            <div class="card col-12 gap-3 p-3">
                                <div class="section-title">Admin Yang menangani</div>
                                <div class="form-group mb-0">
                                    <select class="form-control select2" name="admin_id" required id="adminskuy"
                                        disabled>
                                        @foreach ($admin as $admins)
                                            <option value="{{ $admins->id }}">
                                                {{ $admins->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Da Analisa --}}
                    <div class="container">
                        <div class="row">
                            <div class="card col-12 gap-3 p-3">
                                <div class="section-title">Analisa</div>
                                <div class="form-group mb-0">
                                    <textarea name="analisis" class="form-control @error('analisis') is-invalid @enderror" data-height="150"></textarea>
                                    @error('analisis')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="card-footer text-center">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>

    </div>

    <script>
        function selesai() {
            document.getElementById("btn-biasa").setAttribute("class", "collapse");
            document.getElementById("stats_selesai").setAttribute("class", "collapse-show");
            document.getElementById("stats_diambil").setAttribute("class", "collapse");
            document.getElementById("titlewaktu").setAttribute("class", "section-title2");
            document.getElementById("waktuambil").disabled = false;
            document.getElementById("waktuselesai").disabled = false;
            document.getElementById("solusi").disabled = false;
        }

        function diambil() {
            document.getElementById("stats_diambil").setAttribute("class", "collapse-show");
            document.getElementById("stats_selesai").setAttribute("class", "collapse");
            document.getElementById("titlewaktu").setAttribute("class", "section-title1");
            document.getElementById("waktuambil").disabled = true;
            document.getElementById("adminskuy").disabled = false;
            document.getElementById("waktuselesai").disabled = true;
            document.getElementById("solusi").disabled = true;
            document.getElementById("btn-biasa").setAttribute("class", "collapse");
        }

        function matiin() {
            document.getElementById("stats_diambil").setAttribute("class", "collapse");
            document.getElementById("stats_selesai").setAttribute("class", "collapse");
            document.getElementById("btn-biasa").setAttribute("class", "btn btn-primary");
            document.getElementById("titlewaktu").setAttribute("class", "section-title1");
            document.getElementById("waktuambil").disabled = true;
            document.getElementById("waktuselesai").disabled = true;
            document.getElementById("solusi").disabled = true;
            document.getElementById("analisis").disabled = true;
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
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/custom/daterange.js') }}"></script>
    <script src="{{ asset('js/custom/aturantabel.js') }}"></script>
    <script src="{{ asset('js/custom/daterangep.js') }}"></script>
    <script src="{{ asset('js/custom/select2withnewtags.js') }}"></script>
@endpush
