<?php
// include database connection file
include_once("config/koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['ID'];
	$kode_barang = $_POST['kode_barang'];
	$stok = $_POST['stok'];
	$harga = $_POST['harga'];
	$nama_barang = $_POST['nama_barang'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE tb_barang SET kode_barang='$kode_barang', stok='$stok', harga='$harga', nama_barang='$nama_barang' WHERE ID='$id'");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['ID'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tb_barang WHERE ID='$id'");
 
while($user_data = mysqli_fetch_array($result))
{
	$kode_barang = $user_data['kode_barang']; 
	$stok = $user_data['stok'];
	$harga = $user_data['harga'];
	$nama_barang = $user_data['nama_barang'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
	<link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="edit.css">
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0" class="">
			<tr> 
				<td>Kode Barang</td>
				<td><input type="text" class="form-control mb-2" name="kode_barang" value=<?php echo $kode_barang;?>></td>
			</tr>
            <tr> 
				<td>Stok</td>
				<td><input type="text" class="form-control mb-2" name="stok" value=<?php echo $stok;?>></td>
			</tr>
            <tr> 
				<td>Harga</td>
				<td><input type="text" class="form-control mb-2" name="harga" value=<?php echo $harga;?>></td>
			</tr>
            <tr> 
				<td>Nama Barang</td>
				<td><input type="text" class="form-control mb-2" name="nama_barang" value=<?php echo $nama_barang;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>></td>
				<td><input type="submit" name="update" value="update"  class="btn btn-outline-success"></td>
			</tr>
		</table>
	</form>
	<script src="asset/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>