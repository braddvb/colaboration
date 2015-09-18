<?php
  // $con_procedural = mysqli_connect("localhost","root","","reservation_app");

  // if (mysqli_connect_errno()){
  //   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  // }

  // $con_oo = new mysqli("localhost", "root", "", "reservation_app");

  // if ($con_oo->connect_errno) {
  //     echo "Failed to connect to MySQL: " . $con_oo->connect_error;
  // }


  $servername = "localhost";
  $username = "root";
  $password = "";

  try {
    $dbh = new PDO("mysql:host=$servername;dbname=reservation_app", $username, $password);
      // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  }
  catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  // var_dump($con_procedural);
  // echo "<br><br>";
  // var_dump($con_oo);
  // echo "<br><br>";
  // var_dump($con_pdo);
?>