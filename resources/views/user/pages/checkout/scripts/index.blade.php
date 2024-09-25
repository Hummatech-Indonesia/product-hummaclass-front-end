@push('script')
    <script>
        $(document).ready(function() {

            const pricingData = {
                'course_price': 0,
                'fee_service': 0,
                'discount': 0,
                'total_price': 0,
            }

            let course;

            function updatePricing() {
                $('#order_amount').text(formatRupiah(pricingData.course_price));
                $('#fee_service').text(formatRupiah(pricingData.fee_service));
                $('#voucher_discount').text(formatRupiah(pricingData.discount));
                $('#total_amount').text(formatRupiah(pricingData.course_price - pricingData.discount + pricingData
                    .fee_service));

                if (pricingData.discount > 0) {
                    $('#course_price_row').after(`
                        <div class="d-flex justify-content-between">
                            <p>Diskon Voucher</p>
                            <p><span id="voucher_discount">0</span></p>
                        </div>
                    `)
                }
            }
            // fetch course detail
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/courses/{{ $slug }}",
                dataType: "json",
                headers: {
                    Authorization: 'Bearer ' + "{{ session('hummaclass-token') }}"
                },
                success: function(response) {
                    course = response.data;
                    

                    pricingData.course_price = course.price;
                    updatePricing();
                    $('.price').text(formatRupiah(course.price));
                    $('.title').text(course.title);
                    $('.course_photo').text(course.photo);
                    $('.category').text(course.category.name);
                    $('#description').html(course.description);
                }
            });

            const eWallet = $('#e_wallet');
            const vAccount = $('#virtual_account');
            const paymentData = {
                'payment_method': '',
                'voucher': '',
            };

            // fetch payment channels
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/payment-channels",
                dataType: "json",
                success: function(response) {
                    let eWalletChilds = '';
                    let vAccountChilds = '';

                    // append list channel
                    response.data.virtual_account.forEach(channel => {
                        eWalletChilds += eWalletChild(channel);
                    });
                    response.data.e_wallet.forEach(channel => {
                        vAccountChilds += eWalletChild(channel);
                    });

                    eWallet.append(eWalletChilds);
                    vAccount.append(vAccountChilds);

                    $('.payment-method').change(function() {
                        paymentData.payment_method = $(this).val();
                        pricingData.fee_service = $(this).data('fee');
                        updatePricing();
                    });
                }
            });

            function eWalletChild(data) {
                return `<li class="px-3 rounded-4 border d-flex justify-content-between align-items-center">
                    <label for="${data.code}" class="py-3" style="width: 100%;"><img src="${data.icon_url}"/></label>
                    <input class="form-check-input payment-method" id="${data.code}" type="radio" value="${data.code}"
                    name="payment-method" data-fee="${data.fee_merchant.flat}">
                    </li>`;
            }
        });
    </script>
@endpush
