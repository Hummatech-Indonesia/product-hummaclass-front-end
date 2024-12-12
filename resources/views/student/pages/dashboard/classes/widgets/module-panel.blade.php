<div class="card" style="background-color: #FEF5EE; border-color: #FFB649; border-radius: 15px">
    <div class="card-body">
        <div class="d-flex  gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24">
                <path fill="#FFB649"
                    d="m12 2l.642.005l.616.017l.299.013l.579.034l.553.046c4.687.455 6.65 2.333 7.166 6.906l.03.29l.046.553l.041.727l.006.15l.017.617L22 12l-.005.642l-.017.616l-.013.299l-.034.579l-.046.553c-.455 4.687-2.333 6.65-6.906 7.166l-.29.03l-.553.046l-.727.041l-.15.006l-.617.017L12 22l-.642-.005l-.616-.017l-.299-.013l-.579-.034l-.553-.046c-4.687-.455-6.65-2.333-7.166-6.906l-.03-.29l-.046-.553l-.041-.727l-.006-.15l-.017-.617l-.004-.318v-.648l.004-.318l.017-.616l.013-.299l.034-.579l.046-.553c.455-4.687 2.333-6.65 6.906-7.166l.29-.03l.553-.046l.727-.041l.15-.006l.617-.017Q11.673 2 12 2m0 9h-1l-.117.007a1 1 0 0 0 0 1.986L11 13v3l.007.117a1 1 0 0 0 .876.876L12 17h1l.117-.007a1 1 0 0 0 .876-.876L14 16l-.007-.117a1 1 0 0 0-.764-.857l-.112-.02L13 15v-3l-.007-.117a1 1 0 0 0-.876-.876zm.01-3l-.127.007a1 1 0 0 0 0 1.986L12 10l.127-.007a1 1 0 0 0 0-1.986z" />
            </svg>
            <h4 style="color: #FFB649">Informasi</h4>
        </div>
        <ul class="custom-list mx-2 text-muted">
            <li>Kamu harus mengerjakan test terlebih dahulu sebelum membuka materi untuk pertama kali.</li>
            <li>Selesaikan materi sebelumnya untuk membuka materi yang dipilih.</li>
            <li>Selesaikan semua tugas dari materi sebelumnya agar dapat membuka materi selanjutnya.</li>
        </ul>
    </div>
</div>

<div class="col-6 my-3">
    <input type="text" name="search" id="module-search" class="form-control" placeholder="Cari...">
</div>

<div class="row" id="course-list">
    @for ($i = 1; $i <= 12; $i++)
        <div class="col-12 col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <i class="fa fa-book me-3" style="font-size: 32px;"></i>
                        <div>
                            <h5>Java Fundamental Programming</h5>
                            <p class="text-muted">Kelas 10</p>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, ipsum architecto natus ab suscipit,
                        sapiente quidem itaque...</p>
                    <div class="d-flex justify-content-between mt-3">
                        <div style="border: 1px;border-radius:5%;color:blueviolet;">
                            <p>12 Bab</p>
                        </div>
                        <div class="btn btn-primary">Detail</div>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</div>
@push('script')
    <script>
        $(document).ready(function() {

            let debounceTimer;
            $('#module-search').keyup(function() {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(function() {
                    getCourses(1)
                }, 500);
            });

            function courseList(index, value, class_level) {
                return `
                <div class="col-12 col-md-4 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <i class="fa fa-book me-3" style="font-size: 32px;"></i>
                                <div>
                                    <h5>${value.course.title}</h5>
                                    <p class="text-muted">Kelas ${class_level}</p>
                                </div>
                            </div>
                            <p>${value.course.description}</p>
                            <div class="d-flex justify-content-between mt-3">
                                <div style="border: 1px;border-radius:5%;color:blueviolet;">
                                    <p>${value.module_count} Bab</p>
                                </div>
                                <div class="btn btn-primary">Detail</div>
                            </div>
                        </div>
                    </div>
                </div>
                `
            }

            function getCourses(page) {
                $.ajax({
                    type: "GET",
                    url: "{{ config('app.api_url') }}/api/student/learning-path?page=" + page,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: {
                        search: $('#module-search').val()
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response.meta.code);
                        
                        if (response.meta.code == 204) {
                            Swal.fire({
                                title: 'Oops!',
                                text: response.meta.message,
                                icon: 'warning',
                                confirmButtonText: 'Oke'
                            });
                            $('#class-content').html(
                                `<div class="d-flex align-items-center h-100">` +
                                `<h1 class="fs-4 text-center w-100">${response.meta.message}</h1>` +
                                `</div>`
                            )
                            return;
                        }

                        $('#course-list').empty();
                        $.each(response.data.data, function(index, value) {
                            const class_level = value.class_level
                            $.each(value.course_learning_paths, function(indexInArray,
                                valueOfElement) {
                                $('#course-list').append(courseList(indexInArray,
                                    valueOfElement, class_level));
                            });
                        });
                    }
                });
            }

            getCourses(1)
        });
    </script>
@endpush
