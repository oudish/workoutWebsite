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
        $("#customerInfo").css("display", "block");
        //$("#initialFormCustomerInfo").css("display", "block");
        //$("#FormCustomerInfoAfterConfirmation").css("display", "none");
        $("#testDiet").css("display", "block");
        //$("#customerInfoTitle").text("CUSTOMER INFO FOR " + title + " PACKAGE" + " -> Rs "+ price ); 
        $('html, body').animate({
            scrollTop: $("#customerInfo").offset().top
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

    $scope.genderBtn = function(gender){
        $scope.dietInfo.gender = gender;
        var element = document.getElementById("infoPartOne");
        element.className = "col-md-12 animated zoomOut";
        setTimeout(
            function() {
                $("#infoPartOne").css("display", "none");
                $("#infoPartTwo").css("display", "block");
            }, 500);
    }

    $scope.physicalActivity = function(physicalActivity){
        $scope.dietInfo.physicalActivity = physicalActivity;
        var element = document.getElementById("infoPartTwo");
        element.className = "col-md-12 animated zoomOut";
        setTimeout(
            function() {
                $("#infoPartTwo").css("display", "none");
                $("#infoPartThree").css("display", "block");
            }, 500);
    }

    $scope.chosenFoodMeat = function(){
        var chosenfoodMeat = [];
        $.each($("input[name='foodMeat']:checked"), function(){            
            chosenfoodMeat.push($(this).val());
        });
        $scope.dietInfo.chosenfoodMeat = chosenfoodMeat;
        //alert(JSON.stringify($scope.dietInfo));
        var element = document.getElementById("infoPartThree");
        element.className = "col-md-12 animated zoomOut";
        setTimeout(
            function() {
                $("#infoPartThree").css("display", "none");
                $("#infoPartFour").css("display", "block");
            }, 500);
    }

    $scope.chosenFoodVeggie = function(){
        var chosenfoodVeggie = [];
        $.each($("input[name='foodVeggie']:checked"), function(){            
            chosenfoodVeggie.push($(this).val());
        });
        $scope.dietInfo.chosenfoodVeggie = chosenfoodVeggie;
        //alert(JSON.stringify($scope.dietInfo));
        var element = document.getElementById("infoPartFour");
        element.className = "col-md-12 animated zoomOut";
        setTimeout(
            function() {
                $("#infoPartFour").css("display", "none");
                $("#infoPartFive").css("display", "block");
            }, 500);
    }

    $scope.chosenFoodProduct = function(){
        var chosenfoodProduct = [];
        $.each($("input[name='foodProduct']:checked"), function(){            
            chosenfoodProduct.push($(this).val());
        });
        $scope.dietInfo.chosenfoodProduct = chosenfoodProduct;
        //alert(JSON.stringify($scope.dietInfo));
        var element = document.getElementById("infoPartFive");
        element.className = "col-md-12 animated zoomOut";
        setTimeout(
            function() {
                $("#infoPartFive").css("display", "none");
                $("#infoPartSix").css("display", "block");
            }, 500);
    }

    $scope.typicalDay = function(typicalDay){
        $scope.dietInfo.typicalDay = typicalDay;
        var element = document.getElementById("infoPartSix");
        element.className = "col-md-12 animated zoomOut";
        setTimeout(
            function() {
                $("#infoPartSix").css("display", "none");
                $("#infoPartSeven").css("display", "block");
            }, 500);
    }

    $scope.isTrue = function(){
        var isTrue = [];
        $.each($("input[name='isTrue']:checked"), function(){            
            isTrue.push($(this).val());
        });
        $scope.dietInfo.isTrue = isTrue;
        //alert(JSON.stringify($scope.dietInfo));
        // var element = document.getElementById("infoPartSeven");
        // element.className = "col-md-12 animated zoomOut";
        // setTimeout(
        //     function() {
        //         $("#infoPartSeven").css("display", "none");
        //         $("#infoPartEight").css("display", "block");
        //     }, 500);

            alert(JSON.stringify($scope.dietInfo));
    }




});