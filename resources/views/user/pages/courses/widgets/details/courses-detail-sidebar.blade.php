@section('style')
    <style>
        .add-to-cart:hover {
            color: var(--bs-primary);
        }

        .payment-option span {
            font-size: 16px;
            font-weight: bold;
        }

        .payment-option img {
            width: 100px !important;
            height: auto;
            aspect-ratio: 2 / 1;
        }

        .payment-option {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            padding: 5px;
            border-radius: 10px;
            /* cursor: pointer; */
            transition: border-color 0.3s;
        }
    </style>
@endsection

<div class="col-xl-3 col-lg-4">
    <div class="courses__details-sidebar">
        {{-- <div class="courses__details-video">
            <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}" alt="img">
            <a href="../../www.youtube.com/watch0b40.html?v=YwrHGratByU" class="popup-video"><i
                    class="fas fa-play"></i></a>
        </div> --}}
        <div class="courses__cost-wrap">
            <span>Harga Kursus:</span>
            <h2 class="title">Rp.300.000</h2>
        </div>

        <div class="courses__details-enroll mb-5">
            <div class="tg-button-wrap">
                <a href="{{ route('checkout.course', $id) }}"
                    class="btn btn-two arrow-btn w-100 d-flex justify-content-center">
                    Beli Sekarang
                    <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable">
                </a>
            </div>
            <div class="tg-button-wrap my-3">
                <a href="courses.html" class="btn btn-two arrow-btn bg-white add-to-cart">
                    Tambahkan Keranjang
                    <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable">
                </a>
            </div>
        </div>

        <div class="courses__information-wrap">
            <h5 class="title"><b>Kursus ini mencakup:</b></h5>
            <ul class="list-wrap">
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Video atas permintaan 43 jam
                    <span>Expert</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    10 Artikel
                    <span>11h 20m</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Quizzes
                    <span>12</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Akses penuh seumur hidup
                    <span>145</span>
                </li>
                <li>
                    <img src="{{ asset('assets/img/icons/course_icon01.svg') }}" alt="img" class="injectable">
                    Sertifikat penyelesaian
                    <span>Yes</span>
                </li>
            </ul>
        </div>
        <div class="courses__payment">
            <h5 class="title"><b>Metode Pembayaran:</b></h5>
            {{-- <img src="{{ asset('assets/img/others/payment.png') }}" alt="img"> --}}
            <div class="row payment-options row-gap-2" id="payment-methods" style="gap: 5px;">

            </div>
        </div>
        <div class="courses__details-social border-bottom">
            <h5 class="title"><b>Bagikan kursus ini:</b></h5>
            <hr>
            <ul class="list-wrap">
                <li><a href="{{ $shareLink['facebook'] }}"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{ $shareLink['twitter'] }}"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{ $shareLink['whatsapp'] }}"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/payment-channels",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    const paymentMethod = $('#payment-methods');
                    for (const key in response.data) {
                        response.data[key].forEach(method => {
                            paymentMethod.append(
                                `
                                <div class="col-2 payment-option">
                                    <img src="${method.icon_url}"  class="d-block"/>
                                </div>
                                `
                            );
                        });
                    }
                }
            });
        });
    </script>
@endpush
