@extends('user.layouts.app')

@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg py-5" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Event</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="index.html">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Event</span>
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

    <!-- event-area -->
    <section class="event__area-two section-py-120">
        <div class="container">
            <div class="event__inner-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="event__item shine__animate-item">
                            <div class="event__item-thumb">
                                <a href="{{ route('events.detail.event') }}" class="shine__animate-link"><img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="event__item-content">
                                <span class="date">25 June, 2024</span>
                                <h2 class="title"><a href="{{ route('events.detail.event') }}">The Accessible Target Sizes Cheatsheet</a></h2>
                                <p>Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Jumat, 6 September 2024 pukul 16.00 - 17.00 WIB Live di YouTube</p>
                                
                                <div class="d-flex justify-content-between pt-3" style="border-top: 1px solid #CCCCCC">
                                    <div class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#6D6C80" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></g></svg>
                                        Sisa Kuota: 150
                                    </div>
                                    <div>4 Hari lagi</div>
                                </div>
                                {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="event__item shine__animate-item">
                            <div class="event__item-thumb">
                                <a href="{{ route('events.detail.event') }}" class="shine__animate-link"><img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="event__item-content">
                                <span class="date">25 June, 2024</span>
                                <h2 class="title"><a href="{{ route('events.detail.event') }}">The Accessible Target Sizes Cheatsheet</a></h2>
                                <p>Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Jumat, 6 September 2024 pukul 16.00 - 17.00 WIB Live di YouTube</p>
                                
                                <div class="d-flex justify-content-between pt-3" style="border-top: 1px solid #CCCCCC">
                                    <div class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#6D6C80" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></g></svg>
                                        Sisa Kuota: 150
                                    </div>
                                    <div>4 Hari lagi</div>
                                </div>
                                {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="event__item shine__animate-item">
                            <div class="event__item-thumb">
                                <a href="{{ route('events.detail.event') }}" class="shine__animate-link"><img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="event__item-content">
                                <span class="date">25 June, 2024</span>
                                <h2 class="title"><a href="{{ route('events.detail.event') }}">The Accessible Target Sizes Cheatsheet</a></h2>
                                <p>Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Jumat, 6 September 2024 pukul 16.00 - 17.00 WIB Live di YouTube</p>
                                
                                <div class="d-flex justify-content-between pt-3" style="border-top: 1px solid #CCCCCC">
                                    <div class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#6D6C80" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></g></svg>
                                        Sisa Kuota: 150
                                    </div>
                                    <div>4 Hari lagi</div>
                                </div>
                                {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="event__item shine__animate-item">
                            <div class="event__item-thumb">
                                <a href="{{ route('events.detail.event') }}" class="shine__animate-link"><img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="event__item-content">
                                <span class="date">25 June, 2024</span>
                                <h2 class="title"><a href="{{ route('events.detail.event') }}">The Accessible Target Sizes Cheatsheet</a></h2>
                                <p>Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Jumat, 6 September 2024 pukul 16.00 - 17.00 WIB Live di YouTube</p>
                                
                                <div class="d-flex justify-content-between pt-3" style="border-top: 1px solid #CCCCCC">
                                    <div class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#6D6C80" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></g></svg>
                                        Sisa Kuota: 150
                                    </div>
                                    <div>4 Hari lagi</div>
                                </div>
                                {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="event__item shine__animate-item">
                            <div class="event__item-thumb">
                                <a href="{{ route('events.detail.event') }}" class="shine__animate-link"><img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="event__item-content">
                                <span class="date">25 June, 2024</span>
                                <h2 class="title"><a href="{{ route('events.detail.event') }}">The Accessible Target Sizes Cheatsheet</a></h2>
                                <p>Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Jumat, 6 September 2024 pukul 16.00 - 17.00 WIB Live di YouTube</p>
                                
                                <div class="d-flex justify-content-between pt-3" style="border-top: 1px solid #CCCCCC">
                                    <div class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#6D6C80" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></g></svg>
                                        Sisa Kuota: 150
                                    </div>
                                    <div>4 Hari lagi</div>
                                </div>
                                {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="event__item shine__animate-item">
                            <div class="event__item-thumb">
                                <a href="{{ route('events.detail.event') }}" class="shine__animate-link"><img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="event__item-content">
                                <span class="date">25 June, 2024</span>
                                <h2 class="title"><a href="{{ route('events.detail.event') }}">The Accessible Target Sizes Cheatsheet</a></h2>
                                <p>Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Jumat, 6 September 2024 pukul 16.00 - 17.00 WIB Live di YouTube</p>
                                
                                <div class="d-flex justify-content-between pt-3" style="border-top: 1px solid #CCCCCC">
                                    <div class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#6D6C80" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></g></svg>
                                        Sisa Kuota: 150
                                    </div>
                                    <div>4 Hari lagi</div>
                                </div>
                                {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="event__item shine__animate-item">
                            <div class="event__item-thumb">
                                <a href="{{ route('events.detail.event') }}" class="shine__animate-link"><img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="event__item-content">
                                <span class="date">25 June, 2024</span>
                                <h2 class="title"><a href="{{ route('events.detail.event') }}">The Accessible Target Sizes Cheatsheet</a></h2>
                                <p>Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Jumat, 6 September 2024 pukul 16.00 - 17.00 WIB Live di YouTube</p>
                                
                                <div class="d-flex justify-content-between pt-3" style="border-top: 1px solid #CCCCCC">
                                    <div class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#6D6C80" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></g></svg>
                                        Sisa Kuota: 150
                                    </div>
                                    <div>4 Hari lagi</div>
                                </div>
                                {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="event__item shine__animate-item">
                            <div class="event__item-thumb">
                                <a href="{{ route('events.detail.event') }}" class="shine__animate-link"><img src="{{ asset('assets/img/events/event_thumb01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="event__item-content">
                                <span class="date">25 June, 2024</span>
                                <h2 class="title"><a href="{{ route('events.detail.event') }}">The Accessible Target Sizes Cheatsheet</a></h2>
                                <p>Acara ini sepenuhnya GRATIS dan akan diselenggarakan hari Jumat, 6 September 2024 pukul 16.00 - 17.00 WIB Live di YouTube</p>
                                
                                <div class="d-flex justify-content-between pt-3" style="border-top: 1px solid #CCCCCC">
                                    <div class="d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><g fill="none" stroke="#6D6C80" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.0"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></g></svg>
                                        Sisa Kuota: 150
                                    </div>
                                    <div>4 Hari lagi</div>
                                </div>
                                {{-- <a href="https://maps.google.com/maps" class="location" target="_blank"><i class="flaticon-map"></i>United Kingdom</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="pagination__wrap mt-30">
                    <ul class="list-wrap">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="{{ route('events.index') }}">2</a></li>
                        <li><a href="{{ route('events.index') }}">3</a></li>
                        <li><a href="{{ route('events.index') }}">4</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- event-area-end -->

@endsection