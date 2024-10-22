<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row" style="height:60vh">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Dashboard</h5>
                    <p>Selamat Datang di Website E-RAPOR MTs Negeri 2 Tegal</p>
                    <?php if ($this->session->userdata('role_id') == 1) : ?>
                        <div id="clock"></div>
                    <?php endif ?>

                    <!-- <?php
                            $timezone = new DateTimeZone('Asia/Jakarta');
                            $current_time = new DateTime('now', $timezone);
                            $formatted_time = $current_time->format('H:i');
                            echo $formatted_time;
                            ?> -->
                </div>
            </div>

        </div>
    </div>
</section>