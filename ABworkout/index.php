<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- <meta name="viewport" content="width=device-width, user-scalable=0;"> -->
        <meta name="viewport" content="width=device-width, initial-scale = 0.86, maximum-scale=3.0, minimum-scale=0.86">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ABworkout</title>
        <?php 
            require('library/bootstrapCss.php');
            require('library/fontAwesome.php');
            require('library/OwlcarouselCss.php');
            require('library/Angular.php'); 
            // require('library/MDBootstrapCss.php');
            require('library/AnimateCss.php'); 
            require('library/aosCss.php');
        ?>

        <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
        <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
        
        <style>
            html {
               overflow-x: hidden;
            }
            
            /* #frontImage{
                height: 100vh;
                width: 100vw;
            } */

            .btnMain {
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
                background-image: url("image/model03.jpg");
                height: 100vh;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 0.6;
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

            /* .content { */
                /* padding: 100px 0; */
                /* margin: 50px auto 0 auto; */
                /* width: 80%; */
            /* } */


            #signUpBtn:hover, #forgotPasswordBtn:hover{
                cursor: pointer;
                transition: color 0.5s;
                color: green;
            }

            .top-buffer { margin-top:20px; }

            hr {
                margin-top: 1rem;
                margin-bottom: 1rem;
                border: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.5);
                width: 95%;
            }

            #gainWeight:hover, #loseWeight:hover, #shredding:hover{
                cursor: pointer;
            }

            .error{
                color:red;
            }

            .testSection{
                background-image: url("image/thenx01.jpg");
                background-size:     cover;                 
                background-repeat:   no-repeat;
                background-position: center center;  
                height: auto;
                border-radius: 10px; 
            }
            .testSection p{
                font-size: 2.0rem;
            }

            .testSection input[type="radio"]{
                -ms-transform: scale(1.5); /* IE 9 */
                -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
                transform: scale(1.5);
            }

            .testSection label {
                font-size: 1.2rem;
                margin-left: 3px;
            }

            .programSection{
                border-radius: 10px;
            }

            .unique-name img {
                padding-left:0px;
                padding-right:0px;
                /* Modifiying the below lines would help you achieve same height for the 2 columns */
                /*padding-top: 5px;*/
                /*padding-bottom: 5px;*/
            }
        </style>
        <style>
                /* Scaffolding */

html,
body {
  width: 100%;
  height: 100%;
}

body {
  font-family: "lato", sans-serif;
  font-size: 18px;
  font-weight: 400;
  line-height: 1.778;
  color: #222;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 700;
}

a {
  /* color: #228B22; */
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}


/* Backgrounds */

.bg-holder {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: 50% 50%;
  color: #fff;
}

.bg-holder .content {
  color: #fff;
  text-align: center;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}

h2 {
  font-size: 32px;
  line-height: 1.5;
}

.pic1 {
  background-image: url('image/gainMuscle.jpg');
}

.pic2 {
  background-image: url('image/diet01.jpg');
}

.pic3 {
  background-image: url('image/black.png');
}

@media (min-width: 768px) {
  .pic1 {
    background-image: url('image/gainMuscle.jpg');
  }
  .pic2 {
    background-image: url('image/diet01.jpg');
  }
  .pic3 {
    background-image: url('image/black.png');
  }
}


/* Content Sections */

/* section {
  padding: 48px;
} */

section .content {
  margin: 0 auto;
  max-width: 100%;
}

.content h2 {
  margin: 0 0 16px;
  font-size: 18px;
}

/* section p {
  margin: 0;
}

section p + p {
  text-indent: 2em;
} */

section + hr {
  border: 0;
  border-top: 1px solid #ccc;
  height: 0;
}

section .gist {
  margin: 24px 0;
}

section .gist .gist-data {
  border-bottom: 0;
}

section .gist-meta {
  display: none;
}

.content code {
  font-family: monospace, serif;
  font-size: 16px;
  color: gray;
  white-space: nowrap;
}


/* Intro */

.intro h1 {
  margin: 0;
  font-size: 25px;
  line-height: 1.5;
}

.intro p {
  margin: 0;
  font-size: 24px;
}

.cta {
  margin-top: 32px;
}

.btn-cta {
  color: black;
  font-size: 16px;
  border: 2px solid black;
  border-radius: 4px;
  padding: 8px 8px 8px 8px;
  margin: 0 4px;
  text-decoration: none;
}

