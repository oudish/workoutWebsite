<!DOCTYPE html>
<?php   
session_start(); //to ensure you are using same session
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ABworkout</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            body{
                overflow-x: hidden;
            }
            
            #frontImage{
                height: 100vh;
                width: 100vw;
            }

            .btn {
                position: absolute;
                top: 25%;
                left: 25%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                /* background-color: #555; */
                color: white;
                font-size: 16px;
                padding: 12px 24px;
                /* border: none; */
                /* cursor: pointer; */
                /* border-radius: 5px; */
                text-align: center;
            }

            #main {
                background-size: cover, cover;
                background-position: center, center;
                height: 100vh;
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            h1 {
                font-family:"ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, "メイリオ", Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
                font-size: 1.5rem;
                display: inline-block;
                padding: 1rem;
                font-weight: 100;
                position: relative;
                opacity: 1;
                transform: scale(1);
                transition: transform 0.5s ease, opacity 1s ease;
            }

            .is-loading h1 {
                transform: scale(0.9);
                opacity: 0;
            }

            h1:before,
            h1:after {
                height: 2px;
                width: 100%;
                content: "";
                background: white;
                display: block;
                position: absolute;
                transition: width 0.4s ease;
                transition-delay: 0.8s;
            }

            h1:before {
                top: 0;
                left: 0;
            }

            h1:after {
                bottom: 0;
                right: 0;
            }

            .is-loading h1:before,
            .is-loading h1:after {
                width: 0;
            }

            /* .centerBlock { */
                /* display: table; */
                /* margin: auto; */
                /* padding-top: 10%; */
            /* } */

            #parallax-image{
                background-image: url("image/model02.jpg");
                height: 100vh;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            #parallax-image2{
                background-image: url("image/model02.jpg");
                height: 100vh;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }

            .button {
                /* background-color: #4CAF50; Green */
                /* border: none; */
                /* color: white; */

            }

            .buttonWeek {
                background-color: white;
                /* color: #353A40; */
                color:black;
                border: 1.45px solid;
                /* border-color: #353A40; */
                border-color: black;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                padding: 8px 16px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                /* margin: 4px 2px; */
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .buttonWeek:hover {
                /* background-color: #353A40; */
                background-color: black;
                color: white;
            }
            
            .owl-carousel.owl-loaded {
                display: inline-block;
            }

            p{
                font-family:"ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, "メイリオ", Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
                font-size: 1.5em;
            }
            /* .img-wrap {
                background-size: cover;
                background-position: bottom;
                height: 100vh;
                width: 100vw;

                img {
                    visibility: hidden;
                }
            } */

            .header {
                position: fixed;
                bottom: 0;
                z-index: 1;
                width: 100%;
                background-color: #f1f1f1;
                -webkit-backface-visibility: hidden;
            }

            .header h2 {
                text-align: center;
            }

            /* .progress-container {
                width: 100%;
                height: 8px;
                background: #ccc;
            }

            .progress-bar {
                height: 8px;
                background: #4caf50;
                width: 0%;
            } */

            .content {
                /* padding: 100px 0; */
                margin: 50px auto 0 auto;
                width: 80%;
            }

        </style>
    </head>
    <body ng-app="myApp" ng-controller="myCtrl">
        <div id="parallax-image">
            <div class="row">
                <div class="col-md-12">
                <div style="font-size: 1.5em;color: grey; position: absolute;top: 0%;left: 2%;">Welcome <?php echo $_SESSION['firstname']." ".$_SESSION['lastname'] ?></div>
                <i id="logoutBtn" class="fa fa-sign-out" aria-hidden="true" style="font-size: 2em; color:grey; position: absolute; top:0%; right:3%; cursor: pointer;" ng-click="logout()"></i>
                    <div class="btn">
                        <div id="main" class="is-loading" style="position: fixed">
                            <h1>
                                ADISH BALKISSOON 
                            </h1>
                            <!-- <h1>  {{firstName + " " + lastName}}</h1> -->
                        </div>    
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="right: 0;left: 0">
            <div class="col" style="background-color: ;"> 
                <div align="center" style="padding-top: 5%">
                    <p>Choose the week</p>
                    <div class="owl-carousel owl-theme" style="width: 50%;">
                        <button type="button" class="" id="week1" onclick="getWeekButtonId(this.id)">WEEK 1</button>
                        <button type="button" class="" id="week2" onclick="getWeekButtonId(this.id)">WEEK 2</button>
                        <button type="button" class="" id="week3" onclick="getWeekButtonId(this.id)">WEEK 3</button>
                        <button type="button" class="" id="week4" onclick="getWeekButtonId(this.id)">WEEK 4</button>
                        <button type="button" class="" id="week5" onclick="getWeekButtonId(this.id)">WEEK 5</button>
                        <button type="button" class="" id="week6" onclick="getWeekButtonId(this.id)">WEEK 6</button>
                        <button type="button" class="" id="week7" onclick="getWeekButtonId(this.id)">WEEK 7</button>
                        <button type="button" class="" id="week8" onclick="getWeekButtonId(this.id)">WEEK 8</button>
                        <button type="button" class="" id="week9" onclick="getWeekButtonId(this.id)">WEEK 9</button>
                        <button type="button" class="" id="week10" onclick="getWeekButtonId(this.id)">WEEK 10</button>
                        <button type="button" class="" id="week11" onclick="getWeekButtonId(this.id)">WEEK 11</button>
                        <button type="button" class="" id="week12" onclick="getWeekButtonId(this.id)">WEEK 12</button>
                    </div>
                </div>

                <div id="dayDiv" align="center" style="padding-top: 1%;display: none">
                    <p style="display: inline">Choose the day for week </p><p id="dayPTag" style="display: inline"></p><br><br>
                    <div class="owl-carousel owl-theme" style="width: 50%;">
                        <button type="button" class="" id="day1" ng-click="getDayButtonId($event)">DAY 1</button>
                        <button type="button" class="" id="day2" ng-click="getDayButtonId($event)">DAY 2</button>
                        <button type="button" class="" id="day3" ng-click="getDayButtonId($event)">DAY 3</button>
                        <button type="button" class="" id="day4" ng-click="getDayButtonId($event)">DAY 4</button>
                        <button type="button" class="" id="day5" ng-click="getDayButtonId($event)">DAY 5</button>
                        <button type="button" class="" id="day6" ng-click="getDayButtonId($event)">DAY 6</button>
                        <button type="button" class="" id="day7" ng-click="getDayButtonId($event)">DAY 7</button>
                    </div>
                </div>
                <!-- <h1 ng-repeat="x in workoutplan">{{x}}</h1> -->
                <div class="content">
                    <div id="testDivBox" style="width:100px;height: 100px;border: 1px solid;display:none"></div>
                    <div><p id="pContentDiv" align="center" style="display:none"></p></div>

                    <div data-aos="zoom-in" id="testvideo" style="display:{{blockIfVideoPresent}}" ng-repeat="work in workoutplan">
                        <h1>{{work.plan_video_id}}</h1>
                        <div class="embed-responsive embed-responsive-21by9">
                            <video controls="true" class="embed-responsive-item">
                                <source src="{{work.video_url}}" type="video/mp4" allowfullscreen/>
                            </video>
                        </div>
                    </div>

                </div>
                <div class="header">
                    <div class="progress">
                        <div class="progress-bar bg-dark" id="myBar"></div>
                    </div>  
                </div>
            </div><!-- end of col -->  
         
        </div><!-- end of row -->  
    
        <!-- <div id="parallax-image2">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>  -->
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $("#main").removeClass("is-loading");
                }, 100);

               
            });

            $( '.owl-carousel' ).owlCarousel({
                items: 4,
                nav: true,
                dots: true,
                mouseDrag: true,
                responsiveClass: true,
                transitionStyle: "backSlide",
                responsive: {
                    0:{
                    items: 2
                    },
                    480:{
                    items: 3
                    },
                    769:{
                    items: 4
                    }
                }
            });

            function getWeekButtonId(weekBtnId){
                var splitWeekBtnId = weekBtnId.split("week");
                $("#dayPTag").empty();
                $("#dayPTag").append(splitWeekBtnId[1]);
                $("#dayDiv").show();
            }

            window.onscroll = function() {myFunction()};

            function myFunction() {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            document.getElementById("myBar").style.width = scrolled + "%";
            }

            $(function(){    
                $('iframe').attr('src', $('iframe').attr('src'));
            });

            AOS.init();

            var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope,$http) {
                $scope.firstName = "John";
                $scope.lastName = "Doe";

                $scope.getDayButtonId = function(event) {
                    var dayBtnId = event.target.id;
                    var splitDayBtnId = dayBtnId.split("day");
                    var week_id = $("#dayPTag").text();

                    $http.post('modelSql/displayVideo.php',{week_id: week_id, day_id: splitDayBtnId[1]}).then(function(response){
                        $scope.workoutplan =response.data;
                        $scope.blockIfVideoPresent ="block";
                    });
                };

                $scope.logout = function(){
                    window.location.href = "logout.php";
                }
            });

        </script>

    </body>
</html>