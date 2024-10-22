<div class="pagetitle">
    <h1>Tambah Kompetensi</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active">Kelola Pelajaran</li>
            <li class="breadcrumb-item active">Kelola Kompetensi</li>
            <li class="breadcrumb-item active">Edit Kompetensi</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <p class="text-danger">Note : gunakan tanda - jika kompetensi tidak di isi</p>
                    <form class="row g-3 needs-validation" action="<?= base_url('kelola/editRow/6')?>" method="post"
                        novalidate>
                        <input type="hidden" name="id" class="form-control" id="validationCustom03"
                            value="<?= $data['id_kompetensi']?>">
                        <input type="hidden" name="pelajaran" class="form-control" id="validationCustom03"
                            value="<?= $pelajaran['id_pelajaran']?>">
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Nama Pelajaran</label>
                            <input type="text" class="form-control" id="validationCustom03"
                                value="<?=$pelajaran['pelajaran']?>" disabled>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Kompetensi 1</label>
                            <input type="text" name="kompetensi1" class="form-control" id="validationCustom03"
                                value="<?=$data['kompetensi1']?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Kompetensi 2</label>
                            <input type="text" name="kompetensi2" class="form-control" id="validationCustom03"
                                value="<?=$data['kompetensi2']?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Kompetensi 3</label>
                            <input type="text" name="kompetensi3" class="form-control" id="validationCustom03"
                                value="<?=$data['kompetensi3']?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Kompetensi 4</label>
                            <input type="text" name="kompetensi4" class="form-control" id="validationCustom03"
                                value="<?=$data['kompetensi4']?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Kompetensi 5</label>
                            <input type="text" name="kompetensi5" class="form-control" id="validationCustom03"
                                value="<?=$data['kompetensi5']?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Nama Pelajaran</label>
                            <input type="hidden" name="semester" class="form-control" id="validationCustom03"
                                value="<?=$semester['id_semester']?>">
                            <input type="text" class="form-control" id="validationCustom03"
                                value="<?=$semester['semester']?>" disabled>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Tahun Ajaran</label>
                            <input type="text" name="tahun" class="form-control" id="validationCustom03"
                                value="<?= $data['tahun_ajaran']?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
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