<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $layanan = $_POST['service'];
    $tujuan = $_POST['destination'];
    $metode_pembayaran = $_POST['payment_method'];

    // Tampilkan ringkasan pesanan
    echo "<h2>Detail Pesanan:</h2>";
    echo "<p>Layanan: $layanan</p>";
    echo "<p>Tujuan: $tujuan</p>";
    echo "<p>Metode Pembayaran: $metode_pembayaran</p>";
    echo "<p>Pesanan berhasil diproses.</p>";
} else {
    // Redirect jika form tidak di-submit
    header("Location: index.php");
    exit();
}
?>
