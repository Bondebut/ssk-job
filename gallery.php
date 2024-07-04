<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Image Gallery</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
        .gallery-img {
            width: 100%;
            height: 100%;
            border-radius: 5px;
            transition: transform 0.2s;
        }
        .gallery-img:hover {
            transform: scale(1.05);
        }
        .modal-img {
            width: 100%;
            height: auto;
        }
        .section-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #096b00;
        }
        .gallery {
            margin-top: 50px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include_once('nav.php'); ?>
    
<!-- Image Gallery Section -->
<div class="gallery">
    <h3 class="section-title text-center">กระตุ้นกำลังใจ</h3>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal1">
                <img src="https://img2.beritasatu.com/cache/beritasatu/480x310-3/2024/03/1709708338-1080x826.webp" alt="Karina 1" class="gallery-img">
            </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal2">
                <img src="https://scontent.fkkc3-1.fna.fbcdn.net/v/t39.30808-6/350532349_813979006513487_6848864328003938796_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeE4yk_hOMza8OycIFIwhnJ9rUD29xguQ46tQPb3GC5DjpqxujZHJQ9wbtSrOajPKqpk1NAfz_yFffA_QLMNZcpN&_nc_ohc=JUy5oPHunigQ7kNvgEMLEks&_nc_ht=scontent.fkkc3-1.fna&oh=00_AYCAY5wGv6gbL7dmsaqS9KBsafQ09pAaQbyIiFn8jznbKg&oe=667AE13D" alt="Sample 2" class="gallery-img">
            </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal3">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/230601_Karina_%28aespa%29.jpg/800px-230601_Karina_%28aespa%29.jpg" alt="Sample 3" class="gallery-img">
            </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal4">
                <img src="img/sample4.jpg" alt="Sample 4" class="gallery-img">
            </a>
        </div>
    </div>
</div>
</div>

<!-- Modals for Image Previews -->
<div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="imageModalLabel1">Image Preview</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="https://img2.beritasatu.com/cache/beritasatu/480x310-3/2024/03/1709708338-1080x826.webp" alt="Karina 1" class="modal-img">
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel2" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="imageModalLabel2">Image Preview</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="https://scontent.fkkc3-1.fna.fbcdn.net/v/t39.30808-6/350532349_813979006513487_6848864328003938796_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeE4yk_hOMza8OycIFIwhnJ9rUD29xguQ46tQPb3GC5DjpqxujZHJQ9wbtSrOajPKqpk1NAfz_yFffA_QLMNZcpN&_nc_ohc=JUy5oPHunigQ7kNvgEMLEks&_nc_ht=scontent.fkkc3-1.fna&oh=00_AYCAY5wGv6gbL7dmsaqS9KBsafQ09pAaQbyIiFn8jznbKg&oe=667AE13D" alt="Karina 2" class="modal-img">
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="imageModal3" tabindex="-1" aria-labelledby="imageModalLabel3" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="imageModalLabel3">Image Preview</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/230601_Karina_%28aespa%29.jpg/800px-230601_Karina_%28aespa%29.jpg" alt="Karina 3" class="modal-img">
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="imageModal4" tabindex="-1" aria-labelledby="imageModalLabel4" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="imageModalLabel4">Image Preview</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <img src="img/sample4.jpg" alt="Sample 4" class="modal-img">
        </div>
    </div>
</div>
</div>
</body>
</html>
