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
</head>
<body>
   
    <?php include 'navbar.php';?>
    
    <div id="carouselExample" class="carousel slide" >
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
                <img src="./aset/bg.png" class="d-block w-100" alt="..." >
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
                <img src="./aset/KantorTelkom.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
                <img src="https://img.alinea.id/img/content/2019/08/06/45293/utang-telkom-naik-20-8-akibat-pajak-9ErbfIjBGk.jpg" class="d-block w-100" alt="...">
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
    
    <div class="container">
      <h1 class="text-center"> judul</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card"
                data-aos="fade-up"
     data-aos-duration="3000">
                    <img src="./aset/KantorTelkom.jpg" class="card-img-top" alt="Gambar 1">
                    <div class="card-body">
                        <h5 class="card-title">Judul Gambar 1</h5>
                        <p class="card-text">Penjelasan gambar 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-aos="fade-up"
     data-aos-duration="2000">
                    <img src="./aset/KantorTelkom.jpg" class="card-img-top" alt="Gambar 2">
                    <div class="card-body">
                        <h5 class="card-title">Judul Gambar 2</h5>
                        <p class="card-text">Penjelasan gambar 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" data-aos="fade-up"
     data-aos-duration="1000">
                    <img src="./aset/KantorTelkom.jpg" class="card-img-top" alt="Gambar 3">
                    <div class="card-body">
                        <h5 class="card-title">Judul Gambar 3</h5>
                        <p class="card-text">Penjelasan gambar 3.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-auto">
                <a href="#" class="btn btn-primary">Lihat Semua</a>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="container">
    <!-- Bagian 2 -->
    <div class="row" style="background: linear-gradient(to right, #DB1514, #FFFF)">
      <div class="col-md-6 d-flex align-items-center justify-content-center" >
        <div>
          <h1>Tulisan di Tengah</h1>
          <p>Ini adalah contoh teks yang berada di tengah gambar.</p>
          <div class="text-center">
            <button class="btn btn-primary">Button</button>
          </div>
        </div>
      </div>
      <div class="col-md-6" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
        <img src="./aset/KantorTelkom.jpg" alt="" class="img-fluid">
      </div>
    </div>

    <!-- Bagian 3 -->
    <div class="row">
      <div class="col-md-6">
        <img src="./aset/KantorTelkom.jpg" alt="Gambar" class="img-fluid" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
      </div>
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <div>
          <h1>Tulisan di Tengah</h1>
          <p>Ini adalah contoh teks yang berada di tengah gambar.</p>
          <div class="text-center">
            <button class="btn btn-primary">Button</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<div>
<h1 class="text-center"> Lokasi</h1>
</div>
  <div id="map">

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
    </div>
    <div id="footer"></div>
    <div class="fixed-bottom-right">
        <button class="round-button">
            <img src="./aset/help.png" alt="Gambar" />
            <span>Bantuan</span>
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
