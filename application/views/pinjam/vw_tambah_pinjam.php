<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header justify-content-center">
					Form Tambah Data
				</div>
				<div class="card-body">
					<form action="<?=base_url('pinjam/upload'); ?>" method="POST">
						<div class="form-group mb-2 ">
							<label for="nik">Nik</label>
							<input type="text" name="nik" id="nik" class="form-control" placeholder="Nik">
						</div>
						<div class="form-group mb-2 ">
							<label for="nama">Nama Peminjam</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
						</div>
						<div class="form-group mb-2 ">
							<label for="alamat">Alamat</label>
							<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
						</div>
						<div class="form-group mb-2 ">
							<label for="notelp">No Telpon</label>
							<input type="text" name="notelp" id="notelp" class="form-control" placeholder="No Telpon">
						</div>
						<div class="form-group mb-2 ">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group mb-2 ">
							<label for="besarPinjam">Besar Pinjaman</label>
							<input type="text" name="besarPinjam" id="besarPinjam" class="form-control" placeholder="Besar Pinjaman">
						</div>
						<div class="form-group mb-2 ">
							<label for="durasi">Lama Peminjaman</label>
							<input type="text" name="durasi" id="durasi" class="form-control" placeholder="Lama Peminjaman">
						</div>
						<a href="<?= base_url('pinjam') ?>" class="btn mt-2 btn-danger">Tutup</a>
						<button type="submit" name="tambah" class="btn mt-2 btn-primary float-right">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
