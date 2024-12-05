<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "projectk5");
?>

<!DOCTYPE html>
<html>
<head>
    <title>K5-Fashion</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .konten {
            padding: 50px 0;
        }

        .konten h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .thumbnail {
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .thumbnail:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .thumbnail img {
            border-radius: 10px 10px 0 0;
            max-height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .caption {
            padding: 15px;
            text-align: center;
        }

        .caption h3 {
            font-size: 1.2rem;
            color: #333;
            margin: 10px 0;
        }

        .caption h5 {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        .caption .btn {
            margin: 5px;
            padding: 10px 15px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-default {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
        }

        .btn-default:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .btn-secondary {
            background-color: #343a40;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #23272b;
        }

        @media (max-width: 768px) {
            .konten {
                padding: 20px 10px;
            }

            .caption h3 {
                font-size: 1rem;
            }

            .caption h5 {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>

<?php include 'menu.php'; ?>

<!-- Konten -->
<section class="konten">
    <div class="container">
        <h1>Produk Terbaru</h1>

        <!-- Form Pencarian dan Filter Harga -->
        <form method="GET" action="">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" name="search" class="form-control" placeholder="Cari produk..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                </div>
                <div class="col-md-4">
                    <select name="filter_harga" class="form-control">
                        <option value="">Pilih Harga</option>
                        <option value="murah" <?php echo isset($_GET['filter_harga']) && $_GET['filter_harga'] == 'murah' ? 'selected' : ''; ?>>Harga Murah</option>
                        <option value="mahal" <?php echo isset($_GET['filter_harga']) && $_GET['filter_harga'] == 'mahal' ? 'selected' : ''; ?>>Harga Mahal</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
                <div class="col-md-2">
                    <button type="button" id="voice-search-btn" class="btn btn-secondary">🔊 Cari Produk</button>
                </div>
            </div>
        </form>

        <div class="row">
            <?php 
            $search_query = isset($_GET['search']) ? $_GET['search'] : '';
            $filter_harga = isset($_GET['filter_harga']) ? $_GET['filter_harga'] : '';

            $sql = "SELECT * FROM produk WHERE nama_produk LIKE '%$search_query%'";
            if ($filter_harga == 'murah') {
                $sql .= " ORDER BY harga_produk ASC";
            } elseif ($filter_harga == 'mahal') {
                $sql .= " ORDER BY harga_produk DESC";
            }

            $ambil = $koneksi->query($sql);
            while($perproduk = $ambil->fetch_assoc()) { ?>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="foto_produk/<?php echo $perproduk['foto_produk'];?>" alt="">
                        <div class="caption">
                            <h3><?php echo $perproduk['nama_produk'];?></h3>
                            <h5>Rp. <?php echo number_format($perproduk['harga_produk']);?></h5>
                            <a href="beli.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-primary">Beli</a>
                            <a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="btn btn-default">Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<script>
    const voiceSearchBtn = document.getElementById('voice-search-btn');
    const searchInput = document.querySelector('input[name="search"]');
    const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
    recognition.lang = 'id-ID';

    voiceSearchBtn.addEventListener('click', () => recognition.start());

    recognition.onresult = (event) => {
        searchInput.value = event.results[0][0].transcript;
        searchInput.form.submit();
    };
</script>

</body>
</html>
