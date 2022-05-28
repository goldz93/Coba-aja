<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Membuat Form Sederhana</title>
</head>
<body>
	<form>
		<?php 
			$nama = @$_GET['nama'];
			$alamat = @$_GET['alamat'];
			$npm = @$_GET['npm'];
			$nomor_telepon = @$_GET['nomer_telepon'];
		 ?>

		 <div>
		 	<label>Nama</label> <br>
		 	<input name="nama" type="text" placeholder="Masukan Nama">
		 </div>
		 <div>
		 	<label>Alamat</label> <br>
		 	<input name="alamat" type="text" placeholder="Masukan Alamat">
		 </div>
		 <div>
		 	<label>NPM</label> <br>
		 	<input name="npm" type="text" placeholder="Masukan NPM">
		 </div>
		 <div>
		 	<label>Nomor Telepon</label> <br>
		 	<input name="nomer_telepon" type="text" placeholder="Masukan Nomor Telepon">
		 </div>
		 <div>
		 	<button>Submit</button>
		 </div>

		 <?php 
		 	if ($nama) {
		 		echo"<strong>Nama:</strong> {$nama} <br>";
		 	}
		 	if ($alamat) {
		 		echo"<strong>Alamat:</strong> {$alamat} <br>";
		 	}
		 	if ($npm) {
		 		echo"<strong>NPM:</strong> {$npm} <br>";
		 	}
		 	if ($nomor_telepon) {
		 		echo"<strong>Nomor Telepon:</strong> {$nomor_telepon} <br>";
		 	}
		  ?>
	</form>
</body>
</html>