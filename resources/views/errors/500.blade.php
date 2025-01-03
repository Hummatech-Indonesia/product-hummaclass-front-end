@extends('user.layouts.app')

@section('content')
<main class="main-area fix">
    <section class="error-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <div class="mb-4">
                            <img src="{{ asset('assets/img/others/500_img.svg') }}" alt="img" class="injectable w-50">
                        </div>
                        <div class="error-content">
                            <h4 class="title">Internal Server Error! <span>Maaf Ada Yang Tidak Beres</span></h4>
                            <div class="tg-button-wrap">
                                <a href="/" class="btn arrow-btn">Pergi Ke Halaman Utama <img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection