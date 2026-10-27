<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website KKN & Donasi Desa Tupa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md fixed w-full z-10 top-0 left-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 font-bold text-xl text-emerald-600 flex items-center">
                    <i class="fa-solid fa-hands-holding-child mr-2"></i>KKN Desa Tupa
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#hero" class="hover:text-emerald-600 font-medium">Beranda</a>
                    <a href="#karya" class="hover:text-emerald-600 font-medium">Hasil KKN</a>
                    <a href="#umkm" class="hover:text-emerald-600 font-medium">Produk UMKM</a>
                    <a href="#tim" class="hover:text-emerald-600 font-medium">Tim Kami</a>
                    <a href="#donasi" class="hover:text-emerald-600 font-medium">Donasi</a>
                </div>
                <a href="#donasi" class="bg-emerald-600 hover:bg-emerald-700 text-white px-4 py-2 rounded-lg font-semibold transition">
                    Donasi Sekarang
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="hero" class="pt-28 pb-16 bg-emerald-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <span class="text-emerald-600 font-bold uppercase text-sm tracking-wider">Portofolio & Pengabdian KKN</span>
                <h1 class="text-3xl md:text-5xl font-extrabold text-gray-900 mt-2 leading-tight">
                    Abadikan Karya KKN, Lanjutkan Kebaikan untuk Desa Tupa
                </h1>
                <p class="mt-4 text-gray-600 text-base md:text-lg">
                    Website ini dibuat untuk mengabadikan hasil kerja keras tim KKN dan memfasilitasi donasi berkelanjutan bagi masyarakat desa Tupa.
                </p>
                <div class="mt-6 flex flex-wrap gap-4">
                    <a href="#donasi" class="bg-emerald-600 hover:bg-emerald-700 text-white px-5 py-3 rounded-lg font-bold shadow transition flex items-center">
                        <i class="fa-solid fa-heart mr-2"></i> Donasi Sekarang
                    </a>
                    <a href="#karya" class="bg-white hover:bg-gray-100 text-emerald-600 border border-emerald-600 px-5 py-3 rounded-lg font-bold transition">
                        Lihat Program Kerja
                    </a>
                </div>
            </div>
            <div class="md:w-5/12">
                <img src="WhatsApp Image 2026-09-30 at 15.18.34.jpeg" alt="Foto Bersama Kelompok KKN" class="rounded-2xl shadow-lg w-full border-4 border-white object-cover h-72">
            </div>
        </div>
    </section>

    <!-- HASIL KARYA KKN -->
    <section id="karya" class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-900">Hasil Karya KKN</h2>
            <p class="text-gray-600 mt-2">Program kerja yang telah diselesaikan oleh tim KKN kami</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow border overflow-hidden">
                <img src="WhatsApp Image 2026-09-30 at 15.18.32.jpeg" class="h-48 w-full object-cover">
                <div class="p-5">
                    <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2 py-1 rounded">Pendidikan</span>
                    <h3 class="font-bold text-lg mt-2">Sosialisasi & Program Kerja Mahasiswa KKN TEMATIK II Universitas Negeri Gorontalo Tahun 2026</h3>
                    <p class="text-gray-600 text-sm mt-1">Pemberdayaan hukum melalui pelatihan penyelesaian optimalisasi pengolahan aset pada program pangan desa.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow border overflow-hidden">
                <img src="WhatsApp Image 2026-09-30 at 15.18.33.jpeg" class="h-48 w-full object-cover">
                <div class="p-5">
                    <span class="bg-amber-100 text-amber-800 text-xs font-bold px-2 py-1 rounded">Lingkungan</span>
                    <h3 class="font-bold text-lg mt-2">Mencegah Terjadi Kebakaran & Penumpukan Sampah</h3>
                    <p class="text-gray-600 text-sm mt-1">Membantu Pembersihan Sampah lingkungan desa tupa dari sampah, organik, anorganik, dan B3.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow border overflow-hidden">
                <img src="WhatsApp Image 2026-09-30 at 17.29.13.jpeg" class="h-48 w-full object-cover">
                <div class="p-5">
                    <span class="bg-amber-100 text-amber-800 text-xs font-bold px-2 py-1 rounded">Pendidikan Jasmani</span>
                    <h3 class="font-bold text-lg mt-2">Olahraga Senam Pagi</h3>
                    <p class="text-gray-600 text-sm mt-1">Membangun masyarakat yang sehat & kuat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION PRODUK UMKM DESA TUPA (DINAMIS DARI MYSQL) -->
    <section id="umkm" class="py-16 bg-white border-t">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <span class="text-emerald-600 font-bold uppercase text-sm tracking-wider">Pemberdayaan Ekonomi</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-1">Produk Unggulan UMKM Desa Tupa</h2>
                <p class="text-gray-600 mt-2">Dukung perekonomian lokal dengan membeli produk hasil karya warga Desa Tupa</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php
                // Ambil data produk dari database MySQL
                $stmt_produk = $pdo->query("SELECT produk.*, kategori.nama_kategori FROM produk LEFT JOIN kategori ON produk.id_kategori = kategori.id_kategori ORDER BY produk.id_produk DESC");
                $semua_produk = $stmt_produk->fetchAll(PDO::FETCH_ASSOC);

                if (!empty($semua_produk)):
                    foreach ($semua_produk as $item):
                ?>
                    <div class="bg-gray-50 rounded-xl shadow-sm border overflow-hidden hover:shadow-md transition">
                        <div class="p-6">
                            <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-2.5 py-1 rounded">
                                <?= htmlspecialchars($item['nama_kategori'] ?? 'UMKM'); ?>
                            </span>
                            <h3 class="font-bold text-xl text-gray-800 mt-3"><?= htmlspecialchars($item['nama_produk']); ?></h3>
                            <p class="text-gray-600 text-sm mt-2"><?= htmlspecialchars($item['deskripsi']); ?></p>
                            <div class="flex items-center justify-between mt-6 pt-4 border-t">
                                <span class="text-lg font-bold text-emerald-600">
                                    Rp <?= number_format($item['harga'], 0, ',', '.'); ?>
                                </span>
                                <a href="https://wa.me/?text=Halo,%20saya%20tertarik%20membeli%20<?= urlencode($item['nama_produk']); ?>" target="_blank" class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold px-4 py-2 rounded-lg transition flex items-center">
                                    <i class="fa-brands fa-whatsapp text-sm mr-1.5"></i> Beli via WA
                                </a>
                            </div>
                        </div>
                    </div>
                <?php 
                    endforeach;
                else:
                ?>
                    <div class="col-span-3 text-center py-10 bg-gray-50 rounded-lg border border-dashed border-gray-300">
                        <p class="text-gray-500 font-medium">Belum ada produk UMKM yang ditambahkan.</p>
                        <p class="text-gray-400 text-sm mt-1">Tambahkan produk baru melalui <a href="admin.php" class="text-emerald-600 underline font-semibold">Dashboard Admin</a>.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- ANGGOTA TIM KKN -->
    <section id="tim" class="py-16 bg-white border-t">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Anggota Tim KKN kami</h2>
                <p class="text-gray-600 mt-2">Mahasiswa di balik pelaksanaan program pengabdian masyarakat ini</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div class="bg-gray-50 p-4 rounded-xl border shadow-sm hover:shadow-md transition">
                    <img src="WhatsApp Image 2026-09-30 at 18.59.09.jpeg" alt="Foto Mahasiswa" class="w-full h-78 object-cover rounded-lg mb-3">
                    <h3 class="font-bold text-gray-800 text-base">AZID</h3>
                    <p class="text-emerald-600 text-xs font-semibold">KORDES</p>
                    <p class="text-gray-500 text-xs mt-1">S1 MANAJEMEN</p>
                </div>

                <div class="bg-gray-50 p-4 rounded-xl border shadow-sm hover:shadow-md transition">
                    <img src="WhatsApp Image 2026-09-30 at 18.59.08.jpeg" alt="Foto Mahasiswa" class="w-full h-78 object-cover rounded-lg mb-3">
                    <h3 class="font-bold text-gray-800 text-base">NURAFNI RASYID</h3>
                    <p class="text-emerald-600 text-xs font-semibold">ACARA</p>
                    <p class="text-gray-500 text-xs mt-1">S1 ILMU HUKUM</p>
                </div>

                <div class="bg-gray-50 p-4 rounded-xl border shadow-sm hover:shadow-md transition">
                    <img src="WhatsApp Image 2026-09-30 at 18.59.07.jpeg" alt="Foto Mahasiswa" class="w-full h-78 object-cover rounded-lg mb-3">
                    <h3 class="font-bold text-gray-800 text-base">Aca</h3>
                    <p class="text-emerald-600 text-xs font-semibold">KOOR PDD</p>
                    <p class="text-gray-500 text-xs mt-1">S1 ILMU HUKUM</p>
                </div>

                <div class="bg-gray-50 p-4 rounded-xl border shadow-sm hover:shadow-md transition">
                    <img src="WhatsApp Image 2026-09-30 at 18.59.05.jpeg" alt="Foto Mahasiswa" class="w-full h-78 object-cover rounded-lg mb-3">
                    <h3 class="font-bold text-gray-800 text-base">JOSHH</h3>
                    <p class="text-emerald-600 text-xs font-semibold">KOOR PERLENGKAPAN</p>
                    <p class="text-gray-500 text-xs mt-1">S1 ILMU HUKUM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- DONASI -->
    <section id="donasi" class="py-16 bg-gray-100">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 md:p-8 border">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900">Salurkan Donasi Kamu</h2>
                    <p class="text-gray-600 mt-2">Dukunganmu sangat berguna untuk perawatan program kerja KKN di desa tupa ini.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-gray-50 p-5 rounded-xl border">
                        <h3 class="font-bold text-gray-800 mb-4 flex items-center text-lg">
                            <i class="fa-solid fa-building-columns text-emerald-600 mr-2"></i> Transfer Bank
                        </h3>

                        <div class="bg-white p-3 rounded-lg border mb-3 flex justify-between items-center">
                            <div>
                                <p class="text-xs font-bold text-blue-800">BANK BRI</p>
                                <p class="font-mono font-bold text-gray-800 text-sm">012301098765432</p>
                                <p class="text-xs text-gray-500">Azid (Ketua KKN)</p>
                            </div>
                            <button onclick="salinTekst('012301098765432')" class="bg-emerald-100 text-emerald-700 text-xs px-3 py-1.5 rounded font-bold hover:bg-emerald-200">
                                Salin
                            </button>
                        </div>

                        <div class="bg-white p-3 rounded-lg border flex justify-between items-center">
                            <div>
                                <p class="text-xs font-bold text-yellow-600">BANK MANDIRI</p>
                                <p class="font-mono font-bold text-gray-800 text-sm">1370012345678</p>
                                <p class="text-xs text-gray-500">NURAFNI.RASYID (ACARA)</p>
                            </div>
                            <button onclick="salinTekst('1370012345678')" class="bg-emerald-100 text-emerald-700 text-xs px-3 py-1.5 rounded font-bold hover:bg-emerald-200">
                                Salin
                            </button>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-5 rounded-xl border">
                        <h3 class="font-bold text-gray-800 mb-4 flex items-center text-lg">
                            <i class="fa-solid fa-wallet text-emerald-600 mr-2"></i> DANA & QRIS
                        </h3>

                        <div class="bg-white p-3 rounded-lg border mb-3 flex justify-between items-center">
                            <div>
                                <p class="text-xs font-bold text-blue-500">DANA (No. HP)</p>
                                <p class="font-mono font-bold text-gray-800 text-sm">081234567890</p>
                                <p class="text-xs text-gray-500">ACA.PDD KKN</p>
                            </div>
                            <button onclick="salinTekst('081234567890')" class="bg-emerald-100 text-emerald-700 text-xs px-3 py-1.5 rounded font-bold hover:bg-emerald-200">
                                Salin
                            </button>
                        </div>

                        <div class="text-center bg-white p-3 rounded-lg border">
                            <p class="text-xs font-bold text-gray-700 mb-2">Scan QRIS (Mendukung DANA, BRImo, Livin)</p>
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=DonasiKKNDesa" alt="QRIS" class="mx-auto h-32 w-32 border">
                        </div>
                    </div>
                </div>

                <div class="mt-8 text-center border-t pt-6">
                    <p class="text-sm text-gray-600 mb-3">Sudah melakukan transfer/donasi? Silakan konfirmasi agar masuk laporan transparansi:</p>
                    <a href="https://wa.me/6281234567890?text=Halo%20Admin%20KKN,%20saya%20sudah%20melakukan%20donasi%20sebesar%20Rp..." target="_blank" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-bold shadow transition">
                        <i class="fa-brands fa-whatsapp text-xl mr-2"></i> Konfirmasi Donasi via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-gray-900 text-white py-6 text-center text-sm">
        <p>© 2026 Tim Pengabdian KKN Mahasiswa. Seluruh Hak Cipta Dilindungi.</p>
    </footer>

    <!-- JAVASCRIPT SALIN NOMOR -->
    <script>
        function salinTekst(teks) {
            navigator.clipboard.writeText(teks);
            alert("Nomor berhasil disalin: " + teks);
        }
    </script>
</body>
</html>