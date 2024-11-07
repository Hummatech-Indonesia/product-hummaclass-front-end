<div class="card" style="border-radius: 15px">
    <div class="card-header p-0">
        <img id="detail-photo" src="{{ asset('assets/img/courses/course_thumb01.jpg') }}"
            style="border-radius: 15px 15px 0 0;height:300px;object-fit: cover" class="w-100" alt="">
    </div>

    <div class="card-body">
        <span class="mb-1 badge rounded-pill font-medium text-white px-4" id="sub-category"
            style="background-color: var(--purple-primary)">Seminar</span>
        <h4 class="fw-semibold text-dark fs-8 mt-2" id="detail-title"></h4>
        <div class="d-flex gap-2 mt-3">
            <p class="d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2.0"
                        d="M4 8h16M4 8v8.8c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h9.606c1.118 0 1.677 0 2.104-.218c.377-.192.683-.498.875-.874c.218-.428.218-.986.218-2.104V8M4 8v-.8c0-1.12 0-1.68.218-2.108c.192-.377.497-.682.874-.874C5.52 4 6.08 4 7.2 4H8m12 4v-.803c0-1.118 0-1.678-.218-2.105a2 2 0 0 0-.875-.874C18.48 4 17.92 4 16.8 4H16m0-2v2m0 0H8m0-2v2" />
                </svg>
                <span id="detail-start-date"></span>
            </p>
            <p class="d-flex align-items-center gap-2" id="location">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 21 21">
                    <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" transform="translate(4 2)">
                        <path
                            d="m6.5 16.54l.631-.711Q8.205 14.6 9.064 13.49l.473-.624Q12.5 8.875 12.5 6.533C12.5 3.201 9.814.5 6.5.5s-6 2.701-6 6.033q0 2.342 2.963 6.334l.473.624a55 55 0 0 0 2.564 3.05" />
                        <circle cx="6.5" cy="6.5" r="2.5" />
                    </g>
                </svg>
                <span id="detail-location"></span>
            </p>
            <p class="d-flex align-items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
                    <path fill="currentColor"
                        d="m251.76 88.94l-120-64a8 8 0 0 0-7.52 0l-120 64a8 8 0 0 0 0 14.12L32 117.87v48.42a15.9 15.9 0 0 0 4.06 10.65C49.16 191.53 78.51 216 128 216a130 130 0 0 0 48-8.76V240a8 8 0 0 0 16 0v-40.49a115.6 115.6 0 0 0 27.94-22.57a15.9 15.9 0 0 0 4.06-10.65v-48.42l27.76-14.81a8 8 0 0 0 0-14.12M128 200c-43.27 0-68.72-21.14-80-33.71V126.4l76.24 40.66a8 8 0 0 0 7.52 0L176 143.47v46.34c-12.6 5.88-28.48 10.19-48 10.19m80-33.75a97.8 97.8 0 0 1-16 14.25v-45.57l16-8.53Zm-20-47.31l-.22-.13l-56-29.87a8 8 0 0 0-7.52 14.12L171 128l-43 22.93L25 96l103-54.93L231 96Z" />
                </svg>
                <span id="detail-capacity"></span> Peserta
            </p>
        </div>
        <div class="mt-3">
            <p class="fs-4 mb-1" id="price">Harga Masuk</p>
            <h4 class="fs-6 fw-bolder" style="color: var(--purple-primary)" id="detail-price">Rp 230.000</h4>
        </div>
        <hr>
        <p id="detail-description">Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
            maecenas accumsan lacus vel facilisis.dolor sit amet, consectetur adipiscing elited do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.</p>
        <h5 class="text-black fw-semibold fs-5 mt-3">
            Roundown Acara :
        </h5>
        <div class="table-responsive col-10 mt-2">
            <table id="event-detail-tables"
                class="table table-bordered m-t-30 text-center table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-lg"
                data-paging="true" data-paging-size="7" style="">
                <thead>
                    <tr class="footable-header">
                        <th class="text-white py-2" style="display: table-cell;background-color:#9425FE;">Time</th>
                        <th class="text-white py-2" style="display: table-cell;background-color:#9425FE;">Session</th>
                        <th class="text-white py-2" style="display: table-cell;background-color:#9425FE;">Speaker</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
