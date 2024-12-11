<?php
include 'koneksi.php';

// Menangani penambahan data
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO transaksi (nama, jumlah, tanggal) VALUES ('$nama', $jumlah, '$tanggal')";
    $conn->query($sql);
}

// Menangani pengeditan data
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];

    $sql = "UPDATE transaksi SET nama='$nama', jumlah=$jumlah, tanggal='$tanggal' WHERE id=$id";
    $conn->query($sql);
}

// Menangani penghapusan data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM transaksi WHERE id=$id";
    $conn->query($sql);
}

// Mengambil data transaksi
$sql = "SELECT * FROM transaksi";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Dashboard Transaksi</title>
</head>
<body>
<div class="container mt-5">
    <h1>Dashboard Transaksi</h1>

    <!-- Form Tambah Data -->
    <form method="POST" class="mb-4">
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="number" name="jumlah" placeholder="Jumlah" required>
        <input type="date" name="tanggal" required>
        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
    </form>

    <!-- Tabel Data Transaksi -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['jumlah']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>