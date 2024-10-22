<div class="pagetitle">
    <h1>Kelola Kompetensi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active">Kelola Pelajaran</li>
            <li class="breadcrumb-item active">Kelola Kompetensi</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?=base_url('kelola/tambahData/6/'.$pelajaran)?>" type="button"
                                class="btn btn-success mb-3">
                                <i class="bi bi-plus-square"></i>
                                Tambah
                            </a>
                            <?php if($ceksem) : ?>
                            <a href="<?=base_url('kelola/editData/6/'.$pelajaran.'/'.$inputsem)?>" type="button"
                                class="btn btn-warning mb-3">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </a>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <form class="row" action="<?=base_url('kelola/kelola/6/'.$pelajaran)?>" method="post">
                                <div class="col-6">
                                    <select name="semester" class="form-select text-center" id="inlineFormCustomSelect">
                                        <option selected>-- Pilih Semester --</option>
                                        <?php foreach($semester as $s) : ?>
                                        <option value="<?=$s['id_semester']?>"><?= $s['semester']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary mb-3">
                                        View
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php if($cekIsi) :?>
                    <?php foreach($result as $result) : ?>
                    <table class=" table table-striped">
                        <h5>Semester <?= $result['semester']; ?> <?= $result['tahun_ajaran' ]; ?></h5>
                        <thead>
                            <tr class="text-center">
                                <th class="col-1" scope="col">No</th>
                                <th scope="col">Capaian</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $result['kompetensi1'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><?= $result['kompetensi2'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><?= $result['kompetensi3'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td><?= $result['kompetensi4'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td><?= $result['kompetensi5'] ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <?php else : ?>
                            <div class="text-center">
                                <h3>Data Kompetensi Belum Ada</h3>
                            </div>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>