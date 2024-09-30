@push('script')
    <script>
        $(document).ready(function() {
            let transactionData = {
                'course': {},
                'tripay': '',
                'transaction': '',
            };

            function displayData() {
                let discount = transactionData.transaction.voucher == null ?
                    transactionData.transaction.course.price :
                    transactionData.transaction.course.price -
                    (transactionData.transaction.course.price *
                        (transactionData.transaction.voucher.discount / 100));

                $('#title').text(transactionData.course.title);
                $('.discount').text(formatRupiah(transactionData.transaction.course.price));
                $('.discount_amount').text(formatRupiah(
                    transactionData.transaction.voucher == null ? 0 :
                    transactionData.transaction.course.price *
                    (transactionData.transaction.voucher.discount / 100)
                ));
                $('#amount').text(formatRupiah(discount));
                $('#total_amount').text(formatRupiah(transactionData.tripay.amount + transactionData.tripay
                    .total_fee));
                $('#transaction_code').text(transactionData.tripay.pay_code ? transactionData.tripay.reference :
                    "-");
                $('#payment_method').text(transactionData.tripay.payment_method);
                $('#checkout_date').text(transactionData.transaction.created_at);
                $('#paid_date').text(transactionData.tripay.paid_at);
                $('#expired_date').text(transactionData.transaction.expirate_date);
                $('#pay_code').text(transactionData.tripay.pay_code);
            }

            // Ambil status transaksi pertama kali
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/check-status/{{ $reference }}",
                headers: {
                    Authorization: "Bearer " + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    transactionData.tripay = response.data;

                    // Ambil detail transaksi setelah mendapatkan data dari Tripay
                    $.ajax({
                        type: "get",
                        url: "{{ config('app.api_url') }}/api/transaction/{{ $reference }}/detail",
                        headers: {
                            Authorization: "Bearer " + "{{ session('hummaclass-token') }}"
                        },
                        dataType: "json",
                        success: function(response) {
                            $('#checkout-card').removeClass('d-none');
                            $('#loading-card').remove();
                            transactionData.transaction = response.data;
                            displayData();

                            if (!transactionData.transaction.voucher) {
                                $('.discount').remove();
                            }

                            if (transactionData.transaction.invoice_status ===
                                "{{ App\Enums\InvoiceStatusEnum::PAID->value }}") {
                                $('#expired-date-row').remove();
                                $('.pay-code-row').remove();
                            } else {
                                $('#checkout-date-row').remove();
                                $('#paid-date-row').remove();
                                $('#save-invoice-btn').remove();

                                transactionData.tripay.instructions.forEach((instruction,
                                    index) => {
                                    // console.log(instruction.title, index);

                                    $('#accordionFlushExample').append(
                                        ` <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse-${index}" aria-expanded="true"
                                                aria-controls="flush-collapse-${index}" >
                                            ${instruction.title}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse-${index}" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                                            <div class="accordion-body ${instruction.title.toLowerCase().replace(/ /g, "_")}">
                                            </div>
                                        </div>
                                    </div>`);
                                    instruction.steps
                                        .forEach((step, index) => {
                                            // console.log(instruction.title);
                                            let title = instruction.title.toLowerCase().replace(/ /g, "_");
                                            // console.log($(`.${title}`));
                                            $($(`.${title}`)).append(
                                                `<div class="courses-cat-list">
                                                    <ul class="list-wrap">
                                                        <li>${index+1}. ${step}</li>
                                                    </ul>
                                                </div>`
                                                    )
                                        });
                                });
                            }
                        },
                        error: function(response) {
                            console.log(response);
                        }
                    });
                },
                error: function(response) {
                    console.log(response);
                }
            });

            $('#copy-pay-code').click(function(e) {
                e.preventDefault();
                let copyText = $("#pay_code").text();
                navigator.clipboard.writeText(copyText);

                Swal.fire({
                    title: 'Kode Pembayaran Telah Disalin',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: true
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('Alert closed by timer');
                    }
                });
            });
        });
    </script>
@endpush
