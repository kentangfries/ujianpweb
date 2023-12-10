<?php
include('header.php');
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO barang (nama_barang, stok, harga) VALUES ('$nama_barang', $stok, $harga)";
    $result = $conn->query($query);

    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<div class="container">
    <h2 class="page-title">Tambah Barang</h2>
    <div class="form-container">
        <form method="POST" action="">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" required>

            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" required>

            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" required>

            <button type="submit">Simpan</button>
            <a href="index.php"><button type="button">Kembali ke Data Barang</button></a>
        </form>
    </div>
</div>

<?php
include('footer.php');
?>