<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
{
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql1="INSERT INTO contactus (nama_visit,email_visit,telp_visit,pesan) VALUES('$name','$email','$contactno','$message')";
$lastInsertId = mysqli_query($koneksidb, $sql1);
if($lastInsertId){
	$msg="Pesan Terkirim. Kami akan menghubungi anda secepatnya.";
}else{
	$error="Terjadi Kesalahan! Silahkan coba lagi.";
}
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Light Workshop | Contact Us</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://kit.fontawesome.com/aff2acc44a.js" crossorigin="anonymous"></script>
  
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    .succWrap{
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Light Workshop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="login.html">Login</a>
      </li>
        <li class="nav-item active">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk.html">Product</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Service
          </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="mesin.html">Machine Car</a>
            <a class="dropdown-item" href="ban.html">Tire Care</a>
            <a class="dropdown-item" href="cuci.html">Car Wash</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

<!-- About -->
<div class="alert alert-light " role="alert">
</div>
<div class="alert alert-dark " role="alert">
    <div class="text-center">
<h2>Light Workshop</h2>
</div>
<hr>
<p>LightWorkshop adalah Web Bengkel Online, Web ini akan memudahkan para pelanggan melakukan Pemesanan secara online. Dan juga terdapat Produk- produk terbaik dengan harga yang ekonomis untuk mobil kesayangan anda. LightWorkshop juga menghadirkan 3 service yaitu MachineCare, Tire Care, dan Car Wash.</p>
</div>
<!-- Contact -->
<div class="alert alert-secondary text-center" role="alert">
    <div class="alert alert-light text-center" role="alert">
      <h2 style="color: black"><strong>Contact</strong></h2>
      <hr>
    </div>
  <div class="container">    
  <div class="row text-center text-md-left">
  <div class="col-md-4 col-lg-3 ">
  <i class="fas fa-phone fa-10x text-dark"></i>
  
  <h4 class="text-left" style="font-size: 20px" >095400480804</h4>
</div>
  <div class="col-md-4 col-lg-3 ">
 <i class="fas fa-envelope fa-10x text-warning"></i>
 <h4 class="text-left" style="font-size: 16px" >lightworkshop.id@gmail.com</h4>
</div>
  <div class="col-md-4 col-lg-3 ">
 <i class="fab fa-facebook fa-10x text-info"></i>
 <h4 class="text-left" style="font-size: 20px" >lightworkshop</h4>
</div>
 <div class="col-md-4 col-lg-3 ">
  <i class="fab fa-line fa-10x text-secondary"></i>
  <h4 class="text-left" style="font-size: 20px" >@lightworkshop</h4>
</div>
</div>
</div>
</div>
</div>

<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6 mt-4 mb-4">
        <h3>Ada Pertanyaan?</h3>
          <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <div class="contact_form gray-bg">
          <form  method="post">
            <div class="form-group">
              <label class="control-label">Full Name <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email Address <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Phone Number <span>*</span></label>
              <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" required>
            </div>
            <div class="form-group">
              <label class="control-label">Message <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Send Message <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
</section>
<section class="address">
            <div class="alert alert-dark text-center" role="alert">
                <h1> Alamat</h1>
                <hr>
                <p>Jl. Besar Ijen No.84, RW.3, Oro-oro Dowo, Kec. Klojen, Kota Malang, Jawa Timur 65119</p>
            </div>          
        </section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3171912753733!2d112.6248262!3d-7.966134999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6282b78603a63%3A0xe6aeaed045ab7de2!2sJl.%20Besar%20Ijen%20No.84%2C%20Oro-oro%20Dowo%2C%20Kec.%20Klojen%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065119!5e0!3m2!1sid!2sid!4v1603708394453!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </section>



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