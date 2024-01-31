<?php
include "../config/koneksi.php";
if (isset($_POST['simpan'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_barang(kode_barang, nama_barang, stok) VALUES ('$kode_barang', '$nama_barang' , '$stok')");

    if ($query) {
        header ('location: ../partials/tampil_data.php?alert=2');

    }else {
        header('location: ../partials/tampil_data.php?alert=1');
    }
}
?>