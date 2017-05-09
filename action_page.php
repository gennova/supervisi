<?php 
include "koneksi.php";
$namabarang   = $_POST['namab'];
$kategori   = $_POST['kategori'];
$subkategori  = $_POST['subkategori'];
$harga  = $_POST['hargab'];
$stok  = $_POST['stokb'];

echo $namabarang ;
echo $kategori;
echo $subkategori;
echo $harga ;
echo $stok ;
mysql_query("INSERT INTO barang(namabarang,idkategori,idsubkategori,stok,harga)
VALUES('$namabarang','$kategori','$subkategori','$stok','$harga')") or die(mysql_error());
echo "<meta http-equiv=\"refresh\" content=\"5;url=index.php"/>";
header('location:index.php');
?>