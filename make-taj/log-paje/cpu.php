<?php


session_start();
$mysqli = new mysqli('localhost', 'root', '', 'database_e-commerce') or die(mysqli_error($mysqli));

if (isset($_POST['log_up'])){
  $f_name = $_POST['f-name'];
  $l_name = $_POST['l-name'];
  $adress = $_POST['adriss'];
  $phone = $_POST['phone'];
  $gmail = $_POST['email'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
  $checkbox = $_POST['checkbox'];
  $img = $_POST['img'];
 if ($password1 ==  $password2 ){
 $mysqli->query("INSERT INTO `customers`(`lastName`, `firstName`, `adress`, `phone`, `email`, `password`) 
 VALUES ('$l_name','$f_name','$adress','$phone','$gmail','$password2')") or die($mysqli->error());
  $_SESSION['f_nam'] =  "$f_name";
  $_SESSION['l_name'] = "$l_name";
  $_SESSION['img'] = "$img";
  $_SESSION['box'] = " $checkbox";
  $_SESSION['EM'] = "  $gmail ";

  $pass = true;
  header("location:../sit-bitring/index.php");
 }
 else{
    $pass = false;
 }

}
else{
    $pass = false;
 }



?>
