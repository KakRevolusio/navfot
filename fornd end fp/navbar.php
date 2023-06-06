<style>
    .navbar {
      display: flex;
      flex-direction: column;
      align-items: center;
      font-weight: bold;
    }
    .navbar-nav .nav-item .nav-link:hover {
      color: red !important;
     
    }
    .dropdown-submenu {
      position: relative;
    }
    .dropdown-submenu .dropdown-menu {
      position: absolute;
      left: 100%;
      top: 0;
      margin-top: 0;
    }
    .dropdown-submenu:hover .dropdown-menu {
      display: block;
    }
  </style>
  <!-- logo -->
<nav class="navbar navbar-expand-lg bg-light  ">
    <a class="navbar-brand" href="#">
      <img src="./aset/logo.png" alt="Logo" width="150" height="80">
    </a>

    <!-- menu 1 -->

    <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link " href="#">Beranda</a>
        </li>
        <!-- menu2 -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang Kami
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdown1">
              <li >
                <a class="dropdown-item " href="#">Struktur Perusahaan</a>
                <a class="dropdown-item " href="#">Visi Misi</a>
                <a class="dropdown-item " href="#">Manajemen</a>
                <a class="dropdown-item " href="#">Latar Perusahaan</a>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Devisi Bagian</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Pemograman</a></li>
                  <li><a class="dropdown-item" href="#">Marketing</a></li>
                  <li><a class="dropdown-item" href="#">Lapangan</a></li>
                </ul>
              </li>
                <a class="dropdown-item " href="#">Kebijakan Perusahaan</a>
                </li>
              </li>
            </ul>
          </li>
        <!-- menu3 -->
    
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdown1">
              <li >
                <a class="dropdown-item " href="#">Layanan TV</a>
                <a class="dropdown-item " href="#">Layanan Telefon</a>
                <a class="dropdown-item " href="#">Layanan internet</a>
                <a class="dropdown-item " href="#">Kebijakan</a>
                <a class="dropdown-item " href="#">Panduan Layanan</a>
                <a class="dropdown-item " href="#">Tips Memilih layanan</a>
                <a class="dropdown-item " href="#">Garansi Layanan</a>
                <a class="dropdown-item " href="#">Bantuan Instan</a>
              </li>
              </li>
            </ul>
          </li>

        <!-- menu4 -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Paket
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdown1">
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Paket 1</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Paket</a></li>
                  <li><a class="dropdown-item" href="#">Tentang Paket</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Paket 2</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Paket</a></li>
                  <li><a class="dropdown-item" href="#">Tentang Paket</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Paket 3</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Paket</a></li>
                  <li><a class="dropdown-item" href="#">Tentang Paket</a></li>
                </ul>
              </li>
              <li class="nav-item">
          <a class="dropdown-item" href="#">Promo</a>
        </li>
        <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="#">Upgrade</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Harian</a></li>
                  <li><a class="dropdown-item" href="#">Mingguan</a></li>
                  <li><a class="dropdown-item" href="#">Bulanan</a></li>
                </ul>
              </li>
              <li class="nav-item">
          <a class="dropdown-item" href="#">Kebijakan</a>
          <a class="dropdown-item" href="#">Syarat Dan Ketentuan</a>
          <a class="dropdown-item" href="#">Panduan Produk</a>
          <a class="dropdown-item" href="#">Garansi</a>
          <a class="dropdown-item" href="#">Bantuan Instan</a>
        </li>
            </ul>
          </li>
        <!-- menu5 -->
        <li class="nav-item">
          <a class="nav-link" href="#">Berita Terkini</a>
        </li>
        <!-- meu 6 -->
       <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <!-- menu7 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Galeri
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Galeri Foto </a></li>
            <li><a class="dropdown-item" href="#">Galeri Vidio </a></li>
          </ul>
        </li>
        <!-- menu8 -->
        <li class="nav-item">
          <a class="nav-link" href="#">Kemitraan</a>
        </li>
        <!-- menu9 -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Lowongan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Alur Pendaftaran</a></li>
            <li><a class="dropdown-item" href="#">Syarat Dan ketentuan </a></li>
            <li><a class="dropdown-item" href="#">Kebijakan  </a></li>
            <li><a class="dropdown-item" href="#">Daftar </a></li>
          </ul>
        </li>
    </div>
  </nav>