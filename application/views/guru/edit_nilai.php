<div class="pagetitle">
    <h1>Edit Nilai</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active">Kelola Nilai</li>
            <li class="breadcrumb-item active">Edit Nilai</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" action="<?= base_url('kelola/edit/').$n['id_nilai']?>"
                        method="post" novalidate>
                        <input type="hidden" name="id_nilai" value="<?=$n['id_nilai']?>">
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">Siswa</label>
                            <input type="text" class="form-control" id="validationCustom01" value="<?=$n['siswa']?>"
                                disabled>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">Semester</label>
                            <input type="text" class="form-control" id="validationCustom01" value="<?=$n['semester']?>"
                                disabled>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Nilai 1</label>
                            <input type="text" name="nilai1" class="form-control" id="validationCustom03"
                                value="<?=$n['nilai1']?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom04" class="form-label">Nilai 2</label>
                            <input type="text" name="nilai2" value="<?=$n['nilai2']?>" class="form-control"
                                id="validationCustom04" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom05" class="form-label">Nilai 3</label>
                            <input type="text" name="nilai3" value="<?=$n['nilai3']?>" class="form-control"
                                id="validationCustom05" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom06" class="form-label">Nilai 4</label>
                            <input type="text" name="nilai4" value="<?=$n['nilai4']?>" class="form-control"
                                id="validationCustom06" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom07" class="form-label">Nilai 5</label>
                            <input type="text" name="nilai5" value="<?=$n['nilai5']?>" class="form-control"
                                id="validationCustom07" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
    </div>
</section>