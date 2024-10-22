<div class="modal fade" id="modal-create-review" tabindex="-1" aria-labelledby="importPegawai" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content shadow-md">
            <div class="modal-header">
                <h5 class="modal-title text-dark w-100" id="importPegawai">Nilai Kursus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="position: absolute; right: 20px; top: 25px;"></button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" id="form-create-review">
                @csrf
                <div class="modal-body">
                    <div>
                        <div class="row">
                            <div class="col-lg-3">
                                @session('user')
                                <input type="hidden" name="user_id" value="{{ session('user')['id'] }}">
                                @endsession
                                <input type="hidden" name="course_id" id="course_id">
                                <a href="{{ route('courses.courses.show', '') }}" class="shine__animate-link">
                                    <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}" />
                                </a>
                            </div>
                            <div class="col-lg-9">
                                <div class="courses__item-content">
                                    <ul class="courses__item-meta list-wrap">
                                        <li class="courses__item-tag">
                                            <a href="#">Development</a>
                                        </li>
                                    </ul>
                                    <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">Learning JavaScript With Imagination</a></h5>
                                    <p class="author">By <a href="#">David Millar</a></p>

                                </div>
                            </div>
                        </div>
                        <div class="py-2" style="border-bottom: 1px solid #D9D9D9"></div>
                        <div class="rating mt-2 mb-2">
                            <label>Nilai Kursus</label>
                            <div class="stars" id="star-rating">
                                <!-- Bintang 1 -->
                                <svg class="star" data-value="1" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path fill="#D9D9D9" d="M10.92 2.868a1.25 1.25 0 0 1 2.16 0l2.795 4.798l5.428 1.176a1.25 1.25 0 0 1 .667 2.054l-3.7 4.141l.56 5.525a1.25 1.25 0 0 1-1.748 1.27L12 19.592l-5.082 2.24a1.25 1.25 0 0 1-1.748-1.27l.56-5.525l-3.7-4.14a1.25 1.25 0 0 1 .667-2.055l5.428-1.176z"/>
                                    </g>
                                </svg>
            
                                <!-- Bintang 2 -->
                                <svg class="star" data-value="2" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#D9D9D9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13.728 3.444l1.76 3.549c.24.494.88.968 1.42 1.058l3.189.535c2.04.343 2.52 1.835 1.05 3.307l-2.48 2.5c-.42.423-.65 1.24-.52 1.825l.71 3.095c.56 2.45-.73 3.397-2.88 2.117l-2.99-1.785c-.54-.322-1.43-.322-1.98 0L8.019 21.43c-2.14 1.28-3.44.322-2.88-2.117l.71-3.095c.13-.585-.1-1.402-.52-1.825l-2.48-2.5C1.39 10.42 1.86 8.929 3.899 8.586l3.19-.535c.53-.09 1.17-.564 1.41-1.058l1.76-3.549c.96-1.925 2.52-1.925 3.47 0"/>
                                </svg>
            
                                <!-- Bintang 3 -->
                                <svg class="star" data-value="3" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#D9D9D9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13.728 3.444l1.76 3.549c.24.494.88.968 1.42 1.058l3.189.535c2.04.343 2.52 1.835 1.05 3.307l-2.48 2.5c-.42.423-.65 1.24-.52 1.825l.71 3.095c.56 2.45-.73 3.397-2.88 2.117l-2.99-1.785c-.54-.322-1.43-.322-1.98 0L8.019 21.43c-2.14 1.28-3.44.322-2.88-2.117l.71-3.095c.13-.585-.1-1.402-.52-1.825l-2.48-2.5C1.39 10.42 1.86 8.929 3.899 8.586l3.19-.535c.53-.09 1.17-.564 1.41-1.058l1.76-3.549c.96-1.925 2.52-1.925 3.47 0"/>
                                </svg>
            
                                <!-- Bintang 4 -->
                                <svg class="star" data-value="4" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#D9D9D9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13.728 3.444l1.76 3.549c.24.494.88.968 1.42 1.058l3.189.535c2.04.343 2.52 1.835 1.05 3.307l-2.48 2.5c-.42.423-.65 1.24-.52 1.825l.71 3.095c.56 2.45-.73 3.397-2.88 2.117l-2.99-1.785c-.54-.322-1.43-.322-1.98 0L8.019 21.43c-2.14 1.28-3.44.322-2.88-2.117l.71-3.095c.13-.585-.1-1.402-.52-1.825l-2.48-2.5C1.39 10.42 1.86 8.929 3.899 8.586l3.19-.535c.53-.09 1.17-.564 1.41-1.058l1.76-3.549c.96-1.925 2.52-1.925 3.47 0"/>
                                </svg>
            
                                <!-- Bintang 5 -->
                                <svg class="star" data-value="5" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#D9D9D9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13.728 3.444l1.76 3.549c.24.494.88.968 1.42 1.058l3.189.535c2.04.343 2.52 1.835 1.05 3.307l-2.48 2.5c-.42.423-.65 1.24-.52 1.825l.71 3.095c.56 2.45-.73 3.397-2.88 2.117l-2.99-1.785c-.54-.322-1.43-.322-1.98 0L8.019 21.43c-2.14 1.28-3.44.322-2.88-2.117l.71-3.095c.13-.585-.1-1.402-.52-1.825l-2.48-2.5C1.39 10.42 1.86 8.929 3.899 8.586l3.19-.535c.53-.09 1.17-.564 1.41-1.058l1.76-3.549c.96-1.925 2.52-1.925 3.47 0"/>
                                </svg>
                            <input type="hidden" name="rating" id="rating" value="0">
                        </div>
                        <textarea name="review" placeholder="Tuliskan Review" class="form-control" id="review-textarea" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="px-4 mb-4">
                    <div class="d-flex justify-content-between">
                        <p id="char-count" class="text-start">1000 Karakter tersisa</p>
                        <div class="d-flex gap-3">
                            <button type="button" class="outline-purple-primary px-4" style="border-radius: 50px" data-bs-dismiss="modal">Nanti saja</button>
                            <button type="submit" class="btn text-white storeConfirmation" style="background-color: #7209DB;">Kirim Review</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


