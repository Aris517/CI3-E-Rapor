<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css ">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var formattedTime = (hours < 10 ? '0' : '') + hours + ':' + (minutes < 10 ? '0' : '') + minutes;
            $('#clock').text(formattedTime);
        }

        // Update clock every second
        setInterval(updateClock, 1000);
    </script>
</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <span class="d-none d-lg-block">E-RAPOR</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
                        <span class="d-none d-md-block ps-2"><?= $this->session->userdata('nama') ?></span>
                    </a><!-- End Profile Iamge Icon -->
                    <!--  <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>
                </li> -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="<?= base_url('home') ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-heading">Pages</li>

            <?php if ($this->session->userdata('role_id') == 4) : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('rapor') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Lihat Rapor</span>
                    </a>
                </li>
            <?php elseif ($this->session->userdata('role_id') == 3) : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('kelola/nilai') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Kelola Nilai</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('laporan/kelas') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Laporan Perkelas</span>
                    </a>
                </li>
            <?php elseif ($this->session->userdata('role_id') == 2) : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('kelola/nilai/1') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Kelola Nilai</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('laporan/kelas') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Laporan Perkelas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('rapor') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Cetak Rapor</span>
                    </a>
                </li>
            <?php elseif ($this->session->userdata('role_id') == 1) : ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('kelola/kelola/5') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Kelola Wali</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('kelola/kelola/1') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Kelola Guru</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('kelola/kelola/2') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Kelola Siswa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('kelola/kelola/3') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Kelola Kelas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url('kelola/kelola/4') ?>">
                        <i class="bi bi-file-earmark"></i>
                        <span>Kelola Pelajaran</span>
                    </a>
                </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('auth/logout') ?>">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">