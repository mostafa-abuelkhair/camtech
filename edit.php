<?php
session_start();



if(isset($_GET["p"])){
  $edit=true;
  $d=$_GET["p"];
}
else{$edit=false;}

$uname=$_SESSION["uname"];

if($uname == ''){exit("not allowed .... if you are admin try to login first"); }
else{}

if($edit){
include 'db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("UTF8");

$result = $conn->query("SELECT * FROM systems where id = $d");
if(!empty($result)){
  $row = $result->fetch_assoc();
}
else{exit('PAGE NOT FOUND');}
$p = json_encode($row, JSON_UNESCAPED_UNICODE);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Cam Tech</title>

  <link rel="stylesheet" href="srcs/bootstrap/4.3.1/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="srcs/jquery.min.js"></script>

<!-- Popper JS -->
<script src="srcs/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="srcs/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="srcs/angular.min.js"></script>

<script src="index.js"></script>
  <!-- Custom styles for this template -->
  <link href="index.css" rel="stylesheet">

<style>
.rimg{width:100px;height:100px;}

.wrapper {
    position: relative;
  display: inline-block;
  border-style: solid;border-color:red;margin:5px;
}
.close:before {
  content: '✕';
}
.close {
  position: absolute;
  top: 0;
  right: 0;
  cursor: pointer;
}

</style>

</head>

<body  ng-app="app" ng-controller="ctrl">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img class="" style="width:40px;" src="logo.png" alt=""> Cam Tech</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php

          echo "<li class=\"nav-item\">
                      <a class=\"nav-link\" style=\"color:orange;\" href=\"tasks.php?hint=out\">Log out
                      </a>
                    </li>";

          ?>
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<form action="upload.php?p=<?php echo $edit? $d:'new'  ?>" method="post" enctype="multipart/form-data">

  <input type="text" name="imgs" style="visibility:hidden;" value="{{imgs.join('-')}}" />

<div class="container">
  <div class="row">
    <div class="col-lg-12">

      <div class="card mt-4">
        <div class="card-header">
          images
        </div>
          <div class="card-body">

            <div>
              <div class="wrapper" ng-repeat="x in imgs track by $index" ng-click="imgs.splice($index, 1);">
                <img class="rimg" src="{{'uploads/'+x}}" alt="x" >
                <span class="close"></span>
              </div>
            </div>


                <div ng-repeat="x in imn track by $index" style="margin-bottom:15px;">
                  <input type="file" name="upload[]" />
                </div>
                  <button type="button" ng-click="imn.push(0);" class="btn btn-success">Add image</button>

        </div>
      </div>

      <div class="card mt-4">
          <div class="card-body">

            <div class="form-group">
              <label for="usr"><?php echo $edit? 'replace the card image :' : 'card image :'  ?></label>
              <input type="file" name="upload2[]" />
            </div>

            <div class="form-group">
              <label for="usr">item name :</label>
              <input type="text" class="form-control" name="item_name" value="{{p.item_name}}">
            </div>

            <div class="form-group">
              <label for="usr">price :</label>
              <input class="form-control" type="text" name="price" value="{{p.price}}">
            </div>

          <div class="form-group">
            <label for="usr">item description :</label>
            <textarea class="form-control text-center" rows="5" name="description" style="white-space: pre-wrap;">{{p.description.replace('<br/>','\n\r')}}</textarea>
          </div>

        </div>
      </div>

      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          banner
        </div>
        <div class="card-body">

          <div class="form-group">

            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" name="banner" class="form-check-input" ng-checked="p.banner=='1'? true:false">add to slider
              </label>
            </div>

          </div>

          <div class="form-group">
            <label for="usr"><?php echo $edit? 'replace the banner image :' : 'banner image :'  ?></label>
            <input type="file" class="form-control-file border" name="upload2[]">
        </div>

        </div>
      </div>

      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          Product details
        </div>
        <div class="card-body">

          <textarea class="form-control text-center" rows="15" name="details">{{p.details.replace('<br/>','\n\r')}}</textarea>

        </div>
      </div>

      <div class="col text-center">
        <button type="submit" class="btn btn-outline-dark" style="width:30%"><?php echo $edit? 'edit':'add new item'; ?></button>
      </div>


    </div>
  </div>
</div>

</form>

  <footer class="py-5 bg-dark" id="contact" style="margin-top:20px;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; cam tech</p>

    </div>
    <!-- /.container -->
  </footer>


  </body>




<script>
var app = angular.module('app', []);

app.run(function($rootScope) {


});

app.controller('ctrl', function($scope,$rootScope,$http) {

$scope.imgs=[];

<?php
if($edit){
echo "\$scope.p=JSON.parse('$p'.replace(/[\u0000-\u0019]+/g,'<br/>'));";
echo "if(\$scope.p.imgs) {\$scope.imgs=\$scope.p.imgs.split('-')}";
}
?>
$scope.imn=[];
});



</script>

</html>
