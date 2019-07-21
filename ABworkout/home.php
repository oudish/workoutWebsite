<!DOCTYPE html>
<!-- <?php   
session_start(); //to ensure you are using same session
?>  -->
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
    <body ng-app="myApp" ng-controller="myCtrl" ng-init=onInitFunction()>
        <div id="parallax-image">
            <div class="row">
                <div class="col-md-12">
                <!-- <div style="font-size: 1.5em;color: grey; position: absolute;top: 0%;left: 2%;">Welcome <?php echo $_SESSION['firstname']." ".$_SESSION['lastname'] ?></div> -->
                <!-- <i id="logoutBtn" class="fa fa-sign-out" aria-hidden="true" style="font-size: 2em; color:grey; position: absolute; top:0%; right:3%; cursor: pointer;" ng-click="logout()"></i> -->
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
                
                <div class="content">
                    <div class="row">
                        <div class="col" ng-repeat="work in workoutplan | limitTo : 2">
                            <div data-aos="zoom-in" id="testvideo" style="display:{{blockIfVideoPresent}}">
                                <h1>{{work}}</h1>
                                <div class="embed-responsive embed-responsive-21by9">
                                    <video controls="true" class="embed-responsive-item">
                                        <source src="{{work.video_url}}" type="video/mp4" allowfullscreen/>
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="collapse-wrapper">
                            <div class="card">  
                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                    
                                    <div class="row">
                                        <div class="col" ng-repeat="work in workoutplan" ng-if="$index >= 2">
                                            <div data-aos="zoom-in" id="testvideo" style="display:{{blockIfVideoPresent}}">
                                                <h1>{{work}}</h1>
                                                <div class="embed-responsive embed-responsive-21by9">
                                                    <video controls="true" class="embed-responsive-item">
                                                        <source src="{{work.video_url}}" type="video/mp4" allowfullscreen/>
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                </div>
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="showMoreBtn" style="display: none">Show More</a>
                                    </h5>
                                </div>  
                            </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>

        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    $("#main").removeClass("is-loading");
                }, 100);

                $("#showMoreBtn").click(function(){
                    if($("#showMoreBtn").text() == "Show More"){
                        $("#showMoreBtn").text("Show Less");
                    }
                    else{
                        $("#showMoreBtn").text("Show More");
                    }
                });               
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
                $scope.workoutplan = [];
                
                $scope.week1day1 = [];$scope.week1day2 = [];$scope.week1day3 = [];$scope.week1day4 = [];$scope.week1day5 = [];$scope.week1day6 = [];$scope.week1day7 = [];
                $scope.week2day1 = [];$scope.week2day2 = [];$scope.week2day3 = [];$scope.week2day4 = [];$scope.week2day5 = [];$scope.week2day6 = [];$scope.week2day7 = [];
                $scope.week3day1 = [];$scope.week3day2 = [];$scope.week3day3 = [];$scope.week3day4 = [];$scope.week3day5 = [];$scope.week3day6 = [];$scope.week3day7 = [];
                $scope.week4day1 = [];$scope.week4day2 = [];$scope.week4day3 = [];$scope.week4day4 = [];$scope.week4day5 = [];$scope.week4day6 = [];$scope.week4day7 = [];
                $scope.week5day1 = [];$scope.week5day2 = [];$scope.week5day3 = [];$scope.week5day4 = [];$scope.week5day5 = [];$scope.week5day6 = [];$scope.week5day7 = [];
                $scope.week6day1 = [];$scope.week6day2 = [];$scope.week6day3 = [];$scope.week6day4 = [];$scope.week6day5 = [];$scope.week6day6 = [];$scope.week6day7 = [];
                $scope.week7day1 = [];$scope.week7day2 = [];$scope.week7day3 = [];$scope.week7day4 = [];$scope.week7day5 = [];$scope.week7day6 = [];$scope.week7day7 = [];
                $scope.week8day1 = [];$scope.week8day2 = [];$scope.week8day3 = [];$scope.week8day4 = [];$scope.week8day5 = [];$scope.week8day6 = [];$scope.week8day7 = [];
                $scope.week9day1 = [];$scope.week9day2 = [];$scope.week9day3 = [];$scope.week9day4 = [];$scope.week9day5 = [];$scope.week9day6 = [];$scope.week9day7 = [];
                $scope.week10day1 = [];$scope.week10day2 = [];$scope.week10day3 = [];$scope.week10day4 = [];$scope.week10day5 = [];$scope.week10day6 = [];$scope.week10day7 = [];
                $scope.week11day1 = [];$scope.week11day2 = [];$scope.week11day3 = [];$scope.week11day4 = [];$scope.week11day5 = [];$scope.week11day6 = [];$scope.week11day7 = [];
                $scope.week12day1 = [];$scope.week12day2 = [];$scope.week12day3 = [];$scope.week12day4 = [];$scope.week12day5 = [];$scope.week12day6 = [];$scope.week12day7 = [];

                $scope.workoutplan = [];

                $scope.onInitFunction = function(event) {
                    $http.post('modelSql/onInitFunction.php').then(function(response){
                        var responseLength = response.data.length;
                        for(var i=0;i<responseLength;i++){
                            if(response.data[i].plan_week == "1"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week1day1.push({video_url:response.data[i].plan_video_id});
                                }
                                else if(response.data[i].plan_day == "2"){
                                    $scope.week1day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week1day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week1day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week1day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week1day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week1day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "2"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week2day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week2day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week2day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week2day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week2day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week2day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week2day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "3"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week3day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week3day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week3day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week3day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week3day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week3day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week3day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "4"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week4day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week4day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week4day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week4day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week4day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week4day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week4day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "5"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week5day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week5day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week5day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week5day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week5day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week5day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week5day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "6"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week6day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week6day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week6day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week6day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week6day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week6day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week6day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "7"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week7day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week7day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week7day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week7day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week7day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week7day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week7day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "8"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week8day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week8day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week8day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week8day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week8day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week8day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week8day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "9"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week9day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week9day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week9day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week9day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week9day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week9day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week9day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "10"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week10day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week10day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week10day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week10day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week10day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week10day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week10day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "11"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week11day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week11day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week11day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week11day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week11day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week11day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week11day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }
                            else if(response.data[i].plan_week == "12"){
                                if(response.data[i].plan_day == "1"){
                                    $scope.week12day1.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "2"){
                                    $scope.week12day2.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "3"){
                                    $scope.week12day3.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "4"){
                                    $scope.week12day4.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "5"){
                                    $scope.week12day5.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "6"){
                                    $scope.week12day6.push({video_url:response.data[i].plan_video_id});
                                }else if(response.data[i].plan_day == "7"){
                                    $scope.week12day7.push({video_url:response.data[i].plan_video_id});
                                }
                            }  
                        }
                    });
                };

                $scope.getDayButtonId = function(event) {
                    var dayBtnId = event.target.id;
                    var splitDayBtnId = dayBtnId.split("day");
                    var week_id = $("#dayPTag").text();
                    $scope.blockIfVideoPresent ="none";
                    
                    if(week_id == "1"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week1day1; 
                            if($scope.workoutplan.length > 2){
                                document.getElementById("showMoreBtn").style.display = "block";
                            }
                        }
                        else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week1day2;
                        }
                        else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week1day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week1day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week1day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week1day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week1day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    }
                    
                    else if(week_id == "2"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week2day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week2day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week2day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week2day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week2day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week2day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week2day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    } 
                    else if(week_id == "3"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week3day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week3day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week3day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week3day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week3day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week3day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week3day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    } 
                    else if(week_id == "4"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week4day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week4day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week4day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week4day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week4day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week4day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week4day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    } 
                    else if(week_id == "5"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week5day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week5day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week5day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week5day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week5day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week5day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week5day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    } 
                    else if(week_id == "6"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week6day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week6day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week6day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week6day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week6day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week6day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week6day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    } 
                    else if(week_id == "7"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week7day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week7day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week7day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week7day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week7day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week7day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week7day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    } 
                    else if(week_id == "8"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week8day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week8day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week8day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week8day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week8day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week8day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week8day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    } 
                    else if(week_id == "9"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week9day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week9day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week9day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week9day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week9day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week9day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week9day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    } 
                    else if(week_id == "10"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week10day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week10day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week10day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week10day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week10day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week10day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week10day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    } 
                    else if(week_id == "11"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week11day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week11day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week11day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week11day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week11day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week11day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week11day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    } 
                    else if(week_id == "12"){
                        if(splitDayBtnId[1] == "1"){
                            $scope.workoutplan = $scope.week12day1;
                        }else if(splitDayBtnId[1] == "2"){
                            $scope.workoutplan = $scope.week12day2;
                        }else if(splitDayBtnId[1] == "3"){
                            $scope.workoutplan = $scope.week12day3;
                        }else if(splitDayBtnId[1] == "4"){
                            $scope.workoutplan = $scope.week12day4;
                        }else if(splitDayBtnId[1] == "5"){
                            $scope.workoutplan = $scope.week12day5;
                        }else if(splitDayBtnId[1] == "6"){
                            $scope.workoutplan = $scope.week12day6;
                        }else if(splitDayBtnId[1] == "7"){
                            $scope.workoutplan = $scope.week12day7;
                        }
                        $scope.blockIfVideoPresent ="block";
                    }
                };

                $scope.logout = function(){
                    window.location.href = "logout.php";
                }

                
            });

        </script>

    </body>
</html>