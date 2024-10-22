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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css ">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

</head>

<body>

    <main class="main container mt-5">
        <h5 class="card-title text-center">Capaian Hasil Belajar Siswa Program Unggulan (FDS)
            <?= $detail['pelajaran']; ?></h5>
        <!-- <h5 class="card-title">Table with stripped rows</h5> -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-3">Nama</div>
                    <div class="col-1">:</div>
                    <div class="col"><?= $detail['siswa']; ?></div>
                </div>
                <div class="row">
                    <div class="col-3">NISM</div>
                    <div class="col-1">:</div>
                    <div class="col"><?= $detail['nism']; ?></div>
                </div>
                <div class="row">
                    <div class="col-3">NISN</div>
                    <div class="col-1">:</div>
                    <div class="col"><?= $detail['nisn']; ?></div>
                </div>
                <div class="row">
                    <div class="col-3">Kelas</div>
                    <div class="col-1">:</div>
                    <div class="col"><?= $detail['kelas']; ?></div>
                </div>
                <div class="row">
                    <div class="col-3">Semester</div>
                    <div class="col-1">:</div>
                    <div class="col"><?= $detail['semester']; ?></div>
                </div>
                <div class="row">
                    <div class="col-3">Tahun Ajaran</div>
                    <div class="col-1">:</div>
                    <div class="col"><?= $detail['tahun_ajaran']; ?></div>
                </div>
            </div>
        </div>

        <!-- Table with stripped rows -->
        <table class="table table-bordered mt-4 mb-5    ">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Capaian</th>
                    <th scope="col">Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $detail['kompetensi1'] ?></td>
                    <td><?= $detail['nilai1'] ?></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><?= $detail['kompetensi2'] ?></td>
                    <td><?= $detail['nilai2'] ?></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><?= $detail['kompetensi3'] ?></td>
                    <td><?= $detail['nilai3'] ?></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><?= $detail['kompetensi4'] ?></td>
                    <td><?= $detail['nilai4'] ?></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><?= $detail['kompetensi5'] ?></td>
                    <td><?= $detail['nilai5'] ?></td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-evenly">
            <div>
                <p class="pb-5">Mengetahui,<br>Orang tua</p>
                <p>......................................</p>
            </div>
            <div>
                <p class="pb-5">Slawi, <?= $tgl; ?><br>Wali Kelas</p>
                <p><b><?= $wali['wali']; ?><br>NIP <?= $wali['nip']; ?></b></p>
            </div>
        </div>
        <div class="d-flex justify-content-evenly">
            <div>
                <p class="pb-5">Mengetahui,<br>Kepala Madrasah</p>
                <p>Drs. H. Muh. Muntoyo, M.Pd<br>NIP 196404081994031001</p>
            </div>
        </div>
    </main><!-- End #main -->

    <script>
    window.print();
    window.onafterprint = function() {
        window.history.back();
    };
    </script>

    <script src="<?= base_url()?>assets/js/main.js"></script>
    <script src="<?= base_url()?>vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="<?= base_url()?>assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?= base_url()?>assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url()?>assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->

</body>

</html>