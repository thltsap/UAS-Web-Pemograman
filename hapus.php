<?php
	include "koneksi.php";
	
	$idproduk=$_GET['idproduk'];

	$query = "DELETE FROM produk WHERE idproduk='$idproduk'";
	$result=mysqli_query($connect, $query);
	
	if($result){
		echo "Database berhasi dihapus";
	?>
		<a href = "admin.php">Lihat data </a>
	<?php
	}else{
		echo" Data Gagal dihapus".mysql_error($connect);
	}
?>