<script>
    
    $(document).ready(function () {

        const now = new Date();
        const day = now.getDate();
        const month = now.getMonth();
        const monthNames = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
        const monthName = monthNames[month];
        const year = now.getFullYear();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');

        const date = `${day} ${monthName} ${year} - ${hours}:${minutes}`;

        function listSubmits(value) {
        
            let html = '';            

            if (date < value.end_date) {
                if (value.image_active === 1) {
                    html += `
                        <div class="col-12 col-lg-2 d-flex align-items-center">
                            <h5 class="fw-normal mb-3">Gambar Tugas :</h5>
                        </div>
                        <div class="col-12 col-lg-10">
                            <input type="file" name="image" class="border w-100 p-2 rounded-3">
                        </div>
                    `;
                }

                if (value.file_active === 1) {
                    html += `
                        <div class="col-12 col-lg-2 d-flex align-items-center">
                            <h5 class="fw-normal mb-3">File Tugas :</h5>
                        </div>
                        <div class="col-12 col-lg-10">
                            <input type="file" name="file" class="border w-100 p-2 rounded-3">
                        </div>
                    `;
                }
    
                if (value.link_active === 1) {
                    html += `
                        <div class="col-12 col-lg-2 d-flex align-items-center">
                            <h5 class="fw-normal mb-3">Link Tugas :</h5>
                        </div>
                        <div class="col-12 col-lg-10">
                            <input type="text" name="link" class="border w-100 p-2 rounded-3">
                        </div>
                    `;
                }
            }
            
            return html;
        }

        function buttonSubmit(value) {
            let html = '';            

            if (date < value.end_date) {
                html += `
                    <button class="btn btn-primary btn-submit px-5" type="submit">Kirim</button>
                `;
            }
            
            return html;
        }

        function buttonDownlaod(value) {
            let html = '';            

            if (value.status == 'Sudah Dikerjakan') {
                html += `
                    <a class="btn btn-primary" type="button" href="{{ config('app.api_url') }}/api/challenge/download-zip/${value.id}">Download</a>
                `;
            }
            return html;
        }

        function submitChallenge(id)
        {   
            $('#submit-challenge').submit(function (e) { 
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "{{ config('app.api_url') }}/api/challenge-submits/" + id,
                    data: new FormData(this),
                    dataType: "json",
                    headers: {
                        Authorization: "Bearer {{ session('hummaclass-token') }}"
                    },
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        Swal.fire({
                            title: "Sukses!",
                            text: "Berhasil menambahkan data.",
                            icon: "success"
                        }).then(() => {
                            window.location.href = '/dashboard/students/challenge';
                        });
                    },
                    error: function(response) {
                        if (response.status === 422) {
                            let errors = response.responseJSON.data;
    
                            $.each(errors, function(field, messages) {
    
                                $(`[name="${field}"]`).addClass('is-invalid');
    
                                $(`[name="${field}"]`).closest('.form-group').find(
                                    '.invalid-feedback').text(messages[0]);
                            });
                        } else {
                            Swal.fire({
                                title: "Terjadi Kesalahan!",
                                text: "Ada kesalahan saat menyimpan data.",
                                icon: "error"
                            });
                        }
                    }
                });
            });
        }

        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/student/detail-challenge/{{$slug}}",
            headers: {
                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}",
            },
            dataType: "json",
            success: function (response) {
                $('#title-challenge').text('Detail Tantangan - ' + (response.data.title.length > 23 ? response.data.title.substring(0, 23) + '...' : response.data.title));
                $('#list-submits').append(listSubmits(response.data));
                $('#button-submits').append(buttonSubmit(response.data));
                $('#button-download').append(buttonDownlaod(response.data));
                const challengeId = response.data.id;
                submitChallenge(challengeId);
            }
        });
    });

</script>