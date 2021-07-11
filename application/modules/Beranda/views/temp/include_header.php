<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

    <h1 class="logo mr-auto"><a href="index.html">WBS Sistem</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url() ?>beranda/index">Home</a></li>
          <li claa="<?=$this->uri->segment(1) == 'beranda/Aspirasi()' ? 'active' : ''?>">
          <a href="<?= base_url('Beranda/aspirasi') ?>">Aspirasi</a>
          </li>
          <li><a href="<?= base_url('beranda/Saran') ?>">Saran</a></li>
          <li><a href="<?= base_url('beranda/Lapor') ?>">Lapor</a></li>
          <li><a href="<?= base_url('beranda/Permohonan') ?>">Permohonan Informasi</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="<?= base_url('Auth/login') ?>" class="get-started-btn scrollto">Login</a>

    </div>
  </header>