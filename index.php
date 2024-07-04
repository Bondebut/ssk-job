<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Demo</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="styles.css" rel="stylesheet">
    <style>
        body {
            background-image: url('img/pexels-jeremy-bishop-1260133-2397414.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-top: 50px;
        }
        .navbar-brand img {
            border-radius: 50%;
        }
        .main-content {
            margin-top: 50px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
        }
        .menu_icon {
            cursor: pointer;
            text-align: center;
            margin: 10px;
        }
        .menu_icon img {
            width: 94px;
            height: 94px;
            border: 0;
            transition: transform 0.2s;
        }
        .menu_icon img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include_once('nav.php'); ?>

    <!-- Main Content -->
    <div class="container">
        <div class="main-content">
            <h3 class="section-title text-center">Main Content</h3>
            <div class="d-flex justify-content-around flex-wrap">
                <div class="menu_icon" onclick="window.open('stock.php');">
                    <img src="img/ready-stock.png" alt="Stock"  >
                    <br>สต็อก<br /><label style="font-size: 10px;font-weight: normal;">STOCK</label>
                </div>
                <div class="menu_icon" onclick="window.location='?ref=fmpstock&g=40';">
                    <img src="img/add_one_button_insert_plus_icon_155856.png" alt="Insert">
                    <br>เพิ่ม<br /><label style="font-size: 10px;font-weight: normal;">Insert</label>
                </div>
                <div class="menu_icon" onclick="window.location='?ref=fmpstock&g=40';">
                    <img src="img/updated_5625789.png" alt="Update">
                    <br>อัพเดทสถานะ<br /><label style="font-size: 10px;font-weight: normal;">Update</label>
                </div>
                <div class="menu_icon" onclick="window.location='?ref=fmpstock&g=40';">
                    <img src="img/—Pngtree—delete vector icon_4236653.png" alt="Delete">
                    <br>ลบ<br /><label style="font-size: 10px;font-weight: normal;">Delete</label>
                </div>
            </div>
            <p class="text-center mt-4">
                <a href="gallery.php" class="btn btn-primary" target="_blank">Go to Gallery</a>
            </p>
        </div>
    </div>

</body>
</html>
