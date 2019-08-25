// $(".dropdown-menu li a").click(function(){
//     var selText = $(this).text();
//     $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="caret"></span>');
// });


$(document).ready(function() {
    setTimeout(function() {
        $("#main").removeClass("is-loading");
    }, 100);

    $("#showMoreBtn").click(function(){
        if($("#showMoreBtn").text() == "Show More"){
            $("#showMoreBtn").text("Show Less");
        }
        else{
            $("#showMoreBtn").text("Show More");
        }
    });    
});

$(document).ready(function() {
    $("#signUpBtn").click(function(){
        window.location.href = "signUp.php";
    });
});

$( '.owl-carousel' ).owlCarousel({
    items: 4,
    nav: true,
    dots: true,
    mouseDrag: true,
    responsiveClass: true,
    transitionStyle: "backSlide",
    responsive: {
        0:{
        items: 2
        },
        480:{
        items: 3
        },
        769:{
        items: 4
        }
    }
});

function getWeekButtonId(weekBtnId){
    var splitWeekBtnId = weekBtnId.split("week");
    $("#dayPTag").empty();
    $("#dayPTag").append(splitWeekBtnId[1]);
    $("#dayDiv").show();
}

window.onscroll = function() {myFunction()};

function myFunction() {
var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
var scrolled = (winScroll / height) * 100;
document.getElementById("myBar").style.width = scrolled + "%";
}

$(function(){    
    $('iframe').attr('src', $('iframe').attr('src'));
});

AOS.init();


