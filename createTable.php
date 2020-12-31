<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
	$database = "dbbengkel";
	
	$connect = mysqli_connect($namaHost, $username, $password, $database);
	
	if($connect){
		echo "Koneksi dengan MYSQL berhasil <br>";
	}
	else{
		echo "Koneksi dengan MYSQL gagal".mysqli_connect_error();
	}
	
	$sql = "CREATE TABLE signup(
			id INT PRIMARY KEY,
			nama_Depan VARCHAR (225) NOT NULL,
			nama_Belakang VARCHAR (225) NOT NULL,
			email VARCHAR (225) NOT NULL,
			password VARCHAR (225) NOT NULL,
			alamat VARCHAR (225) NOT NULL)";
			
	if (mysqli_query($connect, $sql)){
		echo "Tabel Product berhasil dibuat";
	}
	else{
		echo "Tabel Product dibuat <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);
		
?>
