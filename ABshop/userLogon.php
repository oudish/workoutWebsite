<!DOCTYPE html>
<html lang="en">
<?php   
session_start(); //to ensure you are using same session
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AB shop</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css -->
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/homePage.css">
</head>
<body ng-app="myApp" ng-controller="myCtrl" ng-init="onInit()">
    <div><?php include("allPageHeaderBar.php") ?></div>
    <div class="clothingAutowide">
        <div class='clothingModule' ng-repeat="photo in photoToDisplay">
            <div id="{{photo.clothing_id}}" class='showProductInDetail' role='button' style='border-style: solid;border-width: 0px;cursor: pointer;' data-ng-click="previewButton(photo.clothing_id,photo.clothing_image1,photo.clothing_image2,photo.clothing_image3,photo.clothing_image4,photo.clothing_image5)">
                <img id="photos" src='{{photo.clothing_image}}' alt=''/>
                <p class='productTitle' align='center'>{{photo.clothing_description}}</p>
                <p class='productPrice' align='center'>{{photo.clothing_price}}</p>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope,$http) {
                $scope.onInit = function() {
                    $http.post('modelSql/displayIndexPhotos.php').then(function(response){
                        $scope.photoToDisplay =response.data;

                        var displaySession = "<li style='float:right;'><a style ='color:white;' ><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'] ?><i></i></a></li>";
                        $(".exo-menu").append(displaySession);
                        document.getElementById("logInBtn").style.display = "none";
                        document.getElementById("logOutBtn").style.display = "block";
                    });
                };

                $scope.previewButton = function(id,image1,image2,image3,image4,image5){
                    //alert(id);
                    location.href = "previewClothing2.php?id="+id+"&image1="+image1+"&image2="+image2+"&image3="+image3+"&image4="+image4+"&image5="+image5;
                }

                $scope.submitWorkoutForm = function(event) {
                    var username = $("#uname1Work").val();
                    var password = $("#pwd1Work").val();
                    //alert(username+" "+password);
                    $http.post('modelSql/verifyWorkoutLoginSql.php',{username: username, password: password}).then(function(response){
                        //alert(JSON.stringify(response.data)+" "+JSON.stringify(response.data.message)+" "+JSON.stringify(response.data.user_email)+" "+JSON.stringify(response.data.user_code));
                        if(response.data.message == "login successfull"){
                            $("#userId").val(response.data.user_id);
                            var email = response.data.user_email;
                            var subject = "Verification Code";
                            var message = "Your Verification Code is : "+response.data.user_code;
                            //alert("login successfull");
                            $http.post('phpmailer.php',{email: email, subject: subject, message: message}).then(function(response2){
                                alert(response2.data);
                            });
                            
                            document.getElementById("btnWorkoutLogin").style.display = "none";
                            document.getElementById("verifyCodeDiv").style.display = "block";
                        }
                        else{
                            alert(JSON.stringify( response.data));
                        }
                    });
                };

                $scope.submitWorkoutCode = function(event) {
                    var user_id = document.getElementById("userId").value;
                    var userCodeInput = document.getElementById("codeWork").value;
                    //alert(userCodeInput);
                    $http.post('modelSql/verifyWorkoutCodeSql.php',{user_id: user_id, userCodeInput: userCodeInput}).then(function(response){
                        alert(response.data);
                        if(response.data == "login successfull"){
                            window.location.href = "workoutIndex.php";
                        }
                    });
                };
                // $scope.submitForm = function(event) {
                //     var username = $("#uname1").val();
                //     var password = $("#pwd1").val();
                //     //alert(username+" "+password);
                //     $http.post('modelSql/verifyLoginSql.php',{username: username, password: password}).then(function(response){
                //         if(response.data == "login successfull"){
                //             window.location.href = "index.php";
                //             $(".exo-menu")
                //             var displaySession = "<li style='float:right;'><a href=''>"++"<i></i></a></li>";
                //         }
                //         else{
                //             alert(JSON.stringify( response.data));
                //         }
                //     });
                // };
            });
    </script>
</body>
</html>