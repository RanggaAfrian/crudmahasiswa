<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><br><br>
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $mahasiswa['nama'] ?></h2>
                    <h6 class="card-subtitle mb-2-muted text-muted"><?= $mahasiswa['email'] ?></h6>
                    <div class="row p-1">
                        <div class="col-md-4">NIM</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa['nim'] ?></div>
                    </div>
                    <div class="row p-1">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa['jenis_kelamin'] ?></div>
                    </div>
                    <div class="row p-1">
                        <div class="col-md-4">Prodi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa['prodi'] ?></div>
                    </div>
                    <div class="row p-1">
                        <div class="col-md-4">Asal sekolah</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa['asal_sekolah'] ?></div>
                    </div>
                    <div class="row p-1">
                        <div class="col-md-4">No HP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa['no_hp'] ?></div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $mahasiswa['alamat'] ?></div>
                    </div>
                    <div class=" row card-footer">
                        <a href="<?= base_url('index.php/Mahasiswa') ?>"class="btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>