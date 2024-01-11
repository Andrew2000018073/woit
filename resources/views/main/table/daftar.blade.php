@extends('layouts.app')

@section('title', 'Advanced Forms')

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
                <h1>Tabel Servis</h1>
            </div>


            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Filter</h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="row">
                                <div class="col">

                                    <div class="input-group">
                                        <input id="myInput" type="text" class="form-control text-center"
                                            placeholder="Cari Nomor Komplain" name="nokomplain"
                                            value="{{ old('nokomplain') }}">

                                    </div>

                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <select class="form-control select2" name="admin">
                                            <option value="">Admin</option>
                                            @foreach ($admin as $admin)
                                                <option value="{{ $admin->id }}">
                                                    {{ $admin->nama }}
                                                </option>
                                            @endforeach
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

                            <div class="row mt-3">

                                <div class="col">
                                    <div class="form-group">
                                        <select class="form-control select2" name="prioritas" id="js-example-tags">
                                            <option value=" ">Prioritas</option>
                                            <option value="rendah">Rendah</option>
                                            <option value="menengah">Menengah</option>
                                            <option value="tinggi">Tinggi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <select class="form-control select2" name="jenis_servis">
                                            <option value=" ">Jenis Servis</option>
                                            <option value="internal">Internal</option>
                                            <option value="external">Eksternal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <select class="form-control select2" name="status">
                                            <option value=" ">Status</option>
                                            <option value="Belum dikerjakan">Belum dikerjakan</option>
                                            <option value="Sedang dikerjakan">Sedang dikerjakan</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">

                                        <select class="form-control select2" name="kategoriwo_id">
                                            <option value="">Kategori</option>
                                            @foreach ($kategori as $category)
                                                <option value="{{ $category->id }}">
                                                    {{ $category->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>

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
                        <h4>Data Servis</h4>
                        @if ($keterangan != 'Filter by')
                            <h4>
                                {{ $keterangan }}
                            </h4>
                        @endif
                        <div class="card-header-form mr-5">


                        </div>
                        <div class="card-header-form mr-5">

                        </div>
                    </div>



                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="bababoey">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Admin</th>
                                        <th>Kategori</th>
                                        <th>Nomor Komplain</th>
                                        <th>Prioritas</th>
                                        <th>Jenis Servis</th>
                                        <th>Waktu Pengajuan</th>
                                        <th>Waktu Ambil</th>
                                        <th>Waktu Selesai</th>
                                        <th>Solusi</th>
                                        <th>Masalah</th>
                                        <th>Status</th>
                                        <th>Waktu Estimasi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $respon)
                                        <tr>
                                            <td>{{ $loop->iteration + $lastnumber }}</td>
                                            <td>{{ $respon->admin->nama }}</td>
                                            <td>{{ $respon->kategoriwo->nama_kategori }}</td>
                                            <td>{{ $respon->nomor_komplain }}</td>
                                            <td>{{ $respon->prioritas }}</td>
                                            <td>{{ $respon->jenis_servis }}</td>
                                            <td>{{ $respon->waktu_pengajuan }}</td>
                                            <td>{{ $respon->waktu_ambil }}</td>
                                            <td>{{ $respon->waktu_selesai }}</td>
                                            <td>{{ $respon->solusi }}</td>
                                            <td>{{ $respon->keluhan }}</td>
                                            <td>{{ $respon->status }}</td>
                                            <td>{{ $respon->waktu_estimasi }}</td>
                                            <td>
                                                <a href="/daftar-wo/detail" class="btn btn-primary">Detail</a>
                                            </td>
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
