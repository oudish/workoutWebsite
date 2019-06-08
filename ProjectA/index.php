<html>
<head>
    <?php include('head.php') ?>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/filter.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <title>AB</title>
</head>

<body onload="oninit()">
    <div>
        <?php include('allPageHeaderBar.php') ?> 
    </div>

    <br>
    <ul id="flex">
        <li class="active">
            <span>Home</span>
        </li>
        <li>
            <span>V-Neck</span>
        </li>
        <li>
            <span>Long-sleeve</span>
        </li>
        <li>
            <span>Round-Neck</span>
        </li>
    </ul>

    <br>
    <div class="clothingAutowide"></div>
    
    <footer class="page-footer font-small unique-color-dark pt-4"> 
        <!-- Footer Elements -->
        <div class="container" style="padding-top:100%">
            <!-- Call to action -->
            <ul class="list-unstyled list-inline text-center py-2">
                <li class="list-inline-item">
                    <h5 class="mb-1">Register for free</h5>
                </li>
                <li class="list-inline-item">
                    <a href="#!" class="btn btn-outline-white btn-rounded">Sign up!</a>
                </li>
            </ul>
            <!-- Call to action -->
        </div>
        <!-- Footer Elements -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>

    </footer>

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


        $("#flex li").click(function() {
           // alert(); // gets text contents of clicked li
            var style = $(this).text().replace(/\s/g,''); 
            if(style == "Home"){
                oninit();
            }
            else{
                $.ajax({
                    url: 'models/searchStyleSql.php',
                    data:{ style: style },
                    success: function(returnData){
                        $(".clothingAutowide").empty();
                        $(".clothingAutowide").append(returnData);
                    }
                });
            }
        });
    </script>
</body>


</html>