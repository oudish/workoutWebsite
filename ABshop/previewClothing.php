<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- <?php include('head.php') ?> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/previewClothing.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body style="overflow-x: hidden;" ng-app="myApp" ng-controller="myCtrl" ng-init="onInit()">

    <div class="row" style="height: 596px;">
        <div class="col-lg-6" style="height: 596px;align-items: center">
            <section>
                <div class="all">
                    <div class="slider">
                        <div class="owl-carousel owl-theme one">
                            <div ng-repeat="photo in photoDetailsDisplay">
                                <div style="background-image: url({{photo.clothing_image}})" class="item-box"></div>
                            </div>
                            
                            <!-- <div class="item-box"></div> -->
                            <!-- <div style="background-image: url(https://cdn.pixabay.com/photo/2015/04/08/13/13/food-712665_960_720.jpg)" class="item-box"></div>
                            <div style="background-image: url(http://www.creativechinese.com/wp-content/uploads/2017/04/default-pasta.jpg)" class="item-box"></div>
                            <div style="background-image: url(https://si.wsj.net/public/resources/images/FT-AA222_FOOD3_P_20161011155506.jpg)" class="item-box"></div>
                            <div style="background-image: url(http://www.fnstatic.co.uk/images/content/package/55-healthy-family-dinners_2.jpeg)" class="item-box"></div> -->
                        </div>
                        <div class="left nonl"></div>
                        <div class="right"></div>
                    </div>
                    <div class="slider-two">
                        <div class="owl-carousel owl-theme two">
                            <div ng-repeat="photo in photoDetailsDisplay">
                                <div style="background-image: url({{photo.clothing_image}})" class="item active"></div>
                            </div>
                            <!-- <div style="background-image: url(https://img.huffingtonpost.com/asset/585be1aa1600002400bdf2a6.jpeg)" class="item"></div>
                            <div style="background-image: url(https://cdn.pixabay.com/photo/2015/04/08/13/13/food-712665_960_720.jpg)" class="item"></div>
                            <div style="background-image: url(http://www.creativechinese.com/wp-content/uploads/2017/04/default-pasta.jpg)" class="item"></div>
                            <div style="background-image: url(https://si.wsj.net/public/resources/images/FT-AA222_FOOD3_P_20161011155506.jpg)" class="item"></div>
                            <div style="background-image: url(http://www.fnstatic.co.uk/images/content/package/55-healthy-family-dinners_2.jpeg)" class="item"></div> -->
                        </div>
                        <div class="left-t nonl-t"></div>
                        <div class="right-t"></div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-lg-6" >
            <h4>Name Of Product : <input type="text" value="My product" readonly></h4>
            <br>
            <h4>Price Of Product : <input type="text" value="Price" readonly></h4>
            <br>
            <h4>Colour Of Product : <input type="text" value="Colour" readonly></h4>
            <br>
            <h4>Name Of Product : <input type="text" value="My product" readonly></h4>
            <br>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- <?php include('bottomJavaScriptLink.php') ?> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    
    <script>
        var changeSlide = 4; // mobile -1, desktop + 1
        // Resize and refresh page. slider-two slideBy bug remove
        var slide = changeSlide;
        if ($(window).width() < 600) {
            var slide = changeSlide;
            slide--;
        }
        else if ($(window).width() > 999) {
            var slide = changeSlide;
            slide++;
        }
        else{
        var slide = changeSlide;
        }
        $(document).ready(function() {
            $('.one').owlCarousel({
                nav: true,
                items: 1,
            })
            $('.two').owlCarousel({
                nav: true,
                margin: 15,
                mouseDrag: false,
                touchDrag: false,
                responsive: {
                    0: {
                        items: changeSlide - 1,
                        slideBy: changeSlide - 1
                    },
                    600: {
                        items: changeSlide,
                        slideBy: changeSlide
                    },
                    1000: {
                        items: changeSlide + 1,
                        slideBy: changeSlide + 1
                    }
                }
            })
            var owl = $('.one');
            owl.owlCarousel();
            owl.on('translated.owl.carousel', function(event) {
                $(".right").removeClass("nonr");
                $(".left").removeClass("nonl");
                if ($('.one .owl-next').is(".disabled")) {
                    $(".slider .right").addClass("nonr");
                }
                if ($('.one .owl-prev').is(".disabled")) {
                    $(".slider .left").addClass("nonl");
                }
                $('.slider-two .item').removeClass("active");
                var c = $(".slider .owl-item.active").index();
                $('.slider-two .item').eq(c).addClass("active");
                var d = Math.ceil((c + 1) / (slide)) - 1;
                $(".slider-two .owl-dots .owl-dot").eq(d).trigger('click');
            })
            $('.right').click(function() {
                $(".slider .owl-next").trigger('click');
            });
            $('.left').click(function() {
                $(".slider .owl-prev").trigger('click');
            });
            $('.slider-two .item').click(function() {
                var b = $(".item").index(this);
                $(".slider .owl-dots .owl-dot").eq(b).trigger('click');
                $(".slider-two .item").removeClass("active");
                $(this).addClass("active");
            });
            var owl2 = $('.two');
            owl2.owlCarousel();
            owl2.on('translated.owl.carousel', function(event) {
                $(".right-t").removeClass("nonr-t");
                $(".left-t").removeClass("nonl-t");
                if ($('.two .owl-next').is(".disabled")) {
                    $(".slider-two .right-t").addClass("nonr-t");
                }
                if ($('.two .owl-prev').is(".disabled")) {
                    $(".slider-two .left-t").addClass("nonl-t");
                }
            })
            $('.right-t').click(function() {
                $(".slider-two .owl-next").trigger('click');
            });
            $('.left-t').click(function() {
                $(".slider-two .owl-prev").trigger('click');
            });
        });
    </script>

    <script>
        var app = angular.module('myApp', []);
            app.controller('myCtrl', function($scope,$http) {
                $scope.onInit = function() {
                    var params = new URLSearchParams(window.location.search);  
                    var photoId = params.get("id"); 
                    //alert(photoId);
                    $scope.onInit = function() {
                    $http.post('modelSql/displayPreviewPhotos.php',{photoId: photoId}).then(function(response){
                        //alert(response);
                        alert(JSON.stringify(response.data));
                        //$scope.photoDetailsDisplay =response.data;
                        // $scope.blockIfVideoPresent ="block";
                    });
                };
            });
    </script>
</body>
</html>
