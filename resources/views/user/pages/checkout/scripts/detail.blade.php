@push('script')
    <script>
        $(document).ready(function() {
            let transactionData = {
                'course': {},
                'tripay': '',
                'transaction': '',
            };

            function displayData() {
                // console.log(transactionData.transaction.expiry_date);
                
                let discount = transactionData.transaction.voucher == null ? transactionData
                .transaction.course.price : transactionData
                    .transaction.course.price - transactionData.transaction
                    .course.price * (
                        transactionData.transaction.voucher.discount / 100)

                $('#title').text(transactionData.course.title);
                $('.discount').text(formatRupiah(transactionData.transaction.course.price));
                $('.discount_amount').text(formatRupiah(transactionData.transaction.voucher == null ? 0 : transactionData.transaction
                    .course.price * (
                        transactionData.transaction.voucher.discount / 100)));
                $('#amount').text(formatRupiah(discount));
                $('#total_amount').text(formatRupiah(transactionData.tripay.amount + transactionData.tripay
                    .total_fee));
                if (transactionData.tripay.pay_code) {
                    $('#transaction_code').text(transactionData.tripay.reference);
                } else {
                    $('#transaction_code').text("-");
                }
                $('#payment_method').text(transactionData.tripay.payment_method);
                $('#checkout_date').text(transactionData.transaction.created_at);
                $('#paid_date').text(transactionData.tripay.paid_at);
                $('#expired_date').text(transactionData.tripay.paid_at);
                $('#pay_code').text(transactionData.tripay.pay_code);
            }
            // Pertama, ambil status transaction
            $.ajax({
                type: "get",
                url: "{{ config('app.api_url') }}/api/check-status/{{ $reference }}",
                headers: {
                    Authorization: "Bearer " + "{{ session('hummaclass-token') }}"
                },
                dataType: "json",
                success: function(response) {
                    transactionData.tripay = response.data;

                    // Setelah mendapatkan tripay, kita ambil transaction
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

                            if (transactionData.transaction.invoice_status ==
                                "{{ App\Enums\InvoiceStatusEnum::PAID->value }}") {
                                // console.log(transactionData.transaction.invoice_status);

                                $('#expired-date-row').remove();
                                // $('#checkout-date-row').remove();
                                // $('#paid-date-row').remove();
                                // $('#save-invoice-btn').remove();
                                $('.pay-code-row').remove();
                            } else {
                                // $('#expired-date-row').remove();
                                $('#checkout-date-row').remove();
                                $('#paid-date-row').remove();
                                $('#save-invoice-btn').remove();
                                // $('.pay-code-row').remove();
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

                // Get the text field
                var copyText = $("#pay_code");
                navigator.clipboard.writeText(copyText.text());

                // Alert the copied text
                Swal.fire({
                    title: 'Kode Pembayaran Telah Disalin',
                    icon: 'success',
                    showConfirmButton: false, // Hide the confirm button
                    timer: 1000, // Timeout in milliseconds
                    timerProgressBar: true // Show a progress bar
                }).then((result) => {
                    // Optional: Handle the alert close action
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('Alert closed by timer');
                    }
                });
            });
        });
    </script>
@endpush
