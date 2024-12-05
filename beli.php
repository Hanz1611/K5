<?php
session_start();

// Mendapatkan id_produk dari URL
$id_produk = $_GET['id'];

// Jika sudah ada produk itu di keranjang, maka produk itu jumlahnya ditambah 1
if (isset($_SESSION['keranjang'][$id_produk])) {
    $_SESSION['keranjang'][$id_produk] += 1;
} 
// Jika belum ada di keranjang, maka produk itu dianggap dibeli 1
else {
    $_SESSION['keranjang'][$id_produk] = 1;
}

// Tampilkan notifikasi dengan SweetAlert2
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Notifikasi</title>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
</head>
<body>
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Produk telah masuk ke keranjang belanja.',
            icon: 'success',
            confirmButtonText: 'Lihat Keranjang'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'keranjang.php'; // Redirect ke halaman keranjang
            }
        });
    </script>
</body>
</html>
";
?>
