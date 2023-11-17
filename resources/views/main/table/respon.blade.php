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
                                    <tr>
                                        <th>#</th>
                                        <th>Nomor Komplain</th>
                                        <th>Masalah</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Aksi</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>UIT/CMPLT/SFT/1023/0394</td>
                                        <td> Permisi para master / suhu, kalo layar masuk bios sendiri tidak bisa keluar bios kenapa ya, hanya laptop murah advan soutmate punya adik, untuk blajar di sekolah, ga mampu bli. In yg bagus, faktor ekonomi, hanya ingin dan berharap adik saya bisa belajar.</td>
                                        <td>20/8/2023</td>
                                        <td><a href="/form-detail" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>UIT/CMPLT/SFT/1023/0394</td>
                                        <td> Kronologinya, saat nyalain tiba tiba di area 24pin power terbakar(merah ke orenan) dan juga berasap saya buru buru copot kabel power, itu karena apa ya bang kira kira masih bisa dipakai mobonya atau sudah wasallam?😿</td>
                                        <td>11/15/2023</td>
                                        <td><a href="/form-detail" class="btn btn-primary">Detail</a></td>
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