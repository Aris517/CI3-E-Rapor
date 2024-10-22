<div class="pagetitle">
    <h1>Rapor
        <?php if ($role == 4) : ?>
            <span class="align-middle"><?= $siswa['siswa']; ?></span>
        <?php endif; ?>
    </h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Rapor</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title">Table with stripped rows</h5> -->
                    <!-- <div class="col-md-4"> -->
                    <form action="<?= base_url('rapor') ?>" method="post" class="mb-4">
                        <div class="row">
                            <div class="col-3">
                                <select name="semester" class="form-select text-center" id="inlineFormCustomSelect">
                                    <option selected>-- Pilih Semester --</option>
                                    <?php foreach ($semester as $s) : ?>
                                        <option value="<?= $s['id_semester'] ?>"><?= $s['semester']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">View</button>
                            </div>
                        </div>
                    </form>
                    <!-- </div> -->

                    <!-- Table with stripped rows -->
                    <?php if ($cekSemester) : ?>
                        <table class="table table-striped">
                            <p class="text-info">Note : klik nama pelajaran untuk kelola kompetensi</p>
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Pelajaran</th>
                                    <th scope="col">Nilai 1</th>
                                    <th scope="col">Nilai 2</th>
                                    <th scope="col">Nilai 3</th>
                                    <th scope="col">Nilai 4</th>
                                    <th scope="col">Nilai 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($nilai as $nilai) : ?>
                                    <tr class="text-center">
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $nilai['siswa'] ?></td>
                                        <td><a class="text-decoration-none" href="<?= base_url('rapor/detail/') . $nilai['id_kompetensi'] . '/' . $nilai['id_nilai'] ?>"><?= $nilai['pelajaran'] ?></a>
                                        </td>
                                        <td><?= $nilai['nilai1'] ?></td>
                                        <td><?= $nilai['nilai2'] ?></td>
                                        <td><?= $nilai['nilai3'] ?></td>
                                        <td><?= $nilai['nilai4'] ?></td>
                                        <td><?= $nilai['nilai5'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else : ?>
                        <div class="text-center">
                            <h3>Silahkan Pilih Semester Anda</h3>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>