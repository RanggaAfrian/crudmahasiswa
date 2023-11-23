<div class="container-fluid">
	<h1 class=" h3 mb-4 text-gray-800"><?= $judul ?></h1>
	<div class="row">
		<div class="col-md-6">
        <div class="col-md-6"><a href="<?= base_url('index.php/')?>pinjam/tambah" class="btn btn-info mb-2">Tambah Data</a></div>
		</div>
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
                        <td>No</td>
						<td>Nik</td>
						<td>Nama Lengap</td>
						<td>Alamat</td>
						<td>No Telpon</td>	
						<td>Email</td>
						<td>Besar Pinjaman</td>
						<td>Lama Pinjaman</td>
					</tr>
				</thead>
				<tbody>
				<?php $i = 1;?>
				<?php foreach ($pinjam as $us ) :?>
					<tr>
						<td><?= $i ?></td>
						<td><?= $us['nik']?></td>
						<td><?= $us['nama']?></td>
						<td><?= $us['alamat']?></td>
						<td><?= $us['notelp']?></td>
						<td><?= $us['email']?></td>
						<td><?= $us['besarPinjam']?></td>
						<td><?= $us['durasi']?></td>
						<td>
                        <a href="<?= base_url('pinjam/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a> 
            <a href="<?= base_url('pinjam/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a> 
            <a href="<?= base_url('pinjam/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a> 
       </td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
</tbody>
</table>
</div>
  </div>

