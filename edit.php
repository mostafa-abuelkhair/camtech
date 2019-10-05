<?php

$d=$_GET["p"];

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Cam Tech</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<script src="index.js"></script>
  <!-- Custom styles for this template -->
  <link href="index.css" rel="stylesheet">

</head>

<body  ng-app="app" ng-controller="ctrl">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img class="" style="width:40px;" src="logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<form action="upload.php" method="post" enctype="multipart/form-data">

<div class="container">
  <div class="row">
    <div class="col-lg-12">

      <div class="card mt-4">
        <div class="card-header">
          images
        </div>
          <div class="card-body">

                <div ng-repeat="x in imn track by $index" style="margin-bottom:15px;">
                  <input type="file" name="upload[]" />
                </div>
                  <button type="button" ng-click="imn.push(0);" class="btn btn-success">Add image</button>

        </div>
      </div>

      <div class="card mt-4">
          <div class="card-body">

            <div class="form-group">
              <label for="usr">display image :</label>
              <input type="file" name="upload2[]" />
            </div>

            <div class="form-group">
              <label for="usr">item name :</label>
              <input type="text" class="form-control" name="item_name">
            </div>

            <div class="form-group">
              <label for="usr">price :</label>
              <input class="form-control" type="text" name="price">
            </div>

          <div class="form-group">
            <label for="usr">item description :</label>
            <textarea class="form-control" rows="5" name="description"></textarea>
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
                <input type="checkbox" name="banner" class="form-check-input" >add to slider
              </label>
            </div>

            <input type="file" class="form-control-file border" name="upload2[]">

          </div>

        </div>
      </div>

      <div class="card card-outline-secondary my-4">
        <div class="card-header">
          Product details
        </div>
        <div class="card-body">

          <textarea class="form-control" rows="15" name="details"></textarea>

        </div>
      </div>

      <div class="col text-center">
        <button type="submit" class="btn btn-outline-dark" style="width:30%">ok</button>
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
$scope.imn=[];


<?php

?>

});


</script>

</html>
