<script>
    $(document).ready(function() {
        $.ajax({
            type: "GET"
            , url: "{{ config('app.api_url') }}" + "/api/transactions-user"
            , headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
            }
            , dataType: "json"
            , success: function(response) {
                console.log(response);


                $('#tab-all-history').empty();

                console.log(response.data);

                if (response.data.length > 0) {
                    $.each(response.data, function(index, value) {
                        $('#tab-all-history').append(allHistory(index, value));
                    });


                } else {
                    $('#tab-all-history').append(empty());
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

    function allHistory(index, value) {
        console.log(value.invoice_status);

        let statusText = '';
        let statusClass = '';

        if (value.invoice_status === 'paid') {
            statusText = 'Selesai';
            statusClass = 'text-success'; // Teks hijau untuk status selesai
        } else if (value.invoice_status === 'pending') {
            statusText = 'Menunggu Pembayaran';
            statusClass = 'text-warning'; // Teks kuning untuk status pending
        } else {
            statusText = 'Status Tidak Diketahui';
            statusClass = 'text-danger'; // Teks merah jika status tidak diketahui
        }
        
        return `
            <div class="card mb-4 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
                <div class="courses__item-three shine__animate-item border-0">
                    <div class="courses__item-thumb">
                        <a href="{{ route('courses.courses.show', '') }}/${value.slug}" class="shine__animate-link">
                            <img src="${value.course.photo}" />
                        </a>
                    </div>
                    <div class="courses__item-content">
                        <ul class="courses__item-meta list-wrap">
                            <li class="courses__item-tag">
                                <a href="javascript:void(0)">${value.course.sub_category}</a>
                
                            </li>
                        </ul>
                        <h5 class="title"><a href="{{ route('courses.courses.show', '') }}/${value.slug}">${value.course.title}</a></h5>
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
                        <p class="info">${value.course.description}</p>
                    </div>
                </div>
                <div class="border-card">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <h6 class="text-dark fw-semibold">Status Pesanan: </h6>
                            <h6 class="fw-semibold ${statusClass}">${statusText}</h6>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <h6 class="text-dark fw-semibold">Total Harga: </h6>
                            <h4 class="fw-bolder fs-4" style="color: #7209DB">Rp. 100.000</h4>
                        </div>
                    </div>
            
                    <div class="d-flex align-items-center justify-content-between">
                        ${value.course.course_reviews && value.course.course_reviews.length > 0 ? 
                            `<p>TELAH DINILAI</p>
                            <div>
                                <a href="{{ route('courses.courses.show', '') }}/${value.course.slug}" class="outline-secondary">Tampilkan Penilaian Kursus</a>
                            </div>` 
                            : 
                            `<p>Nilai kursus sebelum tanggal 10 Agustus 2024</p>
                            <div class="d-flex gap-2">
                                <button class="outline-danger">Batalkan Pesanan</button>
                                <button class="btn-purple-primary px-4">Bayar</button>
                            </div>`
                        }
                    </div>
            
                </div>
            </div>
    `;
    }


    // jangan dihapus
    // <li><i class="flaticon-user-1"></i>by <a href="blog-details.html">Admin</a></li>

</script>
