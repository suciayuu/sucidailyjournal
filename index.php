<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Journal</title>
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" 
      rel="stylesheet"
    >
  
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
      crossorigin="anonymous"
    />
    <style>
      .dark-mode {
        background-color: #6e7985;
        color: #f8f9fa;
      }
      .dark-mode .bg-danger-subtle {
        background-color: #40474f !important;
      }
      .bg-danger-subtle {
        background-color: pink !important;
      }
      .navbar-dark-mode {
        background-color: #6e7985;
      }
      .dark-mode .card {
        background-color: #9fa7b0;
        color: #ffffff;
        border: none;
      }
      .dark-mode footer {
        background-color: #6e7985; 
      }
    </style> 
    <style>
      /* CSS to center the image when text is hidden */
      .centered-image {
        display: flex;
        justify-content: center;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#"><i>MY Daily Journal</i></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
              <li class="nav-item">
                <a class="nav-link" href="#"><b>Home</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article"><b>Article</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery"><b>Gallery</b></a>
              </li>
	            <li class="nav-item">
                <a class="nav-link" href="#schedule"><b>Schedule</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about me"><b>About Me</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">Login</a>
              </li>

            </ul>
            <button id="darkModeToggle" class="btn btn-outline-secondary ms 2">
              <i id="darkModeIcon" class="bi bi-moon-fill"></i>
            </button>
          </div>
        </div>
      </nav>
    <!-- nav end -->
    <!-- hero begin -->
    <section id="hero" class="text-center p-5 pt-5 pb-5 bg-danger-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img
            class="img-fluid"
            src="img/fotodiri.jpg"
            alt=""
            width="460"
          />
          <div>
            <h1 class="fw-bold display-4 justify-content-center">Tracing footsteps, Creating memories with Loved Ones</h1>
            <h4 class="lead display-7">
              "Selamat datang di dunia perjalanan penuh cinta, tempat setiap momen menjadi cerita indah untuk dikenang. 
              Temukan keajaiban liburan bersama orang terkasih, di mana senyuman, canda, dan kebahagiaan menyatu dalam tiap langkah petualangan. 
              Bersiaplah untuk menciptakan kenangan tak terlupakan di tempat-tempat istimewa, karena setiap detik berharga saat dirayakan bersama."
            </h4>
            <h6>
              <span id="tanggal"></span>
              <span id="jam"></span>
            </h6>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->
<!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-danger-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/g5.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/g10.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/g4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/g7.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/fotoku.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img/fotome.jpg" class="d-block w-100" alt="...">
                </div>          
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            
        </div>

    </section>
    <!-- gallery end -->

    <!--schedule begin-->
	   <section id="schedule" class="text-center p-5">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Schedule</h1>
            <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title" style="background-color: red">Senin <hr></h5>
                      <p class="card-text">Probabilitas dan Statistik <br>| H.4.7 | 12.30-15.00 <br>Rekayasa Perangkat Lunak <br>| H.4.6 | 15.30-18.00</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title" style="background-color: red">Selasa <hr></h5>
                      <p class="card-text">Sistem Operasi  <br>| H.3.11 | 09.30-12.00 <br>Logika Informatika <br>| H.4.5 | 15.30-18.00</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title" style="background-color: red">Rabu <hr></h5>
                      <p class="card-text">Data Mining <br>| H.4.9 | 09.30-12.00 <br>Basis Data(P) <br>| D.3.M | 14.10-15.50</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                      <div class="card-body">
                        <h5 class="card-title" style="background-color: red">Kamis <hr></h5>
                        <p class="card-text">Pemrograman Berbasis Web <br>| D.2.J | 12.30-14.10 <br>Kriptografi <br>| H.4.11 | 15.30-18.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <div class="card-body">
                        <h5 class="card-title" style="background-color: red">Jumat <hr></h5>
                        <p class="card-text">Basis Data(T) <br>| H.5.5 | 10.20-12.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100">
                      <div class="card-body">
                        <h5 class="card-title" style="background-color: red">Sabtu <hr></h5>
                        <p class="card-text">FREE</p>
                      </div>
                    </div>
                  </div>
        </div>

    </section>
    <!--schedule end-->
    
    <!-- about me begin -->
    <section id="about me" class="text-center p-5 pt-5 pb-5 bg-danger-subtle text-sm-start">
      <div class="container">
        <div  id="content" class="d-sm-flex align-items-center">
          <img
          id="toggleImage"
            class="img-fluid rounded-circle me-4"
            src="img/fotodiri.jpg"
            alt=""
            width="460"
            onclick="toggleContent()"
            style="cursor: pointer;"
          />
          <div id="textContainer">
            <p>A11.2023.15192</p>
            <h1 class="fw-bold display-4 justify-content-center">Suci Ayu Veronica</h1>
            <p>Program Studi Teknik Informatika</p>
            <h4>
              <a href="https://dinus.ac.id/" target="_blank" styl="text-decoration: none; color:"> 
                Universitas Dian Nuswantoro</a>
            </h4>
          </div>
        </div>
      </div>
    </section>
    <!-- about me end -->

    <!-- footer begin -->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/udinusofficial"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="https://twitter.com/udinusofficial"><i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
        <a href="https://wa.me/+628985956716"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
      </div>
      <div>
        Suci Ayu Veronica &copy; 2024
      </div>

    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous">
    </script>
    <script type="text/javascript">
      window.setTimeout("tampilkanWaktu()", 1000);

      function tampilkanWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilkanWaktu()", 1000);
        document.getElementById("tanggal").innerHTML = 
        waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML = 
        waktu.getHours() +
        ":" +
        waktu.getMinutes() +
        ":" +
        waktu.getSeconds();
      }
    const darkModeToggle = document.getElementById("darkModeToggle")
    const darkModeIcon = document.getElementById("darkModeIcon");

    function enableDarkMode() {
      document.body.classList.add("dark-mode");
      document.querySelector("nav").classList.add("navbar-dark-mode");
      localStorage.setItem("darkMode", "enabled");
      darkModeIcon.classList.replace("bi-moon-fill", "bi-sun-fill");
    }
    function disableDarkMode() {
      document.body.classList.remove("dark-mode");
      document.querySelector("nav").classList.remove("navbar-dark-mode");
      localStorage.setItem("darkMode", "disabled");
      darkModeIcon.classList.replace("bi-sun-fill", "bi-moon-fill");
    }
    if (localStorage.getItem("darkMode") == "enabled") {
      enableDarkMode();
    } else {
      disableDarkMode();
    }
    darkModeToggle.addEventListener("click", () => {
      if (localStorage.getItem("darkMode") !== "enabled") {
        enableDarkMode();
      } else {
        disableDarkMode();
      }
    });
    </script>
    <script>
      function toggleaContent() {
        const textContainer = document.getElementById("textContainer");
        if (textContainer.style.display === "none") {
          textContainer.style.display = "block";
        } else {
          textContainer.style.display = "none";
        }
      }
    </script>

  </body>
</html>