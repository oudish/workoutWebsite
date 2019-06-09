<style>
    #myBtnTop {
  /* display: none; */
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: black;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}
#btnTop{
  /* position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: black;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px; */
  position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    text-align: center;
    background-color: red;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    display: none;
}

#btnTop:hover {
  background-color: #555;
}
</style>


<button  onclick="topFunction()" id="btnTop" title="Go to top" >
        <span style="font-weight:bold;"  class="fa fa-arrow-up" ></span>
</button> 

<div id="myHeader">
    <!-- <div class="headerTab" id='myDIV' style="background-color:black;"> CKA-10/02/19-Added id  -->
       <!-- /*include('searchBar.php')*/  -->
    <!-- </div>  -->

    <div id="MEN" class="headerTabcontent" style="display: block;">
        <div id="headerMEN"><?php include('headerMEN.php') ?></div>
        <div id="sideNavMobileMEN"><?php include('sideNavMobile.php') ?></div>
    </div>
   <!-- <div id="WOMEN" class="headerTabcontent">
         <div id="headerWOMEN">/*include('headerWOMEN.php')*/ ?></div> 
        <div id="sideNavMobileWOMEN">/*include('sideNavMobile.php')*/ ?></div>
    </div> -->
</div>

<script>
    function detectMobileBySizeOfScreen() { 
        if( navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Windows Phone/i)
            ){//mobile
            //alert("mobile");
        }
        else {//computer
            //alert("pc");
        
        }
    }

    detectMobileBySizeOfScreen();

    var screenWidth = window.matchMedia("(max-width: 767px)");
    activateMobileButton(screenWidth); // Call listener function at run time
    screenWidth.addListener(activateMobileButton);

    //activateMobileButton function called from clothingPage.php
    function activateMobileButton(screenWidth) {
        if (screenWidth.matches) { // If media query matches
            if(document.getElementById("MEN").style.display == "block"){
                //alert("men min");
                document.getElementById("sideNavMobileMEN").style = "visibility: visible";
                document.getElementById("headerMEN").style = "visibility: hidden";
            }
            // else if(document.getElementById("WOMEN").style.display == "block"){
            //     //alert("women min");
            //     document.getElementById("sideNavMobileWOMEN").style = "visibility: visible";
            //     document.getElementById("headerWOMEN").style = "visibility: hidden";
            // }
        } 
        else {
            if(document.getElementById("MEN").style.display == "block"){
                //alert("men max");
                document.getElementById("headerMEN").style = "visibility: visible";
                document.getElementById("sideNavMobileMEN").style = "visibility: hidden";
            }
            // else if(document.getElementById("WOMEN").style.display == "block"){
            //     //alert("women max");
            //     document.getElementById("headerWOMEN").style = "visibility: visible";
            //     document.getElementById("sideNavMobileWOMEN").style = "visibility: hidden";
            // }	
        }
    }

    //openHeader function is called in searchBar.php
    function openHeader(evt, gender) { 
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("headerTabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        if(document.getElementById(gender).id == "MEN"){
            document.getElementById(gender).style.display = "block";
            if (screenWidth.matches) { // If media query matches
                //alert("men min fix");
                document.getElementById("sideNavMobileMEN").style.visibility = "visible";
                document.getElementById("headerMEN").style.visibility = "hidden";
            }
            else{
                //alert("man max fix");
                document.getElementById("headerMEN").style.visibility = "visible";
                document.getElementById("sideNavMobileMEN").style.visibility = "hidden";
            }
        }
        
        else if(document.getElementById(gender).id == "WOMEN"){
            document.getElementById(gender).style.display = "block";
            if (screenWidth.matches) { // If media query matches
                if(document.getElementById("MEN").style.display == "block"){
                    //alert("men min fix");
                    document.getElementById("sideNavMobileMEN").style.visibility = "visible";
                    document.getElementById("headerMEN").style.visibility = "hidden";
                }
                // else if(document.getElementById("WOMEN").style.display == "block"){
                //     //alert("women min fix");
                //     document.getElementById("sideNavMobileWOMEN").style.visibility = "visible";
                //     document.getElementById("headerWOMEN").style.visibility = "hidden";
                // }
            } 
            else {
                if(document.getElementById("MEN").style.display == "block"){
                    //alert("men max fix");
                    document.getElementById("headerMEN").style.visibility = "visible";
                    document.getElementById("sideNavMobileMEN").style.visibility = "hidden";
                }
                // else if(document.getElementById("WOMEN").style.display == "block"){
                //     //alert("women max fix");
                //     document.getElementById("headerWOMEN").style.visibility = "visible";
                //     document.getElementById("sideNavMobileWOMEN").style.visibility = "hidden";
                // }	
            }
        }
        evt.currentTarget.className += " active";
    }

    // // CKA-10/02/19--Add active class to the current button (highlight it)
    // var header = document.getElementById("myDIV");
    // var btns = header.getElementsByClassName("btn");
    // var count = btns.length;
    // for (var i = 0; i < count; i++) {
    //     btns[i].addEventListener("click", function() {
    //         var current = document.getElementsByClassName("active");
    //         current[0].className = current[0].className.replace(" active", "");
    //         this.className += " active";
    //     });
    // }

    // When the user scrolls down 40px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
        
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        document.getElementById("btnTop").style.display = "block";
        } 
        // else if (window.pageYOffset > sticky) {
        //     header.classList.add("sticky");
        // } 
        else if(document.body.scrollTop < 200 || document.documentElement.scrollTop < 200)  {
        document.getElementById("btnTop").style.display = "none";
        }
        // else {
        //     header.classList.remove("sticky");
        // }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }


  
    // window.onscroll = function() {myFunction()};

    // var header = document.getElementById("myHeader");
    // var sticky = header.offsetTop;

    // function myFunction() {
    // if (window.pageYOffset > sticky) {
    // header.classList.add("sticky");
    // } else {
    // header.classList.remove("sticky");
    // }
    // }
    

</script>