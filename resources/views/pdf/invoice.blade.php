<!DOCTYPE html>
<html lang="en">

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

        .receipt-container {
            background-color: #fff;
            width: 400px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 50px;
            height: 50px;
        }

        .transaction-code {
            text-align: right;
        }

        .transaction-code .code {
            color: #ff1493;
            font-weight: bold;
            font-size: 20px;
        }

        .payment-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .total-payment h1 {
            color: #000;
        }

        .payment-method .note {
            font-size: 10px;
            color: #a9a9a9;
        }

        .order-time {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .order-details {
            margin-bottom: 20px;
        }

        .order-details h2 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .item {
            display: flex;
            justify-content: space-between;
        }

        .item .price {
            font-weight: bold;
        }

        .subtotal-section {
            margin-bottom: 20px;
        }

        .subtotal-row {
            display: flex;
            justify-content: space-between;
        }

        .voucher {
            color: red;
        }

        .final-total {
            text-align: right;
        }

        .final-total h2 {
            font-size: 24px;
            color: #000;
        }
    </style>
</head>

<body>
    <div class="receipt-container">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('assets/img/logo/logo-class-industri.png') }}" alt="Logo">
            </div>
            <div class="transaction-code">
                <p>Kode Transaksi</p>
                <p class="code">02446</p>
            </div>
        </div>

        <div class="payment-info">
            <div class="total-payment">
                <p>Total Pembayaran</p>
                <h1>Rp1.530.000</h1>
            </div>
            <div class="payment-method">
                <p>Metode Pembayaran</p>
                <p>Gopay (**087)</p>
                <p class="note">*3 digit belakang nomer/nama akun gopay</p>
            </div>
        </div>

        <div class="order-time">
            <div class="order-created">
                <p>Pesanan Dibuat</p>
                <p>26 Oktober 2023, 13:30</p>
            </div>
            <div class="order-paid">
                <p>Pesanan Dibayar</p>
                <p>26 Oktober 2023, 16:30</p>
            </div>
        </div>

        <div class="order-details">
            <h2>Rincian Pesanan</h2>
            <div class="item">
                <p><strong>(Development)</strong> By David Millar</p>
                <p class="price">Rp850.000</p>
            </div>
        </div>

        <div class="subtotal-section">
            <div class="subtotal-row">
                <p>Subtotal untuk Produk</p>
                <p>Rp1.550.000</p>
            </div>
            <div class="subtotal-row">
                <p>Biaya Layanan</p>
                <p>Rp10.000</p>
            </div>
            <div class="subtotal-row voucher">
                <p>Voucher <span>(opsional)</span></p>
                <p>-Rp30.000</p>
            </div>
        </div>

        <div class="final-total">
            <p>Total Pembayaran</p>
            <h2>Rp1.530.000</h2>
        </div>
    </div>
</body>

</html>
