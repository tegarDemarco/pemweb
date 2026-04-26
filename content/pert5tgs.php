<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MyLaptop</title>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    background-color: #f5f6f7;
}

/* navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #2f4359;
    padding: 12px 25px;
    color: white;
}

.logo {
    font-size: 22px;
    font-weight: bold;
}
/* banner */
.banner {
    text-align: center;
    padding: 80px 20px;
    background-color: #e9ecef;
}

.banner h1 {
    font-size: 36px;
    color: #2f4359;
}

.banner p {
    color: #555;
    margin-top: 10px;
    font-size: 18px;
}

.buttons {
    margin-top: 25px;
}

.btn-primary {
    background-color: #2f4359;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    margin-right: 10px;
    cursor: pointer;
}

.btn-outline {
    padding: 12px 20px;
    border: 1px solid #2f4359;
    border-radius: 6px;
    background: transparent;
    color: #2f4359;
    cursor: pointer;
}

/* data&info */
.data {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    text-align: center;
    background: #fff;
    border-top: 1px solid #ddd;
}

.info {
    padding: 30px 10px;
    border-right: 1px solid #ddd;
}

.info:last-of-type {
    border-right: none;
}

.info h2 {
    margin: 0;
    color: #2f4359;
}

.info p {
    margin-top: 5px;
    color: #666;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .data {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>
</head>

<body>

<!-- navbar -->
<div class="navbar">
    <div class="logo">MyLaptop</div>
</div>

<!-- banner -->
<div class="banner">
    <h1>Selamat Datang di MyLaptop</h1>
    <p>Temukan laptop Second dan New terbaik dengan spesifikasi lengkap dan harga terjangkau.</p>

    <div class="buttons">
        <button class="btn-primary" onclick="window.location.href='produk.php'">
            Lihat Produk
        </button>
        <button class="btn-outline" onclick="window.location.href='kontak.php'">
            Hubungi Kami
        </button>
    </div>
</div>

<!-- data info -->
<div class="data">
    <div class="info">
        <h2>200+</h2>
        <p>Produk Tersedia</p>
    </div>

    <div class="info">
        <h2>5K+</h2>
        <p>Pelanggan Puas</p>
    </div>

    <div class="info">
        <h2>100+</h2>
        <p>Merek Ternama</p>
    </div>

    <div class="info">
        <h2>1 Thn</h2>
        <p>Garansi Resmi Toko</p>
    </div>
</div>

</body>
</html>