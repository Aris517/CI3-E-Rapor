<div class="pagetitle">
    <h1>Kelola Nilai</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active">Kelola Nilai</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <a href="<?=base_url('kelola/tambah')?>" type="button" class="btn btn-success mb-3 ">
                        <i class="bi bi-plus-square"></i>
                    </a>

                    <?php if($cekIsiNilai) :?>
                    <table class=" table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Pelajaran</th>
                                <th scope="col">Semester</th>
                                <th scope="col">Nilai 1</th>
                                <th scope="col">Nilai 2</th>
                                <th scope="col">Nilai 3</th>
                                <th scope="col">Nilai 4</th>
                                <th scope="col">Nilai 5</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($nilai as $n) : ?>
                            <tr class="text-center">
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $n['kelas']; ?></td>
                                <td><?= $n['siswa']; ?></td>
                                <td><?= $n['pelajaran']; ?></td>
                                <td><?= $n['semester']; ?></td>
                                <td><?= $n['nilai1']; ?></td>
                                <td><?= $n['nilai2']; ?></td>
                                <td><?= $n['nilai3']; ?></td>
                                <td><?= $n['nilai4']; ?></td>
                                <td><?= $n['nilai5']; ?></td>
                                <td><a href="<?= base_url('kelola/edit/').$n['id_nilai']?>" type="button"
                                        class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php else : ?>
                    <div class="text-center">
                        <h3>Data Nilai Belum Ada</h3>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>