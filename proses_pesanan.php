<?php
$nama = $_POST['nama'];
$jenisElektronik = $_POST['jenis-elektronik'];
$keterangan = $_POST['Keterangan'];

if ($nama && $jenisElektronik && $keterangan) {
    // Pesan sukses
    $pesan = "Terima kasih, $nama! Pesanan Anda untuk $jenisElektronik telah diterima.\n";
    $pesan .= "Keterangan: $keterangan\n";
    $pesan .= "Tim kami akan segera menghubungi Anda untuk mengatur jadwal servis.";

    // Menyimpan pesan ke file.txt
    $file = fopen("pesanan.txt", "a");
    fwrite($file, $pesan . "\n");
    fclose($file);

    echo "<p class='success'>Terima kasih, $nama! Pesanan Anda untuk $jenisElektronik telah diterima.</p>";
    echo "<p>Keterangan: $keterangan</p>";
    echo "<p>Tim kami akan segera menghubungi Anda untuk mengatur jadwal servis.</p>";

    // Menampilkan feedback di halaman berikutnya dengan menggunakan JavaScript
    echo "<script>sendFeedback('Pesanan Anda untuk $jenisElektronik telah diterima. Tim kami akan segera menghubungi Anda untuk mengatur jadwal servis.')</script>";
} else {
    echo "<p class='error'>Mohon maaf, terjadi kesalahan dalam pemrosesan pesanan. Silakan coba lagi.</p>";
    // Menampilkan feedback di halaman berikutnya dengan menggunakan JavaScript
    echo "<script>sendFeedback('Terjadi kesalahan dalam pemrosesan pesanan. Silakan coba lagi.')</script>";
}
?>
