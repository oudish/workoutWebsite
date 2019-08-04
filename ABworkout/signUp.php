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

<style>
            ul {
            list-style-type: none;
            }

            li {
            display: inline-block;
            }

            input[type="checkbox"][id^="cb"],[id^="meatcb"],[id^="veggiecb"],[id^="productcb"] {
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
            <source src="" type="video/mp4" allowfullscreen/>
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

                    
                </div>    
            </div>
        </div>
    </div>

        <div class="row" id="customerInfoDiet" style="display: none"> 
            <div class="col-md-12" align="center">
                <div class="card rounded-0 shadow bg-white rounded">
                    <div class="card-body">
                        <div id="testDiet" align="center">
                            <div class="row">
                            <div class="container"></div>,<div class="container"> 
                                <form role="form" action="" method="post">
                                    <div class="row setup-content" id="step-1">
                                        <div class="col-md-12">
                                            <h3> Step 1</h3>
                                            <div class="form-group">
                                                <div id="infoPartOne" class="col-md-12" align="center">
                                                    <h1>CHOOSE YOUR GENDER</h1>
                                                    <div class="pb-3"></div>
                                                    <button class="btn btn-outline-danger nextBtn" type="button" ng-click="genderBtn('female')">FEMALE</button>
                                                    <button class="btn btn-outline-primary nextBtn" type="button" ng-click="genderBtn('male')">MALE</button>
                                                    <div class="pb-5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-2">
                                        <div class="col-md-12">
                                            <h3> Step 2</h3>
                                            <div class="form-group">
                                                <div id="infoPartTwo" class="col-md-12">
                                                    <h1>PHYSICAL ACTIVITY</h1>
                                                    <div class="pb-3"></div>
                                                    <button class="btn btn-outline-dark nextBtn" type="button" ng-click="physicalActivity('ALMOST NO PHYSICAL ACTIVITY')">ALMOST NO PHYSICAL ACTIVITY</button><br><div class="pb-2"></div>
                                                    <button class="btn btn-outline-dark nextBtn" type="button"  ng-click="physicalActivity('I OFTEN GO FOR A WALK')">I OFTEN GO FOR A WALK</button><br><div class="pb-2"></div>
                                                    <button class="btn btn-outline-dark nextBtn" type="button"  ng-click="physicalActivity('I EXERCISE 1 - 2 A WEEK')">I EXERCISE 1 - 2 A WEEK</button><br><div class="pb-2"></div>
                                                    <button class="btn btn-outline-dark nextBtn" type="button" ng-click="physicalActivity('I EXERCISE 3 - 5 TIMES A WEEK')">I EXERCISE 3 - 5 TIMES A WEEK</button><br><div class="pb-2"></div>
                                                    <button class="btn btn-outline-dark nextBtn" type="button" ng-click="physicalActivity('I EXERCISE 5 - 7 TIMES A WEEK')">I EXERCISE 5 - 7 TIMES A WEEK</button><br><div class="pb-2"></div>
                                                </div>
                                                <br>
                                                <button class="btn btn-primary prevBtn" type="button">Previous</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-3">
                                        <div class="col-md-12">
                                            <h3> Step 3</h3>
                                            <div id="infoPartThree" class="col-md-12" align="center">
                                                <h1>PLEASE SELECT WHICH MEAT YOU WOULD LIKE TO INCLUDE</h1>
                                                <ul>
                                                    <li>
                                                        <input type="checkbox" id="meatcb1"  name="foodMeat" value="CHICKEN">CHICKEN
                                                        <label id="labelId" for="meatcb1">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="meatcb2"  name="foodMeat"  value="PORK">PORK
                                                        <label id="labelId" for="meatcb2">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="meatcb3"  name="foodMeat" value="BEEF">BEEF
                                                        <label id="labelId" for="meatcb3">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <input type="checkbox" id="meatcb4"  name="foodMeat" value="FISH">FISH
                                                        <label id="labelId" for="meatcb4">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="meatcb5"  name="foodMeat" value="BEACON">BEACON
                                                        <label id="labelId" for="meatcb5">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="meatcb6"  name="foodMeat" value="NO MEAT">NO MEAT
                                                        <label id="labelId" for="meatcb6">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                </ul>
                                                <br>
                                                <button class="btn btn-primary prevBtn " type="button">Previous</button>
                                                <button class="btn btn-outline-dark nextBtn" type="button"  ng-click="chosenFoodMeat()">CONTINUE</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-4">
                                        <div class="col-md-12">
                                            <h3> Step 4</h3>
                                            <div id="infoPartFour" class="col-md-12" align="center">
                                                <h1>PLEASE SELECT WHICH VEGGIES YOU WOULD LIKE TO INCLUDE</h1>
                                                <ul>
                                                    <li>
                                                        <input type="checkbox" id="veggiecb1" name="foodVeggie" value="BROCOLI">BROCOLI
                                                        <label id="labelId" for="veggiecb1">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="veggiecb2" name="foodVeggie"  value="MUSHROOMS">MUSHROOMS
                                                        <label id="labelId" for="veggiecb2">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="veggiecb3" name="foodVeggie" value="ZUCCHINI">ZUCCHINI
                                                        <label id="labelId" for="veggiecb3">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <input type="checkbox" id="veggiecb4" name="foodVeggie"value="CAULIFLOWER">CAULIFLOWER
                                                        <label id="labelId" for="veggiecb4">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="veggiecb5" name="foodVeggie" value="ASPARAGUS">ASPARAGUS
                                                        <label id="labelId" for="veggiecb5">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="veggiecb6" name="foodVeggie" value="AVOCADO">AVOCADO
                                                        <label id="labelId" for="veggiecb6">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>

                                                </ul>
                                                <br>
                                                <button class="btn btn-primary prevBtn " type="button">Previous</button>
                                                <button class="btn btn-outline-dark nextBtn" type="button"  ng-click="chosenFoodVeggie()">CONTINUE</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-5">
                                        <div class="col-md-12">
                                            <h3> Step 5</h3>
                                            <div id="infoPartFive" class="col-md-12" align="center">
                                                <h1>PLEASE SELECT WHICH PRODUCTS YOU WOULD LIKE TO INCLUDE</h1>
                                                <ul>
                                                    <li>
                                                        <input type="checkbox" id="productcb1" name="foodProduct" value="EGG"/>EGG
                                                        <label id="labelId" for="productcb1">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="productcb2" name="foodProduct"  value="NUTS">NUTS
                                                        <label id="labelId" for="productcb2">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="productcb3" name="foodProduct" value="CHEESE">CHEESE
                                                        <label id="labelId" for="productcb3">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <br>
                                                    <li>
                                                        <input type="checkbox" id="productcb4" name="foodProduct" value="COTTAGE CHEESE">COTTAGE CHEESE
                                                        <label id="labelId" for="productcb4">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="productcb5" name="foodProduct" value="BUTTER">BUTTER
                                                        <label id="labelId" for="productcb5">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="productcb6" name="foodProduct" value="COCONUT">COCONUT
                                                        <label id="labelId" for="productcb6">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                    <li>
                                                        <input type="checkbox" id="productcb7" name="foodProduct" value="TOFU">TOFU
                                                        <label id="labelId" for="productcb7">
                                                            <img src="http://lorempixel.com/100/100" />
                                                        </label> 
                                                    </li>
                                                </ul>  
                                                <br>
                                                <button class="btn btn-primary prevBtn " type="button">Previous</button>
                                                <button class="btn btn-outline-dark nextBtn" type="button"  ng-click="chosenFoodProduct()">CONTINUE</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-6">
                                        <div class="col-md-12">
                                            <h3> Step 6</h3>
                                            <div id="infoPartSix" class="col-md-12">
                                                <h1>DESCRIBE A TYPICAL DAY FOR YOU</h1>
                                                <div class="pb-3"></div>
                                                <button class="btn btn-outline-dark nextBtn" type="button" ng-click="typicalDay('AT THE OFFICE')">AT THE OFFICE</button><br><div class="pb-2"></div>
                                                <button class="btn btn-outline-dark nextBtn" type="button" ng-click="typicalDay('AT THE OFFICE, BUT I GO OUT ON A REGULAR BASIS')">AT THE OFFICE, BUT I GO OUT ON A REGULAR BASIS</button><br><div class="pb-2"></div>
                                                <button class="btn btn-outline-dark nextBtn" type="button" ng-click="typicalDay('I SPEND THE BETTER PART OF THE DAY ON FOOT')">I SPEND THE BETTER PART OF THE DAY ON FOOT</button><br><div class="pb-2"></div>
                                                <button class="btn btn-outline-dark nextBtn" type="button" ng-click="typicalDay('MANUAL LABOR')">MANUAL LABOR</button><br><div class="pb-2"></div>
                                                <button class="btn btn-outline-dark nextBtn" type="button" ng-click="typicalDay('I MOSTLY STAY AT HOME')">I MOSTLY STAY AT HOME</button><br><div class="pb-2"></div>
                                                <button class="btn btn-primary prevBtn " type="button">Previous</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-7">
                                        <div class="col-md-12">
                                            <h3> Step 7</h3>
                                            <div id="infoPartSeven" class="col-md-12">
                                                <h1>WHICH OF THE FOLLOWING IS TRUE FOR YOU ?</h1>
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
                                                <br>
                                                <button class="btn btn-primary prevBtn " type="button">Previous</button>
                                                <button class="btn btn-outline-dark nextBtn" type="button"  ng-click="isTrue()">CONTINUE</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-8">
                                        <div class="col-md-12">
                                            <h3> Step 8</h3>
                                            <div id="infoPartEight" class="col-md-12">
                                                <h1>PROCESSING YOUR DATA TO DEVELOP YOUR DIET PLAN</h1>
                                                <div class="graph-container">
                                                    <svg id="my-svg" width="250px" height="250px"></svg>
                                                    <span class="percent-text">100%</span>
                                                </div> 
                                                <br><div class="pb-2"></div>
                                                <button class="btn btn-primary prevBtn btn-lg" type="button">Previous</button>
                                                <button class="btn btn-outline-dark nextBtn" type="button" ng-click="goToPayment('NUTRITION','2000')">CONTINUE</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <div class="stepwizard col-md-offset-3" align="center">
                                    <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step">
                                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                        <p>Step 1</p>
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                        <p>Step 2</p>
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                        <p>Step 3</p>
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                        <p>Step 4</p>
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                        <p>Step 5</p>
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                                        <p>Step 6</p>
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                                        <p>Step 7</p>
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                                        <p>Step 8</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>   
    </div>

    <!-- bottom boostrap spacing  --> 
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.min.js"></script>

    <script>
        $(document).ready(function () {
            var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn'),
                allPrevBtn = $('.prevBtn');
        
            allWells.hide();
        
            navListItems.click(function (e) {
                e.preventDefault();
                var $target = $($(this).attr('href')),
                    $item = $(this);
        
                if (!$item.hasClass('disabled')) {
                    navListItems.removeClass('btn-primary').addClass('btn-default');
                    $item.addClass('btn-primary');
                    // alert(toString($(this)) );
                    allWells.hide();
                    $target.show();
                    $target.find('input:eq(0)').focus();
                }
            });
            
            allPrevBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");
        
                    prevStepWizard.removeAttr('disabled').trigger('click');
            });
        
            allNextBtn.click(function(){
                var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;
        
                $(".form-group").removeClass("has-error");
                for(var i=0; i<curInputs.length; i++){
                    if (!curInputs[i].validity.valid){
                        isValid = false;
                        $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }
                }
        
                if (isValid)
                    nextStepWizard.removeAttr('disabled').trigger('click');
            });
        
            $('div.setup-panel div a.btn-primary').trigger('click');
        });
    </script>

</body>

</html>