<?php
  $hostname = "sql103.infinityfree.com";
  $username = "if0_37729852";
  $password = "J5bAHqckJJLUt";
  $dbname = "if0_37729852_airbla";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>

