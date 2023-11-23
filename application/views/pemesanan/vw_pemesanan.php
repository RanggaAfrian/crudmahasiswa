<div class="container-fluid">
	<h1 class=" h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row">
		<div class="col-md-6">
			<a href="<?= base_url('Pemesanan/tambah') ?>" class="btn btn-info mb-2">Tambah Pemesanan</a>
		</div>
		<div class="col-md-12">
			<?= $this->session->flashdata('message'); ?>
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>Alamat</td>
						<td>Email</td>
						<td>no hp</td>
						<td>Jenis pembayaran</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
				<?php $i = 1;?>
				<?php foreach ($pemesanan as $us ) :?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $us['nama']?></td>
						<td><?= $us['alamat']?></td>
						<td><?= $us['email']?></td>
						<td><?= $us['no_hp']?></td>
						<td><?= $us['jenis_pembayaran']?></td>
						<td>
							<a href="<?= base_url('Pemesanan/hapus/') . $us['id'] ?>" class="btn btn-danger">Hapus</a>
							<a href="<?= base_url('Pemesanan/edit/') . $us['id'] ?>" class="btn btn-warning">Edit</a>
						</td>
					</tr>
					<?php $i++ ?>
					<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
