<!DOCTYPE html>

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Maharaya Bintangku Aridhana's Porto</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Creative Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Kross Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="kross" />
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

</head>
<body>
<?= include "navbar.php"?>
</header>

<?php
include 'koneksi.php';


$headerQuery = "SELECT header FROM home"; 
$headerResult = $conn->query($headerQuery);
$headers = $headerResult->fetch_all(MYSQLI_ASSOC);

$aboutQuery = "SELECT deskripsi FROM home"; 
$aboutResult = $conn->query($aboutQuery);
$aboutDescription = $aboutResult->fetch_assoc();


$factQuery = "SELECT fact1, fact2, fact3 FROM quickfacts"; 
$factResult = $conn->query($factQuery);
$facts = $factResult->fetch_all(MYSQLI_ASSOC);


$conn->close();
?>

<!-- hero area -->
<section class="hero-area bg-primary" id="parallax">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 mx-auto">
        <h1 class="text-white font-tertiary">
          <?php
          echo implode("<br>", array_column($headers, 'header')); // Display headers
          ?>
        </h1>
      </div>
    </div>
  </div>
  <div class="layer-bg w-100">
    <img class="img-fluid w-100" src="images/illustrations/leaf-bg.png" alt="bg-shape">
  </div>
  <!-- Social icons -->
  <ul class="list-unstyled ml-5 mt-3 position-relative zindex-1">
    <li class="mb-3">
      <a class="text-white" href="https://www.facebook.com/maharaya.bintangku/" target="_blank">
          <i class="ti-facebook"></i>
      </a>
    </li>
    <li class="mb-3">
      <a class="text-white" href="https://www.instagram.com/bintangeuy_/" target="_blank">
          <i class="ti-instagram"></i>
      </a>
    </li>
  </ul>
</section>
<!-- /hero area -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <p class="font-secondary paragraph-lg text-dark">
          <?php
          echo $aboutDescription['deskripsi']; // Display about description
          ?>
        </p>
        <a href="about.php" class="btn btn-transparent">Pengen tau lebih banyak ?</a>
      </div>
    </div>
  </div>
</section>
<!-- /about -->


<!-- Quick fasct -->
<section class="section bg-primary position-relative testimonial-bg-shapes">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title text-white mb-5">Quick Facts</h2>
      </div>
      <div class="col-lg-10 mx-auto testimonial-slider">

      <?php foreach ($facts as $fact): ?>
          <!-- slider-item -->
          <div class="text-center testimonial-content">
            <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
            <p class="text-white mb-4"><?php echo $fact['fact1']; ?></p>
            <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          </div>
          <div class="text-center testimonial-content">
            <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
            <p class="text-white mb-4"><?php echo $fact['fact2']; ?></p>
            <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          </div>
          <div class="text-center testimonial-content">
            <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
            <p class="text-white mb-4"><?php echo $fact['fact3']; ?></p>
            <i class="ti-quote-right text-white icon mb-4 d-inline-block"></i>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
  <!-- bg shapes -->
  <img src="images/backgrounds/map.png" alt="map" class="img-fluid bg-map">
  <img src="images/illustrations/dots-group-v.png" alt="bg-shape" class="img-fluid bg-shape-1">
  <img src="images/illustrations/leaf-orange.png" alt="bg-shape" class="img-fluid bg-shape-2">
  <img src="images/illustrations/dots-group-sm.png" alt="bg-shape" class="img-fluid bg-shape-3">
  <img src="images/illustrations/leaf-pink-round.png" alt="bg-shape" class="img-fluid bg-shape-4">
  <img src="images/illustrations/leaf-cyan.png" alt="bg-shape" class="img-fluid bg-shape-5">
</section>


<!-- footer -->
<?php include "footer.php"?>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- filter -->
<script src="plugins/shuffle/shuffle.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>
