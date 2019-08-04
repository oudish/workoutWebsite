
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope,$http) {

    
    //$scope.person = {
        // name : "User",
        // phones : [{number: 12345}]
    //};
    //$scope.person.name = "User";
    // $scope.createPhone = function () {

    //     $scope.person.phones.push({
    //         'number' : '111-222'
    //     });

    // };

    $scope.dietInfo = {};

    $scope.signUpOnInit = function(){
        $("#initialFormCustomerInfo").css("display", "none");
        $("#FormCustomerInfoAfterConfirmation").css("display", "none");
    }
    
    $scope.workoutPlusNutritionClick = function(title, price){
        $("#customerInfo").css("display", "block");
        $("#initialFormCustomerInfo").css("display", "block");
        $("#FormCustomerInfoAfterConfirmation").css("display", "none");
        $("#initialFormCustomerInfo").css("display", "block");
        $("#customerInfoTitle").text("CUSTOMER INFO FOR " + title + " PACKAGE" + " -> Rs "+ price ); 
        $('html, body').animate({
            scrollTop: $("#customerInfo").offset().top
        }, 1000);
    }

    $scope.nutritionClick = function(title, price){
        $("#customerInfoDiet").css("display", "block");
        $("#testDiet").css("display", "block");
        $('html, body').animate({
            scrollTop: $("#customerInfoDiet").offset().top
        }, 1000);
    }

    $scope.customerInfoCancel = function(){
        $("#firstName").val("");
        $("#lastName").val("");
        $("#emailAddress").val("");
        $("#emailAddressRetype").val("");

        $("#customerInfo").css("display", "none");
        $('html, body').animate({
            scrollTop: $("#ABpackages").offset().top
        }, 500);
    }

    $scope.customerInfoNext = function(){
        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();
        var emailAddress = $("#emailAddress").val();
        var emailAddressRetype = $("#emailAddressRetype").val();


        $("#fullNameConfirmed").val(firstName + " " + lastName);
        $("#emailAddressConfirmed").val(emailAddress);

        $("#initialFormCustomerInfo").css("display", "none");
        $("#FormCustomerInfoAfterConfirmation").css("display", "block");
    }

    $scope.customerInfoEdit = function(){
        $("#initialFormCustomerInfo").css("display", "block");
        $("#FormCustomerInfoAfterConfirmation").css("display", "none");
    }

    $scope.setTimeoutForAnimation = function(){
        setTimeout(
            function() {
                // $("#infoPartOne").css("display", "none");
                // $("#infoPartTwo").css("display", "block");
                $('html, body').animate({
                    scrollTop: $("#customerInfoDiet").offset().top
                }, 1000);
            }, 250);
    }

    $scope.setTimeoutForAnimationFinal = function(){
        setTimeout(
            function() {
                // $("#infoPartOne").css("display", "none");
                // $("#infoPartTwo").css("display", "block");
                $('html, body').animate({
                    scrollTop: $("#customerInfoDiet").offset().top
                }, 1000);
                updateGraph(100 / 100);
            }, 250);

            var mySvg = document.querySelector('#my-svg');
            var snap = Snap(mySvg);
            var w = mySvg.width.baseVal.value, h = mySvg.height.baseVal.value, cx = w/2, cy = h/2;

            var radius = 100;
            var perimeter = 2 * Math.PI * radius;
            var percent = .67;
            var color = '#007ac1';

            var circle = snap.circle(cx, cy, radius);
            var text = document.querySelector('.percent-text');
            text.style.color = color;

            
            //setTimeout(updateGraph(percent),000);

            function updateGraph(perc) {
                // Reset attributes
                circle.attr({
                    fill: 'none',
                    stroke: color,
                    strokeWidth: '0.5cm',
                    strokeDasharray: '0 ' + perimeter,
                    strokeDashoffset: perimeter * .25
                });
                
                // Animate
                Snap.animate(0, perc, (val) => {
                    circle.attr({
                    strokeDasharray: perimeter * val + ' ' + perimeter * (1 - val)
                    });

                    text.innerHTML = Math.round(val * 100) + '%';
                }, 1500, mina.easeinout)
            }

            // Interaction
            var myForm = document.querySelector("#change-form");
            var myInput = document.querySelector("#num-input");

            myForm.addEventListener('submit', (e) => {
            e.preventDefault();
            var p = parseInt(myInput.value);
            if (isNaN(p) || p < 0 || p > 100) {
                alert("Please enter a valid number between 0 and 100");
            }
            else {
                updateGraph(p / 100);
            }
            });
    }

    $scope.genderBtn = function(gender){
        $scope.dietInfo.gender = gender;
        $scope.setTimeoutForAnimation();
        // $('html, body').animate({
        //     scrollTop: $("#infoPartTwo").offset().top
        // }, 1000);
        // var element = document.getElementById("infoPartOne");
        // element.className = "col-md-12 animated zoomOut";
        
        
    }

    $scope.physicalActivity = function(physicalActivity){
        $scope.dietInfo.physicalActivity = physicalActivity;
        $scope.setTimeoutForAnimation();
        // var element = document.getElementById("infoPartTwo");
        // element.className = "col-md-12 animated zoomOut";
        // setTimeout(
        //     function() {
        //         $("#infoPartTwo").css("display", "none");
        //         $("#infoPartThree").css("display", "block");
        //         $('html, body').animate({
        //             scrollTop: $("#infoPartThree").offset().top
        //         }, 1000);
        //     }, 500);
    }

    $scope.chosenFoodMeat = function(){
        var chosenfoodMeat = [];
        $.each($("input[name='foodMeat']:checked"), function(){            
            chosenfoodMeat.push($(this).val());
        });
        $scope.dietInfo.chosenfoodMeat = chosenfoodMeat;
        $scope.setTimeoutForAnimation();
        //alert(JSON.stringify($scope.dietInfo));
        // var element = document.getElementById("infoPartThree");
        // element.className = "col-md-12 animated zoomOut";
        // setTimeout(
        //     function() {
        //         $("#infoPartThree").css("display", "none");
        //         $("#infoPartFour").css("display", "block");
        //         $('html, body').animate({
        //             scrollTop: $("#infoPartFour").offset().top
        //         }, 1000);
        //     }, 500);
    }

    $scope.chosenFoodVeggie = function(){
        var chosenfoodVeggie = [];
        $.each($("input[name='foodVeggie']:checked"), function(){            
            chosenfoodVeggie.push($(this).val());
        });
        $scope.dietInfo.chosenfoodVeggie = chosenfoodVeggie;
        $scope.setTimeoutForAnimation();
        //alert(JSON.stringify($scope.dietInfo));
        // var element = document.getElementById("infoPartFour");
        // element.className = "col-md-12 animated zoomOut";
        // setTimeout(
        //     function() {
        //         $("#infoPartFour").css("display", "none");
        //         $("#infoPartFive").css("display", "block");
        //         $('html, body').animate({
        //             scrollTop: $("#infoPartFive").offset().top
        //         }, 1000);
        //     }, 500);
    }

    $scope.chosenFoodProduct = function(){
        var chosenfoodProduct = [];
        $.each($("input[name='foodProduct']:checked"), function(){            
            chosenfoodProduct.push($(this).val());
        });
        $scope.dietInfo.chosenfoodProduct = chosenfoodProduct;
        $scope.setTimeoutForAnimation();
        //alert(JSON.stringify($scope.dietInfo));
        // var element = document.getElementById("infoPartFive");
        // element.className = "col-md-12 animated zoomOut";
        // setTimeout(
        //     function() {
        //         $("#infoPartFive").css("display", "none");
        //         $("#infoPartSix").css("display", "block");
        //         $('html, body').animate({
        //             scrollTop: $("#infoPartSix").offset().top
        //         }, 1000);
        //     }, 500);
    }

    $scope.typicalDay = function(typicalDay){
        $scope.dietInfo.typicalDay = typicalDay;
        $scope.setTimeoutForAnimation();
        // var element = document.getElementById("infoPartSix");
        // element.className = "col-md-12 animated zoomOut";
        // setTimeout(
        //     function() {
        //         $("#infoPartSix").css("display", "none");
        //         $("#infoPartSeven").css("display", "block");
        //         $('html, body').animate({
        //             scrollTop: $("#infoPartSeven").offset().top
        //         }, 1000);
        //     }, 500);
    }

    $scope.isTrue = function(){
        var isTrue = [];
        $.each($("input[name='isTrue']:checked"), function(){            
            isTrue.push($(this).val());
        });
        $scope.dietInfo.isTrue = isTrue;

        alert(JSON.stringify($scope.dietInfo));
        $scope.setTimeoutForAnimationFinal();
        
        // var element = document.getElementById("infoPartSeven");
        // element.className = "col-md-12 animated zoomOut";
        // setTimeout(
        //     function() {
        //         $("#infoPartSeven").css("display", "none");
        //         $("#infoPartEight").css("display", "block");
        //         $('html, body').animate({
        //             scrollTop: $("#infoPartEight").offset().top
        //         }, 1000);
        //         updateGraph(100 / 100);
        //     }, 500);

            

           // alert(JSON.stringify($scope.dietInfo));
    }

    $scope.goToPayment = function(title,price){
        $scope.setTimeoutForAnimation();
        // var element = document.getElementById("infoPartEight");
        // element.className = "col-md-12 animated zoomOut";
        // setTimeout(
        //     function() {
        //         $("#infoPartEight").css("display", "none");
        //         $("#customerInfo").css("display", "block");
        //         $("#customerInfoTitle").text("CUSTOMER INFO FOR " + title + " PACKAGE" + " -> Rs "+ price );
        //         $("#initialFormCustomerInfo").css("display", "block"); 
        //         $('html, body').animate({
        //             scrollTop: $("#customerInfo").offset().top
        //         }, 1000);
        //     }, 500);
    }




});

