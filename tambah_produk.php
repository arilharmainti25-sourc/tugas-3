<?php
include 'koneksi.php';

// Ambil daftar kategori dari database
$kategori_list = $pdo->query("SELECT * FROM kategori")->fetchAll(PDO::FETCH_ASSOC);

// Proses simpan data produk baru
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_produk = $_POST['nama_produk'];
    $harga       = $_POST['harga'];
    $deskripsi   = $_POST['deskripsi'];
    $id_kategori = $_POST['id_kategori'];

    $stmt = $pdo->prepare("INSERT INTO produk (nama_produk, harga, deskripsi, id_kategori) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nama_produk, $harga, $deskripsi, $id_kategori]);

    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk UMKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-md">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Tambah Produk UMKM Baru</h2>
        <form action="" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
                <input type="text" name="nama_produk" required class="w-full border p-2 rounded-lg mt-1">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="id_kategori" required class="w-full border p-2 rounded-lg mt-1">
                    <option value="">-- Pilih Kategori --</option>
                    <?php foreach ($kategori_list as $kat): ?>
                        <option value="<?= $kat['id_kategori']; ?>"><?= htmlspecialchars($kat['nama_kategori']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
                <input type="number" name="harga" required class="w-full border p-2 rounded-lg mt-1">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" rows="3" class="w-full border p-2 rounded-lg mt-1"></textarea>
            </div>
            <div class="flex space-x-2 pt-2">
                <button type="submit" class="w-full bg-emerald-600 text-white py-2 rounded-lg font-semibold hover:bg-emerald-700">Simpan Produk</button>
                <a href="admin.php" class="w-full text-center bg-gray-400 text-white py-2 rounded-lg font-semibold hover:bg-gray-500">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>