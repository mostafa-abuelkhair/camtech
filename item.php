<?php
session_start();

$uname=$_SESSION["uname"] ;

if($uname == ''){$admin=false;}
else{$admin=true;}


$d=$_GET["p"];

include 'db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("UTF8");

$result = $conn->query("SELECT * FROM systems where id = $d");
if(!empty($result)){
  $row = $result->fetch_assoc();
}
else{exit('PAGE NOT FOUND');}
$p = json_encode($row)

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Cam Tech</title>

  <link rel="stylesheet" href="srcs/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="srcs/jquery.min.js"></script>

<!-- Popper JS -->
<script src="srcs/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="srcs/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="srcs/angular.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="index.css" rel="stylesheet">


</head>

<body ng-app="app" ng-controller="ctrl">

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
          if($admin){
          echo "<li class=\"nav-item\">
                      <a class=\"nav-link\" style=\"color:orange;\" href=\"tasks.php?hint=out\">Log out
                      </a>
                    </li>";
          }
          ?>

          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <?php if($admin){
     echo "<a href=\"edit.php?p=$d\"><button class=\"btn btn-primary ab\" > Edit this item </button></a>";
     echo "<a href=\"tasks.php?p=$d&hint=rm\"><button class=\"btn btn-danger ab\" > remove this item </button></a>";

   }?>


  <!-- Page Content -->
  <div class="container">

    <div class="row">


      <div class="col-lg-12">

        <div class="card mt-4">
          <div class="card-header ih" >

            <div id="carouselExampleIndicators" style="height:100%;" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}" class="{{$index==0 ? 'active': ''}}" ng-repeat="x in p.imgs.split('-') track by $index"></li>
              </ol>
              <div class="carousel-inner" role="listbox">

                <div class="carousel-item {{$index==0 ? 'active': ''}} " ng-repeat="x in p.imgs.split('-') track by $index">
                <img class="cimg2" src="{{'uploads/'+x}}"  alt="">

                </div>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>


          </div>
          <div class="card-body">
            <h3 class="card-title">{{p.item_name}}</h3>
            <h4> {{p.price}}</h4>
            <textarea class="form-control text-center" rows="5" readonly name="description" style="white-space: pre-wrap;background:transparent;cursor:default;border-style:none;">{{p.description.replace('<br/>','\n\r')}}</textarea>
            <span class="text-warning ">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product details
          </div>
          <div class="card-body">
            <textarea class="form-control text-center" rows="10" readonly name="details" style="white-space: pre-wrap;background:transparent;cursor:default;border-style:none;">{{p.details.replace('<br/>','\n\r')}}</textarea>

          </div>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; cam tech 2019</p>
    </div>
    <!-- /.container -->
  </footer>

</body>

<script>

var app = angular.module('app', []);

app.run(function($rootScope) {


});

app.controller('ctrl', function($scope,$rootScope,$http) {

<?php

echo "\$scope.p=JSON.parse('$p'.replace(/[\u0000-\u0019]+/g,'<br/>'));";
?>

});

</script>
</html>
