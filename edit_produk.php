<?php
include 'koneksi.php';

// 1. Ambil ID produk dari URL
$id_produk = $_GET['id'] ?? null;

if (!$id_produk) {
    header("Location: admin.php");
    exit();
}

// 2. Ambil data produk berdasarkan ID
$stmt = $pdo->prepare("SELECT * FROM produk WHERE id_produk = ?");
$stmt->execute([$id_produk]);
$produk = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$produk) {
    echo "<script>alert('Data produk tidak ditemukan!'); window.location='admin.php';</script>";
    exit();
}

// 3. Ambil daftar kategori untuk dropdown
$kategori_list = $pdo->query("SELECT * FROM kategori")->fetchAll(PDO::FETCH_ASSOC);

// 4. Proses Simpan Perubahan (UPDATE)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_produk = $_POST['nama_produk'];
    $harga       = $_POST['harga'];
    $deskripsi   = $_POST['deskripsi'];
    $id_kategori = $_POST['id_kategori'];

    try {
        $update_stmt = $pdo->prepare("UPDATE produk SET nama_produk = ?, harga = ?, deskripsi = ?, id_kategori = ? WHERE id_produk = ?");
        $update_stmt->execute([$nama_produk, $harga, $deskripsi, $id_kategori, $id_produk]);

        header("Location: admin.php");
        exit();
    } catch (PDOException $e) {
        $error = "Gagal memperbarui data: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk UMKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-md">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Edit Produk UMKM</h2>

        <?php if (isset($error)): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4 text-sm">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <form action="" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
                <input type="text" name="nama_produk" value="<?= htmlspecialchars($produk['nama_produk']); ?>" required class="w-full border p-2 rounded-lg mt-1">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Kategori</label>
                <select name="id_kategori" required class="w-full border p-2 rounded-lg mt-1">
                    <?php foreach ($kategori_list as $kat): ?>
                        <option value="<?= $kat['id_kategori']; ?>" <?= ($kat['id_kategori'] == $produk['id_kategori']) ? 'selected' : ''; ?>>
                            <?= htmlspecialchars($kat['nama_kategori']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Harga (Rp)</label>
                <input type="number" name="harga" value="<?= $produk['harga']; ?>" required class="w-full border p-2 rounded-lg mt-1">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" rows="3" class="w-full border p-2 rounded-lg mt-1"><?= htmlspecialchars($produk['deskripsi']); ?></textarea>
            </div>
            <div class="flex space-x-2 pt-2">
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700">Simpan Perubahan</button>
                <a href="admin.php" class="w-full text-center bg-gray-400 text-white py-2 rounded-lg font-semibold hover:bg-gray-500">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>