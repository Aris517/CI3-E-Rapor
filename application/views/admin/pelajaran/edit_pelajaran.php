<div class="pagetitle">
    <h1>Edit Pelajaran</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home')?>">Home</a></li>
            <li class="breadcrumb-item active">Kelola Pelajaran</li>
            <li class="breadcrumb-item active">Edit Pelajaran</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" action="<?= base_url('kelola/editRow/4')?>" method="post"
                        novalidate>
                        <input type="hidden" name="id" value="<?=$data['id_pelajaran']?>">
                        <div class="col-12">
                            <label for="validationCustom01" class="form-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="validationCustom01"
                                value="<?=$data['pelajaran']?>">
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