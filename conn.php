<?php
  $con=mysqli_connect("localhost","root","","daraz_phishing");
  if(mysqli_connect_errno()){
    header("Location:error.php");
  }
 ?>