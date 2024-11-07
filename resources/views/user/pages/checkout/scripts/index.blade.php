@push('script')
    <script>
        $(document).ready(async function() {
            let course;
            let event;
            let voucherChecked = false; // Flag untuk memastikan apakah voucher sudah dicek
            const pricingData = {
                'course_price': 0,
                'fee_service': 0,
                'discount': 0,
                'total_price': 0,
            };
            const checkoutData = {
                'voucher_code': '',
                'payment_method': '',
            }

            $("#voucher-form").submit(function(e) {
                e.preventDefault();
                fetchCourseVouchers();
            });

            function updatePricing() {
                $('#order_amount').text(formatRupiah(pricingData.course_price));
                $('#fee_service').text(formatRupiah(pricingData.fee_service));
                $('#total_amount').text(formatRupiah(pricingData.course_price - (pricingData.course_price * (
                        pricingData.discount / 100)) +
                    pricingData.fee_service));

                if (pricingData.discount > 0) {
                    if ($('#discount_row').length == 0) {
                        $('#course_price_row').after(`
                        <div class="d-flex justify-content-between" id="discount_row">
                            <p>Diskon Voucher</p>
                            <p><span id="voucher_discount">${formatRupiah(pricingData.course_price * (pricingData.discount / 100))}</span></p>
                        </div>
                    `);

                        $('.total_amount_row').after(`
                        <div class="d-flex justify-content-end fw-bold">
                            <p class="fw-bold" style="color: #9425fe">Hemat <span>${formatRupiah(pricingData.course_price * (pricingData.discount / 100))}</span></p>
                        </div>
                    `);
                    } else {
                        $('#voucher_discount').text(formatRupiah(pricingData.course_price * (pricingData
                            .discount / 100)));
                    }
                }
            }

            // Wrapper function for $.ajax using Promise to support async/await
            function ajaxRequest(url, method = 'get', headers = {}, data = {}) {
                return new Promise((resolve, reject) => {
                    $.ajax({
                        type: method,
                        url: url,
                        data: data,
                        headers: headers,
                        dataType: "json",
                        success: function(response) {
                            resolve(response);
                        },
                        error: function(xhr, status, error) {
                            reject(error);
                        }
                    });
                });
            }

            @if (request()->route()->getName() == 'checkout.course')
                // Fetch course detail
                async function fetchCourseDetail() {
                    try {
                        const response = await ajaxRequest(
                            "{{ config('app.api_url') }}/api/courses/{{ $slug }}", 'get', {
                                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                            });

                        course = response.data;

                        pricingData.course_price = course.promotional_price ?? course.price;
                        checkoutData.course_price = course.promotional_price ?? course.price;
                        updatePricing();

                        $('.price').text(formatRupiah(course.promotional_price ?? course.price));
                        $('.title').text(course.title);
                        $('.course_photo').attr('src', course.photo);
                        $('.category').text(course.category.name);
                        $('#description').html(course.description);
                    } catch (error) {
                        console.error('Error fetching course details:', error);
                    }
                }
            @endif

            @if (request()->route()->getName() == 'checkout.event')
                // Fetch events detail
                async function fetchEventDetail() {
                    try {
                        const response = await ajaxRequest(
                            "{{ config('app.api_url') }}/api/events/{{ $slug }}", 'get', {
                                Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                            });

                        console.log(response);

                        event = response.data;

                        pricingData.course_price = event.price;
                        checkoutData.course_price = event.id;
                        updatePricing();

                        $('.price').text(formatRupiah(event.price));
                        $('.title').text(event.title);
                        $('.course_photo').attr('src', event.image);
                        // $('.category').text(event.category.name);
                        $('#description').html(event.description);

                    } catch (error) {
                        console.error('Error fetching course details:', error);
                    }
                }
            @endif

            // Fetch payment channels
            async function fetchPaymentChannels() {
                try {
                    const response = await ajaxRequest("{{ config('app.api_url') }}/api/payment-channels");

                    let eWalletChilds = '';
                    let vAccountChilds = '';

                    // Append list channel
                    response.data.virtual_account.forEach((channel, index) => {
                        vAccountChilds += eWalletChild(channel);
                    });
                    response.data.e_wallet.forEach(channel => {
                        eWalletChilds += eWalletChild(channel);
                    });

                    $('#e_wallet').append(eWalletChilds);
                    $('#virtual_account').append(vAccountChilds);

                    // After appending all channels, trigger change on the first virtual account
                    // $('#virtual_account input[type="radio"]:first').prop('checked', true).trigger(
                    //     'change');

                    // Event listener for payment method change
                    $('.payment-method').change(function() {
                        console.log(this);

                        checkoutData.payment_method = $(this).data('code');
                        pricingData.fee_service = $(this).data('fee');
                        $('.payment-option').removeClass('active-payment');

                        // Add the active class to the selected payment option
                        if ($(this).is(':checked')) {
                            $(this).closest('.payment-option').addClass('active-payment');
                        }
                        updatePricing();
                    });

                } catch (error) {
                    console.error('Error fetching payment channels:', error);
                }
            }


            // Fetch course vouchers
            function fetchCourseVouchers() {
                $.ajax({
                    type: "get",
                    url: `{{ config('app.api_url') }}/api/course-vouchers/${course.id}/check`,
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    data: {
                        'voucher_code': $('#voucher').val()
                    },
                    dataType: "json",
                    success: function(response) {
                        pricingData.discount = response.data.discount;
                        checkoutData.voucher_code = response.data.code;
                        voucherChecked = true; // Voucher sudah dicek
                        updatePricing();
                    },
                    error: function(err) {
                        Swal.fire({
                            icon: 'error',
                            title: err.responseJSON.meta.message,
                        });
                        voucherChecked = false; // Voucher gagal dicek
                    }
                });
            }

            // Handle checkout button click
            $('#checkout-btn').click(function(e) {
                e.preventDefault();

                // Cek apakah voucher sudah dicek
                if (!voucherChecked && $('#voucher').val().trim() !== '') {
                    // Jika belum dicek dan ada kode voucher, cek voucher terlebih dahulu
                    fetchCourseVouchers();
                    setTimeout(() => {
                        if (voucherChecked) {
                            submitCheckout();
                        }
                    }, 500);
                } else {
                    // Jika voucher sudah dicek atau tidak ada voucher, langsung submit
                    submitCheckout();
                }
            });

            // Function to submit checkout
            function submitCheckout() {
                let url;
                @if (request()->route()->getName() == 'checkout.course')
                    url = `{{ config('app.api_url') }}/api/transaction-create/course/${course.id}`;
                @endif
                @if (request()->route()->getName() == 'checkout.event')
                    url = `{{ config('app.api_url') }}/api/transaction-create/event/${event.id}`;
                @endif
                if (checkoutData.payment_method == '') {
                    return Swal.fire({
                        icon: 'error',
                        title: 'Silahkan pilih metode pembayaran terlebih dahulu',
                    });
                }


                // console.log(url, );

                $.ajax({
                    type: "get",
                    url: url,
                    data: checkoutData,
                    dataType: "json",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    success: function(response) {
                        console.log(response);

                        let transactionId = response.data.transaction.reference;

                        let url;
                        @if (request()->route()->getName() == 'checkout.course')
                            url = "{{ route('checkout.course.show', ':reference') }}".replace(
                                ':reference',
                                transactionId);
                        @endif
                        @if (request()->route()->getName() == 'checkout.event')
                            url = "{{ route('checkout.event.show', ':reference') }}".replace(
                                ':reference',
                                transactionId);
                        @endif
                        window.location.href = url;
                    },
                    error: function(xhr, status, error) {
                        alert('Error creating transaction:', error);
                        console.error('Error creating transaction:', error);
                    }
                });
            }

            function eWalletChild(data, checked = '') {
                return `
            <label class="payment-option">
                <input type="radio" class="payment-method" name="payment_method" data-code="${data.code}" id="${data.code}" data-fee="${data.fee_merchant.flat}" value="${data.code}" ${checked}>
                <div class="option-content">
                    <img src="${data.icon_url}" alt="Gopay logo" style="width: 100%;">
                </div>
            </label>`
            }

            // Call the async functions
            @if (request()->route()->getName() == 'checkout.course')
                await fetchCourseDetail();
            @endif
            @if (request()->route()->getName() == 'checkout.event')
                await fetchEventDetail();
            @endif
            await fetchPaymentChannels();

        });
    </script>
@endpush
