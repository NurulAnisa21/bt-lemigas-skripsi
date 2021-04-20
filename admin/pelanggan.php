<h2>Data Karyawan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email	</th>
			<th>Telepone</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM karyawan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['pelanggan']; ?></td>
			<td><?php echo $pecah['email_pelanggan']; ?></td>
			<td><?php echo $pecah['telepon_pelanggan']; ?></td>
			<td>
				<a href="index.php?halaman=hapuskaryawan&id=<?php echo $pecah['id_karyawan']; ?>" class="btn btn-danger">hapus</a>
				<a href="index.php?halaman=ubahkaryawan&id=<?php echo $pecah['id_karyawan']; ?>"
				class="btn btn-info">Ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table><br><br></center>
<center>
<a href="index.php?halaman=tambahkaryawan" class="btn btn-warning">tambah data</a></center><br><br>
