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
	
	$sql = "INSERT INTO signup(id,nama_Depan,nama_Belakang,email,password,alamat)
			VALUES (1,'Aliv','Putri','aliv0099@gmail.com','aliv112233','Jl.Mawar No.23A'),(2,'Bagus','Lexi','gusbagus@gmail.com','gusqwew123','Jl.Sentosa No.2C'),(3,'Annnisa','Zahra','Zahrakuskus@yahoo.com','Alammu123','Jl.Batuah No.12D'),(4,'Aisyah','Zahwa','zahawawa@gmial.com','wawazahra','Jl.Belimbing No.1'),(5,'Amar','Pramudiya','amarmar34@gmail.com','marmar556677','Jl.Tol No.2F'),(6,'Aldiansyah','Putra','Aldi08@gmail.com','qwerty2343','Jl.Tol No.2F'),(7,'Intan','Ayu','AyuIntan@gmail.com','ayuayu809','Jl.Violet No.7D'),(8,'Akbar','Setyan','setyani@gmail.com','akbar.com','Jl.Neptunus No.1D'),(9,'Fahrul','Anwar','Anwarr34@gmail.com','fahrul2907','Jl.Biola No.9A'),(10,'Rafa','Ikhsan','rafaikhsan1@gmail.com','kuakui23angka','Jl.Bulan No.15F')";
			
	if (mysqli_query($connect, $sql)){
		echo "Data berhasil ditambahkan";
	}
	else{
		echo "Data gagal ditambahkan <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);
		
?>
