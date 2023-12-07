@extends('layouts.user')

@section('title', 'Request Servis')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Ajukan Servis</h1>
            </div>
            <div class="section-body">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <form action="{{ url('/user/permintaan') }}" method="post">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>Hal yang akan diservis</h4>
                                </div>
                                {{-- Bagian ikon card pertama --}}
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="form-group">

                                            <div class="selectgroup w-100">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="perangkat" value="CPU"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i
                                                            class="fa-solid fa-computer mr-2"></i> CPU</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="perangkat" value="KEYBOARD"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i
                                                            class="fa-regular fa-keyboard mr-2"></i> KEYBOARD</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="perangkat" value="MONITOR"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i
                                                            class="fa-solid fa-desktop mr-2"></i> MONITOR</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="perangkat" value="MOUSE"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i
                                                            class="fa-solid fa-computer-mouse mr-2"></i> MOUSE</span>
                                                </label>
                                            </div>
                                            <div class="selectgroup w-100 mt-5">
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="perangkat" value="JARINGAN"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i
                                                            class="fa-solid fa-network-wired mr-2"></i> JARINGAN</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="perangkat" value="SPEAKER"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i
                                                            class="fa-solid fa-volume-off mr-2"></i> SPEAKER</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="perangkat" value="PRINTER"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i
                                                            class="fa-solid fa-print mr-2"></i> PRINTER</span>
                                                </label>
                                                <label class="selectgroup-item">
                                                    <input type="radio" name="perangkat" value="LAINNYA"
                                                        class="selectgroup-input">
                                                    <span class="selectgroup-button selectgroup-button-icon"><i
                                                            class="fa-solid fa-otter mr-2"></i> LAINNYA</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Card Kedua --}}
                            <div class="card">
                                <div class="card-header">
                                    <h4>Detail pengajuan</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control @error('user') is-invalid @enderror"
                                                name="user" id="user">
                                            @error('user')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3 mt-3">Unit</label>
                                        <div class="col-sm-12 col-md-7 mt-3">
                                            <select class="form-control select2 @error('unit') is-invalid @enderror"
                                                required name="unit" id="unit">
                                                <option value="">Pilih terlebih dahulu</option>
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
                                    <div class="form-group row mb-4">
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keluhan</label>
                                        <div class="col-sm-12 col-md-7">
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
                                    <div class="d-flex justify-content-center">
                                        <div class="form-group row mb-4">
                                            <div class="col-sm-12 col-md-7">
                                                <button class="btn btn-primary" type="submit" name="submit"
                                                    id="submit">SUBMIT</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>


    <!-- Page Specific JS File -->
@endpush
