<?php include'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Produk Lemigas</title>
		<link rel="stylesheet" href="css/css/bootstrap.css">
	<link rel="stylesheet" href="css/js/bootstrap.js">
</head>
<body>
<!--menu-->
<?php include'menu.php'; ?><br>

<!-- konten -->
<section class="konten">
	<div class="container">
		<h1>Produk Lemigas</h1><br><br>

		<div class="row">

<?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
<?php while ($perproduk = $ambil->fetch_assoc()) {?>

			<div class="col-md-3">
				<div class="thumbnail">
					<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="" width="50%" height="50%">
					<div class="caption">
						<h3><font size="4px"><?php echo $perproduk['nama_produk']; ?></font></h3>
						<h5><font size="4px"><?php echo $perproduk['harga_produk']; ?></font></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>"class="btn btn-primary">Beli</a>
					</div><br><br>
				</div>
			</div>
<?php } ?>

		</div>
	</div>
</section>



</body>
</html>