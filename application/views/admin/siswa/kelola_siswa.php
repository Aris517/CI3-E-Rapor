<div class="pagetitle">
    <h1>Kelola Siswa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active">Kelola Siswa</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <a href="<?=base_url('kelola/tambahData/2')?>" type="button" class="btn btn-success mb-3 ">
                        <i class="bi bi-plus-square"></i>
                        Tambah
                    </a>

                    <?php if($cekIsi) :?>
                    <table class=" table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th class="col-1" scope="col">No</th>
                                <th scope="col">NISN</th>
                                <th scope="col">NISM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th class="col-2" colspan="2" scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($result as $r) : ?>
                            <tr class="text-center">
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $r['nisn']; ?></td>
                                <td><?= $r['nism']; ?></td>
                                <td><?= $r['siswa']; ?></td>
                                <td><?= $r['kelas']; ?></td>
                                <td><a href="<?= base_url('kelola/editData/2/').$r['id_siswa']?>" type="button"
                                        class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </td>
                                <td><a href="<?= base_url('kelola/hapus/2/').$r['id_siswa']?>" type="button"
                                        class="btn btn-danger"><i class="bi bi-trash"></i></a>
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