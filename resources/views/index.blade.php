<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAT DELIVERY</title>
    <link rel="shortcut icon" href="images/—Pngtree—muslim boy pray befor he_6196599.png" type="image/x-icon">
    <link rel="stylesheet" href="assests/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Cat Delivery</h1>
            <button id="login-btn" class="login-btn">Login</button>
        </div>
    </header>
    <main>
        <div class="container">
            <section id="menu">
                <h2></h2>
                <!-- Daftar menu -->
                <div class="menu-item" data-name="Nasi Goreng Original" data-price="20000">
                    <img src="assests/images/nasi goreng original.jpg" alt="Nasi Goreng Original">
                    <h3>Nasi Goreng Original</h3>
                    <p> -Rp 20.000</p>
                    <button class="order-btn">Order Now</button>
                </div>
                <div class="menu-item" data-name="Nasi Goreng Cumi" data-price="25000">
                    <img src="assests/images/nasi goreng. cumi.png" alt="Nasi Goreng Cumi">
                    <h3>Nasi Goreng Cumi</h3>
                    <p>-Rp 25.000</p>
                    <button class="order-btn">Order Now</button>
                </div>
                <div class="menu-item" data-name="Nasi Goreng Udang" data-price="28000">
                    <img src="assests/images/nasi goreng. udang.jpeg" alt="Nasi Goreng Udang">
                    <h3>Nasi Goreng Udang</h3>
                    <p>-Rp 28.000</p>
                    <button class="order-btn">Order Now</button>
                </div>
                <div class="menu-item" data-name="Nasi Goreng Ati Ampela" data-price="22000">
                    <img src="assests/images/nasi-goreng-sambel-ati-ampela-foto-resep-utama.jpg" alt="Nasi Goreng Ati Ampela">
                    <h3>Nasi Goreng Ati Ampela</h3>
                    <p>-Rp 22.000</p>
                    <button class="order-btn">Order Now</button>
                </div>
            </section>
            <section id="cart">
                <div class="cart-header">
                    <img src="images/pngegg.png" alt="Cart Icon" class="cart-icon">
                    <h1>Keranjang</h1>
                </div>
                <ul id="cart-items">
                </ul>
                <p>Total: <span id="total">Rp 0</span></p>
                <button id="checkout-btn">Checkout</button>
            </section>
        </div>
    </main>

    <div class="modal" id="checkout-modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Checkout</h2>
            <form id="checkout-form">
                <label for="address">Alamat Pengiriman:</label><br>
                <!-- Modifikasi input alamat dengan menggunakan input biasa -->
                <input type="text" id="address" name="address" required><br>
                <!-- Tambahkan input "Nomor Anda" -->
                <label for="phone">Nomor Anda:</label><br>
                <input type="tel" id="phone" name="phone" required pattern="[0-9]{10,12}"><br>
                <!-- Tambahkan opsi pembayaran yang lain -->
                <input type="radio" id="cod" name="payment" value="cod" checked>
                <label for="cod">Cash On Delivery (COD)</label><br>
                <input type="radio" id="bank-transfer" name="payment" value="bank-transfer">
                <label for="bank-transfer">Bank Transfer</label><br>
                <input type="submit" value="Pesan Sekarang">
            </form>
        </div>
    </div>
    <div id="notification"></div>
    <script src="script.js"></script>
</body>
</html>
