<!DOCTYPE html>
<html>
<head>
    <title>Cek Kategori Usia Mahasiswa</title>
</head>
<body>

    <h2>Cek Kategori Usia Mahasiswa</h2>

    <form method="POST">
        Nama :
        <input type="text" name="nama" required><br><br>

        Umur :
        <input type="number" name="umur" required><br><br>

        <input type="submit" name="cek" value="Cek Kategori">
    </form>

    <?php
    if (isset($_POST['cek'])) {

        // Variabel
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];

        // Percabangan if elseif else
        if ($umur < 13) {
            $kategori = "Anak-anak";
        } elseif ($umur >= 13 && $umur <= 17) {
            $kategori = "Remaja";
        } elseif ($umur >= 18 && $umur <= 59) {
            $kategori = "Dewasa";
        } else {
            $kategori = "Lansia";
        }

        // Output
        echo "<h3>Hasil</h3>";
        echo "Nama Mahasiswa : " . $nama . "<br>";
        echo "Umur : " . $umur . " tahun<br>";
        echo "Kategori Usia : " . $kategori;
    }
    ?>

</body>
</html>