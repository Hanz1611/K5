<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "projectk5");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K5-Ecommerce</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f5f5f5;
        }

        /* Header */
        .big-banner {
            background: #ff7e5f;
            color: white;
            padding: 20px 0;
        }

        .menu .box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 10%;
        }

        .logo h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            margin: 0;
        }

        .logo .red {
            color: #ff4747;
        }

        .menu-toggle {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: white;
        }

        .menulist {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .menulist a {
            text-decoration: none;
            color: white;
            margin: 0 15px;
            font-weight: 500;
            white-space: nowrap;
        }

        .btn-register {
            background: #ff4747;
            padding: 8px 16px;
            border-radius: 5px;
            color: white;
            font-size: 0.9rem;
            margin-left: 10px;
        }

        .btn-register:hover {
            background: #feb47b;
            transition: background 0.3s ease-in-out;
        }

        /* Hide navbar for small screens */
        @media (max-width: 768px) {
            .menu .box {
                flex-wrap: wrap;
            }

            .menu-toggle {
                display: block;
            }

            .menulist {
                display: none;
                flex-direction: column;
                width: 100%;
                background: #ff7e5f;
                padding: 10px 0;
            }

            .menulist.show {
                display: flex;
            }

            .menulist a {
                margin: 10px 0;
                text-align: center;
            }
        }

        /* Large Image */
        .large-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Feature Section */
        .feature {
            padding: 50px 10%;
            text-align: center;
            background: #fff;
        }

        .feature .box {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }

        .feature .col-3 {
            flex: 1;
            max-width: 30%;
            min-width: 250px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .feature .col-3:hover {
            transform: translateY(-10px);
        }

        .feature img {
            width: 80px;
            margin-bottom: 20px;
        }

        .feature h3 {
            font-size: 1.5rem;
            color: #333;
        }

        .feature p {
            font-size: 0.9rem;
            color: #777;
        }

        /* Footer */
        footer {
            background: #333;
            color: white;
            padding: 20px 10%;
            text-align: center;
            font-size: 0.9rem;
        }

        footer a {
            color: #ff4747;
            text-decoration: none;
            font-weight: 500;
        }

        footer a:hover {
            color: #feb47b;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="big-banner">
        <div class="menu">
            <div class="box">
                <div class="logo">
                    <h1>K5-<span class='red'>Fashion</span></h1>
                </div>
                <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
                <div class="menulist">
                    <a href="">Home</a>
                    <a href="index.php">Produk</a>
                    <a href="">Contact</a>
                    <a href="login.php" class="btn-register">Sign in</a>
                    <a href="daftar.php" class="btn-register">Sign up</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <!-- Large Image -->
    <div class="large-image">
        <img src="image/gambarindex.webp" width="100%" hieght="auto" alt="Banner Besar">
    </div>

    <!-- Feature Section -->
    <div class="feature">
        <div class="box">    
            <div class="col-3">
                <img src="Image/donation%20(1).png" alt="">
                <h3>Pembayaran</h3>
                <p>Kamu bisa membayar melalui Via transfer</p>
            </div>
            <div class="col-3">
                <img src="Image/clothes-donation.png" alt="">
                <h3>Kualitas Baju</h3>
                <p>Bagus, Nyaman, Harga merakyat</p>
            </div>
            <div class="col-3">
                <img src="Image/donation%20(2).png" alt="">
                <h3>Donasi Makanan</h3>
                <p>Berbagi itu indah</p>
            </div>
        </div>
    </div>
    <!-- End Feature Section -->

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 K5-Fashion. All rights reserved. | <a href="privacy.php">Privacy Policy</a> | <a href="terms.php">Terms of Service</a></p>
    </footer>
    <!-- End Footer -->

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menulist');
            menu.classList.toggle('show');
        }
    </script>
</body>
</html>
