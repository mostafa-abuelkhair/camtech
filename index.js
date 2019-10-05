var app = angular.module('app', []);

app.run(function($rootScope) {


});

app.controller('ctrl', function($scope,$rootScope,$http) {

  $http.get("systems.php")
    .then(function (response) {$scope.s = response.data.data;});

    $http.get("banners.php")
      .then(function (response) {$scope.bn = response.data.data;});

$scope.snum=0;

$scope.sn=9;

$scope.np=function(m){
  var n=$scope.sn;
  if(m){ $scope.snum= (($scope.snum+n)<$scope.s.length)? $scope.snum+n:$scope.snum; }
  else{ $scope.snum= ($scope.snum-n<0)? 0:$scope.snum-n; }
};

});
