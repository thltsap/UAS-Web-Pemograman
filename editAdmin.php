<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <script src="https://kit.fontawesome.com/aff2acc44a.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
	<body>
		<div class="jumbotron">
			<div class="container text-center">
				<h3>Edit Data</h3>
				<div class="alert alert-dark" role="alert">
		<?php
			include "koneksi.php";
			$id=$_GET['idproduk'];
			$query="SELECT *FROM produk WHERE idproduk='$id'";
			$result=mysqli_query($connect, $query);
		?>		
			<table>
				<form  method = "GET" action="proseEditAdmin.php">
			<?php
				while($row=mysqli_fetch_array($result)){
			?>
				<tr>
					<td>Id </td>
					<td><input type="number" name="id" value="<?php echo
					$row['idproduk'];?>"readonly></td>
				</tr>
				<tr>
				<td>Merk </td>
					<td><input type="text" name="Merk" value="<?php echo
					$row['merk'];?>"></td>
				</tr>
				<tr>	
				<td>Jenis Produk </td>
					<td><input type="text" name="Jenis" value="<?php echo
					$row['jenisproduk'];?>"></td>
				</tr>	
				<tr>
					<td>Nama Produk </td>
					<td><input type="text" name="Nama" value="<?php echo
					$row['namaproduk'];?>"></td>
				</tr>
				<tr>
					<td>Harga </td>
					<td><input type="number" name="Harga" value="<?php echo $row['harga'];?>"></td>
				</tr>				
				<tr>
					<td><input type="submit" name="edit" value="Edit"> </td>
				</tr>
			<?php
				}
				
			?>
			</form>
			</table>
		</div>
	</div>
</div>
		<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html> 

				