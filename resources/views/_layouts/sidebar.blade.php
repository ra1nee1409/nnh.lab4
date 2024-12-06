<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carousel Example</title>
  <!-- Bootstrap CSS (nếu sử dụng) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Thêm CSS tùy chỉnh ở đây -->
  <style>
    .carousel-control-prev,
    .carousel-control-next {
    background-color: rgba(0, 0, 0, 0.2);  /* Màu nền nhẹ */
    border-radius: 50%;                    /* Bo tròn */
    width: 45px;
    height: 45px;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 50%;                               /* Căn giữa theo chiều dọc */
    transform: translateY(-50%);            /* Giữ nút ở trung tâm theo chiều dọc */
    opacity: 1;                             /* Luôn hiển thị */
    }

    .carousel-control-prev {
    left: 480px;                            /* Dịch nút sát vào mép trái của ảnh */
    }

    .carousel-control-next {
    right: 480px;                           /* Dịch nút sát vào mép phải của ảnh */
    }


  </style>
</head>
<body>
<div id="sidebarCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
        <img src="img/h1.png" class="d-block mx-auto" alt="Slide 1" height="300" width="500">
    </div>
    <!-- Slide 2 -->
    <div class="carousel-item">
        <img src="img/h2.png" class="d-block mx-auto" alt="Slide 2" height="300" width="500">
    </div>
    <!-- Slide 3 -->
    <div class="carousel-item">
        <img src="img/h3.png" class="d-block mx-auto" alt="Slide 3" height="300" width="500">
    </div>

  </div>
  
  <!-- Nút điều khiển -->
    <a class="carousel-control-prev" href="#sidebarCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#sidebarCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>

</div>

</body>
</html>
