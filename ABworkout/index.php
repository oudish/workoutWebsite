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
        <?php 
            require('library/bootstrapCss.php');
            require('library/fontAwesome.php');
            require('library/OwlcarouselCss.php');
            require('library/Angular.php'); 
        ?>

        <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        
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

            /* .button {
                background-color: #4CAF50; Green
                border: none;
                color: white;

            } */

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
            <div class="col"> 
                <nav class="navbar navbar-expand-md navbar-dark fixed bg-dark">
                    <a class="navbar-brand" href="#">AB</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Workout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nutrition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signUp.php">SIGNUP</a>
                        </li>
                    </ul>
                    </div>
                </nav>
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
                                <h1>{{work.video_title}}</h1>
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
                                                <h1>{{work.video_title}}</h1>
                                                <div class="embed-responsive embed-responsive-21by9">
                                                    <video class="embed-responsive-item" poster="image/model01.jpg">
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

        <!-- bottom boostrap spacing  -->
        <div class="pb-5"></div>

        <?php 
            require("footer.php");
        ?>
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <?php 
            require('library/jquery.php');
            require('library/bootstrapJs.php');
            require('library/OwlCarouselJs.php');
        
        ?>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="js/jsProject/index.js"></script>

    </body>
</html>