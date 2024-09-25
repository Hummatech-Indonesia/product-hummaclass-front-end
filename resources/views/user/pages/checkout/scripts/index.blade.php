@push('script')
    <script>
        $(document).ready(async function() {

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

                // console.log($("#voucher-form"));
                fetchCourseVouchers();
                // console.log('sdfsdfsdfsdf');

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
                        pricingData.fee_service = $(this).data('fee');
                        checkoutData.payment_method = $(this).data('code');
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
                        console.log(response);
                    }, 
                    error: function(xhr, status, error) {
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
