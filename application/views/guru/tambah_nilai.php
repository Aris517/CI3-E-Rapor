<div class="pagetitle">
    <h1>Tambah Nilai</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active">Kelola Nilai</li>
            <li class="breadcrumb-item active">Tambah Nilai</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" action="<?= base_url('kelola/tambah')?>" method="post"
                        novalidate>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">Nama</label>
                            <!-- <input type="text" class="form-control" id="inputNanme4"> -->
                            <select name="nisn" class="form-control" id="validationCustom01" required>
                                <option selected>-- Siswa --</option>
                                <?php foreach($siswa as $s) : ?>
                                <option value="<?=$s['nisn']?>"><?= $s['siswa']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom02" class="form-label">Semester</label>
                            <!-- <input type="email" class="form-control" id="inputEmail4"> -->
                            <select name="semester" class="form-control" id="validationCustom02" required>
                                <option selected>-- Semester --</option>
                                <?php foreach($semester as $s) : ?>
                                <option value="<?=$s['id_semester']?>"><?= $s['semester']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Nilai 1</label>
                            <input type="text" name="nilai1" class="form-control" id="validationCustom03" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom04" class="form-label">Nilai 2</label>
                            <input type="text" name="nilai2" class="form-control" id="validationCustom04" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom05" class="form-label">Nilai 3</label>
                            <input type="text" name="nilai3" class="form-control" id="validationCustom05" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom06" class="form-label">Nilai 4</label>
                            <input type="text" name="nilai4" class="form-control" id="validationCustom06" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom07" class="form-label">Nilai 5</label>
                            <input type="text" name="nilai5" class="form-control" id="validationCustom07" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <input type="hidden" name="id_pelajaran" value="<?= $user['id_pelajaran']?>">

                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
</section>