.btn-cta:hover {
  background-color: white;
  /* color: #228B22; */
  text-decoration: none;
}


/* Footer */

.footer {
  text-align: center;
}

.social {
  margin: 16px;
  list-style: none;
}

.social li {
  display: inline-block;
  margin: 8px;
}
.col-centered{
    float: none;
    margin: 0 auto;
}
        </style>

        <style>
        .overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  /* top: 25%; */
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

/* .overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
} */

.overlay .closebtn {
  position: absolute;
  /* top: 20px; */
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}</style>

<style>
.navbar-brand {
    font-size: 24px;
}
.navbar.navbar-fixed-top.fixed-theme {
    background-color: rgba(85,85,85,0.5);
}

/* .navbar.navbar-fixed-top.fixed-theme:hover  {
    background-color: #222;
} */

.navbar-brand.fixed-theme {
    font-size: 18px;
}

.navbar-container.fixed-theme {
    padding: 0;
}

.navbar-brand.fixed-theme,
.navbar-container.fixed-theme,
.navbar.navbar-fixed-top.fixed-theme,
.navbar-brand,
.navbar-container{
    transition: 0.8s;
    -webkit-transition:  0.8s;
}

/* important */
.fit-image{
width: 100%;
object-fit: cover;

}

/* important */
.landing-col {

    background: url('image/signUp.jpg') no-repeat center;
    /* -webkit-background-size: 100% auto; */
    -moz-background-size: 100% auto;
    -o-background-size: 100% auto;
    /* background-size: 100% auto; */
    height: 100vh;
    /* height: 1024px; */
    align-self: center;

    -webkit-box-shadow: inset 2px -12px 56px 43px rgba(0,0,0,0.9);
    -moz-box-shadow: inset 2px -12px 56px 43px rgba(0,0,0,0.9);
    box-shadow: inset 2px -12px 56px 43px rgba(0,0,0,0.9);
}

/* important */
.alignVertical_ColBootstrap {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%,-50%);
}

</style>


<!-- <style>
        .card{
            text-align: center;
            width: 85%;
            
        }

        

    </style> -->

<style>
            .top-buffer { margin-top:20px; }
            ul {
            list-style-type: none;
            }

            li {
            display: inline-block;
            }

            input[type="checkbox"][id^="cb"],[id^="meatcb"],[id^="veggiecb"],[id^="productcb"],[id^="isTruecb"] {
            display: none;
            }

            #labelId {
            border: 1px solid #fff;
            padding: 10px;
            display: block;
            position: relative;
            margin: 10px;
            cursor: pointer;
            }

            #labelId:before {
            background-color: white;
            color: white;
            content: " ";
            display: block;
            border-radius: 50%;
            border: 1px solid grey;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
            }

            #labelId img {
            height: 100px;
            width: 100px;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
            }

            :checked + #labelId {
            border-color: #ddd;
            }

            :checked + #labelId:before {
            content: "✓";
            background-color: grey;
            transform: scale(1);
            }

            :checked + #labelId img {
            transform: scale(0.9);
            box-shadow: 0 0 5px #333;
            z-index: -1;
            }

            :checked + #labelId button {
            transform: scale(0.9);
            box-shadow: 0 0 5px #333;
            z-index: -1;
            }
        </style>


<style>
@import url('https://fonts.googleapis.com/css?family=Pathway+Gothic+One');
.graph-container {
  position: relative;
  .percent-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 48px;
    font-family: 'Pathway Gothic One', Arial
  }
}


</style>

<style>

.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}
.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}

