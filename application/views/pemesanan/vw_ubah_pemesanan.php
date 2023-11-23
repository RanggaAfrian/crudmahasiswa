<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">
		<?= $judul ?>
	</h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Ubah Data Dosen
				</div>
				<div class="card-body">
				<form action="" method="POST">
						<div class="form-group mb-2 ">
							<label for="nama">Nama </label>
							<input type="text" name="nama" value="<?= $pemesanan['nama'] ?>" id="nama"
								class="form-control" placeholder="Nama Dosen">
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat"
								value="<?= $pemesanan['alamat'] ?>">
							<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="email">Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email"
								value="<?= $pemesanan['email'] ?>">
							<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="no_hp">No Hp</label>
							<input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="No Hp"
								value="<?= $pemesanan['no_hp'] ?>">
							<?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<div class="form-group mb-2 ">
							<label for="jenis_pembayaran">Jenis pembayaran</label>
							<input type="text" name="jenis_pembayaran" id="jenis_pembayaran" class="form-control" placeholder="jenis pembayaran"
								value="<?= $pemesanan['jenis_pembayaran'] ?>">
							<?= form_error('jenis_pembayaran', '<small class="text-danger pl-3">', '</small>') ?>
						</div>
						<a href="<?= base_url('dosen') ?>" class="btn mt-2 btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn mt-2 btn-primary float-right">Ubah dosen</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>