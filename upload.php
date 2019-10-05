<?php

$item_name=$_POST["item_name"];
$price=$_POST["price"];
$description=$_POST["description"];
$banner=$_POST["banner"]=='on'? 1:0;
$details=$_POST["details"];

include 'db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$imgsa=[];
$total = count($_FILES['upload']['name']);

// Loop through each file
for( $i=0 ; $i < $total ; $i++ ) {

  //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a file path
  if ($tmpFilePath != ""){
    //Setup our new file path
    $newFilePath = "uploads/" . $_FILES['upload']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

    $imgsa[$i]=$_FILES['upload']['name'][$i];
      //Handle other code here

    }
  }
}

$imgs = join("-",$imgsa);

$m_img='';
$tmpFilePath = $_FILES['upload2']['tmp_name'][0];

  if ($tmpFilePath != ""){

  $newFilePath = "uploads/" . $_FILES['upload2']['name'][0];

  if(move_uploaded_file($tmpFilePath, $newFilePath)) {

  $m_img=$_FILES['upload2']['name'][0];
 }
}

$banner_img='';
$tmpFilePath = $_FILES['upload2']['tmp_name'][1];

  if ($tmpFilePath != ""){

  $newFilePath = "uploads/" . $_FILES['upload2']['name'][1];

  if(move_uploaded_file($tmpFilePath, $newFilePath)) {

  $banner_img=$_FILES['upload2']['name'][1];
 }
}

$conn->query("INSERT INTO systems (item_name, price , description, banner, details, m_img ,imgs ,banner_img)
VALUES ('$item_name', '$price', '$description', '$banner' ,'$details','$m_img' ,'$imgs' ,'$banner_img');");

?>
