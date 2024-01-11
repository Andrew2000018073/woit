@extends('layouts.user')

@section('title', 'Request Servis')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-body mt-5">
                <div class="row ">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="/cekid" method="GET">

                                    <div class="col">
                                        <div class="mb-3">

                                            <input type="text" class="form-control mt-3" name="nokomplain"
                                                placeholder="Nomor Komplain">
                                        </div>
                                    </div>
                                    <div class="col mt-1 text-center">
                                        <button type="submit" name="submit" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Submit</button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>


        </section>
    </div>
@endsection



@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-sweetalert.js') }}"></script>
@endpush
