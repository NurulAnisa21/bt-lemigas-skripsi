<?php session_start(); 
include 'config.php'
;?>
<?php 
	//mendapatkann id produk
	$id_produk = $_GET["id"];
	//ambil data
	$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
	$detail = $ambil->fetch_assoc();
	// echo "<pre>";
	// print_r($detail);
	// echo "</pre>";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Produk</title>
<link rel="stylesheet" href="css/css/bootstrap.css">
  <link rel="stylesheet" href="css/js/bootstrap.js">
</head>
<body>
<!--------------------- Menu --------------------------------->
<?php include 'menu.php'; ?>
<!---------------------------- DETAIL PRODUK -------------------------->
<div class="konten">
	<div class="row">
  <div class="column">
  	<img src="foto_produk/<?php echo $detail["foto_produk"]; ?>" alt="" class="img" height="80%" width="80%">
  </div>
  <div class="column">
  	<h2><?php echo $detail["nama_produk"]; ?></h2>
  	<h4>Rp.<?php echo number_format($detail["harga_produk"]); ?></h4>
    <h5> Stok : <?php  echo $detail['stok_produk']; ?> </h5>
  	<form method="post">
  		<div class="form-group">
  			<div class="input-group">
  				<input type="number" min="1" class="form-control" name="jumlah" max="<?php  echo $detail['stok_produk'] ?>">
  				<div class="btn">
  					<button class="button-hijau" name="beli">beli</button>
  				</div>
  			</div>
  		</div>
  	</form>
  	<?php 
  	if (isset($_POST["beli"]))
  	{
  		//menadapatkan jumlah yang diinputkan
  		$jumlah = $_POST["jumlah"];
  		//masukkan dikeranjang 
  		$_SESSION["keranjang"][$id_produk] = $jumlah;
  		echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
  		echo "<script>location='keranjang.php';</script>";
  	}
  	?>
  </div>
</div>

</body>
</html>