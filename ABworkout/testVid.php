<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php 
            require('library/bootstrapCss.php');
            require('library/fontAwesome.php');
            require('library/OwlcarouselCss.php');
            require('library/Angular.php'); 
        ?>

        <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    .home-wrapper {
position: absolute;
    top: 40%;
    left: 40%;
    text-align: center;
    color: white;
}
.white-text-brand{
 font-style: italic;   
}


video{
     position: fixed;
    top: 50%;
    left: 50%;
    z-index: 0;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translate(-50%, -50%);
}

/*------------------------------------*\
Footer
\*------------------------------------*/

#footer {
  position: relative;
}

.footer-logo {
  display:none;
  text-align: center;
  margin-bottom: 40px;
}

.footer-logo>a>img {
  max-height: 80px;
}

.footer-follow {
  text-align: center;
  margin-bottom: 20px;
}

.footer-follow li {
  display: inline-block;
  margin-right: 10px;
  margin-bottom: 13px;
}

.footer-follow li a {
display: inline-block;
width: 50px;
height: 50px;
line-height: 50px;
text-align: center;
border-radius: 3px;
background-color: #2044e0;
color:#FFF;
}

.footer-copyright p, .footer-links p {
  text-align: center;
  font-size: 14px;
  text-transform: uppercase;
  margin: 0;
}

</style>
</head>
<body>
<header>
<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" style="width: 100%" class="">
    <source src="video/ABworkout.mp4" type="video/mp4">
    <div class="overlay"></div>
  </video>
  
    <!-- home wrapper -->
  <div class="home-wrapper">
    <div class="container">
      <div class="row">
        <!-- home content -->
        <div class="col">
          <div class="home-content">
            <h1 class="white-text-brand">i WANT Fishing</h1>
            <p class="white-text-one">Welcome to the solution</p>
              <a href="/requests/postanitem" class="btn btn-outline-light">Make a Request</a>
          </div>
        </div>
        <!-- /home content -->

      </div>
    </div>
  </div>
  <!-- /home wrapper -->
</header>
<nav class="navbar navbar-expand-sm fixed-top navbar-dark ">
    <div class="container">
        <a class="navbar-brand" href="#">Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">HOW IT WORKS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">REGISTER</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">LOGIN</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">MAKE A REQUEST</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">LATEST LISTINGS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link btn btn-outline-light" href="#">FEATURED LISTINGS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <?php 
            require('library/jquery.php');
            require('library/bootstrapJs.php');
            require('library/OwlCarouselJs.php');
        
        ?>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
        <script src="js/jsProject/index.js"></script>

       
<!--container-->
</body>
</html>