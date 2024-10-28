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
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Resume</h1>
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


<!-- skills -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Skills</h2>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#fdb157">
            <div class="wave" data-progress="80%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Desain UI/UX Android dan Web (80%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#9473e6">
            <div class="wave" data-progress="70%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Web Programming (70%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#bdecf6">
            <div class="wave" data-progress="90%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">Mobile Programming (90%)</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
        <div class="card shadow text-center">
          <div class="position-relative rounded-top progress-wrapper" data-color="#ffbcaa">
            <div class="wave" data-progress="80%"></div>
          </div>
          <div class="card-footer bg-white">
            <h4 class="card-title">App Programming (80%)</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /skills -->

<!-- experience -->
<section class="section">
  <div class="container">
    <div class="row justify-content-around">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Experience</h2>
      </div>

      <?php
      include "koneksi.php";
      
 
      $sql = "SELECT years, position, deskripsi FROM experience";
      $result = $conn->query($sql);

      
      if ($result->num_rows > 0) {
          
          while ($row = $result->fetch_assoc()) {
              echo '<div class="col-lg-3 col-md-4 text-center">';
              echo '<p class="mb-0">' . $row['years'] . '</p>';
              echo '<h4>' . $row['position'] . '</h4>';
              echo '<h6 class="text-light">' . $row['deskripsi'] . '</h6>';
              echo '</div>';
          }
      } else {
          echo '<div class="col-lg-12 text-center"><p>No experience found.</p></div>';
      }

      
      $conn->close();
      ?>
    </div>
    
  </div>
</section>
<!-- ./experience -->


<section class="section position-relative">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">Education</h2>
      </div>

      <?php
      
      include "koneksi.php";
      $sql = "SELECT years, degree, institution FROM education";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
         
          while ($row = $result->fetch_assoc()) {
              echo '<div class="col-lg-6 col-md-6 mb-80">';
              echo '<div class="d-flex">';
              echo '<div class="mr-lg-5 mr-3">';
              echo '<i class="ti-medall icon icon-light icon-bg bg-white shadow rounded-circle d-block"></i>'; // Menampilkan ikon
              echo '</div>';
              echo '<div>';
              echo '<p class="text-dark mb-1">' . $row['years'] . '</p>';
              echo '<h4>' . $row['degree'] . '</h4>';
              echo '<p class="mb-0 text-light">' . $row['institution'] . '</p>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
          }
      } else {
          echo '<div class="col-lg-12 text-center"><p>No education found.</p></div>';
      }

      // Tutup koneksi
      $conn->close();
      ?>
    </div>
  </div>
  <!-- bg image -->
  <img class="img-fluid edu-bg-image w-100" src="images/backgrounds/education-bg.png" alt="bg-image">
</section>


<!-- Hobbies -->

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Hobbies</h2>
      </div>

      <?php
      include "koneksi.php";

      // Query untuk mengambil data hobi
      $sql = "SELECT hobby, description FROM hobbies";
      $result = $conn->query($sql);

      // Cek jika ada hasil
      if ($result->num_rows > 0) {
          // Loop melalui setiap hobi
          while($row = $result->fetch_assoc()) {
              echo '<div class="col-md-4 mb-4 mb-md-0">';
              echo '<div class="card hover-shadow shadow">';
              echo '<div class="card-body text-center px-4 py-5">';

              // Tampilkan nama hobi
              echo '<h4 class="mb-4">' . $row['hobby'] . '</h4>';

              // Tampilkan deskripsi dari database
              echo '<p>' . $row['description'] . '</p>';

              echo '</div>';
              echo '</div>';
              echo '</div>';
          }
      } else {
          echo '<div class="col-12 text-center"><p>No hobbies found.</p></div>';
      }

      // Tutup koneksi
      $conn->close();
      ?>

    </div>
  </div>
</section>


<!-- Hobbies -->

<!-- footer -->
<?= include "footer.php";
?><!-- /footer -->

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