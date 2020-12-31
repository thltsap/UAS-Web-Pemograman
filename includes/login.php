<?php
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql = "SELECT * FROM user WHERE username ='$username' AND password='$password'";
$query = mysqli_query($koneksidb,$sql);
$results = mysqli_fetch_array($query);
if(mysqli_num_rows($query)>0){
	$_SESSION['ulogin']=$_POST['username'];
    $currentpage=$_SERVER['REQUEST_URI'];
    echo "<script>alert('login success!');</script>";
	echo "<script type='text/javascript'> document.location = 'mesin.html'; </script>";
	} else{
		echo "<script>alert('username atau Password Salah!');</script>";
	}
}

?>

<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
        <h3 class="modal-title">Login</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post">
                <div class="form-group">
                  <input type="username" class="form-control" name="username" placeholder="Alamat username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-danger">
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Belum punya akun? <a href="regist.php">Daftar Disini</a></p>
        <!--<p>Lupa Password? <a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Klik disini</a></p>-->
      </div>
    </div>
  </div>
</div>