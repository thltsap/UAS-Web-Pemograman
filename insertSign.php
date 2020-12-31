<!DOCTYPE html>
<html lang="en">
  <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/aff2acc44a.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>
  	<div class="container">
  		<div class="alert alert-secondary" role="alert">
	  	<?php
		include "koneksi.php";
		
		$namaDepan=$_GET['nama_Depan'];
		$namaBelakang=$_GET['nama_Belakang'];
		$email=$_GET['email'];
		$password=$_GET['password'];
		$alamat=$_GET['alamat'];
		
		$sql="INSERT INTO signup(nama_Depan,nama_Belakang,email,password,alamat)
			VALUES('$namaDepan','$namaBelakang','$email','$password','$alamat')";
			
		if (mysqli_query($connect, $sql)){
			echo ""?>
			Selamat Datang <?php echo $_GET["nama_Depan"]; ?> !!<br>
		
		<?php
		}else{
			echo "Data gagal ditambahkan <br>".mysqli_error($connect);?>
		<?php
		mysqli_close($connect);
	}
			
?>  			
  		<h4>Selamat Akun anda Berhasil dibuat!</h4>  	
 		Verify Akun anda agar bisa digunakan!
 	<div class="col-sm-12 text-center">
  <a href="index.html "><button type="submit" class="btn btn-secondary">Verify</button> 
  </a>
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
