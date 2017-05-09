<?php 
include "koneksi.php";
$kodebarang   = $_POST['idbarangnya'];
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
echo 'kodeeeeeeee'.$kodebarang;
mysql_query("UPDATE barang set namabarang='$namabarang', idkategori =$kategori, idsubkategori = $subkategori, harga=$harga, stok = $stok where id=$kodebarang;") or die(mysql_error());
echo "<meta http-equiv=\'refresh\' content=\5;url=index.php/>";
header('location:index.php');
?>