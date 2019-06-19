<!DOCTYPE html>
<html lang="en">
  
<head>
<?php include("indexLinks.php") ?>
</head>

<body ng-app="myApp" ng-controller="myCtrl" ng-init="onInit()" >
    <div><?php include("allPageHeaderBar.php") ?></div>
    <div class="clothingAutowide">
        <div class='clothingModule' ng-repeat="photo in photoToDisplay" on-finish-render="ngRepeatFinished">
            <div id="{{photo.clothing_id}}" class='showProductInDetail' role='button' style='border-style: solid;border-width: 0px;cursor: pointer;' data-ng-click="previewButton(photo.clothing_id,photo.clothing_image1,photo.clothing_image2,photo.clothing_image3,photo.clothing_image4,photo.clothing_image5)">
                <img id="photos" src='{{photo.clothing_image}}' alt=''/>
                <p class='productTitle' align='center'>{{photo.clothing_description}}</p>
                <p class='productPrice' align='center'>{{photo.clothing_price}}</p>
            </div>
        </div>
    </div>

    <!-- <div id="testing">
        <div style="background: blue;height: 100px">
        </div>
         <footer class="page-footer font-small blue">
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
                <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
            </div>
        </footer> 
    </div> -->


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script> -->
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.2/js/mdb.min.js"></script>

    <script>
        var app = angular.module('myApp', [])
        .directive('onFinishRender', function ($timeout) {
            return {
                restrict: 'A',
                link: function (scope, element, attr) {
                    if (scope.$last === true) {
                        $timeout(function () {
                            scope.$emit('ngRepeatFinished');
                        });
                    }
                }
            }
        });
        
            app.controller('myCtrl', function($scope,$http) {
                $scope.display = "none";
                $scope.firstName = "John";
                $scope.lastName = "Doe";

                $scope.onInit = function() {
                    $http.post('modelSql/displayIndexPhotos.php').then(function(response){
                        //alert(JSON.stringify(response.data));
                        document.getElementById("logInBtn").style.display = "block";
                        document.getElementById("signUpBtn").style.display = "block";
                        $scope.photoToDisplay =response.data;
                        $scope.display = "block";
                        //document.getElementById("te").style.display = "block";

                        var tess = "<footer class='page-footer font-small blue'><div class='footer-copyright text-center py-3'>© 2018 Copyright:<a href='https://mdbootstrap.com/education/bootstrap/'> MDBootstrap.com</a></div></footer>";
                        //var scrollBottom = $(window).scrollTop() + $(window).height();
                        //document.getElementById("testing").style.paddingTop = scrollBottom*5+"px";
                        //$("#testing").append(tess);
                       //var he = $(document).height(); 
                        //alert(he);
                        
                        // $scope.blockIfVideoPresent ="block";
                    });
                };

                $scope.previewButton = function(id,image1,image2,image3,image4,image5){
                    //alert(id);
                    location.href = "previewClothing2.php?id="+id+"&image1="+image1+"&image2="+image2+"&image3="+image3+"&image4="+image4+"&image5="+image5;
                }

                $scope.submitForm = function(event) {
                    var username = $("#uname1").val();
                    var password = $("#pwd1").val();
                    //alert(username+" "+password);
                    $http.post('modelSql/verifyLoginSql.php',{username: username, password: password}).then(function(response){
                        if(response.data == "login successfull"){
                            window.location.href = "userLogon.php";
                        }
                        else{
                            alert(JSON.stringify( response.data));
                        }
                    });
                };

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

                


                // $scope.$on('ngRepeatFinished', function(ngRepeatFinishedEvent) {
                //     var body = document.body,html = document.documentElement;
                //     const height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
                //     //document.getElementById("testing").style.paddingTop = height+"px";
                //     var num = height.toString();
                //     //const heig = height;
                //     //var scrollHeight = 0;
                //     //scrollHeight = $(document).height();
                //     document.getElementById("testing").style.paddingTop = num+"px";
                //     alert(num+"px");
                // });

                //$(document).ready(function(){
                    // $(window).resize(function(){
                    //     //var scrollHeight = 0;
                    //     var body = document.body,html = document.documentElement;
                    //     const height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
                    //     //document.getElementById("testing").style.paddingTop = height+"px";
                    //     var num = height.toString();
                    //     //const hei = height;
                    //     //document.getElementById("testing").style.paddingTop = 0+"px";
                    //     document.getElementById("testing").style.paddingTop = num+"px";
                    //     alert(num+"px");
                    // });
                //});
        
            });
    </script>

</body>
</html>