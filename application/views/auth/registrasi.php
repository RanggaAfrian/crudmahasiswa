<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg p-5">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                                <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama" placeholder="Nama Lengkap">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email" placeholder="email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password1" value="<?= set_value('password1'); ?>" class="form-control form-control-user" id="password" placeholder="password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <input type="password" name="password2" value="<?= set_value('password2'); ?>" class="form-control form-control-user" id="password2" placeholder="Ulangi Password">
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Daftar Akun
                                    </button>
                                </div>

                                </form>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('Auth') ?>">Sudah Punya aku? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
    <section class="footer_section">
        <div class="container fixed-bottom">
            <p>

            </p>
        </div>
    </section>


</body>