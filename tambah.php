<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $review = $_POST['review'];

    $stmt = $conn->prepare("INSERT INTO absen (nama, alamat, tanggal_kunjungan, review) VALUES (?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("ssss", $nama, $alamat, $tanggal_kunjungan, $review);

        if ($stmt->execute()) {
            // Redirect ke halaman daftar absen
            header("Location: absen.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>