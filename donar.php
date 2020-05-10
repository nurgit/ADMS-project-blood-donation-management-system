<?php
$conn=oci_connect('hr','hr','localhost/scott');

  if (!$conn) {
    echo "Connection error";

  }
  else {
    echo "connection is successfull";
  }
 ?>
