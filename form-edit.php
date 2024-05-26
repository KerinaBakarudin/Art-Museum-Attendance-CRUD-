<?php
include 'config.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = $conn->query("SELECT * FROM absen WHERE ID = $id");
    if ($result && $result->num_rows > 0) {
        $absen = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Absen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="edit-data">
    <a href="absen.php"><button type="button" class="btn-kembali">Back</button></a> <br>
    <div class="form">
    <h2>Edit Data Kehadiran</h2>
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $absen['ID']; ?>">
        <label for="nama">Nama</label> 
        <input type="text" id="nama" name="nama" value="<?php echo $absen['nama']; ?>" required> <br>
        <label for="alamat">Alamat</label> 
        <input type="text" id="alamat" name="alamat" value="<?php echo $absen['alamat']; ?>" required> <br>
        <label for="tanggal">Tanggal Kunjungan</label> 
        <input type="date" id="tanggal_kunjungan" name="tanggal_kunjungan" value="<?php echo $absen['tanggal_kunjungan']; ?>" required> <br>
        <label for="review">Review</label> 
        <input type="text" id="review" name="review" value="<?php echo $absen['review']; ?>" required> <br>
        <input type="submit" value="Save" class="btn-simpan">
    </form>
    </div>
    </div>
</body>
</html>