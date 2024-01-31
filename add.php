<html>
<head>
	<title>Add Users</title>
	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
</head>
 
<body>
	<div class="container">
		<div class="mt-5">
			<a href="index.php">Go to Home</a>
		</div>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr > 
				<td>Kode Barang</td>
				<td><input type="text" name="kode_barang" class="mt-3"></td>
			</tr>
			<tr> 
				<td>Stok</td>
				<td><input type="text" name="stok" class="mt-3"></td>
			</tr>
			<tr> 
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang" class="mt-3"></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="text" name="harga" class="mt-3"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" class="btn btn-primary" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$kode_barang = $_POST['kode_barang'];
		$stok = $_POST['stok'];
		$nama_barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
		
		// include database connection file
		include_once("config/koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO tb_barang(kode_barang, stok, nama_barang , harga) VALUES ('$kode_barang','$stok','$nama_barang','$harga')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
	</div>
	<script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>