@extends('layouts.user')

@section('title', 'Request Servis')

@push('style')
    <!-- CSS Libraries -->
    <style>
        .star {
            font-size: 10vh;
            cursor: pointer;
        }

        .one {
            color: rgb(255, 0, 0);
        }

        .two {
            color: rgb(255, 106, 0);
        }

        .three {
            color: rgb(251, 255, 120);
        }

        .four {
            color: rgb(255, 255, 0);
        }

        .five {
            color: rgb(24, 159, 14);
        }
    </style>
@endpush

@section('main')<div class="main-content">
        <section class="section">
            <div class="section-body mt-5">
                <div class="row ">
                    <div class="col-4"></div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('img/rating.svg ') }}" class="card-img-top" alt="...">
                                <h4 class="mt-5 text-center">Nilai hasil servis oleh {{ $admin->admin->nama }}</h4>
                                <form action="{{ url('user/permintaan/' . $id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="col">
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <div class="selectgroup selectgroup-pills">
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="rating" value="1"
                                                            class="selectgroup-input" checked="">
                                                        <span onclick="gfg(1)" class="star">★
                                                        </span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="rating" value="2"
                                                            class="selectgroup-input">
                                                        <span onclick="gfg(2)" class="star">★
                                                        </span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="rating" value="3"
                                                            class="selectgroup-input">
                                                        <span onclick="gfg(3)" class="star">★
                                                        </span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="rating" value="4"
                                                            class="selectgroup-input">
                                                        <span onclick="gfg(4)" class="star">★
                                                        </span>
                                                    </label>
                                                    <label class="selectgroup-item">
                                                        <input type="radio" name="rating" value="5"
                                                            class="selectgroup-input">
                                                        <span onclick="gfg(5)" class="star">★
                                                        </span>
                                                    </label>
                                                </div>
                                                <h3 id="output" class="text-center">

                                                </h3>
                                            </div>

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
    <script>
        let stars =
            document.getElementsByClassName("star");
        let output =
            document.getElementById("output");

        // Funtion to update rating
        function gfg(n) {
            remove();
            for (let i = 0; i < n; i++) {
                if (n == 1) cls = "one";
                else if (n == 2) cls = "two";
                else if (n == 3) cls = "three";
                else if (n == 4) cls = "four";
                else if (n == 5) cls = "five";
                stars[i].className = "star " + cls;
            }
            if (n == 1) x = "Mengecewakan";
            if (n == 2) x = "Buruk";
            if (n == 3) x = "Cukup";
            if (n == 4) x = "Baik";
            if (n == 5) x = "Sangat Baik";

            output.innerText = x;
        }

        // To remove the pre-applied styling
        function remove() {
            let i = 0;
            while (i < 5) {
                stars[i].className = "star";
                i++;
            }
        }
    </script>

    <!-- Page Specific JS File -->

    <script src="{{ asset('js/page/modules-sweetalert.js') }}"></script>
@endpush
