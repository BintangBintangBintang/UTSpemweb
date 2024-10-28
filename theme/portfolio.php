<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

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
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Portfolio</h1>
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <img src="images/illustrations/page-title.png" alt="illustrations" class="bg-shape-1 w-100">
  <img src="images/illustrations/leaf-pink-round.png" alt="illustrations" class="bg-shape-2">
  <img src="images/illustrations/dots-cyan.png" alt="illustrations" class="bg-shape-3">
  <img src="images/illustrations/leaf-orange.png" alt="illustrations" class="bg-shape-4">
  <img src="images/illustrations/leaf-yellow.png" alt="illustrations" class="bg-shape-5">
  <img src="images/illustrations/dots-group-cyan.png" alt="illustrations" class="bg-shape-6">
  <img src="images/illustrations/leaf-cyan-lg.png" alt="illustrations" class="bg-shape-7">
</section>
<!-- /page title -->

<!-- portfolio -->
<section class="section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="btn-group btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
                    <label class="btn btn-sm btn-primary active">
                        <input type="radio" name="shuffle-filter" value="all" checked="checked" />All
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="shuffle-filter" value="web" /> Web
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="shuffle-filter" value="mobile" />Mobile
                    </label>
                    <label class="btn btn-sm btn-primary">
                        <input type="radio" name="shuffle-filter" value="desktop" />Desktop App
                    </label>
                </div>
            </div>
        </div>
        <div class="row shuffle-wrapper">

            <?php
            
            include "koneksi.php";

            // Query untuk mengambil data portfolio
            $sql = "SELECT image_path, category FROM portfolio";
            $result = $conn->query($sql);

            // Cek jika ada hasil
            if ($result->num_rows > 0) {
                // Loop melalui setiap gambar
                while($row = $result->fetch_assoc()) {
                    echo '<div class="col-lg-4 col-6 mb-4 shuffle-item" data-groups="[&quot;' . $row['category'] . '&quot;]">';
                    echo '<div class="position-relative rounded hover-wrapper">';
                    echo '<img src="' . $row['image_path'] . '" alt="portfolio-image" class="img-fluid rounded w-100 d-block">';
                    echo '<div class="hover-overlay">';
                    echo '<div class="hover-content"></div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="col-12 text-center"><p>No portfolio items found.</p></div>';
            }

            // Tutup koneksi
            $conn->close();
            ?>
        </div>
    </div>
</section>

<!-- /portfolio -->

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