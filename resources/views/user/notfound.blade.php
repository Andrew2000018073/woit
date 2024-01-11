@extends('layouts.user')

@section('title', 'Request Servis')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">

            <div class="section-body">
                <div class="row ">
                    <div class="col ">
                        <div class="card card-danger">
                            <div class="card-body">

                                <div class="col-md-12 text-center">
                                    <img src="{{ asset('img/not.png ') }}" class="card-img-top h-25 w-25" alt="...">
                                </div>
                                <div class="row">
                                    <div class="col content-center mt-4">
                                        <h4 class="text-center">Maaf data yang anda cari tidak ditemukan</h4>
                                    </div>
                                </div>
                                <p class="mt-3">Mohon maaf, kami tidak menemukan data yang sesuai dengan permintaan Anda.
                                    Pastikan informasi yang dimasukkan sudah benar, atau hubungi tim dukungan kami untuk
                                    bantuan lebih lanjut. Terima kasih atas pemahaman dan kerjasama Anda.
                                </p>
                                <p>We apologise, we did not find any data matching your request. Please ensure the
                                    information entered is correct, or contact our support team for further assistance.
                                    Thank you for your understanding and co-operation.</p>
                                <p>申し訳ございませんが、お客様のリクエストに一致するデータは見つかりませんでした。入力された情報が正しいかどうかご確認いただくか、サポートチームまでお問い合わせください。お問い合わせください。ご理解とご協力をありがとうございました。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
    </div>
@endsection

@push('scripts')
@endpush
