<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php include('head.php') ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/viewClothing.css">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&subset=latin-ext');
* {
box-sizing: border-box;
}
section {
margin: 10px;
padding: 10px;
border-radius: 3px;
width: calc(100% - 20px);
display: inline-block;
height: auto;
border: solid 1px #cccecc;
font-family: 'Source Sans Pro', sans-serif;
}
section .all {
width: 100%;
height: auto;
display: inline-block;
}
section .all .slider {
width: auto;
height: auto;
overflow: hidden;
border-radius: 3px;
position: relative;
}
section .all .slider .owl-nav, section .all .slider .owl-dots {
display: none;
}
section .all .slider:hover .left {
visibility: visible;
opacity: 1;
left: 20px;
}
section .all .slider:hover .right {
visibility: visible;
opacity: 1;
right: 20px;
}
section .all .slider .item-box {
padding: 20px;
overflow: hidden;
width: 100%;
height: 400px;
position: relative;
border-radius: 3px;
background: no-repeat url(http://www.cyw51.com/file/upload/201302/22/18-49-19-74-127.jpg) center center;
background-size: cover;
}
section .all .slider .item-box:after {
width: 100%;
height: 100%;
top: 0;
left: 0;
position: absolute;
content: "";
display: block;
/* background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), #000); */
}
section .all .slider .left {
position: absolute;
z-index: 1;
top: 167px;
left: -20px;
width: 40px;
height: 40px;
cursor: pointer;
visibility: hidden;
opacity: 0;
transition: left ease 0.25s;
transform: rotate(0deg);
background: url(http://svgshare.com/i/2V9.svg) top left;
}
section .all .slider .left:hover {
visibility: visible;
opacity: 1;
left: 20px;
background: url(http://svgshare.com/i/2UW.svg) top left;
transform: rotate(180deg);
}
section .all .slider .left.nonl {
left: -20px;
opacity: 0;
visibility: hidden;
}
section .all .slider .right {
cursor: pointer;
position: absolute;
z-index: 1;
top: 167px;
right: -20px;
width: 40px;
height: 40px;
visibility: hidden;
opacity: 0;
transition: right ease 0.25s;
background: url(http://svgshare.com/i/2V9.svg) top left;
transform: rotate(180deg);
}
section .all .slider .right:hover {
visibility: visible;
opacity: 1;
right: 20px;
background: url(http://svgshare.com/i/2UW.svg) top left;
transform: rotate(0deg);
}
section .all .slider .right.nonr {
right: -20px;
opacity: 0;
visibility: hidden;
}
section .all .slider-two {
width: auto;
height: auto;
overflow: hidden;
position: relative;
}
section .all .slider-two .owl-nav, section .all .slider-two .owl-dots {
display: none;
}
section .all .slider-two:hover .left-t {
visibility: visible;
opacity: 1;
left: 3px;
}
section .all .slider-two:hover .right-t {
visibility: visible;
opacity: 1;
right: 3px;
}
section .all .slider-two .item {
transition: all ease 0.25s;
height: 100px;
border-radius: 3px;
border: solid 3px #e6ecf2;
cursor: pointer;
background: no-repeat url(http://www.cyw51.com/file/upload/201302/22/18-49-19-74-127.jpg) center center;
background-size: cover;
}
section .all .slider-two .item.active {
/* box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.15); */
border: solid 3px #cc2e38;
}
section .all .slider-two .owl-stage {
padding: 20px 0;
}
section .all .slider-two .left-t {
transform: rotate(180deg);
cursor: pointer;
position: absolute;
z-index: 1;
top: 23px;
visibility: hidden;
opacity: 0;
transition: all ease 0.25s;
width: 40px;
height: 95px;
/* background: no-repeat rgba(204, 46, 56, 0.85) url(http://svgshare.com/i/2Vs.svg) center center; */
left: -40px;
}
section .all .slider-two .left-t:hover {
visibility: visible;
opacity: 1;
left: 3px;
}
section .all .slider-two .left-t.nonl-t {
left: -40px;
opacity: 0;
visibility: hidden;
}
section .all .slider-two .right-t {
/* background: no-repeat rgba(204, 46, 56, 0.85) url(http://svgshare.com/i/2Vs.svg) center center; */
cursor: pointer;
position: absolute;
z-index: 1;
top: 23px;
right: -40px;
visibility: hidden;
opacity: 0;
transition: all ease 0.25s;
width: 40px;
height: 95px;
/* background-color: rgba(204, 46, 56, 0.85); */
}
section .all .slider-two .right-t:hover {
visibility: visible;
opacity: 1;
right: 3px;
}
section .all .slider-two .right-t.nonr-t {
right: -40px;
opacity: 0;
visibility: hidden;
}

    </style>
</head>
<body style="overflow-x: hidden;">
    <div>
        <?php include('allPageHeaderBar.php') ?> 
    </div>

    <div class="row" style="height: 596px;">
        <div class="col-lg-6" style="height: 596px;align-items: center">
            <section>
                <div class="all">
                    <div class="slider">
                        <div class="owl-carousel owl-theme one">
                            <div class="item-box"></div>
                            <div style="background-image: url(image/AB09.png)" class="item-box"></div>
                            <div style="background-image: url(https://cdn.pixabay.com/photo/2015/04/08/13/13/food-712665_960_720.jpg)" class="item-box"></div>
                            <div style="background-image: url(http://www.creativechinese.com/wp-content/uploads/2017/04/default-pasta.jpg)" class="item-box"></div>
                            <div style="background-image: url(https://si.wsj.net/public/resources/images/FT-AA222_FOOD3_P_20161011155506.jpg)" class="item-box"></div>
                            <div style="background-image: url(http://www.fnstatic.co.uk/images/content/package/55-healthy-family-dinners_2.jpeg)" class="item-box"></div>
                        </div>
                        <div class="left nonl"></div>
                        <div class="right"></div>
                    </div>
                    <div class="slider-two">
                        <div class="owl-carousel owl-theme two">
                            <div style="background-image: url(image/AB09.png)" class="item active"></div>
                            <div style="background-image: url(https://img.huffingtonpost.com/asset/585be1aa1600002400bdf2a6.jpeg)" class="item"></div>
                            <div style="background-image: url(https://cdn.pixabay.com/photo/2015/04/08/13/13/food-712665_960_720.jpg)" class="item"></div>
                            <div style="background-image: url(http://www.creativechinese.com/wp-content/uploads/2017/04/default-pasta.jpg)" class="item"></div>
                            <div style="background-image: url(https://si.wsj.net/public/resources/images/FT-AA222_FOOD3_P_20161011155506.jpg)" class="item"></div>
                            <div style="background-image: url(http://www.fnstatic.co.uk/images/content/package/55-healthy-family-dinners_2.jpeg)" class="item"></div>
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

    <?php include('bottomJavaScriptLink.php') ?>
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
</body>
</html>
