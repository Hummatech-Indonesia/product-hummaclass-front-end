<!DOCTYPE html>
<html lang="en">
{{-- @dd($data) --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logo img {
            width: 50px;
        }

        .text-end {
            text-align: right;
        }

        tr,
        td {
            padding-top: 30px;
        }
    </style>
</head>

<body>
    <div class="receipt-container">

        <table style="width: 90%; margin: 30px auto;">
            <tr class="header">
                <td class="logo">
                    <img src="{{ public_path('assets/img/logo/logo-class-industri.png') }}" alt="Logo">
                </td>
                <td class="transaction-code text-end">
                    <p>Kode Transaksi</p>
                    <p class="code">{{ $ref }}</p>
                </td>
            </tr>
            <tr>
                <td class="total-payment">
                    <p>Total Pembayaran</p>
                    <h5>Rp {{ number_format($data->amount + $data->fee_amount, 0, ',', '.') }}</h5>
                </td>
                <td class="payment-method text-end">
                    <p>Metode Pembayaran</p>
                    <p>{{ $data->payment_method }}</p>
                    {{-- <small style="font-size: 8px; color: red;">*3 digit belakang nomer/nama akun gopay</small> --}}
                </td>
            </tr>
            <tr>
                <td class="order-created">
                    <p>Pesanan Dibuat</p>
                    <p>{{ Carbon\Carbon::parse($data->created_at)->isoFormat('DD MMMM Y, HH:mm') }}</p>
                </td>
                <td class="order-paid text-end">
                    <p>Pesanan Dibayar</p>
                    <p></p>
                </td>

            </tr>

            <tr>
                <td colspan="2" style="padding-top: 20px;">
                    <h4>Rincian Pesanan</h4>
                </td>
            </tr>
            <tr>
                <td class="order-details">
                    <p style="color: #4b4b4b; font-size: 12px;"><strong>({{ $data->product['subcategory']['name']??'' }})</strong> <small style="color: #727272;">By David Millar</small></p>
                    <p>{{ $data->product['title'] }}</p>
                </td>
                <td class="text-end">
                    <p class="price">Rp {{ number_format($data->product['price'], 0, ',', '.') }}</p>
                </td>
            </tr>

            {{-- <div class="subtotal-section"> --}}
            <tr class="">
                <td>
                    <p>Subtotal untuk Produk</p>
                </td>
                <td class="text-end" style="text-align: end;">
                    <p>Rp {{ number_format($data->fee_amount + $data->product['price'], 0, ',', '.') }}</p>
                </td>
            </tr>
            <tr class="">
                <td>
                    <p>Biaya Layanan</p>
                </td>
                <td class="text-end" style="text-align: end;">
                    <p>Rp {{ number_format($data->fee_amount, 0, '.', '.') }}</p>
                </td>
            </tr>
            @if ($data->course_voucher)
                <tr class="voucher">
                    <td>
                        <p>Voucher <span>(opsional)</span></p>
                    </td>
                    <td class="text-end" style="text-align: end;">
                        <p>-Rp {{ $data->course_voucher['discount'] }}</p>
                    </td>
                </tr>
            @endif
            {{-- </div> --}}

            <tr class="final-total">
                <td style="text-align: start;">
                    <p>Total Pembayaran</p>
                </td>
                <td class="text-end">
                    <h5>Rp {{ number_format($data->fee_amount + $data->amount, 0, ',', '.') }}</h5>
                </td>
            </tr>
        </table>

    </div>
</body>

</html>
