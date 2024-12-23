@extends('user.layouts.app')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg py-5" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Berita</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Berita</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- blog-area -->
    <section class="blog-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="row gutter-20" id="news-list-content">

                    </div>
                    <nav class="pagination__wrap mt-25">
                        <ul class="list-wrap">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="/news">2</a></li>
                            <li><a href="/news">3</a></li>
                            <li><a href="/news">4</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <aside class="blog-sidebar">
                        {{-- <div class="blog-widget widget_search">
                            <div class="sidebar-search-form">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search here">
                                    <button id="button-search"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                        </div> --}}
                        <div class="blog-widget" id="news-latest-content">
                            <h4 class="widget-title">Berita Terbaru</h4>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection

@section('script')
    @include('user.pages.blogs.scripts.index')
@endsection
