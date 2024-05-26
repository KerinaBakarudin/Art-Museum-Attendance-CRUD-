<?php
include 'config.php';

$query_mysql = mysqli_query($conn, "SELECT * FROM absen");

if (!$query_mysql) {
    die('Query Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absen Pengunjung Art Museum</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/97216fb713.js" crossorigin="anonymous"></script>
</head>
<body class="absen">
    <div class="data-absen">
        <h2 class="judul-tabel">Data Absen Pengunjung Lampung Art Museum</h2>
        <!-- Tombol Tambah -->
        <a href="form-tambah.php" class="btn-tambah">
        Isi Absen</a>
        <table>    
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Kunjungan</th>
                <th>Review</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($data = mysqli_fetch_assoc($query_mysql)) { ?>
                <tr>
                    <td><?php echo $data['ID']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['tanggal_kunjungan']; ?></td>
                    <td><?php echo $data['review']; ?></td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="form-edit.php?id=<?php echo $data['ID']; ?>" class="btn-edit">
                        <i class="fa-solid fa-pen-to-square" style="color: #000080;"></i></a>
                        <!-- Tombol Hapus -->
                        <a href="hapus.php?id=<?php echo $data['ID']; ?>" class="btn-delete">
                        <i class="fa-solid fa-trash-can" style="color: #D62F2F;"></i></a>
                    </td>
                </tr>
                <?php } ?>
        </tbody>           
        </table>
    </div>
</body>
</html>