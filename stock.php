<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
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

    <!--bodycontent-->
    <div class="container">
        <div class="main-content">
            <h3 class="section-title text-center">Stock</h3>
            <div class="d-flex justify-content-around flex-wrap">
                <table style="width:100%; text-align:center;" >
                    <thead>
                      <th>รายการ</th>
                      <th>วันที่สั่ง</th>
                      <th>รหัสรายการ</th>
                      <th>สถานะ</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor sit amet.</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, atque.</td>
                            <td>Lorem, ipsum dolor.</td>
                            <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam?</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                        </tr>
                    </tfoot>
                  </table>              
            </div>
            
            <p class="text-center mt-4">
                <a href="index.html" class="btn btn-primary">หน้าหลัก</a>
            </p>
        </div>
    </div>
</body>
</html>