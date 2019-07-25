<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    <?php 
        require('library/bootstrapCss.php');
        require('library/fontAwesome.php'); 
        // require('library/MDBootstrapCss.php'); 
    ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <style>
        .card{
            text-align: center;
            width: 85%;
            
        }
    </style>
</head>
<body style="overflow-x: hidden">

    <div class="embed-responsive embed-responsive-21by9">
        <video controls="true" class="embed-responsive-item">
            <source src="{{work.video_url}}" type="video/mp4" allowfullscreen/>
        </video>
    </div>
    
    <!-- bottom boostrap spacing  -->
    <div class="pb-5"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6" align="center">
                    <div class="card rounded-0 shadow bg-white rounded">
                        <div class="card-header">
                            <h3 class="mb-2" >WORKOUT + NUTRITION</h3>
                        </div>
                        <div class="card-block">
                            <img src="image/workoutPlusNutrition.jpg" alt="" class="img-responsive" style="width: 300px;height: 250px">
                            <br>
                            <div class="card-body">
                                <p class="card-text text-left pl-3" style="font-size: 1.5rem"><i class="fas fa-angle-double-right"></i>    Full body workout plan for 12 weeks</p>
                                <p class="card-text text-left pl-3" style="font-size: 1.5rem"><i class="fas fa-angle-double-right"></i>    Full meal plan for your body type</p>
                                <p class="card-text text-center font-weight-bold" style="font-size: 1.7rem;">ONE TIME PAYMENT</p>
                                <p class="card-text text-center font-weight-bold" style="font-size: 1.7rem;"><del>Rs 3500</del>   Rs 3000</p>
                                <button class="btn btn-outline-secondary btn-lg rounded-0">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mx-auto" align="center">
                    <!-- form card login -->
                    <div class="card rounded-0 shadow bg-white rounded">
                        <div class="card-header">
                            <h3 class="mb-2" >NUTRITION</h3>
                        </div>
                        <div class="card-block">
                            <img src="image/nutrition.jpg" alt="" class="img-responsive" style="width: 300px;height: 250px">
                                <div class="card-body">
                                    <p class="card-text text-left pl-3" style="font-size: 1.5rem"><i class="fas fa-angle-double-right"></i>    Full meal plan for your body type</p>
                                    <p class="card-text text-left pl-3" style="font-size: 1.5rem"><i class="fas fa-angle-double-right"></i>    Meal Explanation and details</p>
                                    <p class="card-text text-center font-weight-bold" style="font-size: 1.7rem;">ONE TIME PAYMENT</p>
                                    <p class="card-text text-center font-weight-bold" style="font-size: 1.7rem;"><del>Rs 2500</del>   Rs 2000</p>
                                    <button class="btn btn-outline-secondary btn-lg rounded-0">BUY NOW</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bottom boostrap spacing  -->
    <div class="pb-5"></div>

    <div class="row">
        <div class="col-md-12" align="center">
            <div class="card rounded-0 shadow bg-white rounded">
                <div class="card-header text-left">
                    <h3 class="mb-2" >CUSTOMER INFO</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row" align='left'>
                            <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="firstName">
                            </div>
                        </div>
                        <div class="form-group row" align='left'>
                            <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="lastName">
                            </div>
                        </div>
                        <div class="form-group row" align='left'>
                            <label for="emailAddress" class="col-sm-2 col-form-label">Email Address</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="emailAddress">
                            </div>
                        </div>
                        <div class="form-group row" align='left'>
                            <label for="emailAddressRetype" class="col-sm-2 col-form-label">Retype Email Address</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="emailAddressRetype">
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- bottom boostrap spacing  -->
    <div class="pb-5"></div>

    <?php 
        require("footer.php");
    ?>

    <?php 
        require('library/bootstrapJs.php');
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>