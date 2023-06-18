<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    body {
      background: linear-gradient(to right, rgba(255, 0, 0, 0),#ff0000);
      background-size: 200% 200%;
      animation: gradientAnimation 5s ease infinite;
    }

    @keyframes gradientAnimation {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }
    .rounded-corners {
    border-radius: 10px;
    overflow: hidden;
  }
  
  </style>
</head>
<body>
   
    <?php include 'navbar.php';?>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./aset/gmb1.jpg" class="d-block w-100" alt="Gambar 1">
      </div>
      <div class="carousel-item">
        <img src="./aset/gmb2.jpg" class="d-block w-100" alt="Gambar 1">
      </div>
      <div class="carousel-item">
        <img src="./aset/gmb3.jpg" class="d-block w-100" alt="Gambar 1">
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


    <!-- Pencapaian  -->
    
    <div class="container bg-white rounded-corners mt-4">
      <div class="col-3 mx-auto bg-white p-1 mb-1  mt-4 rounded-pill">
        <h1 class="text-center m-0">Pencapaian</h1>
      </div>
  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card" data-aos="fade-up" data-aos-duration="3000">
        <img src="./aset/piagam.jpg" class="card-img-top " alt="Gambar 1">
        <div class="card-body">
          <h5 class="card-title">
 Best Fast Internet In Yogyakarta </h5>
          <p class="card-text">Penghargaan Penyedia Layanan Tercepat Diyogya karta Pada Tahun 2023</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card " data-aos="fade-up" data-aos-duration="2000">
        <img src="./aset/piagam.jpg" class="card-img-top" alt="Gambar 2">
        <div class="card-body">
          <h5 class="card-title">Stable Internet Speed Yogyakarta</h5>
          <p class="card-text ">Penyedia Layanan Internet Tercepat dan Stabil Di Seluruh Yogyakarta Pada Tahun 2023</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" data-aos="fade-up" data-aos-duration="1000">
        <img src="./aset/piagam3.jpg" class="card-img-top" alt="Gambar 3">
        <div class="card-body">
          <h5 class="card-title"> Indonesia Best Brand Award</h5>
          <p class="card-text">Indigogo meraih Indonesia Best Brand Award kategori Fixed Broadband Tahun 2023</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-end mt-4 py-3">
    <div class="col-auto">
      <a href="#" class="btn btn-primary">Lihat Semua</a>
    </div>
  </div>
</div>

<!-- Bagian 2 -->
<div class="container mt-4">
  <div class="row rounded-corners" style="background: linear-gradient(to right, #DB1514, #FFFF)">
    <div class="col-md-6 d-flex align-items-center justify-content-center">
      <div>
        <h1 class="text-center">Seminar dan Workshop</h1>
        <p class="text-center">Memfasilitasi pembelajaran dan peningkatan pengetahuan, pemahaman, dan keterampilan ,memberikan informasi yang berharga kepada peserta dan meningkatkan pemahaman mereka tentang topik yang dibahas.</p>
        <div class="text-center">
          <button class="btn btn-primary">Ikuti</button>
        </div>
      </div>
    </div>
    <div class="col-md-6" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
      <img src="./aset/gmb4.png" alt="" class="img-fluid">
    </div>
  </div>
</div>

<!-- Bagian 3 -->
<div class="container mt-4 bg-white rounded-corners">
<div class="row " style="background: linear-gradient(to right,  #FFFF,#DB1514)">
    <div class="col-md-6 d-flex align-items-center justify-content-center">
      <img src="./aset/gmb6.png" alt="Gambar" class="img-fluid" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
    </div>
    <div class="col-md-6 d-flex align-items-center justify-content-center">
      <div>
        <h1 class="text-center">Testimony Penguna</h1>
        <p class="text-center">Pernyataan atau kesaksian yang diberikan oleh Pelangan tentang pengalaman, pandangan, atau pengetahuan mereka terkait suatu peristiwa, situasi, atau subjek tertentu.</p>
        <div class="text-center">
          <button class="btn btn-primary">Ulasan</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="py-5 text-center container mt-4 rounded-corners bg-white" data-aos="fade-up" data-aos-duration="2000" style="background-image: url('./aset/gmb7.png'); background-size: cover;">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Forum Diskusi</h1>
      <p class="lead text-body-secondary"> <b> Sebuah platform online di mana pengguna dapat berinteraksi dan berbagi informasi dalam bentuk pesan dan topik yang terorganisir.<b></p>
      <p>
        <a href="#" class="btn btn-primary my-2">Diskusi Kuy</a>
      </p>
    </div>
  </div>
</div>



</div>
<div class="container my-5 ">
    <!-- Card 1 -->
    <div class="row d-flex justify-content-center align-items-center ">
        <div class="col-md-4" data-aos="fade-up"  data-aos-duration="1000">
            <div class="card emphasis-color">
                <div class="card-body">
                    <h2 class="text-center card-title mt-5"><b>Saran Dan Masukan</b></h2>
                    <img class="img-fluid w-100 w-auto" src="./aset/gmb8.png" alt="">
                    <p class="text-center mt-4 mb-4">Berikan Saran Dan Masukan Mu DiSisni
                    </p>
                    <div class="d-flex justify-content-center align-items-center mt-5">
                        <button class="btn btn-outline-dark btn btn-light text-danger">Mulai</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- CARD 2 -->
        <div class="col-md-4" data-aos="fade-up"  data-aos-duration="3000">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <h2 class="text-center card-title mt-4">Pendaftaran</h2>
                    
                    <img class="img-fluid w-100 w-auto" src="./aset/gmb9.png" alt="">
                    <p class="text-center mt-3 mb-4">Kami Menyedekiakan Lowongan Pekerjaan Untuk Semua Orang
                    </p>
                    <div class="d-flex justify-content-center align-items-center mt-5">
                        <button class="btn btn-outline-dark btn btn-light text-danger">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container ">
      <div class="col-2 mx-auto bg-white p-1 mb-1  mt-4 rounded-pill">
        <h1 class="text-center m-0">Lokasi</h1>
      </div>
  <div id="map" class="container">

  </div>
 
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Membuat peta
        var map = L.map('map').setView([-7.7929, 110.4089], 15);

        // Menambahkan layer peta dasar menggunakan OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Menambahkan marker untuk Amikom Yogyakarta
        var marker = L.marker([-7.7929, 110.4089]).addTo(map);
        marker.bindPopup("<b>Amikom Yogyakarta</b><br>Universitas Amikom Yogyakarta").openPopup();
    </script>
      <!-- batuan   -->
    </div >
    <div id="footer"></div>
    <div class="fixed-bottom-right" >
        <button class="round-button">
          <a href="bantuan.php">
            <img src="./aset/help.png" alt="Gambar"  />
            <span>Bantuan</span>
            </a>
        </button>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script>
        window.addEventListener("scroll", function() {
            var button = document.querySelector(".fixed-bottom-right");
            var footer = document.getElementById("footer");
            var buttonOffset = button.offsetTop + button.offsetHeight;
            var footerOffset = footer.offsetTop;

            if (window.pageYOffset + window.innerHeight >= footerOffset) {
                button.classList.add("hide");
            } else {
                button.classList.remove("hide");
            }
        });
    </script>

    <?php include 'footer.php';?>
    
    
</body>
</html>