.card { background-color: rgba(245, 245, 245, 0.4); }
.card-header, .card-footer { opacity: 1}
</style>
        
    </head>
    <body ng-app="myApp" ng-controller="myCtrl" ng-init=onInitFunction()>
    <div>
        <nav id="headerNav" class="navbar navbar-expand-lg navbar-fixed-top animated fadeInDown" style="position:fixed;top:0;width: 100%;z-index: 1">
            <a class="navbar-brand py-0" href="#" >AB</a>
            <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" style="cursor: pointer;" ng-click="workoutMenu()">WORKOUT  <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" style="cursor: pointer;" ng-click="nutritionMenu()">NUTRITION</a>
                    </li>
                </ul>
            </div>
        </nav>

        
    </div>
        
        

        <div class="bg-holder pic1" data-width="1024" data-height="768">
            <div class="content intro">
                <h1 class="animated lightSpeedIn">ADISH BALKISSOON</h1>
                <!-- <p>Parallax-Scroll</p> -->
                <!-- <div class="cta">
                    <a href="" class="btn-cta">GO TO WORKOUT</a>
                </div> -->
            </div>
        </div>
        
        <section style="box-shadow: 0px 2px 16px #999;">
        <div class="content container-fluid" style="background-color: "> 
            <div class="pt-3"></div>
            <div id="workoutMenuId">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8 col-centered" align="center">  
                                
                                
                                        
                                <div class="row">
                                
                                    <div class="col-md-5 col-centered justify-content-center align-self-center" data-aos="zoom-in" data-aos-duration="1000" align="center" > 
                                    <!-- style="border: 3px solid #222;height: 90%;background-color: rgba(85,85,85,0.2)" -->
                                        <h2 class="font-weight-bold" data-aos="fade-up" data-aos-duration="1500" style="font-size: 2.5rem">Workout Plan Schedule</h2>
                                        <div class="pt-5"></div>
                                        <ul style="padding-right: 50px;padding-left: 50px;">
                                            <li>
                                                <h4>Full Body Workout</h4>
                                            </li>
                                            <br>
                                            <li>
                                                <h4>12 Weeks Program</h4>
                                            </li>
                                            <br>
                                            <li>
                                                <h4>Details And Explanation For Each Exercise</h4>
                                            </li>
                                        </ul>
                                        <br>
                                        <button type="button" class="btn btn-outline-dark" style="font-size: 16px;" onclick="openNav('workout')">GO TO WORKOUT</button> 
                                    </div>

                                    <div class="col-md-5 col-centered"  style="background-color: ">
                                        <img src="image/adi01.jpg" class="img-responsive" data-aos="fade-left" data-aos-duration="2000" alt="Photo of sunset">
                                    </div>

                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <!-- <div class="pt-3"></div> -->
            </div>    
        </div>
        </section>

        
        
        <div class="bg-holder pic2 img-responsive fit-image" data-width="1024" data-height="768">
            <div class="content intro">
                <p style="color: black;font-weight: bold;font-size:28px" data-aos="fade-left" data-aos-duration="1500">YOUR DIET IS NUMBER 1</p>
                <p style="color: black;font-weight: bold;font-size:28px" data-aos="fade-right" data-aos-duration="1500">BUT IF YOU DON'T EAT CLEAN, </p>
                <p style="color: black;font-weight: bold;font-size:28px" data-aos="fade-left" data-aos-duration="1500">YOU ARE WASTING YOUR TIME </p>
            </div>
        </div>
        
        <section>
        <div class="content"  id="dietSectionContent">
            <div class="row" >
                <div class="col-md-6">
                    <div id="demo" class="carousel slide" data-ride="carousel" data-aos="zoom-in" data-aos-duration="1500">
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner" >
                            <div class="carousel-item active">
                                <img src="image/diet02.jpg" class="img-responsive fit-image" alt="Los Angeles" width="1024" height="700">
                                <div class="carousel-caption animated lightSpeedIn">
                                    <h3 class="animated fadeInLeft">Los Angeles</h3>
                                    <p class="animated fadeInRight">We had such a great time in LA!</p>
                                </div>   
                            </div>
                            <div class="carousel-item">
                                <img src="image/diet03.jpg" class="img-responsive fit-image" alt="Chicago" width="1024" height="700"> 
                                <div class="carousel-caption animated lightSpeedIn">
                                    <h3 class="animated fadeInRight">Chicago</h3>
                                    <p class="animated fadeInLeft">Thank you, Chicago!</p>
                                </div>   
                            </div>
                            <div class="carousel-item">
                                <img src="image/diet04.jpg" class="img-responsive fit-image" alt="New York" width="1024" height="700">
                                <div class="carousel-caption">
                                    <h3 class="animated fadeInLeft">New York</h3>
                                    <p class="animated fadeInRight">We love the Big Apple!</p>
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="container d-flex h-100">
                        <div class="row justify-content-center align-self-center" style="right: 0;left: 0">
                            <div class="col-md-12" align="center" id="nutritionMenuId"> 
                                
                                <div class="pb-5"></div>
                                <h4 class="font-weight-bold" data-aos="fade-left" data-aos-duration="1500">Diet & Inspiration</h4>
                                <h4 data-aos="fade-right" data-aos-duration="1500">Get nutritionist-approved recipes and motivational workout tips</h4>
                                <h4 data-aos="fade-left" data-aos-duration="1500">from our experts.</h4>   
                                <br>
                                <button type="button" class="btn btn-outline-dark" data-aos="fade-left" data-aos-duration="1000" style="font-size: 16px;" onclick="openNav('diet')">SEE YOUR DIET</button>
                                <div class="pb-5"></div>
                                <!-- <div class="row">
                                    <div class="col top-buffer" align="center">
                                        <button id="signUpButton" class="btn btn-success rounded-0" style="display:none">PLEASE SIGN UP</button>
                                    </div> 
                                </div> -->
                    
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        </section>
        
        <!-- <div class="bg-holder pic3" data-width="1024" data-height="836">
            <div class="content"> 

             </div>
        </div> -->
        
        <section>
            <div class="content">
                <div class="row" style="background-color: black;" > 
                    <div class="col-md-12 landing-col" align="center" > 

                        <div id="customerDetailConfirmation" class="alignVertical_ColBootstrap text-white">
                            <h3 class="" data-aos="fade-left" data-aos-duration="1500">Before signing up we need to take some details about you,</h3>
                            <h3 class="" data-aos="fade-right" data-aos-duration="1500">Do you want to proceed ?</h3>
                            <button class="btn btn-outline-light rounded-0" onclick="openNav('diet')">PROCEED</button>  
                        </div>
                </div>
            </div>
        </section>

        <!-- <hr>
        
        <section>
        <div class="content">
   
        </div>
        </section> -->
        
        <!-- <hr>
        
        <section class="footer">
        <div class="content">

        </div>
        </section> -->

        

        <!-- bottom boostrap spacing  -->
        <!-- <div class="pb-5"></div> -->

        <?php 
            require("footer.php");
        ?>

        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- form card login -->
                    <div class="card" style="border-radius: 10px">
                        <div class="card-header">
                            <h3 class="mb-0" style="text-align: center">Members Login<button type="button" class="close" data-dismiss="modal">&times;</button></h3> 
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <span class="error">{{error0}}</span>
                                <div class="form-group">
                                    <label class="font-weight-bold" id="email" for="uname1">Email:</label>
                                    <input required="" type="text" class="form-control form-control-ms rounded-0" name="uname1" id="uname1" >
                                    <!-- <div class="invalid-feedback">Oops, you missed this one.</div> -->
                                    <span class="error">{{error1}}</span>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold" id="pwd2" for="pwd1">Password:</label>
                                    <input type="password" class="form-control form-control-ms rounded-0" id="pwd1" required="" autocomplete="new-password">
                                    <!-- <div class="invalid-feedback">Enter your password too!</div> -->
                                   <div> <span class="error">{{error2}}</span></div>
                                    <span class="custom-control-description medium font-weight-bold" id="signUpBtn" role="button">Sign Up</span> | <span class="custom-control-description medium font-weight-bold" id="forgotPasswordBtn">Forgot Password ?</span>
                                </div>
                                <button type="button" class="btn btn-dark btn-ms float-left rounded-0" id="btnLogin" ng-click="submitLoginForm()">Login</button>
                            </form>
                        </div>
                        <!--/card-block-->
                    </div>
                    <!-- /form card login -->
                </div>
            </div>
        </div>

        <div id="myNav" class="overlay">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
            <div id="navContentId" class="overlay-content">
                <div id="workoutPlanVideos" style="display: none">
                    <?php require("workoutPlanVideos.php"); ?>
                </div>

                <div id="dietInfo" style="display: none">
                    <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                    <?php require("dietInfo.php"); ?>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <?php 
            require('library/jquery.php');
            require('library/bootstrapJs.php');
            require('library/OwlCarouselJs.php');
            require('library/aosJs.php');
        
        ?>
        <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="js/jsProject/index.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.min.js"></script>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-21041420-11', 'auto');
  ga('send', 'pageview');

