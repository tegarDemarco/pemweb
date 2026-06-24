<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 style="text-align: center;">Ini adalah halaman untuk pertemuan ke 10</h3> 
    <hr> 
        <h3 style="text-align: center;">Array sederhana tentang Buah</h3> 
        <?php
         // Array sederhana 
        $buah = array("Apel", "Jeruk", "Mangga"); 
        ?> 
        <!-- Loop untuk menampilkan array --> 
        <h3>Daftar Buah:</h3> <ul class='list-utama'> 
        <!-- foreach digunakan untuk pengulangan kumpulan data (array) --> 
        <?php foreach ($buah as $item): ?> 
            <li><?= $item; ?></li> 
        <?php endforeach; ?> </ul> 
        <hr> 
        <?php 
        // Array data mahasiswa 
        $mahasiswa = array( 
            ["Nama" => "Ali", "NIM" => "12345", "Nilai" => 85], 
            ["Nama" => "Budi", "NIM" => "12346", "Nilai" => 90], 
            ["Nama" => "Cici", "NIM" => "12347", "Nilai" => 78] 
        ); 
            echo "<h3>Data Mahasiswa</h3>";
</body>
</html>