var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope,$http) {
    $scope.firstName = "John";
    $scope.lastName = "Doe";
    $scope.workoutplan = [];

    $scope.blockIfVideoPresent;
    
    $scope.week1day1 = [];$scope.week1day2 = [];$scope.week1day3 = [];$scope.week1day4 = [];$scope.week1day5 = [];$scope.week1day6 = [];$scope.week1day7 = [];
    $scope.week2day1 = [];$scope.week2day2 = [];$scope.week2day3 = [];$scope.week2day4 = [];$scope.week2day5 = [];$scope.week2day6 = [];$scope.week2day7 = [];
    $scope.week3day1 = [];$scope.week3day2 = [];$scope.week3day3 = [];$scope.week3day4 = [];$scope.week3day5 = [];$scope.week3day6 = [];$scope.week3day7 = [];
    $scope.week4day1 = [];$scope.week4day2 = [];$scope.week4day3 = [];$scope.week4day4 = [];$scope.week4day5 = [];$scope.week4day6 = [];$scope.week4day7 = [];
    $scope.week5day1 = [];$scope.week5day2 = [];$scope.week5day3 = [];$scope.week5day4 = [];$scope.week5day5 = [];$scope.week5day6 = [];$scope.week5day7 = [];
    $scope.week6day1 = [];$scope.week6day2 = [];$scope.week6day3 = [];$scope.week6day4 = [];$scope.week6day5 = [];$scope.week6day6 = [];$scope.week6day7 = [];
    $scope.week7day1 = [];$scope.week7day2 = [];$scope.week7day3 = [];$scope.week7day4 = [];$scope.week7day5 = [];$scope.week7day6 = [];$scope.week7day7 = [];
    $scope.week8day1 = [];$scope.week8day2 = [];$scope.week8day3 = [];$scope.week8day4 = [];$scope.week8day5 = [];$scope.week8day6 = [];$scope.week8day7 = [];
    $scope.week9day1 = [];$scope.week9day2 = [];$scope.week9day3 = [];$scope.week9day4 = [];$scope.week9day5 = [];$scope.week9day6 = [];$scope.week9day7 = [];
    $scope.week10day1 = [];$scope.week10day2 = [];$scope.week10day3 = [];$scope.week10day4 = [];$scope.week10day5 = [];$scope.week10day6 = [];$scope.week10day7 = [];
    $scope.week11day1 = [];$scope.week11day2 = [];$scope.week11day3 = [];$scope.week11day4 = [];$scope.week11day5 = [];$scope.week11day6 = [];$scope.week11day7 = [];
    $scope.week12day1 = [];$scope.week12day2 = [];$scope.week12day3 = [];$scope.week12day4 = [];$scope.week12day5 = [];$scope.week12day6 = [];$scope.week12day7 = [];

    $scope.workoutplan = [];

    $scope.weekNumber = [{idWeek: "week_1", nameWeek: "WEEK 1"},{idWeek: "week_2", nameWeek: "WEEK 2"},{idWeek: "week_3", nameWeek: "WEEK 3"},{idWeek: "week_4", nameWeek: "WEEK 4"},{idWeek: "week_5", nameWeek: "WEEK 5"},{idWeek: "week_6", nameWeek: "WEEK 6"},{idWeek: "week_7", nameWeek: "WEEK 7"},{idWeek: "week_8", nameWeek: "WEEK 8"},{idWeek: "week_9", nameWeek: "WEEK 9"},{idWeek: "week_10", nameWeek: "WEEK 10"},{idWeek: "week_11", nameWeek: "WEEK 11"},{idWeek: "week_12", nameWeek: "WEEK 12"}];

    $scope.borderRed = function(idRed, idFocus){
        if(idRed != "All"){
         document.getElementById(idRed).style.borderColor = "red";
         document.getElementById(idFocus).focus();  
        }
       else{
         document.getElementById("uname1").style.borderColor = "grey"; 
         document.getElementById("pwd1").style.borderColor = "grey"; 
       }
    }
    $scope.submitLoginForm = function(){
        // alert("testin");
        var username = $("#uname1").val();
        var password = $("#pwd1").val();
        var validateEmail = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
        $scope.error0 ="";
        $scope.error1 ="";
        $scope.error2 ="";
        $scope.borderRed("All", "");
        if(username =='' && password ==''){
            $scope.error0 = '* Please enter valid data!';
            $scope.borderRed("uname1","email");
            $scope.borderRed("pwd1","pwd2");
        }
        else if(username =='' ){
            $scope.error1 = '* Please enter your email address.';                  
            $scope.borderRed("uname1","email"); 
        }
        // else if(validateEmail.test(username)){
        //     $scope.error1 = '* Please enter a valid email.';
        //     $scope.borderRed("uname1","email");
        // }
        else if(password == '') {
            $scope.error2 =  '* Please enter your password.';
            $scope.borderRed("pwd1","pwd2");
        }
        else{        
        
        $http.post('modelSql/verifyLoginSql.php',{username: username, password: password}).then(function(response){

            if(response.data.field == "success"){
                window.location.href = "index.php";//must have another index.php page where there is no login, there is button logout,should make it dynamic
            }
            else{
                if(response.data.field == "emailpassword"){                    
                    $scope.error0 = response.data.errMsg;
                    $scope.borderRed("uname1","email");
                    $scope.borderRed("pwd1","pwd2");
                }
                else if(response.data.field == "email"){                
                    $scope.error1 = response.data.errMsg;                  
                    // document.getElementById("email").focus();
                    // document.getElementById("uname1").style.borderColor = "red";
                    $scope.borderRed("uname1","email"); 
                }
                else if(response.data.field == "email2"){                    
                    $scope.error1 = response.data.errMsg;
                    $scope.borderRed("uname1","email");
                }
                else if(response.data.field == "password"){                   
                    $scope.error2 = response.data.errMsg;
                    $scope.borderRed("pwd1","pwd2");
                }
                else if(response.data.field == "fail"){
                    $scope.error2 = response.data.errMsg;
                    $scope.borderRed("uname1", "email");
                    $scope.borderRed("pwd1", "pwd2");
                }

                
            }
        
            //alert(JSON.stringify(response.data));
        });
    }
  
        
    }

    $scope.workoutMenu = function(){
        $('html, body').animate({
            scrollTop: $("#workoutMenuId").offset().top
        }, 750);
    }
    $scope.nutritionMenu = function(){
        $('html, body').animate({
            scrollTop: $("#nutritionMenuId").offset().top
        }, 750);
    }

    $("#gainWeight").click(function(){
        showSignUpButton();
    });
    $("#loseWeight").click(function(){
        showSignUpButton();
    });
    $("#shredding").click(function(){
        showSignUpButton();
    });

    function showSignUpButton(){
        $("#signUpButton").css("display","block");
        $('html, body').animate({
            scrollTop: $("#signUpButton").offset().top
        }, 1000);
    }

    $("#signUpButton").click(function(){
        $(location).attr('href', 'signUp.php');
    });

    $scope.onInitFunction = function(event) {
       
        //alert(JSON.stringify($scope.weekNumber));

        $scope.blockIfVideoPresent ="none";
        // alert("in init func");
        $http.post('modelSql/onInitFunction.php').then(function(response){
            var responseLength = response.data.length;
            //alert(JSON.stringify(response.data));
            for(var i=0;i<responseLength;i++){
                if(response.data[i].plan_week == "1"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week1day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title,video_title:response.data[i].plan_video_title});
                    }
                    else if(response.data[i].plan_day == "2"){
                        $scope.week1day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week1day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week1day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week1day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week1day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week1day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "2"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week2day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week2day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week2day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week2day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week2day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week2day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week2day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "3"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week3day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week3day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week3day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week3day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week3day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week3day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week3day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "4"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week4day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week4day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week4day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week4day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week4day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week4day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week4day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "5"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week5day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week5day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week5day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week5day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week5day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week5day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week5day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "6"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week6day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week6day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week6day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week6day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week6day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week6day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week6day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "7"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week7day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week7day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week7day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week7day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week7day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week7day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week7day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "8"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week8day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week8day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week8day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week8day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week8day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week8day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week8day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "9"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week9day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week9day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week9day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week9day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week9day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week9day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week9day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "10"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week10day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week10day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week10day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week10day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week10day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week10day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week10day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "11"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week11day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week11day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week11day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week11day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week11day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week11day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week11day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }
                else if(response.data[i].plan_week == "12"){
                    if(response.data[i].plan_day == "1"){
                        $scope.week12day1.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "2"){
                        $scope.week12day2.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "3"){
                        $scope.week12day3.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "4"){
                        $scope.week12day4.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "5"){
                        $scope.week12day5.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "6"){
                        $scope.week12day6.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }else if(response.data[i].plan_day == "7"){
                        $scope.week12day7.push({video_url:response.data[i].plan_video_id,video_title:response.data[i].plan_video_title});
                    }
                }  
            }
        });
    };

    $scope.getDayButtonId = function(event, idWeek) {
        var dayBtnId = event.target.id;
        var splitDayBtnId = dayBtnId.split("day");
        var week_id_split = idWeek.split("_");
        var week_id = week_id_split[1];
        $scope.blockIfVideoPresent ="none";

        //alert("day : "+ splitDayBtnId[1] +", "+week_id);
        
        if(week_id == "1"){
            // alert("good");
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week1day1; 
                // if($scope.workoutplan.length > 2){
                //     document.getElementById("showMoreBtn").style.display = "block";
                // }
            }
            else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week1day2;
            }
            else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week1day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week1day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week1day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week1day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week1day7;
            }
            $scope.blockIfVideoPresent ="block";
        }
        
        else if(week_id == "2"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week2day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week2day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week2day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week2day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week2day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week2day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week2day7;
            }
            $scope.blockIfVideoPresent ="block";
        } 
        else if(week_id == "3"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week3day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week3day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week3day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week3day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week3day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week3day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week3day7;
            }
            $scope.blockIfVideoPresent ="block";
        } 
        else if(week_id == "4"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week4day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week4day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week4day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week4day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week4day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week4day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week4day7;
            }
            $scope.blockIfVideoPresent ="block";
        } 
        else if(week_id == "5"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week5day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week5day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week5day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week5day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week5day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week5day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week5day7;
            }
            $scope.blockIfVideoPresent ="block";
        } 
        else if(week_id == "6"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week6day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week6day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week6day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week6day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week6day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week6day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week6day7;
            }
            $scope.blockIfVideoPresent ="block";
        } 
        else if(week_id == "7"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week7day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week7day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week7day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week7day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week7day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week7day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week7day7;
            }
            $scope.blockIfVideoPresent ="block";
        } 
        else if(week_id == "8"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week8day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week8day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week8day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week8day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week8day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week8day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week8day7;
            }
            $scope.blockIfVideoPresent ="block";
        } 
        else if(week_id == "9"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week9day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week9day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week9day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week9day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week9day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week9day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week9day7;
            }
            $scope.blockIfVideoPresent ="block";
        } 
        else if(week_id == "10"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week10day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week10day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week10day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week10day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week10day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week10day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week10day7;
            }
            $scope.blockIfVideoPresent ="block";
        } 
        else if(week_id == "11"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week11day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week11day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week11day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week11day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week11day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week11day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week11day7;
            }
            $scope.blockIfVideoPresent ="block";
        } 
        else if(week_id == "12"){
            if(splitDayBtnId[1] == "1"){
                $scope.workoutplan = $scope.week12day1;
            }else if(splitDayBtnId[1] == "2"){
                $scope.workoutplan = $scope.week12day2;
            }else if(splitDayBtnId[1] == "3"){
                $scope.workoutplan = $scope.week12day3;
            }else if(splitDayBtnId[1] == "4"){
                $scope.workoutplan = $scope.week12day4;
            }else if(splitDayBtnId[1] == "5"){
                $scope.workoutplan = $scope.week12day5;
            }else if(splitDayBtnId[1] == "6"){
                $scope.workoutplan = $scope.week12day6;
            }else if(splitDayBtnId[1] == "7"){
                $scope.workoutplan = $scope.week12day7;
            }
            $scope.blockIfVideoPresent ="block";
        }
    };

    $scope.logout = function(){
        window.location.href = "logout.php";
    }

    
});

       