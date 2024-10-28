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
    <?php include 'navbar.php'; ?>
</header>

<!-- page title -->
<section class="page-title-alt bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12">
      <?php include 'koneksi.php';


$aboutHeaderQuery = "SELECT header FROM about"; 
$aboutHeaderResult = $conn->query($aboutHeaderQuery);
$aboutHeader = $aboutHeaderResult->fetch_assoc(); 

$aboutDeskripsiQuery = "SELECT deskripsi FROM about"; 
$aboutDeskripsiResult = $conn->query($aboutDeskripsiQuery);
$aboutDeskripsi = $aboutDeskripsiResult->fetch_assoc(); 

$conn->close();
?>

<!-- Bagian Tentang Saya -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-white font-tertiary">
                <?php 
                echo $aboutHeader['header']; 
                ?>
            </h1>
        </div>
    </div>
</div>

      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/illustrations/leaf-bg-top.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/dots-group-sm.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-6">
</section>
<!-- /page title -->

<!-- about -->
<section class="section pt-5">
  <div class="container">
    <div class="row"> 
      <div class="col-md-8">
      <?php echo nl2br($aboutDeskripsi['deskripsi']); ?>
      </div>

      <div class="col-md-4 text-center drag-lg-top">
        <div class="shadow-down mb-4">
          <img src="images/about/fotogw.jpg" alt="fotogw" class="img-fluid w-100 rounded-lg border-thick border-white">
        </div>
        <img src="images/about/signature.png" alt="signature" class="img-fluid">
        <h4>Saya Sendiri.</h4>
      </div>
  
    </div>
  </div>
</section>
<!-- /about -->



<!-- footer -->
<?= include "footer.php"?>
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