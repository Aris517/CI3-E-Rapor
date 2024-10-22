<div class="pagetitle">
    <h1>Tambah Guru</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active">Kelola Guru</li>
            <li class="breadcrumb-item active">Tambah Guru</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" action="<?= base_url('kelola/tambahRow/1')?>" method="post"
                        novalidate>
                        <div class="col-12">
                            <label for="validationCustom03" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="validationCustom03" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom04" class="form-label">NIP</label>
                            <input type="text" name="nip" class="form-control" id="validationCustom04" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom05" class="form-label">ID Pelajaran</label>
                            <input type="text" name="pelajaran" class="form-control" id="validationCustom05" required>
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