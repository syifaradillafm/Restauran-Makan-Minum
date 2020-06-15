<!-- Syifa Faradilla Fabrianne - JWD 2 2020 -->

<!DOCTYPE html>
<html>
<head>
	<title>RUMAH MAKAN MINUM</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
		<h1 class="text-center"><b>SELAMAT DATANG DI RUMAH MAKAN MINUM</b></h1>
	</div>

	<div class="container">

		<div class="text-center">
		<h2>Silahkan Masukan Pesanan</h2>
		<br>
		</div>

		<form action="output_restoran.php" method="POST">
			<div class="container">
				<div class="row">
					<div class="col-sm">
					</div>
					<div class="text-center col-4">
						<label for="usr">Nama Pelanggan</label>
						<input type="text" class="form-control" id="usr" name="namapelanggan" placeholder="Masukan Nama Pelanggan" required>
					</div>
					<div class="col-sm">
					</div>
				</div>
			</div>

			<br>


			<div class="card-deck">
			  <div class="card">
			    <img class="card-img-top" src="assets/image/mieayam.jpg" alt="Card image cap">
			    <div class="card-body"><br>
			      <h5 class="card-title" align="center">Mie Ayam</h5>
			      <h5 align="center">Rp. 10.000</h5>
			      <div class="form-group">
					<input type="text" class="form-control" id="usr" name="mieayam" placeholder="Masukan Jumlah Pesanan Anda" required></div>
			    </div>
			  </div>
			  <div class="card"><br><br>
			    <img class="card-img-top" src="assets/image/miebakso.png" alt="Card image cap">
			    <div class="card-body"><br><br><br><br><br>
			      <h5 class="card-title" align="center">Mie Bakso</h5>
			      <h5 align="center">Rp. 10.000</h5>
			      <input type="text" class="form-control" id="usr" name="miebakso" placeholder="Masukan Jumlah Pesanan Anda" required>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="assets/image/mieayambakso.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title" align="center">Mie Ayam Bakso</h5>
			      <h5 align="center">Rp. 13.000</h5>
			      <input type="text" class="form-control" id="usr" name="mieayambakso" placeholder="Masukan Jumlah Pesanan Anda" required>
			    </div>
			  </div>
			</div>

			<br>

			<div class="card-deck">
			  <div class="card">
			    <img class="card-img-top" src="assets/image/baksokuah.png" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title" align="center">Bakso Kuah</h5>
			      <h5 align="center">Rp. 8.000</h5>
			      <div class="form-group">
					<input type="text" class="form-control" id="usr" name="baksokuah" placeholder="Masukan Jumlah Pesanan Anda" required></div>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="assets/image/tehmanis.png" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title" align="center">Teh Manis</h5>
			      <h5 align="center">Rp. 3.000</h5>
			      <input type="text" class="form-control" id="usr" name="tehmanis" placeholder="Masukan Jumlah Pesanan Anda" required>
			    </div>
			  </div>
			  <div class="card">
			  	<br>
			    <img class="card-img-top" src="assets/image/tehtawar.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title" align="center">Teh Tawar</h5>
			      <h5 align="center">Rp. 1.000</h5>
			      <input type="text" class="form-control" id="usr" name="tehtawar" placeholder="Masukan Jumlah Pesanan Anda" required>
			    </div>
			  </div>
			</div>
			<br>
			<div class="text-center">
			<button type="submit" class="btn btn-outline-primary">Pesan Sekarang</button>
			</div>
			<br>
		</form>
	</div>
</div>

	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</body>
</html>