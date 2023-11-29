@extends('layouts.user')

@section('title', 'Request Servis')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Ajukan Servis</h1>
            </div>
            <div class="section-body">
                @if (session()->has('sucsess'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            Nanti tambahkan nomer unik
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <form action="{{ url('/user/permintaan') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text"
                                                class="form-control @error('nama_pic') is-invalid @enderror" name="nama_pic"
                                                id="nama_pic">
                                            @error('nama_pic')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keluhan</label>
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
    {{-- <!-- JS Libraies -->
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/custom/user-request.js') }}"></script> --}}
@endpush
