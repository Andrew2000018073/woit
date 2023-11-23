@extends('layouts.app')

@section('title', 'Table')

@push('style')
<!-- CSS Libraries -->
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
                            <h4>Tabel permintaan servis yang belum diambil</h4>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-md table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nomor Komplain</th>
                                            <th>Masalah</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Aksi</th>
                                            <th></th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach($data as $respon)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $respon->nomor_komplain }}</td>
                                            <td>{{ $respon->masalah }}</td>
                                            <td>{{ $respon->waktu_pengajuan }}</td>
                                            <td><a href="/form-detail" class="btn btn-primary">Detail</a></td>
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
                                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
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