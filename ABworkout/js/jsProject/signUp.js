var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope,$http) {

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
        $("#initialFormCustomerInfo").css("display", "block");
        $("#FormCustomerInfoAfterConfirmation").css("display", "none");
        $("#customerInfoTitle").text("CUSTOMER INFO FOR " + title + " PACKAGE" + " -> Rs "+ price ); 
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

});