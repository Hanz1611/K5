<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K5-Fashion</title>
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
                    <a href="homep.php">Home</a>
                    <a href="keranjang.php">Keranjang</a>
                    <?php if (isset($_SESSION["pelanggan"])): ?>
                        <a href="logout.php">Logout</a>
                    <?php else: ?>
                        <a href="login.php">Login</a>
                        <a href="daftar.php">Daftar</a>
                    <?php endif ?>
                    <a href="checkout.php">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header -->

    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menulist');
            menu.classList.toggle('show');
        }
    </script>
</body>
</html>
