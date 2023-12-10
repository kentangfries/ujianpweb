<?php
include('header.php');
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = "UPDATE barang SET nama_barang='$nama_barang', stok=$stok, harga=$harga WHERE id=$id";
    $result = $conn->query($query);

    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $query = "SELECT * FROM barang WHERE id=$id";
    $result = $conn->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $nama_barang = $row['nama_barang'];
        $stok = $row['stok'];
        $harga = $row['harga'];
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<div class="container">
    <h2 class="page-title">Edit Barang</h2>
    <div class="form-container">
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $nama_barang; ?>" required>

            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" value="<?php echo $stok; ?>" required>

            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" value="<?php echo $harga; ?>" required>

            <button type="submit">Simpan</button>
            <a href="index.php"><button type="button">Kembali ke Data Barang</button></a>
        </form>
    </div>
</div>

<?php
include('footer.php');
?>