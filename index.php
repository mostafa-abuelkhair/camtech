<?php
session_start();


if (isset($_SESSION["uname"])){
  $admin=true;
  $uname=$_SESSION["uname"] ;
}
else{$admin=false;}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Cam Tech</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="srcs/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="srcs/aos/dist_aos.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="index.css" rel="stylesheet">

</head>

<body   style="background:#f0f0f5">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img class="" style="width:40px;" src="logo.png" alt=""> Cam Tech</a>
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
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="front">
    <img src="uploads/front.jpg" alt="">
  </div>

  <div class="jumbotron text-center head" >
    <h1 data-aos="zoom-in">Cam Tech</h1>
    <p data-aos="zoom-in">لأنظمة المراقبة</p>
  </div>

  <!-- Container (About Section) -->
  <section class="about py-5" id="about" style="background:#e9ecef">
	<div class="container py-lg-5 py-sm-3">
		<div class="row">
			<div class="col-lg-3 about-left">
				<h3 class="mb-lg-5 mb-4" data-aos="fade-right">About us</h3>
			</div>
			<div class="col-lg-9 col-md-7 about-text" data-aos="fade-left">
				<h3> </h3>
        <p class="mt-2 aboutp">شركة رائدة في مجال أنظمة المراقبة
            وتملك سابقة اعمال قويه
            ونعمل بتكنولوجيا متطوره واسعار مناسبة
            لجميع الفئات شامل التركيب
            وماركات عالميه مشهور كفائتها
        </p>
				<p class="mt-3 aboutp">نقوم بتأمين اى مكان له باب ...سواء محلات ،أكشاك ، شركات ،فيلات ومنازل ،مخازن،مدارس حضانات ..نعمل بتكنولوجيا متطوره وبأسعار مناسبة جدا</p>
				<p class="mt-2 aboutp"> بنقدم حلول لكل الأماكن وعروضنا بتناسب أي مكان </p>
			</div>
			<div class="col-lg-4 col-md-5 about-img">
				<img src="images/1.png" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</section>


  <div class="container" id="products" ng-app="app" ng-controller="ctrl" data-aos="fade-up-right"> 

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Products </h1>
        <?php /*<div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
          </div>*/
        ?>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}" class="{{$index==0 ? 'active': ''}}" ng-repeat="x in bn track by $index"></li>
          </ol>
          <div class="carousel-inner" role="listbox">

            <div class="carousel-item {{$index==0 ? 'active': ''}}" style="height:100%;cursor:pointer" ng-click="lgo('item.php?p='+x.id)" ng-repeat="x in bn track by $index">

              <a href="item.php?p={{x.id}}"><img class="icimg2" src="{{'uploads/'+x.banner_img}}"  alt=""></a>

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

        <?php if($admin){ echo "<a href=\"edit.php\"><button   class=\"btn btn-warning\"  > ADD NEW ITEM </button></a>";} ?>

        <div class="row text-center" id="products_cards">

          <div class="col-lg-4 col-md-6 mb-4" ng-repeat="x in s.slice(snum,snum+sn) track by $index">
            <div class="card h-100">
              <a href="item.php?p={{x.id}}"><img class="card-img-top ccimg" src="{{'uploads/'+x.m_img}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="item.php?p={{x.id}}">{{x.item_name}}</a>
                </h4>
                <h5>{{x.price}}</h5>
                <p class="card-text">{{x.description}}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>


        </div>

                  <ul class="pagination justify-content-center">
                    <li class="page-item " ng-click="np(0)"><a class="page-link btn pointer"><</a></li>
                    <li class="page-item " ng-click="np(1)"><a class="page-link btn pointer">></a></li>
                  </ul>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <div class="jumbotron text-center prefoot" >
    <h1 data-aos="zoom-in-down">ضمان أمان منزلك وعملك أصبح أسهل</h1>
    <p data-aos="zoom-in-down"> مع تشكيلتنا المتميزة من أنظمة المراقبة! احصل على سلامة واطمئنان من خلال تقنية متقدمة تمنحك رؤية واضحة على مدار الساعة. لا تفوت فرصة حماية ممتلكاتك ومحبيك - زور محلنا اليوم واختر الحل الأمثل لمراقبة محيطك بكل يسر وسهولة</p>
  </div>

  <!-- Footer -->
  <footer class="py-5 bg-dark text-white" id="contact">

    <div class="container pt-lg-3">

      <div class="row footer-top">
        <div class="col-lg-4 col-sm-6 footer-grid-wthree">
          <h4 class="footer-title text-uppercase mb-4">Who We Are</h4>
          <div class="contact-info" style="color:#777">
            <p>نقوم بتأمين اى مكان له باب ...سواء محلات ،أكشاك ، شركات ،فيلات ومنازل ،مخازن،مدارس حضانات ..نعمل بتكنولوجيا متطوره وبأسعار مناسبة جدا</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 footer-grid-wthree mt-sm-0 mt-4"></div>
        <div class=" col-lg-4 col-sm-6 footer-grid-wthree mt-lg-0 mt-sm-5 mt-4">
              <h3 class="footer-title text-uppercase mb-4">Contact Us</h3>
              <div class="contact-info" style="color:#777">

                <div class="footer-style-w3ls my-3">
                  <h4 class="mb-2"><span class="fa mr-1 fa-phone"></span> Phone</h4>
                  <p>0123456789</p>
                </div>
                <div class="footer-style-w3ls">
                  <h4 class="mb-2"><span class="fa mr-1 fa-envelope-open"></span> Email</h4>
                  <p><a href="mailto:info@example.com">cam@cam.com</a></p>
                  <a href="https://www.facebook.com" class="fa fa-facebook"></a>
                </div>
              </div>
        </div>
      </div>

    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; cam tech</p>
    </div>
    <!-- /.container -->
  </footer>


</body>

<!-- jQuery library -->
<script src="srcs/jquery.min.js"></script>

<!-- Popper JS -->
<script src="srcs/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="srcs/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="srcs/angular.min.js"></script>
<script src="srcs/aos/dist_aos.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>

<script src="index.js"></script>

</html>
