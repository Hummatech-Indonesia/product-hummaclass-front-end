<div class="col-12 col-lg-4">
    <div class="card">
        <div class="card-body p-3">
            <h5 class="mb-3 fw-semibold">Daftar Sekolah</h5>
            <form action="">
                <input type="text" class="form-control rounded-3 mb-3" placeholder="Cari...">
            </form>
            <div class="accordion accordion-flush position-relative overflow-hidden" id="list-school">
                <!-- Data sekolah akan diisi oleh AJAX -->
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(function() {

            

            // Event listener untuk klik pada .student-item
            $(document).on('click', '.student-item', function() {
                var parent = $(this);
                var studentName = parent.find('h6'); // Mendapatkan elemen <h6> dalam student-item

                // Toggle background color dan teks warna saat item diklik
                if (parent.hasClass('checkbox-checked')) {
                    parent.removeClass('checkbox-checked').css({
                        'background-color': '',
                        'padding': '',
                        'border-radius': ''
                    });
                    studentName.css('color', ''); // Kembalikan warna teks ke default
                } else {
                    parent.addClass('checkbox-checked').css({
                        'background-color': '#9425FE',
                        'padding': '4px',
                        'border-radius': '15px'
                    });
                    studentName.css('color', 'white'); // Set warna teks menjadi putih
                }
            });
        });
    </script>
@endpush
