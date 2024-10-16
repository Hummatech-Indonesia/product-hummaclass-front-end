@foreach (range(1,5) as $data)
<div class="card mb-4 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
    <div class="courses__item-three shine__animate-item border-0">
        <div class="courses__item-thumb">
            <a href="{{ route('courses.courses.show', '') }}/${value.slug}" class="shine__animate-link">
                <img src="{{ asset('assets/img/courses/course_thumb01.jpg') }}" />
            </a>
        </div>
        <div class="courses__item-content">
            <ul class="courses__item-meta list-wrap">
                <li class="courses__item-tag">
                    <a href="#">Development</a>
    
                </li>
            </ul>
            <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">Learning JavaScript With Imagination</a></h5>
            <div class="courses__item-content-bottom d-flex justify-content-start">
                <div class="author-two">
                    <a href="instructor-details.html"><img
                            src="{{ asset('assets/img/courses/course_author001.png') }}"
                            alt="img">David Millar</a>
                </div>
                <div class="avg-rating">
                    <i class="fas fa-star"></i> (4.8 Reviews)
                </div>
            </div>
            <p class="info">Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        </div>
    </div>
    <div class="border-card">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-2">
                <h6 class="text-dark fw-semibold">Status Pesanan: </h6>
                <h6 class="fw-semibold text-success">Selesai</h6>
            </div>
            <div class="d-flex align-items-center gap-3">
                <h6 class="text-dark fw-semibold">Status Pesanan: </h6>
                <h4 class="fw-bolder fs-4" style="color: #7209DB">Rp. 100.000</h4>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-between">
            <p>TELAH DINILAI</p>
            <div>
                <button class="outline-secondary">Tampilkan Penilaian Kursus</button>
            </div>
        </div>

    </div>
</div>
@endforeach