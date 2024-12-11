<script>

    $(document).ready(function () {

        let debounceTimer;

        $('#search').keyup(function (e) { 
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(function() {
                fetchDataChallenge(1);
            }, 500);
        });

        function challengeList(index, value)
        {
            return `
                <div class="col-12 col-lg-4 mb-3">
                    <div class="card border-0 rounded-4 p-2 shadow">
                        <div class="card-body">
                            <span class="bg-light-primary p-1 px-2 rounded-3 text-primary mb-3"
                                style="display: inline-block; font-size: 14px">Batas:
                                ${value.end_date}</span>

                            <div class="d-flex align-items-center mb-3">
                                <div class="d-flex align-items-center justify-content-center rounded-circle p-1 border border-3"
                                    style="width: 35px; height: 35px; border-color: rgb(216, 216, 216) !important;">
                                    <span class="text-center" style="width: fit-content;">S</span>
                                </div>
                                <h6 class="ms-3 mb-0">
                                    ${value.title.length > 23 ? value.title.substring(0, 23) + '...' : value.title}
                                </h6>
                            </div>
                            <p>
                                ${value.description.length > 100 ? value.description.substring(0, 100) + '...' : value.description}
                            </p>

                            <div class="d-flex align-items-center mb-3">
                                <p class="mb-0 me-2">Kesulitan:</p>
                                <span class="bg-light-danger text-danger px-4 py- rounded-3 ">Sulit</span>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <p class="mb-0 me-2">Status:</p>
                                <span class="${value.color} px-4 py- rounded-3 ">${value.status}</span>
                            </div>

                            <a href="{{ route('dashboard.students.challenge.detail', '') }}/${value.slug}" class="btn w-100 rounded-3 shadow-none fw-normal" type="button" style="padding: 10px; font-size: 17px">Selengkapnya</a>
                        </div>

                    </div>
                </div>
            `    
        }

        function fetchDataChallenge(page){
            $.ajax({
                type: "GET",
                url: "{{ config('app.api_url') }}/api/student/challenge?page=" + page,
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
                },
                data: {
                    search: $('#search').val(),
                },
                dataType: "json",
                success: function (response) {
                    $('#challenge-student-list').empty();
                    $.each(response.data.data, function(index, value) {
                        $('#challenge-student-list').append(challengeList(index, value));
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        title: "Terjadi Kesalahan!",
                        text: xhr.responseJSON.meta.message,
                        icon: "error"
                    });
                }
            });
        }

        fetchDataChallenge(1);
    });
</script>