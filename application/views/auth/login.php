
<section id="banner" class="banner-section">
<div class="login-page bk-img" style="background-image: url(bgclear.jpg);">
<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
     
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a class="logo d-flex align-items-center w-auto">
                            <!-- <img src="assets/img/logo.png" alt=""> -->
                            <span class="d-none d-lg-block">E-RAPOR</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <p><?= $this->session->flashdata('pesan'); ?></p>
                                <h5 class="card-title text-center pb-0 fs-4">LOGIN DISINI</h5>
                                <p class="text-center small">Masukan username & password untuk login</p>
                            </div>

                            <form action="<?= base_url('auth')?>" method="post" class="row g-3 needs-validation"
                                novalidate>

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Username</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="username" class="form-control" id="yourUsername"
                                            required>
                                        <div class="invalid-feedback">Please enter your username.</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword"
                                        required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <!-- <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div> -->
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                </div>
                            </form>

                        </div>
                    </div>

                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                    </div>

                </div>
            </div>
        </div>
                        </div>
    </section>

</div>
                       