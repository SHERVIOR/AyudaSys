<?php
  $dbServername ="localhost";
  $dbUsername ="root";
  $dbPassword ="";
  $dbName = "ayudasys";
  
  $conn =mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);



  $inputEmail = $_POST['Email'];
  $inputPassword = $_POST['Password'];

  //database connections


?>
