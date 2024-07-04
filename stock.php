<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

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
     <?php include_once('nav.php'); ?>

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
                            <td> </td>
                        </tr>
                    </tfoot>
                  </table>              
            </div>
            <?php for($i=0;$i<=144;$i++){
                               for($j=0;$j<=6;$j++){
                                echo "192.168.0.$i";
                               }
                               
                    } ?>
            
            <p class="text-center mt-4">
                <a href="index.html" class="btn btn-primary">หน้าหลัก</a>
            </p>
        </div>
    </div>
</body>
</html>