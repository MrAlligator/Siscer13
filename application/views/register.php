<div class="content">
                <div class="container-fluid"><hr>
                    <div class="row justify-content-center">
                        <div class="col-lg-5 card card-nav-tabs text-center">
                            <div class="card-header card-header-primary">
                                Welcome
                            </div>
                            <div class="card-body">
                            <?php echo $this->session->flashdata('message'); ?>
                                <form class="user" method="POST" action="<?= base_url('auth') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama..."> <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Input Email..."> <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Input Password..."> <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="password" class="form-control form-control-user" id="ulangi_password" name="ulangi_password" placeholder="Ulangi Password..."> <?= form_error('ulangi password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <button type="submit" class="btn btn-success btn-user btn-block">
                                                Sign Up
                                            </button>
                                        </div>
                                        <div class="col-lg-6">
                                            <a href="<?= base_url('auth') ?>">
                                                <button class="btn btn-success btn-user btn-block">
                                                    Sign In
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                    <a href="<?= base_url('welcome') ?>" class="btn btn-primary btn-user btn-block">
                                        Back to Home
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>