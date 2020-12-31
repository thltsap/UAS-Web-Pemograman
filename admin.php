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
     <!-- NavBar -->     
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">Light Workshop</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.html">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produk.html">Product</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Service
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="mesin.html">Machine Care</a>
          <a class="dropdown-item" href="#">Tire Care</a>
          <a class="dropdown-item" href="#">Car Wash</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- Jumbotron -->
<div class="jumbotron">
  <div class="container text-center">
  <h3 class="alert alert-secondary">Selamat Datang Admin!!</h3>
</div>
</div>
<div class="container">
<table class="table text-md-left">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Merk</th>
      <th scope="col">Jenis </th>
      <th scope="col">Nama </th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
<table class="table text-md-center">  
  <tbody>
    <?php 
        include "koneksi.php";
        
        $query="SELECT *FROM produk";
        $result=mysqli_query($connect, $query);
      
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
      <td> <?php echo $row["idproduk"] ?> </td>
      <td> <?php echo $row["merk"] ?> </td>
      <td> <?php echo $row["jenisproduk"] ?> </td>
      <td> <?php echo $row["namaproduk"] ?> </td>
      <td> <?php echo $row["harga"] ?> </td>
      <td>
        <a href="editAdmin.php?idproduk=<?php echo $row['idproduk'];?>" class="badge badge-light">Edit</a>
        <a href="hapus.php?idproduk=<?php echo $row['idproduk'];?>"  class="badge badge-dark"> Hapus </a>
        
      </td>
    <?php
        }
      }
      else{
        echo "0 results";
      }
    ?>
  </tr>
  </tbody>
</table>
</div>
<div class="jumbotron text-center">
<h3><a href="insertAdmin.html" class="badge badge-secondary ">Tambah Data</a></h3>
</div>




<!-- Footer -->
<footer class="bg-dark text-white pt-5 pb-4">
    
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Light Workshop</h5>
                <p>LightWorkshop Company adalah Web Bengkel Online, dimana web ini akan memudahkan para pelanggan melakukan Pemesanan secara online. Dan juga terdapat Produk untuk mobil kesayangan anda</p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Service</h5>
                <p>
                    <a href="mesin.html" class="text-white" style="text-decoration: none;">Machine Care</a>
                </p>
                <p>
                    <a href="ban.html" class="text-white" style="text-decoration: none;">Tire Care</a>
                </p>
                <p>
                    <a href="cuci.html" class="text-white" style="text-decoration: none;">Car Wash</a>
                </p>       
                
            </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Page</h5>
                    <p>
                    <a href="index.html" class="text-white" style="text-decoration: none;">Home</a>
                </p>
                <p>
                    <a href="about.php" class="text-white" style="text-decoration: none;">About</a>
                </p>
                <p>
                    <a href="produk.html" class="text-white" style="text-decoration: none;">Product</a>
                </p>                                
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h5>
                    <p>
                        <i class="fas fa-home mr-3"></i>Malang, Jawa Timur 
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>lightworkshop.id@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i>095400480804
                    </p>
                    <p>
                        <i class="fas fa-print mr-3" ></i>Light Company
                    </p>
                </div>
                
                <div class="row align-items-left">
                    <div class="col-md-7 col-lg-8">
                        <p>CopyRight 2020 Light Workshop by:
                            <a href="index.html" style="text-decoration: none;">
                                <strong class="text-warning">Light Company</strong>
                            </a>                           
                        </p>                       
                        </div>
                         
                    </div>
                    <div class="col-md-5 col-lg-4">
                            <div class="text-center text-md-right">

                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/thalita.putri.560/" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/thltsap" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-whatsapp"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/thltsap/" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/channel/UCpty54mUvzB5R_K_eR4MmSg" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                                    </li>
                                </ul>
                                
                            </div>
                            
                </div>
        </div>
        
    </div>
</footer>
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