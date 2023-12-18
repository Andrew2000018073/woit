@extends('layouts.app')

@section('title', 'Table')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')


    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Servis yang dikerjakan</h1>
            </div>

            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tabel servis yang ditangani</h4>
                                <div class="card-header-form mr-5">

                                    <form action="/daftar-wo">
                                        <div class="input-group">
                                            <input id="myInput" type="text" class="form-control" placeholder="Cari"
                                                name="status">
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary"><i
                                                        class="fas fa-magnifying-glass"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table-striped table-md table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nomor Komplain</th>
                                                <th>Kategori</th>
                                                <th style="width: 1%;">Id Perangkat</th>
                                                <th class="w-100">Masalah</th>
                                                <th>Analisis</th>
                                                <th>Unit</th>
                                                <th>prioritas</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Tanggal Ambil</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">

                                            @foreach ($data as $info)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $info->nomor_komplain }}</td>
                                                    <td>{{ $info->kategoriwo->nama_kategori }}</td>
                                                    <td>{{ $info->id_perangkat }}</td>
                                                    <td>{{ $info->keluhan }}</td>
                                                    <td>{{ $info->analisis }}</td>
                                                    <td>{{ $info->unit }}</td>
                                                    <td>{{ $info->prioritas }}</td>
                                                    <td>{{ $info->waktu_pengajuan }}</td>
                                                    <td>{{ $info->waktu_ambil }}</td>
                                                    <th>{{ $info->status }}</th>

                                                    <td><a href="/tugas/{{ $info->id }}/edit"
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
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/components-table.js') }}"></script>
@endpush
