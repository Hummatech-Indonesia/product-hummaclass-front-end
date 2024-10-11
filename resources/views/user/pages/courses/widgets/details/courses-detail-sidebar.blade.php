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

<div class="col-xl-3 col-lg-4" id="courses-detail-sidebar">
    <div class="courses__details-sidebar">
        {{-- <div class="courses__details-video">
            <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}" alt="img">
            <a href="../../www.youtube.com/watch0b40.html?v=YwrHGratByU" class="popup-video"><i
                    class="fas fa-play"></i></a>
        </div> --}}
        <div class="courses__cost-wrap">
            <span>Harga Kursus:</span>
            <h2 class="title" id="price-course"></h2>
        </div>

        <div class="courses__details-enroll mb-5">
            <div class="tg-button-wrap">
                <a href="{{ route('checkout.course', $id) }}"
                    class="btn btn-two arrow-btn w-100 d-flex justify-content-center" id="btn-checkout">
                    Beli Sekarang
                    <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="img" class="injectable">
                </a>
            </div>
        </div>

        <div class="courses__information-wrap">
            <h5 class="title"><b>Kursus ini mencakup:</b></h5>
            <ul class="list-wrap">
                <li class="fs-9 text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256"><path fill="currentColor" d="m164.44 105.34l-48-32A8 8 0 0 0 104 80v64a8 8 0 0 0 12.44 6.66l48-32a8 8 0 0 0 0-13.32M120 129.05V95l25.58 17ZM216 40H40a16 16 0 0 0-16 16v112a16 16 0 0 0 16 16h176a16 16 0 0 0 16-16V56a16 16 0 0 0-16-16m0 128H40V56h176zm16 40a8 8 0 0 1-8 8H32a8 8 0 0 1 0-16h192a8 8 0 0 1 8 8"/></svg>
                    Video atas permintaan 43 jam
                </li>
                <li class="fs-9 text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8zm4 18H6V4h7v5h5z"/></svg>
                    10 Artikel
                </li>
                <li class="fs-9 text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16"><path fill="none" stroke="currentColor" d="M9.5 13.5h3v-3h.5a1.5 1.5 0 0 0 0-3h-.5V4h-3m0 9.5H9m.5 0a2 2 0 1 0-4 0m4-9.5H9m.5 0a2 2 0 1 0-4 0m0 0h-3v2.5H4a1.5 1.5 0 1 1 0 3H2.5v4h3m0-9.5H6m-.5 9.5H6"/></svg>
                    Quizzes
                </li>
                <li class="fs-9 text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256"><path fill="currentColor" d="M248 128a56 56 0 0 1-95.6 39.6l-.33-.35l-59.95-67.7a40 40 0 1 0 0 56.9l8.52-9.62a8 8 0 1 1 12 10.61l-8.69 9.81l-.33.35a56 56 0 1 1 0-79.2l.33.35l59.95 67.7a40 40 0 1 0 0-56.9l-8.52 9.62a8 8 0 1 1-12-10.61l8.69-9.81l.33-.35A56 56 0 0 1 248 128"/></svg>
                    Akses penuh seumur hidup
                </li>
                <li class="fs-9 text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256"><path fill="currentColor" d="M126 136a6 6 0 0 1-6 6H72a6 6 0 0 1 0-12h48a6 6 0 0 1 6 6m-6-38H72a6 6 0 0 0 0 12h48a6 6 0 0 0 0-12m110 62.62V224a6 6 0 0 1-9 5.21l-25-14.3l-25 14.3a6 6 0 0 1-9-5.21v-26H40a14 14 0 0 1-14-14V56a14 14 0 0 1 14-14h176a14 14 0 0 1 14 14v31.38a49.91 49.91 0 0 1 0 73.24M196 86a38 38 0 1 0 38 38a38 38 0 0 0-38-38m-34 100v-25.38a50 50 0 0 1 56-81.51V56a2 2 0 0 0-2-2H40a2 2 0 0 0-2 2v128a2 2 0 0 0 2 2Zm56-17.11a49.91 49.91 0 0 1-44 0v44.77l19-10.87a6 6 0 0 1 6 0l19 10.87Z"/></svg>
                    Sertifikat penyelesaian
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
            <ul class="list-wrap justify-content-center">
                <li><a href="{{ $shareLink['facebook'] }}" target="blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{ $shareLink['twitter'] }}" target="blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{ $shareLink['whatsapp'] }}" target="blank"><i class="fab fa-whatsapp"></i></a></li>
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
