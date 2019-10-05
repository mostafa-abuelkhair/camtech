<?php
session_start();

$uname=$_SESSION["uname"];

if($uname == ''){exit("<script>location.replace('index.php');</script>");}


$hint=$_GET["hint"];

include 'db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

switch ($hint) {
  case 'out':
  $_SESSION["uname"] = '';
  $_SESSION["psw"] = '';
  echo "<script>location.replace('index.php');</script>";
    break;

    case 'rm':
      $p=$_GET["p"];

      $conn->query("DELETE FROM systems
        where id = $p");

  echo "<script>location.replace('index.php');</script>";
      break;

  default:

    break;
}


?>
