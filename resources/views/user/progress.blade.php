@extends('layouts.user')

@section('title', 'Request Servis')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Cek Proses Pengerjaan</h1>
            </div>
            <div class="section-body mt-5">
                <div class="row ">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <form>

                                    <div class="col">

                                        <div class="mb-3">

                                            <input type="text" class="form-control mt-3" id=""
                                                placeholder="Nomor Komplain">

                                        </div>
                                    </div>
                                    <div class="col mt-1 text-center">
                                        <button type="button" class="btn btn-primary" id="swal-4">Cek</button>
                                    </div>


                                    <div id="liveAlertPlaceholder"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
            <script>
                const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
                const appendAlert = (message, type) => {
                    const wrapper = document.createElement('div')
                    wrapper.innerHTML = [
                        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                        `<div class="row">`,
                        `<div class="col-11">`,
                        `   <div>${message}</div>`,
                        '</div>',
                        '<div class="col-1 text-right>',
                        '<button type="button" class="ml-5" data-dismiss="alert" aria-label="Close"> <i class="fa-solid fa-xmark"></i></button>',
                        '</div>',
                        '</div>',
                        '</div>'
                    ].join('')

                    alertPlaceholder.append(wrapper)
                }

                const alertTrigger = document.getElementById('liveAlertBtn')
                if (alertTrigger) {
                    alertTrigger.addEventListener('click', () => {
                        appendAlert('Paket anda sedang dikerjakan', 'success')
                    })
                }
            </script>


        </section>
    </div>
@endsection



@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-sweetalert.js') }}"></script>
@endpush
