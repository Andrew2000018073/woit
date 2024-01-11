@extends('layouts.app')

@section('title', 'Table')

@push('style')
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Permintaan Servis</h1>
            </div>


            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Filter</h4>
                            </div>
                            <div class="card-body">
                                <form action="/respond" method="get">
                                    <div class="row">
                                        <div class="col">

                                            <div class="input-group">
                                                <input id="myInput" type="text" class="form-control text-center"
                                                    placeholder="Cari nomor referensi" name="nomor_referensi"
                                                    value="{{ old('nokomplain') }}">

                                            </div>

                                        </div>
                                        <div class="col">

                                            <div class="input-group">
                                                <input id="myInput" type="text" class="form-control text-center"
                                                    placeholder="Cari pic" name="pic" value="{{ old('nokomplain') }}">

                                            </div>

                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <select class="form-control select2" name="unit" id="unit">
                                                    <option value="">Unit</option>
                                                    <option value="IT">IT</option>
                                                    <option value="Pengembangan">Pengembangan</option>
                                                    <option value="Marketing">Marketing</option>
                                                    <option value="Manajemen">Manajemen</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="input-group">
                                                <div class="input-group-prepend" style="width: 150%">
                                                    <input type="text" name="datetimes" placeholder="Select Date Range"
                                                        class="text-center" style="width: 150%">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-calendar"></i>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="form-group row mb-4">
                                            <div class="col-sm-12 col-md-7">
                                                <button class="btn btn-primary" type="submit" name="submit"
                                                    id="Filter">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel permintaan servis yang belum diambil</h4>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table-md table" id="bababoey">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nomor Referensi</th>
                                                <th>Nama PIC</th>
                                                <th>Unit</th>
                                                <th>Perangkat</th>
                                                <th>Masalah</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $info)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $info->nomor_referensi }}</td>
                                                    <td>{{ $info->user }}</td>
                                                    <td>{{ $info->unit }}</td>
                                                    <td>{{ $info->perangkat }}</td>
                                                    <td>{{ $info->keluhan }}</td>
                                                    <td>{{ $info->waktu_pengajuan }}</td>
                                                    <td><a href="/respond/{{ $info->id }}/edit"
                                                            class="btn btn-primary">Detail</a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    {{ $data->links() }}
                                </nav>
                            </div>
                        </div>
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
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
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
