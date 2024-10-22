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

</head>

<body>
    <main class="main container-fluid mt-3" style="max-width:95%;">
        <h5 class="card-title text-center">Laporan Data Nilai Untuk Kelas <?= $kelas['kelas']; ?> (<?= $pelajaran['pelajaran']; ?>)</h5>
        <div class="row mt-3">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nilai 1</th>
                            <th scope="col">Nilai 2</th>
                            <th scope="col">Nilai 3</th>
                            <th scope="col">Nilai 4</th>
                            <th scope="col">Nilai 5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($nilai as $n) : ?>
                            <tr class="text-center">
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $n['siswa'] ?></td>
                                <?php if ($n['nilai1'] != 0) : ?>
                                    <td><?= $n['nilai1'] ?></td>
                                <?php else : ?>
                                    <td>-</td>
                                <?php endif ?>
                                <?php if ($n['nilai2'] != 0) : ?>
                                    <td><?= $n['nilai2'] ?></td>
                                <?php else : ?>
                                    <td>-</td>
                                <?php endif ?>
                                <?php if ($n['nilai3'] != 0) : ?>
                                    <td><?= $n['nilai3'] ?></td>
                                <?php else : ?>
                                    <td>-</td>
                                <?php endif ?>
                                <?php if ($n['nilai4'] != 0) : ?>
                                    <td><?= $n['nilai4'] ?></td>
                                <?php else : ?>
                                    <td>-</td>
                                <?php endif ?>
                                <?php if ($n['nilai5'] != 0) : ?>
                                    <td><?= $n['nilai5'] ?></td>
                                <?php else : ?>
                                    <td>-</td>
                                <?php endif ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="d-flex justify-content-evenly text-center mt-4">
            <div>
                <p class="pb-5">Slawi, <?= $tgl; ?><br>Guru</p>
                <p><b><?= $guru['guru']; ?><br>NIP <?= $guru['nip']; ?></b></p>
            </div>
            <div>
                <p class="pb-5">Mengetahui,<br>Kepala Madrasah</p>
                <p><b>Drs. H. Muh. Muntoyo, M.Pd<br>NIP 196404081994031001
                    </b></p>
            </div>
        </div>
    </main>



    <script>
        window.print();

        window.onafterprint = function() {
            // window.history.back();
            window.location.href = "http://localhost/rapor/laporan/kelas";
        };
    </script>

    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script src="<?= base_url() ?>vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?= base_url() ?>assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url() ?>assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->

</body>

</html>