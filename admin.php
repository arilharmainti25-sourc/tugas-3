<?php
include 'koneksi.php';

// Fitur Hapus Produk
if (isset($_GET['hapus'])) {
    $id_hapus = $_GET['hapus'];
    $stmt_hapus = $pdo->prepare("DELETE FROM produk WHERE id_produk = ?");
    $stmt_hapus->execute([$id_hapus]);
    header("Location: admin.php");
    exit();
}

// Ambil semua data produk dari database
$stmt = $pdo->query("SELECT produk.*, kategori.nama_kategori FROM produk LEFT JOIN kategori ON produk.id_kategori = kategori.id_kategori ORDER BY produk.id_produk DESC");
$produk_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin UMKM Desa Tupa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white p-6 rounded-xl shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard Kelola Produk UMKM</h1>
            <div class="space-x-2">
                <a href="tambah_produk.php" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 font-semibold text-sm">
                    <i class="fa-solid fa-plus mr-1"></i> Tambah Produk
                </a>
                <a href="index.php" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 font-semibold text-sm">
                    Lihat Website
                </a>
            </div>
        </div>

        <!-- Tabel Daftar Produk -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-emerald-600 text-white">
                        <th class="p-3 border">No</th>
                        <th class="p-3 border">Nama Produk</th>
                        <th class="p-3 border">Kategori</th>
                        <th class="p-3 border">Harga</th>
                        <th class="p-3 border">Deskripsi</th>
                        <th class="p-3 border text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($produk_list)): ?>
                        <?php $no = 1; foreach ($produk_list as $row): ?>
                            <tr class="hover:bg-gray-50 border-b">
                                <td class="p-3 border"><?= $no++; ?></td>
                                <td class="p-3 border font-semibold"><?= htmlspecialchars($row['nama_produk']); ?></td>
                                <td class="p-3 border"><?= htmlspecialchars($row['nama_kategori'] ?? 'Tanpa Kategori'); ?></td>
                                <td class="p-3 border">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                                <td class="p-3 border text-sm text-gray-600"><?= htmlspecialchars($row['deskripsi']); ?></td>
                                <td class="p-3 border text-center space-x-1">
                                    <a href="edit_produk.php?id=<?= $row['id_produk']; ?>" class="bg-blue-500 text-white px-3 py-1 rounded text-xs hover:bg-blue-600">Edit</a>
                                    <a href="admin.php?hapus=<?= $row['id_produk']; ?>" onclick="return confirm('Yakin ingin menghapus produk ini?')" class="bg-red-500 text-white px-3 py-1 rounded text-xs hover:bg-red-600">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6" class="p-4 text-center text-gray-500">Belum ada data produk di database.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>