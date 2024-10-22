<div class="pagetitle">
    <h1>Edit Guru</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active">Kelola Guru</li>
            <li class="breadcrumb-item active">Edit Guru</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" action="<?= base_url('kelola/editRow/1')?>" method="post"
                        novalidate>
                        <input type="hidden" name="id" value="<?=$data['id_guru']?>">
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="validationCustom01"
                                value="<?=$data['guru']?>">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">NIP</label>
                            <input type="text" name="nip" class="form-control" id="validationCustom01"
                                value="<?=$data['nip']?>">
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