<?php
include('koneksi.php');

$id = $_GET['id'];
$query = "DELETE FROM barang WHERE id=$id";
$result = $conn->query($query);

if ($result) {
    header('Location: index.php');
    exit;
} else {
    echo "Error: " . $conn->error;
}
?>