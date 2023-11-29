@extends('layouts.app')

@section('title', 'Table')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tabel Servis</h1>
            </div>


            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col">
                                        <h4>Servis Berdasarkan</h4>
                                        {{-- <form action="/daftar-wo" method="get">
                                            @csrf
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col">
                                                        <select class="form-label" name="status" id="status">
                                                            <option value="">Semua Status</option>
                                                            <option value="Belum dikerjakan">Belum dikerjakan</option>
                                                            <option value="Sedang dikerjakan">Sedang dikerjakan</option>
                                                            <option value="Selesai">Selesai</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <button type="submit" class="btn btn-primary mt-4">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form> --}}
                                    </div>

                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-bordered table-md table">
                                        <thead>
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
                                            @foreach ($filter as $respon)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $respon->userwo->nama }}</td>
                                                    <td> {{ $respon->kategoriwo->nama_kategori }} </td>
                                                    <td>{{ $respon->nomor_komplain }}</td>
                                                    <td>{{ $respon->prioritas }} </td>
                                                    <td>{{ $respon->jenis_servis }} </td>
                                                    <td>{{ $respon->waktu_pengajuan }} </td>
                                                    <td>{{ $respon->waktu_ambil }}</td>
                                                    <td>{{ $respon->waktu_selesai }}</td>

                                                    <td>{{ $respon->solusi }}</td>
                                                    <td>{{ $respon->keluhan }}</td>
                                                    <td>{{ $respon->status }}</td>
                                                    <td>{{ $respon->waktu_estimasi }}</td>
                                                    <td><a href="/daftar-wo/detail" class="btn btn-primary">Detail</a>
                                                    </td>

                                                </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i
                                                    class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
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
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
