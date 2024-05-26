<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Absen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="tambah-data">
    <a href="absen.php"><button type="button" class="btn-kembali">Back</button></a>
    <div class="form">
    <h2>Isi Data Kehadiran Anda</h2> <br>
    <form action="tambah.php" method="POST">
        <label for="nama">Nama</label> 
        <input type="text" id="nama" name="nama" required> <br>
        <label for="alamat">Alamat</label> 
        <input type="text" id="alamat" name="alamat" required> <br>
        <label for="tanggal">Tanggal Kunjungan</label> 
        <input type="date" id="tanggal_kunjungan" name="tanggal_kunjungan" required> <br>
        <label for="review">Review</label> 
        <input type="text" id="review" name="review" required> <br>
        <input type="submit" value="Save" class="btn-simpan">
    </form>
    </div>
    </div>
</body>
</html>