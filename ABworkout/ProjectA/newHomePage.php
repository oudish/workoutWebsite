<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php') ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/newHomePage.css">
    <style>
        
        html {
            overflow: hidden;
        }
        .mainContainer {
            height: 100vh;
            perspective: 1px;
            transform-style: preserve-3d;
            overflow-x:hidden;
            overflow-y:auto;
        }

        .parallax-wrapper, .parallax-wrapper2 {
            transform-style: preserve-3d;
            width: 100vw;
            height:100vh;
            padding-top:20vh;
            box-sizing: border-box;
        }
      
        .parallax-wrapper::before {
            /* padding-top:20vh; */
            content:"";
            width: 100vw;
            height: 100vh;
            top:0;
            left:0;
            background-image: url("image/model02.jpg");
            height: 100%; 

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
            position: absolute;
            z-index: -1;
            transform:translateZ(-1px) scale(2);
        }

        .parallax-wrapper2::before {
            /* padding-top:20vh; */
            content:"";
            width: 100vw;
            height: 100vh;
            /* top:0;
            left:0; */
            background-image: url("image/model02.jpg");
            height: 100%; 

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
            position: absolute;
            z-index: -1;
            transform:translateZ(-1px) scale(2);
        }
        
        .contentIn {
            margin: 0 auto;
            padding: 50px;
            width: 50%;
        }

        .regular-wrapper1{
            width: 100vw;
            height:100vh;
            padding-top:20vh;
            background-image: url("image/model03.jpg");
            height: 100%; 
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            z-index: 2;
            position: relative;
        }

        
        .regular-wrapper2{
            width: 100vw;
            height:100vh;
            padding-top:20vh;
            background-image: url("image/model04.jpg");
            height: 100%; 
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            z-index: 2;
            position: relative;
        }

        
        .regular-wrapper3{
            width: 100vw;
            height:100vh;
            padding-top:20vh;
            background-image: url("image/model02.jpg");
            height: 100%; 
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            z-index: 2;
            position: relative;
        }


    </style>
</head>

<body>
    <div>
        <?php include('allPageHeaderBar.php') ?> 
    </div>
    <div class="mainContainer">
        <div class="parallax-wrapper">
            <div class="contentIn">

            </div>
        </div>
        <div class="parallax-wrapper2">
            <div class="contentIn">

            </div>
        </div>
            <!-- <div class="regular-wrapper1">
            <div class="contentIn">

            </div>
            <div class="regular-wrapper2">
            <div class="contentIn">

            </div>
            <div class="regular-wrapper3">
            <div class="contentIn">

            </div> -->
        </div>
    </div>
    

    <!-- <div class="navbar"><span>CSS Parallax Scrolling Tutorial</span></div>   -->


    <div class="clothingAutowide"></div>

    <?php include('bottomJavaScriptLink.php') ?>

    <script>
        function oninit(){
            $.ajax({
                url: 'models/homePageSql.php',
                success: function(returnData){
                    $(".clothingAutowide").empty();
                    $(".clothingAutowide").append(returnData);
                }
            });
        }

        $('#flex li').click(function(e){
            e.preventDefault;
            $("#flex li").removeClass("active");
            $(this).addClass("active");
        });

        $("a").click(function() {
            var className = $(this).attr("class");
            if(className == "categoryClothingT-shirt"){
                var getCategory = className.split("categoryClothing");
                searchCategory(getCategory[1]);
            }
        });

        function searchCategory(category){
            $.ajax({
                url: 'models/searchCategorySql.php',
                data:{ category: category },
                success: function(returnData){
                    $(".clothingAutowide").empty();
                    $(".clothingAutowide").append(returnData);
                }
            });
        }
    </script>
</body>
    

</html>