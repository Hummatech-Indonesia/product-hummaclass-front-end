@extends('user.layouts.app')
{{-- <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/main.min.css" rel="stylesheet" /> --}}
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
                                <a href="/">Beranda</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">
                                <a href="events">Event</a>
                            </span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
            <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- event-area -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.css' rel='stylesheet' />
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js'></script>

        <style>
            /* Gaya CSS untuk Kalender */
            @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap');

            .card {
                background-color: #fff;
                padding: 20px;
                width: 100%;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                border: none;
                border-radius: 10px;
            }

            #calendarGrid {
                display: grid;
                grid-template-columns: repeat(7, 0fr);
                gap: 10px;
            }

            .calendar-day {
                padding: 20px;
                border: 3px solid #9425FE;
                border-radius: 15px;
                cursor: pointer;
                background-color: #fff;
                position: relative;
                transition: background-color 0.3s ease;
                width: 100px;
                height: 100px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .calendar-day h5 {
                font-size: 16px;
                color: #9425FE;
                margin-bottom: 10px;
                font-family: "Plus Jakarta Sans", sans-serif;
                font-weight: 700;
            }

            .calendar-day.selected {
                background-color: #d1f0e5;
                border-color: #9425FE;
            }

            .calendar-day:hover {
                background-color: #f3f3f3;
            }

            .event-list {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .event-list li {
                padding: 5px 10px;
                margin-bottom: 5px;
                border-radius: 5px;
                color: white;
            }

            .event-danger {
                background-color: #dc3545;
            }

            .event-success {
                background-color: #28a745;
            }

            .event-primary {
                background-color: #007bff;
            }

            .event-warning {
                background-color: #ffc107;
            }

            #eventList .list-group-item {
                margin-bottom: 15px;
                background-color: #fff;
                border: 1px solid #e9ecef;
                padding: 15px;
                border-radius: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            }

            #eventList .list-group-item h6 {
                margin-bottom: 5px;
            }

            #eventList .list-group-item small {
                color: #6c757d;
            }

            h3 {
                font-weight: bold;
                color: #9425FE;
            }

            .form-select-ym {
                width: 200px;
                height: 45px;
                border-radius: 38px;
                border: 3px solid #9425FE;
                padding: 0 10px;
                text-align: center;
                background-color: white;
                color: #9425FE;
                font-family: "Poppins", serif;
                font-weight: 400;
                font-size: 18px;
            }

            @media (max-width: 768px) {
                #calendarGrid {
                    grid-template-columns: repeat(2, 1fr);
                }

                .calendar-day {
                    width: 80px;
                    height: 80px;
                }
            }
        </style>
    </head>

    <body>
        <section class="event__area-two section-py-120">
            <div class="container">
                <div class="event__inner-wrap">
                    <div class="row" id="events-list-content11">
                        <div class="container mt-5">
                            <div class="text-center mb-4">
                                <h2>Kembangkan Kemampuanmu Di Event Hummaclass</h2>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h3>Kalender</h3>
                                            <div class="d-flex">
                                                <select class="form-select-ym me-2" id="monthSelect"></select>
                                                <select class="form-select-ym me-2" id="yearSelect"></select>
                                            </div>
                                        </div>
                                        <div class="row text-center" id="calendarGrid"></div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card p-3 mb-2">
                                        <h3>Daftar Acara</h3>
                                    </div>
                                    <ul class="list-group list-group-flush" id="eventList"></ul>
                                </div>
                            </div>
                        </div>

                        <!-- Modal untuk tambah event -->
                        <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="eventModalLabel">Tambah Event</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="eventForm">
                                            <div class="mb-3">
                                                <label for="eventTitle" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="eventTitle" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="eventDesc" class="form-label">Description</label>
                                                <textarea class="form-control" id="eventDesc" rows="3" required></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="eventDate" class="form-label">Date</label>
                                                <input type="text" class="form-control" id="eventDate" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="eventTime" class="form-label">Time</label>
                                                <input type="time" class="form-control" id="eventTime" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="eventCategory" class="form-label">Category</label>
                                                <select class="form-select" id="eventCategory" required>
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah Event</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ];

            let currentMonth = new Date().getMonth();
            let currentYear = new Date().getFullYear();
            let events = {
                "1-10-2024": [{
                        title: "Acara 1",
                        desc: "Deskripsi Acara 1",
                        time: "10:00 AM",
                        category: "success"
                    },
                    {
                        title: "Acara 2",
                        desc: "Deskripsi Acara 2",
                        time: "12:00 PM",
                        category: "primary"
                    },
                    {
                        title: "Acara 3",
                        desc: "Deskripsi Acara 3",
                        time: "02:00 PM",
                        category: "warning"
                    },
                    {
                        title: "Acara 4",
                        desc: "Deskripsi Acara 4",
                        time: "04:00 PM",
                        category: "danger"
                    },
                    {
                        title: "Acara 5",
                        desc: "Deskripsi Acara 5",
                        time: "06:00 PM",
                        category: "success"
                    },
                ]
            };

            const calendarGrid = document.getElementById('calendarGrid');
            const eventList = document.getElementById('eventList');
            const monthSelect = document.getElementById('monthSelect');
            const yearSelect = document.getElementById('yearSelect');
            let selectedDate = null; // Tanggal yang dipilih

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
                    dayCell.innerHTML = `<h5>${day}</h5>`;

                    if (events[dayKey]) {
                        dayCell.innerHTML += `<span style="color: #9429FE;">|  ${events[dayKey].length} Acara</span>`;
                    }

                    dayCell.addEventListener('click', () => handleDateClick(dayCell, dayKey));
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
                            eventItem.classList.add('list-group-item', `event-${event.category}`);
                            eventItem.innerHTML =
                                `<h6>${event.title}</h6><small>${event.desc}</small><br><small>${dayKey} at ${event.time}</small>`;
                            eventList.appendChild(eventItem);
                        });

                        const pagination = document.createElement('div');
                        pagination.classList.add('pagination');

                        for (let i = 1; i <= totalPages; i++) {
                            const pageButton = document.createElement('button');
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
                    eventList.innerHTML = '<li class="list-group-item">No events for this date.</li>';
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

            updateCalendar();
        </script>
    </body>

    </html>
@endsection

@section('script')
    @include('user.pages.events.scripts.index')
@endsection
