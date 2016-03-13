<aside id="aside" class="app-aside modal fade folded" role="menu">
    <div class="left">
      <div class="box bg-white">
        <div class="navbar md-whiteframe-z1 no-radius green">
            <!-- brand -->
            <a class="navbar-brand">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve" style="
                    width: 24px; height: 24px;">
                  <path d="M 50 0 L 100 14 L 92 80 Z" fill="rgba(139, 195, 74, 0.5)"></path>
                  <path d="M 92 80 L 50 0 L 50 100 Z" fill="rgba(139, 195, 74, 0.8)"></path>
                  <path d="M 8 80 L 50 0 L 50 100 Z" fill="#f3f3f3"></path>
                  <path d="M 50 0 L 8 80 L 0 14 Z" fill="rgba(220, 220, 220, 0.6)"></path>
                </svg>
              <img src="<?php echo base_url();?>assets/images/logo.png" alt="." style="max-height: 36px; display:none">
              <span class="hidden-folded m-l inline">Admin Panel</span>
            </a>
            <!-- / brand -->
        </div>
        <div class="box-row">
          <div class="box-cell scrollable hover">
            <div class="box-inner">
              <div class="p hidden-folded blue-50" style="background-image:url(<?php echo base_url();?>assets/images/bg.png); background-size:cover">
                <div class="rounded w-64 bg-white inline pos-rlt">
                  <img src="<?php echo base_url();?>assets/images/a0.jpg" class="img-responsive rounded">
                </div>
                <a class="block m-t-sm" ui-toggle-class="hide, show" target="#nav, #account">
                  <span class="block font-bold">Ramadhan</span>
                  <span class="pull-right auto">
                    <i class="fa inline fa-caret-down"></i>
                    <i class="fa none fa-caret-up"></i>
                  </span>
                  Administrator
                </a>
              </div>
              <div id="nav">
                <nav ui-nav>
                  <ul class="nav">
                  <!-- Beranda -->
                    <li>
                      <a md-ink-ripple href="home">
                        <i class="icon mdi-action-home i-20"></i>
                        <span class="font-normal">Beranda</span>
                      </a>
                    </li>
                  <!-- Data Siswa -->
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                        <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-social-group i-20">
                        </i>
                        <span class="font-normal">
                          Data Siswa
                        </span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="daftarSiswa">Daftar Siswa</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="absensiswa">Absensi</a>
                        </li>
                        <li>
                            <a md-ink-ripple href="uts">Nilai UTS</a>
                        </li>
                        <li>
                            <a md-ink-ripple href="uas">Nilai UAS</a>
                        </li>
                        <li>
                            <a md-ink-ripple href="raport">Nilai Raport</a>
                        </li>
                      </ul>
                    </li>
                      <!-- Data Pengajar -->
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                        <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-social-school i-20">
                        </i>
                        <span class="font-normal">
                          Data Pengajar
                        </span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="tatausaha">Absensi</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="sarpras">Jadwal Mengajar</a>
                        </li>
                      </ul>
                    </li>
                    <!-- Data Kepegawaian -->
                    <li>
                      <a md-ink-ripple href="#">
                        <span class="pull-right text-muted">
                        <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-action-work i-20">
                        </i>
                        <span class="font-normal">
                          Data Kepegawaian
                        </span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="tatausaha">Absensi</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="sarpras">Sub Divisi</a>
                        </li>
                      </ul>
                    </li>
                    <!-- Data Sarpras -->
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                        <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-communication-business i-20">
                        </i>
                        <span class="font-normal">
                        Sarana Prasarana
                        </span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="tatausaha">Peta Lokasi</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="sarpras">Inventaris Ruangan</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="sarpras">Alat &amp; Bahan</a>
                        </li>
                      </ul>
                    </li>
                    <!-- Aplikasi -->
                    <li>
                      <a md-ink-ripple>
                        <span class="pull-right text-muted">
                        <i class="fa fa-caret-down"></i>
                        </span>
                        <i class="icon mdi-notification-tap-and-play i-20">
                        </i>
                        <span class="font-normal">
                        Aplikasi
                        </span>
                      </a>
                      <ul class="nav nav-sub">
                        <li>
                          <a md-ink-ripple href="tatausaha">SMS Broadcast</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="sarpras">Internal Mail</a>
                        </li>
                        <li>
                          <a md-ink-ripple href="sarpras">Surat</a>
                        </li>
                      </ul>
                    </li>


                  </ul>
                </nav>
              </div>

              <!-- Akun -->
              <div id="account" class="hide m-v-xs">
                <nav>
                  <ul class="nav">
                    <li>
                      <a md-ink-ripple href="page.profile.html">
                        <i class="icon mdi-action-perm-contact-cal i-20"></i>
                        <span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a md-ink-ripple href="page.settings.html">
                        <i class="icon mdi-action-settings i-20"></i>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a md-ink-ripple href="lockme.html">
                        <i class="icon mdi-action-exit-to-app i-20"></i>
                        <span>Logout</span>
                      </a>
                    </li>
                    <li class="m-v-sm b-b b"></li>
                    <li>
                      <div class="nav-item" ui-toggle-class="folded" target="#aside">
                        <label class="md-check">
                          <input type="checkbox">
                          <i class="purple no-icon"></i>
                          <span class="hidden-folded">Folded aside</span>
                        </label>
                      </div>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- Help -->
        <nav>
          <ul class="nav b-t b">
            <li>
              <a href="http://linuxmannote.wordpress.com" target="_blank" md-ink-ripple>
                <i class="icon mdi-action-help i-20"></i>
                <span>Bantuan</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
</aside>

<!-- Header -->
  <div id="content" class="app-content" role="main">
    <div class="box">
          <!-- Content Navbar -->
    <div class="navbar md-whiteframe-z1 no-radius green">
      <!-- Open side - Naviation on mobile -->
      <a md-ink-ripple  data-toggle="modal" data-target="#aside" class="navbar-item pull-left visible-xs visible-sm"><i class="mdi-navigation-menu i-24"></i></a>
      <!-- / -->
      <!-- Page title - Bind to $state's title -->
      <div class="navbar-item pull-left h4">Dashboard</div>
      <!-- / -->
      <!-- Common tools -->
      <ul class="nav nav-sm navbar-tool pull-right">
        <li>
          <a md-ink-ripple href="page">
            <i class="mdi-social-person-outline i-24"></i>
          </a>
        </li>
        <!-- Menu Pojok Atas -->
        <li class="dropdown">
          <a md-ink-ripple data-toggle="dropdown">
            <i class="mdi-navigation-more-vert i-24"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-scale pull-right pull-up text-color">
            <li><a href>Pengaturan</a></li>
            <li><a href="locked">Kunci</a></li>
            <li><a href="login">Keluar</a></li>
            <li class="divider"></li>
            <li><a href>Help &amp; feedback</a></li>
          </ul>
        </li>
    </div>