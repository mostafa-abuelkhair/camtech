<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	 <meta charset="utf-8">
	 <link rel="stylesheet" href="srcs/bootstrap/4.3.1/css/bootstrap.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- jQuery library -->
 <script src="srcs/jquery.min.js"></script>

 <!-- Popper JS -->
 <script src="srcs/popper.min.js"></script>

 <!-- Latest compiled JavaScript -->
 <script src="srcs/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

$err="";

include 'db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("UTF8");

$p=false;

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $uname=test_input($_POST["uname"]);
 $psw=test_input($_POST["psw"]);
$sql = "SELECT username FROM emails
WHERE username='$uname';";
$rs= $conn->query($sql);
$row=mysqli_fetch_array($rs,MYSQLI_NUM);

   if ($row!=null){
	$sql = "SELECT password FROM emails
	WHERE username='$uname';";
	$rs2= $conn->query($sql);
$row2=mysqli_fetch_array($rs2,MYSQLI_NUM);
   $t2= $row2[0];
   if ($psw==$t2){$p=true;}
   }
   else{$p=false;}

   if($p){

$_SESSION["uname"] = $uname;
$_SESSION["psw"] = $psw;
echo "<script>location.replace('index.php');</script>";

   }
   else{$err="username or password is incorrect";}

 }

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
     ?>
<style>
/* Bordered form */
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}


.fb{width:50%;margin: auto;}
@media only screen and (max-width: 610px) {.fb{width:80%;margin: auto;} }
</style>
<head/>
<body>
<form action="admin.php" method="post" style="" class="fb">
  <div class="imgcontainer">
    <img src="uploads/iin.png" alt="Avatar" class="avatar">
  </div>

    <div style="color: red;text-align: center;display: block;width: 100%"><?php echo $err; ?></div>

  <div class="container-fluid">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>

  </div>


</form>

</body>
<html/>
