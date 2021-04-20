<h2>selamat datang</h2>
<center><h2>Data Admin</h2></center><br>
<center>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nama Lengkap</th>
			<th>Password</th>
			<th>Jenis Kelamin</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?> 
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $_SESSION['admin']['username']; ?></td>
			<td><?php echo $_SESSION['admin']['namalengkap']; ?></td>
			<td><?php echo $_SESSION['admin']['password']; ?></td>
			<td><?php echo $_SESSION['admin']['jenkel']; ?></td>
			<td>
				<a href="" class="btn btn-danger">Hapus</a> 
				<a href="index.php?halaman=ubahkaryawan&id=<?php echo $pecah['id_karyawan']; ?>" class="btn btn-primary">Ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
	</tbody>
</table><br><br></center>
<center>