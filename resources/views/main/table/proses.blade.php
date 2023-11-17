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
                            <h4>Tabel servis yang sedang dilakukan</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped table-md table">
                                    <tr>
                                        <th>#</th>
                                        <th>Nomor Komplain</th>
                                        <th>Kategori</th>
                                        <th style="width: 1%;">Id Perangkat</th>
                                        <th class="w-100">Masalah</th>
                                        <th>Unit</th>
                                        <th>prioritas</th>
                                        <th>Admin</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Tanggal Ambil</th>

                                        <th>Aksi</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>UIT/CMPLT/SFT/1023/0394</td>
                                        <td>Jaringan</td>
                                        <td>MAK/IT/CPU-RKT/1102/6034</td>
                                        <td>
                                            Mau nanya bang, jadi di tempat ane lagi setiap hari ada hujan petir, jadi setiap hari ini pc selalu di off saklar psu nya sama cabut kabel psu & monitor biar menghindari pc kesamber petir. Pertanyaannya, apakah aman bang colok cabut kabel psu trus? Bikin rusak gk? Btw psu ane be quiet 500w +80 bronze
                                        </td>
                                        <td>
                                            Sedang
                                        </td>
                                        <td>
                                            RND
                                        </td>
                                        <td>Andrew</td>
                                        <td>20/8/2023</td>
                                        <td>20/8/2023</td>
                                        <td><a href="/form-detail" class="btn btn-info">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>UIT/CMPLT/SFT/1023/0394</td>
                                        <td>MIX</td>
                                        <td>MAK/IT/CPU-RKT/1102/6034</td>
                                        <td> Mau tanya, ini fan speed vga ane di displaynya knp 0 rpm ya? Pas lagi main game juga sama 0 rpm, Padahal fan vga nya muter kok, kenceng juga fan nya kedengaran pas main game, suhu blm pernah sampe 70° juga
                                        </td>
                                        <td>
                                            Rendah
                                        </td>
                                        <td>
                                            IT
                                        </td>
                                        <td>Andrew</td>
                                        <td>11/15/2023</td>
                                        <td>11/15/2023</td>
                                        <td><a href="/form-detail" class="btn btn-info">Detail</a></td>
                                    </tr>
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