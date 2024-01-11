@extends('layouts.user')

@section('title', 'Request Servis')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-body mt-5">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('success') }}
                        </div>
                    </div>
                @endif
                <div class="row ">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <form action="/progress" method="GET">
                                    <div class="mb-3">
                                        <input type="text" class="form-control mt-3" name="nokomplain"
                                            placeholder="Nomor Komplain">
                                    </div>
                                    <div class="d-flex justify-content-center mt-2">
                                        <div class="form-group row mb-4">
                                            <div class="col-sm-12 col-md-7">
                                                <button class="btn btn-primary" type="submit" name="submit"
                                                    id="Filter">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
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

    <!-- Page Specific JS File -->
@endpush
