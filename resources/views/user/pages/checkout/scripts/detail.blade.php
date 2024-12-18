@push('script')
    <script>
        $(document).ready(function() {
            let transactionData = {
                'course': {},
                'event': {},
                'tripay': '',
                'transaction': '',
            };

            function displayData() {
                @if (request()->route()->getName() == 'checkout.course.show')
                    let discount = transactionData.transaction.voucher == null ?
                        transactionData.tripay.amount :
                        transactionData.tripay.amount -
                        (transactionData.tripay.amount *
                            (transactionData.transaction.voucher.discount / 100));

                    $('#title').text(transactionData.course.title);
                    $('.discount').text(formatRupiah(transactionData.tripay.amount));
                    $('.discount_amount').text(formatRupiah(
                        transactionData.transaction.voucher == null ? 0 :
                        transactionData.tripay.amount *
                        (transactionData.transaction.voucher.discount / 100)
                    ));
                    $('#amount').text(formatRupiah(discount));
                    $('.course_photo').attr('src', transactionData.transaction.product.photo);
                @else
                    $('.course_photo').attr('src', transactionData.transaction.product.photo);
                    $('#amount').text(formatRupiah(transactionData.tripay.amount));
                    $('#title').text(transactionData.transaction.product.title);
                @endif
                $('#total_amount').text(formatRupiah(transactionData.tripay.amount + transactionData.tripay
                    .total_fee));
                $('#transaction_code').text(transactionData.tripay.pay_code ? transactionData.tripay.reference :
                    "-");
                $('#payment_method').text(transactionData.tripay.payment_method);
                $('#checkout_date').text(formatTanggal(transactionData.transaction.created_at));
                $('#expired_date').text(formatTanggal(transactionData.transaction.expiry_date));
                $('#pay_code').text(transactionData.tripay.pay_code);
                $('#paid_date').text(formatTanggal(transactionData.tripay.paid_at));
            }

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
                                $('#payment-status').prepend(
                                    `<div class="card mb-3" id="success-card">
                                        <div class="card-body rounded-4">
                                            <h5>Status Pembayaran</h5>
                                            <img class="d-block m-auto" src="{{ asset('assets/img/checkout/success.png') }}" alt="">
                                            <h5 class="text-center">Pembayaran Berhasil</h5>
                                            <p class="text-purple text-center">Terimakasih telah melakukan pembelian</p>
                                        </div>
                                    </div>`
                                )
                                $('#status').remove();
                            } else {
                                $('#checkout-date-row').remove();
                                $('#paid-date-row').remove();
                                $('#save-invoice-btn').remove();
                                if (!transactionData.tripay.pay_code) {
                                    $('.pay-code-row').remove();
                                }
                                $('#status').after(
                                    `<div class="card mb-3" id="intruction-list">
                                        <div class="card-body rounded-4">
                                            <h5>Intruksi Pembayaran</h5>
                                            <img src="" alt="">
                                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                            </div>
                                        </div>
                                    </div>`
                                )

                                transactionData.tripay.instructions.forEach((instruction,
                                    index) => {

                                    $('#accordionFlushExample').append(
                                        ` <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapse-${index}" aria-expanded="false"
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
                                            let title = instruction.title
                                                .toLowerCase().replace(/ /g,
                                                    "_");
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
                        }
                    });
                },
                error: function(response) {
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
                    }
                });
            });
        });
    </script>
@endpush
