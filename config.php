<?php
  # Konek ke Web Server Lokal
  $myHost	= "localhost";
  $myUser	= "root";
  $myPass	= "";
  $myDbs	= "dbbengkel";

  $koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
  if (!$koneksidb) {
    echo "Failed Connection !";
  }

?>