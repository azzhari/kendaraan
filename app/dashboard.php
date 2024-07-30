<?php
// Mulai sesi untuk dapat menggunakan variabel sesi
session_start();

// Set cookie jika belum ada
if (!isset($_COOKIE['visited'])) {
    setcookie('visited', 'true', time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
}

// Menyimpan penjelasan tentang sesi dan cookie dalam variabel
$session_explanation = "Sesi (Session) adalah mekanisme penyimpanan data di server yang digunakan untuk menyimpan informasi tentang pengguna antara permintaan HTTP. Data ini dapat berupa informasi login, preferensi pengguna, dan data lainnya yang perlu dipertahankan selama sesi pengguna. Sesi dimulai dengan memanggil fungsi session_start(), yang memungkinkan PHP untuk mengelola variabel sesi yang dapat diakses di seluruh halaman selama sesi berlangsung.";

$cookie_explanation = "Cookie adalah data kecil yang dikirimkan oleh server dan disimpan di browser pengguna. Cookie digunakan untuk menyimpan informasi yang dapat diakses pada kunjungan berikutnya. Ini termasuk data seperti preferensi pengguna, status login, dan informasi pelacakan lainnya. Cookie dibuat dengan fungsi setcookie() dan dapat diatur untuk berlaku selama periode tertentu, serta dapat diakses di seluruh situs web atau domain.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>

    <h2>Penjelasan tentang Sesi</h2>
    <p><?php echo $session_explanation; ?></p>

    <h2>Penjelasan tentang Cookie</h2>
    <p><?php echo $cookie_explanation; ?></p>

</body>
</html>
