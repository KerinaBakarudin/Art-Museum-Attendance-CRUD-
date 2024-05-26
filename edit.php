<?php 
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $review = $_POST['review'];

    $stmt = $conn->prepare("UPDATE absen SET nama = ?, alamat = ?, tanggal_kunjungan = ?, review = ? WHERE ID = ?");
    $stmt->bind_param("ssssi", $nama, $alamat, $tanggal_kunjungan, $review, $id);
    
    if ($stmt->execute()) {
        header("Location: absen.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>