<?php
include 'config.php'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM absen WHERE ID = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()){
        echo "Data berhasil dihapus";
    }
    else{
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} 
header("Location: absen.php");
exit;
?>
