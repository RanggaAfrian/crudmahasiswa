<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
        <div class=" card-header justify-content-center">
                Form Ubah Data Peminjaman
            </div>

            <div class="card-body">
                <form action="<?=base_url('pinjam/update'); ?>" method="POST">
                <input type="hidden" name="id" value="<?= $pinjam['id'];?>">
                    <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="text" name="nik"  value="<?= $pinjam['nik'];?>" class="form-control" id="nik" placeholder="Nik">

                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Peminjam </label>
                        <input type="text" name="nama" value="<?= $pinjam['nama'];?>" class="form-control" id="nama" placeholder="Nama Peminjam">

                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?= $pinjam['alamat'];?>" class="form-control" id="alamat" placeholder="Alamat">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="notelp">No Telpon</label>
                        <input type="text" name="notelp" value="<?= $pinjam['notelp'];?>" class="form-control" id="notelp" placeholder="No Telpon">

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?= $pinjam['email'];?>"  class="form-control" id="email" placeholder="Email">

                    </div>
                    <div class="form-group">
                        <label for="besarPinjam">Besar Pinjaman</label>
                        <input type="text" name="besarPinjam" value="<?= $pinjam['besarPinjam'];?>" class="form-control" id="besarPinjam" placeholder="besarPinjam">
                    </div>
                    <div class="form-group">
                        <label for="durasi">Lama Peminjaman</label>
                        <input type="text" name="durasi" value="<?= $pinjam['durasi'];?>" class="form-control" id="durasi" placeholder="Lama Peminjaman">

                    </div>
                    <a href="<?= base_url('pinjam') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="update" class="btn btn-primary float right"> Ubah Data </button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>