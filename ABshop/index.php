<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AB shop</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body ng-app="myApp" ng-controller="myCtrl" ng-init="onInit()">
    <div class="clothingAutowide">
        <div class='clothingModule' ng-repeat="photo in photoToDisplay">
            <div class='showProductInDetail' role='button' style='border-style: solid;border-width: 0px;'>
                <img src='photo.clothing_image' alt=''/>
                <p class='photo.clothing_description' align='center'>test</p>
                <p class='photo.clothing_price' align='center'>test</p>
            </div>
        </div>
        <!-- <div class='clothingModule'>
            <div class='showProductInDetail' role='button' style='border-style: solid;border-width: 0px;'>
                <img src='image/AB09.png' alt=''/>
                <p class='productTitle' align='center'>test</p>
                <p class='productPrice' align='center'>test</p>
            </div>
        </div>
        <div class='clothingModule'>
            <div class='showProductInDetail' role='button' style='border-style: solid;border-width: 0px;'>
                <img src='image/AB10.png' alt=''/>
                <p class='productTitle' align='center'>test</p>
                <p class='productPrice' align='center'>test</p>
            </div>
        </div> -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope,$http) {
                $scope.firstName = "John";
                $scope.lastName = "Doe";

                $scope.onInit = function() {
                    $http.post('modelSql/displayIndexPhotos.php').then(function(response){
                        alert(JSON.stringify(response.data));
                        $scope.photoToDisplay =response.data;
                        // $scope.blockIfVideoPresent ="block";
                    });
                };

                // $scope.logout = function(){
                //     window.location.href = "logout.php";
                // }
            });
    </script>
</body>
</html>