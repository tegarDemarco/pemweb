<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pert6</title>
    <link rel="stylesheet" href="Assets/style.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #f2f2f2;
    }
    .container {
        width: 450px;
        margin: 50px auto;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.12);
    }
    h1 { 
        text-align: center;
        margin-bottom: 10px; 
        color: #222; 
    } 
    .deskripsi {
        text-align: center; 
        color: #666; 
        font-size: 14px; 
        margin-bottom: 25px;
    }
    .form-group { 
        margin-bottom: 15px;
    }
    label { 
        display: block; 
        margin-bottom: 6px; 
        font-weight: bold; 
        color: #333; 
    }
    input, select, textarea { 
        width: 100%; 
        padding: 10px; 
        border: 1px solid #bbb; 
        border-radius: 6px; 
        font-size: 14px; 
    }
    input:focus, select:focus, textarea:focus { 
        outline: none; 
        border-color: #007bff; 
    }
    .pilihan { 
        display: flex; 
        align-items: center; 
        margin-bottom: 8px; 
    }
    .pilihan input { 
        width: auto;
        margin-right: 8px; 
    }
    .pilihan label { 
        margin: 0; 
        font-weight: normal; 
    }
    button { 
        padding: 10px 16px; 
        border: none; border-radius: 6px; 
        background-color: #007bff; 
        color: white; 
        font-size: 14px; 
        cursor: pointer; 
    }
    button:hover { 
        background-color: #0056b3; 
    }
    .reset { 
        background-color: #dc3545; 
        margin-left: 8px; 
    } 
    .reset:hover { 
        background-color: #a71d2a; 
    }
    </style>
</head>

<body>
    <?php include '../Assets/navbar.php'; ?>

    <div class="container">
        <h1>Form data mahasiswa</h1>
        <p class="deskripsi">Silahkan isi form berikut untuk menyimpan data mahasiswa</p>

        <form action="#" method="post">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama"required>
    </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" placeholder="Masukkan NIM" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <div class="pilihan">
                <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Manajemen Informatika">Manajemen Informatika</option>
                </select>
            </div>

            <button type="submit">Simpan</button>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="pilihan">
                <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
                <label for="laki">Laki-laki</label>
            </div>

            <div class="pilihan">
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                <label for="perempuan">Perempuan</label>
            </div>

            <div class="form-group"> 
                <label>Minat Belajar</label> 
                <div class="pilihan"> 
                <input type="checkbox" id="html" name="minat" value="HTML" >
                <label for="html">HTML</label>
            </div>

            <div class="pilihan"> 
                <input type="checkbox" id="css" name="minat" value="CSS" > 
                <label for="css">CSS</label> 
            </div>

            <div class="pilihan"> 
                <input type="checkbox" id="javascript" name="minat" value="JavaScript" > 
                <label for="javascript">JavaScript</label> 
            </div> 
    
            <div class="form-group"> 
                <label for="alamat">Alamat</label> 
                <textarea id="alamat" name="alamat" rows="4" placeholder="Masukkan alamat lengkap" required ></textarea> 
            </div> 

            <div class="form-group">
                <button type="submit">Kirim Data</button>
                <button type="reset" class="reset">Reset</button> 
            </div>


        </form>

    
</body>
</html>