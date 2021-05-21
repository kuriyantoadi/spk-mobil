<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/car.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a class="simple-text logo-normal">
          SPK TOPSIS
        </a>
      </div>


      <div class="sidebar-wrapper">
        <ul class="nav">


          <?php if ($_SESSION[status]==admin){ ?>

            <li>
              <a href="halutama.php">
                <i class="nc-icon nc-tv-2"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <!-- <li>
              <a href="./dashboard.html">
                <i class="nc-icon nc-key-25"></i>
                <p>Pemilik KOS</p>
              </a>
            </li> -->
            <li>
              <a href="kriteria.php">
                <i class="nc-icon nc-alert-circle-i"></i>
                <p>Bobot Kriteria</p>
              </a>
            </li>
            <li>
              <a href="./dashboard.html">
                <i class="nc-icon nc-single-copy-04"></i>
                <p>Hasil Penilai Topsis</p>
              </a>
            </li>
            <li>
              <a href="user.php">
                <i class="nc-icon nc-single-02"></i>
                <p>Daftar Pengguna</p>
              </a>
            </li>
            <li>
              <a href="./dashboard.html">
                <i class="nc-icon nc-button-power"></i>
                <p>Logout</p>
              </a>
            </li>

          <?php } else if ($_SESSION[status]==pemilik){ ?>
            <!-- menu pemilik kos -->
            <li>
              <a href="halutama.php">
                <i class="nc-icon nc-tv-2"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li>
              <a href="./dashboard.html">
                <i class="nc-icon nc-badge"></i>
                <p>Biodata</p>
              </a>
            </li>
            <li>
              <a href="./dashboard.html">
                <i class="nc-icon nc-simple-add"></i>
                <p>Input Kamar</p>
              </a>
            </li>
            <li>
              <a href="./dashboard.html">
                <i class="nc-icon nc-paper"></i>
                <p>Daftar Kamar</p>
              </a>
            </li>
            <li>
              <a href="./dashboard.html">
                <i class="nc-icon nc-button-power"></i>
                <p>Logout</p>
              </a>
            </li>
          <?php } else if ($_SESSION[status]==user){ ?>
            <!-- menu pencari kos -->
            <li>
              <a href="halutama.php">
                <i class="nc-icon  nc-tv-2"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li>
              <a href="./dashboard.html">
                <i class="nc-icon nc-chart-bar-32"></i>
                <p>Rangking KOS</p>
              </a>
            </li>
            <li>
              <a href="./dashboard.html">
                <i class="nc-icon nc-sound-wave"></i>
                <p>Cari Kriteria</p>
              </a>
            </li>
            <li>
              <a href="./dashboard.html">
                <i class="nc-icon nc-button-power"></i>
                <p>Logout</p>
              </a>
            </li>

          <?php
          }
          ?>


        </ul>
      </div>
    </div>

    <div class="main-panel">


      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">SPK Pemilihan Mobil</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">

            <ul class="navbar-nav">

              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="logout.php">Keluar</a>

                </div>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