/*
*  Parallax-Scroll - v0.2.0
*  jQuery plugin for background-attachment: scroll with friction, similar to the parallax scrolling effect on Spotify.
*  http://parallax-scroll.aenism.com
*
*  Made by Aen Tan
*  Under MIT License
*/
$(function(){$(".bg-holder").parallaxScroll({friction:.5,direction:"vertical"})});

/*
*  Parallax-Scroll - v0.2.0
*  jQuery plugin for background-attachment: scroll with friction, similar to the parallax scrolling effect on Spotify.
*  http://parallax-scroll.aenism.com
*
*  Made by Aen Tan
*  Under MIT License
*/
!function(a,b){"function"==typeof define&&define.amd?define(["jquery"],b):b(a.jQuery)}(this,function(a){"use strict";var b,c={friction:.5,direction:"vertical"},d=a(window),e=0;return window.requestAnimationFrame=function(a){var b=(new Date).getTime(),c=Math.max(0,5-(b-e)),d=window.setTimeout(function(){a(b+c)},c);return e=b+c,d},b=function(b,e){return{init:function(){this.$background=a(b),this.settings=a.extend({},c,e),this._initStyles(),this._bindEvents()},_initStyles:function(){this.$background.css({"background-attachment":"scroll"})},_visibleInViewport:function(){var a=d.height(),b=this.$background.get(0).getBoundingClientRect();return b.top<a&&b.bottom>0||b.bottom<=a&&b.top>a},_bindEvents:function(){var a=this;d.on("load scroll resize",function(){a._requestTick()})},_requestTick:function(){var a=this;this.ticking||(this.ticking=!0,requestAnimationFrame(function(){a._updateBgPos()}))},_updateBgPos:function(){if(this._visibleInViewport()){var a=d.width(),b=d.height(),c=this.$background.data("width"),e=this.$background.data("height"),f=c/e,g=this.$background.width(),h=this.$background.height(),i=g/h,j=f>i,k=g/c,l=e*k,m=c*k,n=this.$background.offset().top,o=d.scrollTop(),p=o-n,q=b+l,r=a+m,s=p*(b/q),t=p/b,u=p*(a/r),v=p/a,w=(b-h)/2;w=j?w*t:w;var x=(a-g)/2;x=j?x:x*v;var y,z,A=j?2*this.settings.friction*i:this.settings.friction*i;"horizontal"===this.settings.direction?(y=j?a+"px auto":"auto "+b+"px",z=x-u*A+"px 50%"):(y=j?"auto "+b+"px":a+"px auto",z="50% "+(s*A-w)+"px"),this.$background.css({"background-size":y,"background-position":z})}this.ticking=!1}}},b.defaults=c,a.fn.parallaxScroll=function(a){return this.each(function(){new b(this,a).init()})},b});
</script>

