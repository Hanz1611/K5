<?php
session_start();
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nota pembelian</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<?php include 'menu.php'; ?>

<section class="kontent">
    <div class="container">

<h2>Detail Pembelian</h2>
<?php 
// Ambil data pembelian dan pelanggan
$ambil = $koneksi->query("SELECT * FROM pembelian 
                           JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan 
                           WHERE pembelian.id_pembelian = '$_GET[id]'");

$detail = $ambil->fetch_assoc();

// Pastikan data ada
if ($detail) {
?>
    <strong><?php echo $detail['nama_pelanggan']; ?></strong><br>
    <p>
        <?php echo $detail['telepon_pelanggan']; ?> <br>
        <?php echo $detail['email_pelanggan']; ?> 
    </p>

    <p>
        Tanggal: <?php echo $detail['tanggal_pembelian']; ?> <br>
        Total: <?php echo $detail['total_pembelian']; ?> 
    </p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $nomor = 1;
            $ambil_produk = $koneksi->query("SELECT * FROM pembelian_produk 
                                             JOIN produk ON pembelian_produk.id_produk = produk.id_produk
                                             WHERE pembelian_produk.id_pembelian = '$_GET[id]'"); 
            while ($pecah = $ambil_produk->fetch_assoc()) { 
            ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah['nama_produk']; ?></td>
                    <td><?php echo $pecah['harga_produk']; ?></td>
                    <td><?php echo $pecah['jumlah']; ?></td>
                    <td><?php echo $pecah['harga_produk'] * $pecah['jumlah']; ?></td>
                </tr>
            <?php 
                $nomor++; 
            } 
            ?>
        </tbody>
    </table>

    <div class="row">
        <div class="col-md-7">
            <div class="alert alert-info">
                <p>
                    Silahkan melakukan pembayaran Rp. <?php echo number_format($detail['total_pembelian']); ?> ke <br>
                    <strong>BANK Indonesia 123456789 AN. Kelompok 5</strong>
                </p>
            </div>
        </div>
    </div>

<?php
// } else {
//     echo "Data pembelian tidak ditemukan.";
// }
// ?>

</section>
</body>
</html>
