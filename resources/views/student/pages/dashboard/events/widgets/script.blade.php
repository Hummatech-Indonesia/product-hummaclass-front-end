<script>
    const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
        "October", "November", "December"
    ];

    let currentMonth = new Date().getMonth();
    let currentYear = new Date().getFullYear();

    let events = {}; // Awalnya kosong, akan diisi dengan data dari API

    get(); // Panggil fungsi get untuk mengambil data

    function get() {
        $.ajax({
            type: "GET",
            url: "{{ config('app.api_url') }}/api/student/zooms",
            headers: {
                'Authorization': `Bearer {{ session('hummaclass-token') }}`
            },
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(response) {
                response.data.forEach(event => {
                    const dateKey = new Date(event.date).toLocaleDateString(
                        'en-CA');
                    const formattedDateKey = dateKey.split('-').reverse().join(
                        '-');

                    if (!events[formattedDateKey]) {
                        events[formattedDateKey] = [];
                    }

                    events[formattedDateKey].push({
                        title: event.title,
                        link: event.link,
                        time: event.date,
                        school: event.school.name
                    });
                });
                updateCalendar();
            },
            error: function(response) {
                Swal.fire({
                    title: "Terjadi Kesalahan!",
                    text: "Ada kesalahan saat menyimpan data.",
                    icon: "error"
                });
            }
        });
    }

    const calendarGrid = document.getElementById('calendarGrid');
    const eventList = document.getElementById('eventList');
    const monthSelect = document.getElementById('monthSelect');
    const yearSelect = document.getElementById('yearSelect');
    let selectedDate = null;

    monthNames.forEach((month, index) => {
        const option = document.createElement('option');
        option.value = index;
        option.textContent = month;
        if (index === currentMonth) option.selected = true;
        monthSelect.appendChild(option);
    });

    for (let year = 2020; year <= 2030; year++) {
        const option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        if (year === currentYear) option.selected = true;
        yearSelect.appendChild(option);
    }

    function updateCalendar() {
        calendarGrid.innerHTML = '';
        const firstDay = new Date(currentYear, currentMonth, 1).getDay();
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement('div');
            calendarGrid.appendChild(emptyCell);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dayKey = `${day}-${currentMonth + 1}-${currentYear}`;
            const dayCell = document.createElement('div');
            dayCell.classList.add('calendar-day');
            dayCell.innerHTML = `<h4>${day}</h4>`;

            const formattedDateKey =
                `${String(day).padStart(2, '0')}-${String(currentMonth + 1).padStart(2, '0')}-${currentYear}`;


            if (events[formattedDateKey]) {
                dayCell.innerHTML +=
                    `<span class="text-start selectable" style="font-size: 13px;font-weight: bold;margin-top: 20px;color: #9425FE;">| ${events[formattedDateKey].length} Acara</span>`;
            }

            dayCell.addEventListener('click', () => handleDateClick(dayCell, formattedDateKey));
            calendarGrid.appendChild(dayCell);
        }
    }

    function handleDateClick(dayCell, dayKey) {
        const allDays = document.querySelectorAll('.calendar-day');
        allDays.forEach(day => day.classList.remove('selected'));

        dayCell.classList.add('selected');
        selectedDate = dayKey;

        showEventList(dayKey);
    }

    function showEventList(dayKey) {
        eventList.innerHTML = '';
        if (events[dayKey]) {
            const dayEvents = events[dayKey];
            const eventsPerPage = 4;
            const totalPages = Math.ceil(dayEvents.length / eventsPerPage);
            let currentPage = 1;

            const renderEvents = () => {
                eventList.innerHTML = '';
                const start = (currentPage - 1) * eventsPerPage;
                const end = start + eventsPerPage;

                dayEvents.slice(start, end).forEach(event => {
                    const eventItem = document.createElement('li');
                    eventItem.classList.add('list-group-item');

                    // Batasi deskripsi
                    console.log(event);

                    const truncatedLink = event.link.length > 20 ? event.link.substring(0, 20) + '...' :
                        event.link;
                    eventItem.innerHTML = `
                            <a target="blank" href="${event.link}">
                                <h6>${event.title}</h6>
                                <small>${truncatedLink}</small>
                                <div class=d-flex align-items-center gap-2" style="color: grey">
                                    <svg class="text-danger" xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-event"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M16 3l0 4" /><path d="M8 3l0 4" /><path d="M4 11l16 0" /><path d="M8 15h2v2h-2z" /></svg>
                                    <span class="ms-2">${dayKey}</span>
                                </div>
                                <div class=d-flex align-items-center gap-2 text-muted" style="color: grey">
                                        <svg class="text-purple" xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-building-bank"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 21l18 0" /><path d="M3 10l18 0" /><path d="M5 6l7 -3l7 3" /><path d="M4 10l0 11" /><path d="M20 10l0 11" /><path d="M8 14l0 3" /><path d="M12 14l0 3" /><path d="M16 14l0 3" /></svg>
                                        <span class="ms-2">${event.school}</span>
                                </div>
                            </a>
                        `;
                    eventList.appendChild(eventItem);
                });

                const pagination = document.createElement('nav');
                pagination.classList.add('pagination');

                for (let i = 1; i <= totalPages; i++) {
                    const pageButton = document.createElement('button');
                    pageButton.classList.add('btn', 'btn-sm', 'btn-outline-primary', 'mx-1', 'btn-circle');
                    pageButton.textContent = i;
                    pageButton.addEventListener('click', () => {
                        currentPage = i;
                        renderEvents();
                    });
                    pagination.appendChild(pageButton);
                }
                eventList.appendChild(pagination);
            };


            renderEvents();
        } else {
            eventList.innerHTML = '<li class="list-group-item">Tidak Ada Event Pada Tanggal Ini.</li>';
        }
    }

    monthSelect.addEventListener('change', () => {
        currentMonth = parseInt(monthSelect.value);
        updateCalendar();
    });

    yearSelect.addEventListener('change', () => {
        currentYear = parseInt(yearSelect.value);
        updateCalendar();
    });

    updateCalendar(); // Panggil fungsi untuk pertama kali
</script>
