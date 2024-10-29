@extends('user.layouts.app')

@section('style')
<style>
    /* .accordion-body {
        padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x);
        border: 1px solid #9425FE;
    }

    .accordion-button:not(.collapsed) {
        color: #9425FE;
        background-color: #fff;
        box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
    }

    .accordion-body {
        padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x);
        border: 1px solid #9425FE;
        color: #9425FE;
    }

    .accordion-button:not(.collapsed) {
        color: #9425FE;
        background-color: #fff;
        box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
        border: 1px solid #9425FE;

    } */
    .accordion-button:not(.collapsed) {
        background-color: #fff;
        color: #9425FE;
        box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
    }

    .accordion-item {
        /* color: var(--bs-accordion-color); */
        background-color: #F6EEFE !important;
        border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
    }
    .accordion-button.active {
        /* background-color: #9425FE; Warna ungu */
        color: #9425FE;
    }

    section {
        background-color: #fff;
    }

</style>
@endsection

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg py-5" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <h3 class="title">FAQ</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="/">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">faq</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
        <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</section>
<!-- breadcrumb-area-end -->

<section class="features__area-three section-pt-120 section-pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-8">
                <div class="section__title text-center mb-40">
                    <h2 class="title">Temukan Pertanyaanmu</h2>
                </div>
            </div>
        </div>
        <div class="features__item-wrap">
            <div class="accordion" id="accordionFaq">
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/faqs"
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , success: function(response) {

                $('#accordionFaq').empty();

                if (response.data.length > 0) {
                    $.each(response.data, function(index, value) {
                        $('#accordionFaq').append(card(index, value));
                    });

                } else {
                    $('#accordionFaq').append(empty());
                }


            }
            , error: function(xhr) {

                Swal.fire({
                    title: "Terjadi Kesalahan!"
                    , text: "Tidak dapat memuat data kategori."
                    , icon: "error"
                });
            }
        });
    });

    function card(index, value) {
        return `
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading-${index}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-${index}" aria-expanded="true" aria-controls="collapse-${index}">
                        ${value.question}
                    </button>
                </h2>
                <div id="collapse-${index}" class="accordion-collapse collapse ${index === 0 ? 'show' : ''}" aria-labelledby="heading-${index}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>${value.answer}</strong>
                    </div>
                </div>
            </div>
    `;
    }

</script>
@endsection
