@push('script')
    <script>
        $(document).ready(async function() {

            const data = {
                "title": "lorem ipsum",
                "description": "lorem ipsum dolor sit amet is simply dummy text for industries",
                "location": "permata regency 1 karangploso malang",
                "capacity": 2,
                "price": 10000,
                "start_date": "2024-09-23",
                "has_certificate": true,
                "is_online": true,
                "user_id": [
                    "e9c93721-dd7b-314c-b6c0-010ac7711821",
                    "e9c93721-dd7b-314c-b6c0-010ac7711821"
                ],
                "start": [
                    "09:00:00",
                    "14:00:00"
                ],
                "end": [
                    "11:00:00",
                    "16:00:00"
                ],
                "session": [
                    "Session 1",
                    "Session 2"
                ]
            }
            let course;
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

                // console.log($('#discount_row').is(':empty'));

                if (pricingData.discount > 0) {
                    if ($('#discount_row').length == 0) {
                        $('#course_price_row').after(`
                        <div class="d-flex justify-content-between" id="discount_row">
                            <p>Diskon Voucher</p>
                            <p><span id="voucher_discount">${formatRupiah(pricingData.course_price * (pricingData.discount / 100))}</span></p>
                            </div>
                            `);
                    } else {
                        $('#voucher_discount').text(formatRupiah(pricingData.discount));
                    }
                }
                // console.log('pricing', pricingData);
                // console.log('checkout', checkoutData);

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

            // Fetch course detail
            async function fetchCourseDetail() {
                try {
                    const response = await ajaxRequest(
                        "{{ config('app.api_url') }}/api/courses/{{ $slug }}", 'get', {
                            Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                        });

                    course = response.data;

                    pricingData.course_price = course.price;
                    checkoutData.course_price = course.id;
                    updatePricing();

                    $('.price').text(formatRupiah(course.price));
                    $('.title').text(course.title);
                    $('.course_photo').text(course.photo);
                    $('.category').text(course.category.name);
                    $('#description').html(course.description);

                } catch (error) {
                    console.error('Error fetching course details:', error);
                }
            }

            // Fetch payment channels
            async function fetchPaymentChannels() {
                try {
                    const response = await ajaxRequest("{{ config('app.api_url') }}/api/payment-channels");

                    let eWalletChilds = '';
                    let vAccountChilds = '';

                    // Append list channel
                    response.data.virtual_account.forEach(channel => {
                        vAccountChilds += eWalletChild(channel);
                    });
                    response.data.e_wallet.forEach(channel => {
                        eWalletChilds += eWalletChild(channel);
                    });

                    $('#e_wallet').append(eWalletChilds);
                    $('#virtual_account').append(vAccountChilds);

                    $('.payment-method').change(function() {
                        checkoutData.payment_method = $(this).data('code');
                        pricingData.fee_service = $(this).data('fee');
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
                        updatePricing();
                    },
                    error: function(err) {
                        console.log(err.status)
                    }
                });
            }

            $('#checkout-btn').click(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "get",
                    url: `{{ config('app.api_url') }}/api/transaction-create/${course.id}`,
                    data: checkoutData,
                    dataType: "json",
                    headers: {
                        Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                    },
                    success: function(response) {
                        let transactionId = response.data.transaction.data.reference;
                        let url = "{{ route('checkout.show', ':reference') }}".replace(':reference', transactionId);
                        
                        window.location.href = url;
                    },
                    error: function(xhr, status, error) {
                        allert('Error creating transaction:', error);
                        console.error('Error creating transaction:', error);
                    }
                });
            });

            function eWalletChild(data) {
                return `<li class="px-3 rounded-4 border d-flex justify-content-between align-items-center">
                    <label for="${data.code}" class="py-3" style="width: 100%;"><img src="${data.icon_url}"/></label>
                    <input class="form-check-input payment-method" id="${data.code}" type="radio" value="${data.code}"
                    name="payment-method" data-fee="${data.fee_merchant.flat}" data-code="${data.code}">
                </li>`;
            }

            // Call the async functions
            await fetchCourseDetail();
            await fetchPaymentChannels();

        });
    </script>
@endpush
