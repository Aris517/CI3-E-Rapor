<div class="pagetitle">
    <h1>Laporan Kelas</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Laporan kelas</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('laporan/kelas') ?>" method="post" class="mb-4">
                        <div class="row">
                            <div class="col-3">
                                <select name="semester" class="form-select text-center" id="inlineFormCustomSelect">
                                    <option selected>-- Pilih Semester --</option>
                                    <?php foreach ($semester as $s) : ?>
                                        <option value="<?= $s['id_semester'] ?>"><?= $s['semester']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-3">
                                <select name="kelas" class="form-select text-center" id="inlineFormCustomSelect">
                                    <option selected>-- Pilih Kelas --</option>
                                    <?php foreach ($kelas as $k) : ?>
                                        <option value="<?= $k['id_kelas'] ?>"><?= $k['kelas']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">View</button>
                            </div>
                            <?php if ($cek) : ?>
                                <div class="col-1">
                                    <a type="button" href="<?= base_url('laporan/cetakKelas/' . $idSemester . '/' . $idKelas . '/' . $idPelajaran) ?>" class="btn btn-success">Cetak</a>
                                </div>
                            <?php endif ?>
                        </div>
                    </form>

                    <?php if ($cek) : ?>
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
                    <?php else : ?>
                        <div class="text-center">
                            <h3>Silahkan Pilih Kategori</h3>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>