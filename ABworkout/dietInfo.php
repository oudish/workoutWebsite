<style>
.card { background-color: rgba(245, 245, 245, 0) !important; }
.card-header, .card-footer, .card-body { opacity: 1}
</style>
<!-- 
<div class="row" id="customerInfoDiet" style="display: "> 
            <div class="col-md-12" align="center"> -->
            <div class="text-left">
                <button class="btn btn-dark" href="javascript:void(0)" onclick="closeNav()">BACK</button>
            </div>
            <div id="customerInfoDiet" style="display: ">     
                <div class="card rounded-0 shadow bg-white rounded">
                    <div class="card-body text-white">
                        <div id="testDiet" align="center">
                            <div class="row">
                            <div class="container"></div><div class="container"> 
                                <form role="form" action="" method="post">
                                    <div id="errorDisplay" style="display: none">
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <strong id="errorMessage"></strong>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-1">
                                        <div class="col-md-12">
                                            
                                            <h3> Step 1</h3>
                                            <div class="form-group">
                                                <div id="infoPartOne" class="col-md-12" align="center">
                                                    <h2>CHOOSE YOUR GENDER</h2>
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
                                                    <h2>PHYSICAL ACTIVITY</h2>
                                                    <div class="pb-3"></div>
                                                    <button class="btn btn-outline-light nextBtn" type="button" ng-click="physicalActivity('ALMOST NO PHYSICAL ACTIVITY')">ALMOST NO PHYSICAL ACTIVITY</button><br><div class="pb-2"></div>
                                                    <button class="btn btn-outline-light nextBtn" type="button"  ng-click="physicalActivity('I OFTEN GO FOR A WALK')">I OFTEN GO FOR A WALK</button><br><div class="pb-2"></div>
                                                    <button class="btn btn-outline-light nextBtn" type="button"  ng-click="physicalActivity('I EXERCISE 1 - 2 A WEEK')">I EXERCISE 1 - 2 A WEEK</button><br><div class="pb-2"></div>
                                                    <button class="btn btn-outline-light nextBtn" type="button" ng-click="physicalActivity('I EXERCISE 3 - 5 TIMES A WEEK')">I EXERCISE 3 - 5 TIMES A WEEK</button><br><div class="pb-2"></div>
                                                    <button class="btn btn-outline-light nextBtn" type="button" ng-click="physicalActivity('I EXERCISE 5 - 7 TIMES A WEEK')">I EXERCISE 5 - 7 TIMES A WEEK</button><br><div class="pb-2"></div>
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
                                                <h2>PLEASE SELECT WHICH MEAT YOU WOULD LIKE TO INCLUDE</h2>
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
                                                <button class="btn btn-outline-light nextBtn" type="button"  ng-click="chosenFoodMeat()">CONTINUE</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-4">
                                        <div class="col-md-12">
                                            <h3> Step 4</h3>
                                            <div id="infoPartFour" class="col-md-12" align="center">
                                                <h2>PLEASE SELECT WHICH VEGGIES YOU WOULD LIKE TO INCLUDE</h2>
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
                                                <button class="btn btn-outline-light nextBtn" type="button"  ng-click="chosenFoodVeggie()">CONTINUE</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-5">
                                        <div class="col-md-12">
                                            <h3> Step 5</h3>
                                            <div id="infoPartFive" class="col-md-12" align="center">
                                                <h2>PLEASE SELECT WHICH PRODUCTS YOU WOULD LIKE TO INCLUDE</h2>
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
                                                <button class="btn btn-outline-light nextBtn" type="button"  ng-click="chosenFoodProduct()">CONTINUE</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-6">
                                        <div class="col-md-12">
                                            <h3> Step 6</h3>
                                            <div id="infoPartSix" class="col-md-12">
                                                <h2>DESCRIBE A TYPICAL DAY FOR YOU</h2>
                                                <div class="pb-3"></div>
                                                <button class="btn btn-outline-light nextBtn" type="button" ng-click="typicalDay('AT THE OFFICE')">AT THE OFFICE</button><br><div class="pb-2"></div>
                                                <button class="btn btn-outline-light nextBtn" type="button" ng-click="typicalDay('AT THE OFFICE, BUT I GO OUT ON A REGULAR BASIS')">AT THE OFFICE, BUT I GO OUT ON A REGULAR BASIS</button><br><div class="pb-2"></div>
                                                <button class="btn btn-outline-light nextBtn" type="button" ng-click="typicalDay('I SPEND THE BETTER PART OF THE DAY ON FOOT')">I SPEND THE BETTER PART OF THE DAY ON FOOT</button><br><div class="pb-2"></div>
                                                <button class="btn btn-outline-light nextBtn" type="button" ng-click="typicalDay('MANUAL LABOR')">MANUAL LABOR</button><br><div class="pb-2"></div>
                                                <button class="btn btn-outline-light nextBtn" type="button" ng-click="typicalDay('I MOSTLY STAY AT HOME')">I MOSTLY STAY AT HOME</button><br><div class="pb-2"></div>
                                                <button class="btn btn-primary prevBtn " type="button">Previous</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-7">
                                        <div class="col-md-12">
                                            <h3> Step 7</h3>
                                            <div id="infoPartSeven" class="col-md-6" align="center">
                                                <h2>WHICH OF THE FOLLOWING IS TRUE FOR YOU ?</h2>
                                                
                                                    <input type="checkbox" name="isTrue" id="isTruecb1" value="I MOSTLY STAY AT HOME"/>
                                                    <label id="labelId" for="isTruecb1">
                                                        <div style="border-radius: 25px;">I MOSTLY STAY AT HOME</div>
                                                    </label>

                                                    <input type="checkbox" name="isTrue" id="isTruecb2" value="I DO NOT GET ENOUGH SLEEP"/>
                                                    <label id="labelId" for="isTruecb2">
                                                        <div style="border-radius: 25px;">I DO NOT GET ENOUGH SLEEP</div>
                                                    </label>

                                                    <input type="checkbox" name="isTrue" id="isTruecb3" value="I EAT LATE AT NIGHT"/>
                                                    <label id="labelId" for="isTruecb3">
                                                        <div style="border-radius: 25px;">I EAT LATE AT NIGHT</div>
                                                    </label>

                                                    <input type="checkbox" name="isTrue" id="isTruecb4" value="I CONSUME A LOT OF SALT"/>
                                                    <label id="labelId" for="isTruecb4">
                                                        <div style="border-radius: 25px;">I CONSUME A LOT OF SALT</div>
                                                    </label>

                                                    <input type="checkbox" name="isTrue" id="isTruecb5" value="I CANNOT GIVE UP EATING SWEETS"/>
                                                    <label id="labelId" for="isTruecb5">
                                                        <div style="border-radius: 25px;">I CANNOT GIVE UP EATING SWEETS</div>
                                                    </label>

                                                    <input type="checkbox" name="isTrue" id="isTruecb6" value="I LOVE SOFTDRINKS"/>
                                                    <label id="labelId" for="isTruecb6">
                                                        <div style="border-radius: 25px;">I LOVE SOFTDRINKS</div>
                                                    </label>

                                                    <input type="checkbox" name="isTrue" id="isTruecb7" value="NONE OF THE ABOVE"/>
                                                    <label id="labelId" for="isTruecb7">
                                                        <div style="border-radius: 25px;">NONE OF THE ABOVE</div>
                                                    </label>
                                                <br>
                                                <button class="btn btn-primary prevBtn " type="button">Previous</button>
                                                <button class="btn btn-outline-light nextBtn" type="button"  ng-click="isTrue()">CONTINUE</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row setup-content" id="step-8">
                                        <div class="col-md-12">
                                            <h3> Step 8</h3>
                                            <div id="infoPartEight" class="col-md-12">
                                                <h2>PROCESSING YOUR DATA TO DEVELOP YOUR DIET PLAN</h2>
                                                <div class="graph-container">
                                                    <svg id="my-svg" width="250px" height="250px"></svg>
                                                    <span class="percent-text">100%</span>
                                                </div> 
                                                <br><div class="pb-2"></div>
                                                <button class="btn btn-primary prevBtn btn-lg" type="button">Previous</button>
                                                <button class="btn btn-outline-light nextBtn" type="button" ng-click="goToPayment('NUTRITION','2000')">CONTINUE</button>
                                                <div class="pb-5"></div>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                                <div class="stepwizard col-md-offset-3" align="center">
                                    <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step">
                                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                        <!-- <p>Step 1</p> -->
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                        <!-- <p>Step 2</p> -->
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                        <!-- <p>Step 3</p> -->
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                        <!-- <p>Step 4</p> -->
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                        <!-- <p>Step 5</p> -->
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                                        <!-- <p>Step 6</p> -->
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>
                                        <!-- <p>Step 7</p> -->
                                        </div>
                                        <div class="stepwizard-step">
                                        <a href="#step-8" type="button" class="btn btn-default btn-circle" disabled="disabled">8</a>
                                        <!-- <p>Step 8</p> -->
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        <!-- </div>   
    </div> -->