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
        require('library/AnimateCss.php'); 
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

        .top-buffer { margin-top:20px; }

    </style>

</head>
<body style="overflow-x: hidden" ng-app="myApp" ng-controller="myCtrl" ng-init="signUpOnInit()">
    <div>
        <nav class="navbar navbar-expand-md navbar-dark fixed" style="background-color: #070617;">
            <a class="navbar-brand" href="#">AB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">HOME</a>
                </li>
            </ul>
            </div>
        </nav>
    </div>
    <div class="embed-responsive embed-responsive-21by9">
        <video controls="true" class="embed-responsive-item">
            <source src="{{work.video_url}}" type="video/mp4" allowfullscreen/>
        </video>
    </div>
    
    <!-- bottom boostrap spacing  -->
    <div class="pb-4"></div>

    <div class="row" >
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 top-buffer" align="center">
                    <div class="card rounded-0 shadow bg-white rounded">
                        <div class="card-header" id="ABpackages">
                            <h3 class="mb-2" >WORKOUT + NUTRITION</h3>
                        </div>
                        <div class="card-block">
                            <img src="image/workoutPlusNutrition.jpg" alt="" class="img-responsive" style="width: 300px;height: 250px">
                            <br>
                            <div class="card-body">
                                <p class="card-text text-left pl-3" style="font-size: 1.5rem"><i class="fas fa-angle-double-right"></i>    Full body workout plan for 12 weeks</p>
                                <p class="card-text text-left pl-3" style="font-size: 1.5rem"><i class="fas fa-angle-double-right"></i>    Full meal plan for your body type</p>
                                <!-- <p class="card-text text-center font-weight-bold" style="font-size: 1.7rem;">ONE TIME PAYMENT</p>
                                <p class="card-text text-center font-weight-bold" style="font-size: 1.7rem;"><del>Rs 3500</del>   Rs 3000</p> -->
                                <button class="btn btn-outline-secondary btn-lg rounded-0" ng-click="workoutPlusNutritionClick('WORKOUT + NUTRITION','3000');">GET IT NOW</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 top-buffer mx-auto" align="center">
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
                                <!-- <p class="card-text text-center font-weight-bold" style="font-size: 1.7rem;">ONE TIME PAYMENT</p>
                                <p class="card-text text-center font-weight-bold" style="font-size: 1.7rem;"><del>Rs 2500</del>   Rs 2000</p> -->
                                <button class="btn btn-outline-secondary btn-lg rounded-0" ng-click="nutritionClick(' NUTRITION','2000');">GET IT NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- bottom boostrap spacing  -->
    <div class="pb-5"></div>

    <div class="row" id="customerInfo" style="display: none"> 
        <div class="col-md-12" align="center">
            <div class="card rounded-0 shadow bg-white rounded">
                <div class="card-header text-left">
                    <h3 class="mb-2" id="customerInfoTitle"></h3>
                </div>
                <div class="card-body">
                    <form id="initialFormCustomerInfo" >
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
                        <button type="button" class="btn btn-dark btn rounded-0" ng-click=customerInfoNext()>Next</button>
                        <button type="button" class="btn btn-primary rounded-0" ng-click=customerInfoCancel()>Cancel</button>
                    </form>
                    <form id="FormCustomerInfoAfterConfirmation">
                        <div class="form-group row" align='left'>
                            <label for="fullNameConfirmed" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="fullNameConfirmed" readonly>
                            </div>
                        </div>
                        <div class="form-group row" align='left'>
                            <label for="emailAddressConfirmed" class="col-sm-2 col-form-label">Email Address</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="emailAddressConfirmed" readonly>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn rounded-0">PAYMENT</button>
                        <button type="button" class="btn btn-dark btn rounded-0" ng-click=customerInfoEdit()>EDIT</button>
                        <button type="button" class="btn btn-primary rounded-0" ng-click=customerInfoCancel()>Cancel</button>
                    </form>

                    <div id="testDiet">
                        <div class="row">
                            <div id="infoPartOne" class="col-md-12" align="center">
                                <h1>CHOOSE YOUR GENDER</h1>
                                <div class="pb-3"></div>
                                <button class="btn btn-outline-danger rounded-0" ng-click="genderBtn('female')">FEMALE</button>
                                <button class="btn btn-outline-primary rounded-0" ng-click="genderBtn('male')">MALE</button>
                            </div>

                            <div id="infoPartTwo" class="col-md-12" style="display: none">
                                <h1>PHYSICAL ACTIVITY</h1>
                                <div class="pb-3"></div>
                                <button class="btn btn-outline-dark" ng-click="physicalActivity('ALMOST NO PHYSICAL ACTIVITY')">ALMOST NO PHYSICAL ACTIVITY</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="physicalActivity('I OFTEN GO FOR A WALK')">I OFTEN GO FOR A WALK</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="physicalActivity('I EXERCISE 1 - 2 A WEEK')">I EXERCISE 1 - 2 A WEEK</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="physicalActivity('I EXERCISE 3 - 5 TIMES A WEEK')">I EXERCISE 3 - 5 TIMES A WEEK</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="physicalActivity('I EXERCISE 5 - 7 TIMES A WEEK')">I EXERCISE 5 - 7 TIMES A WEEK</button><br><div class="pb-2"></div>
                            </div>

                            <div id="infoPartThree" class="col-md-12" style="display: none" align="center">
                                <h1>PLEASE SELECT WHICH MEAT YOU WOULD LIKE TO INCLUDE</h1>
                                <!-- <label for="chosenFood" class="col-sm-2 col-form-label">CHOSEN FOOD</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="chosenFood" readonly>
                                </div> -->
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodMeat" value="CHICKEN">CHICKEN
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodMeat"  value="PORK">PORK
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodMeat"  value="BEEF">BEEF
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodMeat"  value="FISH">FISH
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodMeat"  value="BEACON">BEACON
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodMeat"  value="NO MEAT">NO MEAT
                                    </label>
                                </div> 
                                <br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="chosenFoodMeat()">CONTINUE</button>
                            </div>

                            <div id="infoPartFour" class="col-md-12" style="display: none" align="center">
                                <h1>PLEASE SELECT WHICH VEGGIES YOU WOULD LIKE TO INCLUDE</h1>
                                <!-- <label for="chosenFood" class="col-sm-2 col-form-label">CHOSEN FOOD</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="chosenFood" readonly>
                                </div> -->
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodVeggie" value="BROCOLI">BROCOLI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodVeggie"  value="MUSHROOMS">MUSHROOMS
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodVeggie"  value="ZUCCHINI">ZUCCHINI
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodVeggie"  value="CAULIFLOWER">CAULIFLOWER
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodVeggie"  value="ASPARAGUS">ASPARAGUS
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodVeggie"  value="AVOCADO">AVOCADO
                                    </label>
                                </div> 
                                <br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="chosenFoodVeggie()">CONTINUE</button>
                            </div>
                            
                            <div id="infoPartFive" class="col-md-12" style="display: none" align="center">
                                <h1>PLEASE SELECT WHICH PRODUCTS YOU WOULD LIKE TO INCLUDE</h1>
                                <!-- <label for="chosenFood" class="col-sm-2 col-form-label">CHOSEN FOOD</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="chosenFood" readonly>
                                </div> -->
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodProduct" value="EGG">EGG
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodProduct"  value="NUTS">NUTS
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodProduct"  value="CHEESE">CHEESE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodProduct"  value="COTTAGE CHEESE">COTTAGE CHEESE
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodProduct"  value="BUTTER">BUTTER
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodProduct"  value="COCONUT">COCONUT
                                    </label>
                                </div> 
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="foodProduct"  value="TOFU">TOFU
                                    </label>
                                </div> 
                                <br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="chosenFoodProduct()">CONTINUE</button>
                            </div>

                            <div id="infoPartSix" class="col-md-12" style="display: none">
                                <h1>DESCRIBE A TYPICAL DAY FOR YOU</h1>
                                <div class="pb-3"></div>
                                <button class="btn btn-outline-dark" ng-click="typicalDay('AT THE OFFICE')">AT THE OFFICE</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="typicalDay('AT THE OFFICE, BUT I GO OUT ON A REGULAR BASIS')">AT THE OFFICE, BUT I GO OUT ON A REGULAR BASIS</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="typicalDay('I SPEND THE BETTER PART OF THE DAY ON FOOT')">I SPEND THE BETTER PART OF THE DAY ON FOOT</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="typicalDay('MANUAL LABOR')">MANUAL LABOR</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="typicalDay('I MOSTLY STAY AT HOME')">I MOSTLY STAY AT HOME</button><br><div class="pb-2"></div>
                            </div>

                            <div id="infoPartSeven" class="col-md-12" style="display: none">
                            <h1>WHICH OF THE FOLLOWING IS TRUE FOR YOU ?</h1>
                                <!-- <label for="chosenFood" class="col-sm-2 col-form-label">CHOSEN FOOD</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="chosenFood" readonly>
                                </div> -->
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="isTrue" value="I DO NOT GET ENOUGH SLEEP">I DO NOT GET ENOUGH SLEEP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="isTrue"  value="I EAT LATE AT NIGHT">I EAT LATE AT NIGHT
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="isTrue"  value="I CONSUME A LOT OF SALT">I CONSUME A LOT OF SALT 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="isTrue"  value="I CANNOT GIVE UP EATING SWEETS">I CANNOT GIVE UP EATING SWEETS
                                    </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="isTrue"  value="I LOVE SOFTDRINKS">I LOVE SOFTDRINKS
                                    </label>
                                </div> 
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="isTrue"  value="NONE OF THE ABOVE">NONE OF THE ABOVE
                                    </label>
                                </div>
                                <br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="isTrue()">CONTINUE</button>
                            </div>

                            <!-- <div id="infoPartEight" class="col-md-12" style="display: none">
                                <h1>IMPERIAL</h1>
                                <div class="pb-3"></div>
                                <button class="btn btn-outline-dark" ng-click="typicalDay('AT THE OFFICE')">AT THE OFFICE</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="typicalDay('AT THE OFFICE, BUT I GO OUT ON A REGULAR BASIS')">AT THE OFFICE, BUT I GO OUT ON A REGULAR BASIS</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="typicalDay('I SPEND THE BETTER PART OF THE DAY ON FOOT')">I SPEND THE BETTER PART OF THE DAY ON FOOT</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="typicalDay('MANUAL LABOR')">MANUAL LABOR</button><br><div class="pb-2"></div>
                                <button class="btn btn-outline-dark" ng-click="typicalDay('I MOSTLY STAY AT HOME')">I MOSTLY STAY AT HOME</button><br><div class="pb-2"></div>
                            </div> -->

                        </div>
                    </div>
                </div>
                    
                    <!-- <div id="testDiet" style="display: none">
                        <div id="anim">
                            <button  class="btn btn-primary" onclick="testanim()">TEST</button>
                        </div>

                        <img id="tesss" class="" src="https://mdbootstrap.com/img/logo/mdb-transparent.png">
                    </div> -->
                
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

    <script src="js/jsProject/SignUp.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <script>
            function testanim(){
                // alert("good");
                var element = document.getElementById("anim");
                element.className = "animated zoomOut";
            }
        </script>

</body>

</html>