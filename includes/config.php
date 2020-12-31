<?php
  # Konek ke Web Server Lokal
  $myHost	= "sql202.epizy.com";
  $myUser	= "epiz_27584003";
  $myPass	= "jEmaquDP2OAaDHB";
  $myDbs	= "epiz_27584003_dbbengkel";

  $koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
  if (!$koneksidb) {
    echo "Failed Connection !";
  }

?>