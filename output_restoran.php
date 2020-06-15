<!-- Syifa Faradilla Fabrianne - JWD 2 2020 -->

<!DOCTYPE html>
<html>
<head>
	<title>PESANAN ANDA</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
		<h1 class="text-center"><b>SELAMAT DATANG DI RUMAH MAKAN MINUM</b></h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm">
			</div>
			<div class="col-6">
			<h4>

				<?php

				$namapelanggan=$_REQUEST["namapelanggan"];
				$mieayam=$_REQUEST["mieayam"];
				$miebakso=$_REQUEST["miebakso"];
				$mieayambakso=$_REQUEST["mieayambakso"];
				$baksokuah=$_REQUEST["baksokuah"];
				$tehmanis=$_REQUEST["tehmanis"];
				$tehtawar=$_REQUEST["tehtawar"];
				$total=($mieayam*10000)+($miebakso*10000)+($mieayambakso*13000)+($baksokuah*8000)+($tehmanis*3000)+($tehtawar*1000);

				echo("<p align=center>Pesanan Kak <mark><b><u>".$namapelanggan."</b></u></mark> :</p>");

				if($mieayam>0){
					echo "<p align=center>Mie Ayam @ ".$mieayam." x Rp. 10000 = Rp. ".$mieayam*10000;
					echo "<br>";
				}
				if($miebakso>0){
					echo "<p align=center>Mie Bakso @ ".$miebakso." x Rp. 10000 = Rp. ".$miebakso*10000;
					echo "<br>";
				}
				if($mieayambakso>0){
					echo "<p align=center>Mie Ayam Bakso @ ".$mieayambakso." x Rp. 13000 = Rp. ".$mieayambakso*13000;
					echo "<br>";
				}
				if($baksokuah>0){
					echo "<p align=center>Bakso Kuah @ ".$baksokuah." x Rp. 8000 = Rp. ".$baksokuah*8000;
					echo "<br>";
				}
				if($tehmanis>0){
					echo "<p align=center>Teh Manis @ ".$tehmanis." x Rp. 3000 = Rp. ".$tehmanis*3000;
					echo "<br>";
				}
				if($tehtawar>0){
					echo "<p align=center>Teh Tawar @ ".$tehtawar." x Rp. 1000 = Rp. ".$tehtawar*1000;
					echo "<br>";
				}

				echo("<p align=center>Jumlah Bayar: <mark><b><u>Rp. ".$total."</b></u></mark><br>");
				?>

		</div>
			<div class="col-sm">
			</div>
	</div>

	<br>

	<div class="text-center">
		<div class="alert alert-success" role="alert">
			Terima kasih! Pesanan Anda akan segera kami proses.
		</div>
	</div>

	<br>
				
	<div class="text-center">
		<a class="btn btn-outline-primary" href="restoran.php" role="button">Kembali</a>
	</div>
	</h4>
	</div>
	</div>

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</body>
</html>