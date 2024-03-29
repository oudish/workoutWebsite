<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <style>
        #signUpBtn:hover, #forgotPasswordBtn:hover{
            cursor: pointer;
            transition: color 0.5s;
            color: green;
        } 
    </style>
</head>
<body ng-app="myApp" ng-controller="myCtrl" > 
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <!-- form card login -->
                        <div class="card" style="border-radius: 10px">
                            <div class="card-header">
                                <h3 class="mb-0" style="text-align: center">Members Login</h3>
                            </div>
                            <div class="card-body">
                                <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                    <div class="form-group">
                                        <label class="font-weight-bold" for="uname1">Username or Email:</label>
                                        <input type="text" class="form-control form-control-ms rounded-0" name="uname1" id="uname1" required="">
                                        <div class="invalid-feedback">Oops, you missed this one.</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold">Password:</label>
                                        <input type="password" class="form-control form-control-ms rounded-0" id="pwd1" required="" autocomplete="new-password">
                                        <div class="invalid-feedback">Enter your password too!</div>
                                        <span class="custom-control-description medium font-weight-bold" id="signUpBtn" role="button">Sign Up</span> | <span class="custom-control-description medium font-weight-bold" id="forgotPasswordBtn">Forgot Password ?</span>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-ms float-left rounded-0" id="btnLogin" ng-click="submitForm($event)">Login</button>
                                </form>
                            </div>
                            <!--/card-block-->
                        </div>
                        <!-- /form card login -->
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/col-->
        </div>
        <!--/row-->
    </div>
    <!--/container-->

    <script src="library/bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope,$http) {
            $scope.submitForm = function(event) {
                alert("good");
                // var username = $("#uname1").val();
                // var password = $("#pwd1").val();
                // $http.post('modelSql/verifyLoginSql.php',{username: username, password: password}).then(function(response){
                //     if(response.data == "login successfull"){
                //         window.location.href = "home.php";
                //     }
                //     else{
                //         alert(JSON.stringify( response.data));
                //     }
                // });
            };
        });

        $(document).ready(function() {
            $("#signUpBtn").click(function(){
                window.location.href = "signUp.php";
            });
        });
        
    </script>
</body>
</html>