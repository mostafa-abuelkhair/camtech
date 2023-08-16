<?php
session_start();

$uname=$_SESSION["uname"];

if($uname == ''){exit("<script>location.replace('index.php');</script>");}


$hint=$_GET["hint"];

include 'db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("UTF8");

switch ($hint) {
  case 'out':
  $_SESSION["uname"] = null;
  $_SESSION["psw"] = null;
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
