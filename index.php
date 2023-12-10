<?php
include('header.php');
include('koneksi.php');

$query = "SELECT * FROM barang";
$result = $conn->query($query);
?>

<div class="container">
    <h2 class="page-title">Data Barang</h2>
    <div class="action-buttons">
        <a href="tambah.php">Tambah Barang</a>
    </div>
    <div class="table-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama_barang'] . "</td>";
                echo "<td>" . $row['stok'] . "</td>";
                echo "<td>" . $row['harga'] . "</td>";
                echo "<td class='action-buttons'><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='hapus.php?id=" . $row['id'] . "'>Hapus</a></td>";
                echo "</tr>";
            }

            // Tambahkan penanganan error
            if (!$result) {
                echo "<tr><td colspan='5'>Error: " . $conn->error . "</td></tr>";
            }
            ?>
        </table>
    </div>
</div>

<?php
include('footer.php');
?>