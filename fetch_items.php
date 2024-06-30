<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'conn.php';


$stmt = $pdo->query('SELECT * FROM stock');
$stocks = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Stock</title>
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
        table, th, td {
            border:1px solid black;
        }
        td {
            height: auto;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="img/clipart1764470.png" alt="Logo" width="30" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <div class="main-content">
            <h3 class="section-title text-center">Stock</h3>
            <div class="d-flex justify-content-around flex-wrap">
                <table style="width:100%; text-align:center;">
                    <thead>
                        <tr>
                            <th>รายการ</th>
                            <th>วันที่สั่ง</th>
                            <th>รหัสรายการ</th>
                            <th>สถานะ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($stocks as $stock): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($stock['item_name']); ?></td>
                                <td><?php echo htmlspecialchars($stock['order_date']); ?></td>
                                <td><?php echo htmlspecialchars($stock['item_code']); ?></td>
                                <td><?php echo htmlspecialchars($stock['status']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <p class="text-center mt-4">
                <a href="index.html" class="btn btn-primary">หน้าหลัก</a>
            </p>
        </div>
    </div>
</body>
</html>
