<div class="pagetitle">
    <h1>Edit Siswa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active">Kelola Siswa</li>
            <li class="breadcrumb-item active">Edit Siswa</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" action="<?= base_url('kelola/editRow/2')?>" method="post"
                        novalidate>
                        <input type="hidden" name="id" value="<?=$data['id_siswa']?>">
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="validationCustom01"
                                value="<?=$data['siswa']?>">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">NISN</label>
                            <input type="text" name="nisn" class="form-control" id="validationCustom01"
                                value="<?=$data['nisn']?>">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">NISM</label>
                            <input type="text" name="nism" class="form-control" id="validationCustom01"
                                value="<?=$data['nism']?>">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">ID Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="validationCustom01"
                                value="<?=$data['id_kelas']?>">
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