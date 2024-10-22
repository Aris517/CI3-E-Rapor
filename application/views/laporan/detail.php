<div class="pagetitle">
    <h1>Detail Nilai</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Rapor</li>
            <li class="breadcrumb-item active">Detail</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <?php if ($this->session->userdata('role_id') == 2) : ?>
                        <a href="<?= base_url('laporan/cetak/') . $detail['id_kompetensi'] . '/' . $detail['id_nilai'] ?>" type="button" class="btn btn-success">
                            <i class="bi bi-printer"></i>
                            Cetak
                        </a>
                        <hr>
                    <?php endif; ?>
                    <h5 class="card-title text-center">Capaian Hasil Belajar Siswa Program Unggulan (FDS)
                        <?= $detail['pelajaran']; ?></h5>
                    <!-- <h5 class="card-title">Table with stripped rows</h5> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-2">Nama</div>
                                <div class="col-1">:</div>
                                <div class="col"><?= $detail['siswa']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-2">NISM</div>
                                <div class="col-1">:</div>
                                <div class="col"><?= $detail['nism']; ?></div>
                            </div>
                            <div class="row">
                                <div class="col-2">NISN</div>
                                <div class="col-1">:</div>
                                <div class="col"><?= $detail['nisn']; ?></div>
                            </div>
                        </div>

                        <div class="col-md-6">
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
                    <table class="table table-bordered mt-4">
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
                </div>
            </div>

        </div>
    </div>
</section>