<script>
function openNav(type) {
  document.getElementById("myNav").style.width = "100%";
    var element = document.getElementById("navContentId");
    
  if(type == "workout"){
    if(element.className != null && element.className != ""){
        element.className = "overlay-content";
    }
    $("#dietInfo").css("display", "none");  
    $("#workoutPlanVideos").css("display", "block");
  }
  else if(type == "diet"){
    if(element.className != null && element.className != ""){
        element.className = "overlay-content alignVertical_ColBootstrap";
    }
    $("#workoutPlanVideos").css("display", "none");  
    $("#dietInfo").css("display", "block");
  }
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


</script>

<script>
$(document).ready(function(){

/**
 * This object controls the nav bar. Implement the add and remove
 * action over the elements of the nav bar that we want to change.
 *
 * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
 */
var myNavBar = {

    flagAdd: true,

    elements: [],

    init: function (elements) {
        this.elements = elements;
    },

    add : function() {
        if(this.flagAdd) {
            for(var i=0; i < this.elements.length; i++) {
                if(document.getElementById(this.elements[i]).className != null){
                    document.getElementById(this.elements[i]).className += " fixed-theme";
                }
                
            }
            this.flagAdd = false;
        }
    },

    remove: function() {
        for(var i=0; i < this.elements.length; i++) {
            if(document.getElementById(this.elements[i]).className != null){
                document.getElementById(this.elements[i]).className = document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
            }
            
        }
        this.flagAdd = true;
    }

};

/**
 * Init the object. Pass the object the array of elements
 * that we want to change when the scroll goes down
 */
myNavBar.init(  [
    "headerNav",
    "headerNav-container",
    "brand"
]);

/**
 * Function that manage the direction
 * of the scroll
 */
function offSetManager(){

    var yOffset = 0;
    var currYOffSet = window.pageYOffset;

    if(yOffset < currYOffSet) {
        myNavBar.add();
    }
    else if(currYOffSet == yOffset){
        myNavBar.remove();
    }

}

/**
 * bind to the document scroll detection
 */
window.onscroll = function(e) {
    offSetManager();
}

/**
 * We have to do a first detectation of offset because the page
 * could be load with scroll down set.
 */
// offSetManager();
});
</script>


    </body>
</html>