<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Produk Laptop</title>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f2f2f2;
    }

    /* navbar */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #2f4359;
        padding: 10px 20px;
        color: white;
    }

    .logo {
        font-size: 20px;
        font-weight: bold;
    }

    .nav-links {
        display: flex;
        gap: 20px;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        font-size: 14px;
    }

    .nav-links a:hover {
        text-decoration: underline;
    }

    /* search bar */
    .search-box {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .search-box input {
        padding: 6px;
        border-radius: 5px;
        border: none;
    }

    .search-box button {
        padding: 6px 10px;
        border: none;
        background-color: #3f5d7d;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    /* tabel */
    .container {
        width: 90%;
        margin: 30px auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
    }

    thead th {
        background-color: #3f5d7d;
        color: white;
        padding: 15px;
        text-align: center;
    }

    .title-row {
        background-color: #2f4359;
        color: white;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }

    .title-row td {
        padding: 15px;
    }

    tbody td {
        padding: 20px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    .product-name {
        font-weight: bold;
        font-size: 18px;
    }

    .spec {
        text-align: left;
    }

    .price {
        color: red;
        font-weight: bold;
        font-size: 18px;
    }

    img {
        width: 120px;
    }
   
</style>
</head>

<body>

<!-- navbar -->
<div class="navbar">
    <div class="logo">MyLaptop</div>

    <div class="nav-links">
        <a href="pert5tgs.php">Home</a>
        <a href="produk.php">Produk</a>
        <a href="kontak.php">Kontak</a>
    </div>

    <div class="search-box">
        <input type="text" id="searchInput" placeholder="Saya mau beli..." />
        <button>Cari</button>
    </div>

</div>

<!-- tabel -->
<div class="container">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Foto</th>
                <th>Spesifikasi dan Harga</th>
            </tr>
        </thead>

        <tbody>
            <tr class="title-row">
                <td colspan="4">Detail Spesifikasi dan Harga Laptop</td>
            </tr>

            <tr>
                <td>1</td>
                <td class="product-name">Thinkpad X13 gen 2</td>
                <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_EP-RDB98Iy9dap7lB1XNbrTOuw0rLXXyLg&s"></td>
                <td class="spec">
                    Thinkpad X13 gen 2<br>
                    AMD Ryzen 5 Pro 5650U, RAM 8/256GB
                    <div class="price">5.000.000</div>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td class="product-name">Asus Vivobook E210MA</td>
                <td><img src="https://www.kliknklik.com/wp-content/uploads/2023/02/asus_asus_e210ma_full01_br0s8h0f-1-1-500x500.jpg"></td>
                <td class="spec">
                    Asus Vivobook E210MA<br>
                    Intel N4020, RAM 4/256GB
                    <div class="price">3.200.000</div>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td class="product-name">Thinkpad L13 gen 3</td>
                <td><img src="https://www.kliknklik.com/wp-content/uploads/2023/08/w0tcj8z4uucju3a26629yu5avfjzy5086363.png"></td>
                <td class="spec">
                    Thinkpad L13 gen 3<br>
                    AMD Ryzen 5 Pro 5675U, RAM 16/512GB
                    <div class="price">5.750.000</div>
                </td>
            </tr>

            <tr>
                <td>4</td>
                <td class="product-name">MSI Summit E14 Evo A12M</td>
                <td><img src="https://www.kliknklik.com/wp-content/uploads/2023/01/70ae09e6-84ff-4f84-810f-65d276a7b1dc-1-500x500.jpg"></td>
                <td class="spec">
                    MSI Summit E14 Evo A12M<br>
                    Intel i5 1240P, RAM 16/512GB
                    <div class="price">12.499.000</div>
                </td>
            </tr>

            <tr>
                <td>5</td>
                <td class="product-name">Lenovo IdeaPad Slim 5I 14</td>
                <td><img src="https://www.kliknklik.com/wp-content/uploads/2023/12/154907-1-1-500x500.jpg"></td>
                <td class="spec">
                    Lenovo IdeaPad Slim 5I 14<br>
                    Intel i7 1165G7, RAM 16/512GB
                    <div class="price">13.799.000</div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>