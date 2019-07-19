<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        html, body{
            margin: 0;
            padding: 0;
            background: #2C2F34;
        }
        .content{
            width: 100%;
            height: auto;
            margin: auto;
            max-width: 1200px;
            padding: 40px 0 40px 0;
        }

        .hero-back{
            width: 100%;
            height: calc(100vh);
            background: url(AB07.jpg) no-repeat 50% 50%;
            background-size: cover;
            /* position: relative; */
        }

        .hero-back img{ 
            width: 50vw;
            height: 100vh;
            position: absolute;
            
        }
    </style>
</head>
<body>
    <div class="hero-back">
        <img src="rsz_ab05.png" alt="">
    </div>    

    <div class="content">
        <h1>Content goes here</h1>
        <p>sdkhjfdjskhfskdfhjsdfhjsdfhdjskhfds</p>
        <p>sdkhjfdjskhfskdfhjsdfhjsdfhdjskhfds</p>
        <p>sdkhjfdjskhfskdfhjsdfhjsdfhdjskhfds</p>
        <p>sdkhjfdjskhfskdfhjsdfhjsdfhdjskhfds</p>

        <p>sdkhjfdjskhfskdfhjsdfhjsdfhdjskhfds</p>
        <p>sdkhjfdjskhfskdfhjsdfhjsdfhdjskhfds</p>
        <p>sdkhjfdjskhfskdfhjsdfhjsdfhdjskhfds</p>
        <p>sdkhjfdjskhfskdfhjsdfhjsdfhdjskhfds</p>
        <p>sdkhjfdjskhfskdfhjsdfhjsdfhdjskhfds</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script>
        $(window).scroll(function(){
            var scrollPos = $(this).scrollTop();
            $(".hero-back").css({
                'background-size' : 100 + scrollPos + '%'
            });
        });
    </script>
</body>
</html>