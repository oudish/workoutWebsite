<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/previewClothing.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/default-skin/default-skin.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Bitter:400,700,400italic">

	<link rel="stylesheet" type="text/css" href="carousel/css/lightSlider.css">

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
</head>
<body style="overflow-x: hidden;" ng-app="myApp" ng-controller="myCtrl" ng-init="onInit()">
  	<div class="row">
    	<div class="col-sm-6" align='center'>
      		<div class="demo">
			  	<div id="gallery" class="gallery" itemscope itemtype="http://schema.org/ImageGallery">
          			<div class="item">            
            			<div class="clearfix" align="center">
							<ul id='image-gallery' class='gallery list-unstyled cS-hidden' align='center'>
								<li data-thumb="<?php echo $_GET['image1']; ?>"> 
									<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
										<a id="image1ATag" href="<?php echo $_GET['image1']; ?>"  data-width="900" data-height="1200" itemprop="contentUrl">
											<img id="image1ImgTag" src="<?php echo $_GET['image1']; ?>" itemprop="thumbnail" alt="Image description">
										</a>
									</figure>
								</li><!--data-caption="Sunset in the wheat field<br><em class='text-muted'>© Jordan McQueen</em>"-->
								<li data-thumb="<?php echo $_GET['image2']; ?>"> 
									<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
										<a id="image1ATag" href="<?php echo $_GET['image2']; ?>" data-width="900" data-height="1200" itemprop="contentUrl">
											<img id="image1ImgTag" src="<?php echo $_GET['image2']; ?>" itemprop="thumbnail" alt="Image description">
										</a>
									</figure>
								</li>
								<li data-thumb="<?php echo $_GET['image3']; ?>"> 
									<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
										<a id="image1ATag" href="<?php echo $_GET['image3']; ?>" data-width="900" data-height="1200" itemprop="contentUrl">
											<img id="image1ImgTag" src="<?php echo $_GET['image3']; ?>" itemprop="thumbnail" alt="Image description">
										</a>
									</figure>
								</li>
								<li data-thumb="<?php echo $_GET['image4']; ?>"> 
									<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
										<a id="image1ATag" href="<?php echo $_GET['image4']; ?>" data-width="900" data-height="1200" itemprop="contentUrl">
											<img id="image1ImgTag" src="<?php echo $_GET['image4']; ?>" itemprop="thumbnail" alt="Image description">
										</a>
									</figure>
								</li>
								<li data-thumb="<?php echo $_GET['image5']; ?>"> 
									<figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
										<a id="image1ATag" href="<?php echo $_GET['image5']; ?>" data-width="900" data-height="1200" itemprop="contentUrl">
											<img id="image1ImgTag" src="<?php echo $_GET['image5']; ?>" itemprop="thumbnail" alt="Image description">
										</a>
									</figure>
								</li>
            				</ul>
          				</div>
        			</div><!-- end of item -->
      			</div><!-- end of gallery -->
			</div><!--end of demo-->
    	</div><!--end of col-->

		<div class="col-sm-6" align='center'>
			<h4>Name Of Product : <input type="text" value="{{photoDetailsDisplay[0].clothing_name}}" readonly></h4>
            <br>
            <h4>Price Of Product : <input type="text" value="{{photoDetailsDisplay[0].clothing_price}}" readonly></h4>
            <br>
            <h4>Colour Of Product : <input type="text" value="{{photoDetailsDisplay[0].clothing_colour}}" readonly></h4>
            <br>
		</div><!--end of col-->
  	</div><!--end of row-->    
 


<!-- Some spacing 😉 -->
<div class="spacer"></div>


<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <!-- Background of PhotoSwipe. 
           It's a separate element as animating opacity is faster than rgba(). -->
  <div class="pswp__bg"></div>
  <!-- Slides wrapper with overflow:hidden. -->
  <div class="pswp__scroll-wrap">
    <!-- Container that holds slides. 
              PhotoSwipe keeps only 3 of them in the DOM to save memory.
              Don't modify these 3 pswp__item elements, data is added later on. -->
    <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>
    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
    <div class="pswp__ui pswp__ui--hidden">
      <div class="pswp__top-bar">
        <!--  Controls are self-explanatory. Order can be changed. -->
        <div class="pswp__counter"></div>
        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
        <!-- <button class="pswp__button pswp__button--share" title="Share"></button> -->
        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
        <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
        <!-- element will get class pswp__preloader--active when preloader is running -->
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>
      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
      </button>
      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
      </button>
      <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
      </div>
    </div>
  </div>
</div>
       
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script>
    
	<script src="carousel/js/lightSlider.js"></script>

    <script>
        var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope,$http) {
			$scope.onInit = function() {
				var params = new URLSearchParams(window.location.search);  
				var photoId = params.get("id"); 
				$http.post('modelSql/displayPreviewPhotos.php',{photoId: photoId}).then(function(response){
					//var jsonVal = response.data;
					// var clothing_name = jsonVal[0].clothing_name;
					// var image1 = jsonVal[0].clothing_image1;

					// var photos = "<li data-thumb='"+image1+"'><figure itemprop='associatedMedia' itemscope itemtype='http://schema.org/ImageObject'><a id='1' href='"+image1+"' data-caption='"+clothing_name+"' data-width='900' data-height='1200' itemprop='contentUrl'><img src='"+image1+"' itemprop='thumbnail' alt='Image description' class='img-responsive'></a></figure></li>";

					// // $("#image-gallery").append(photos);
					
					$scope.photoDetailsDisplay =response.data;
					
				});
			};
		});

		var container = [];

		// Loop over gallery items and push it to the array
		$('#gallery').find('figure').each(function() {
			var $link = $(this).find('a'),
			item = {
				src: $link.attr('href'),
				w: $link.data('width'),
				h: $link.data('height'),
				title: $link.data('caption')
			};
			container.push(item);
		});

		// Define click event on gallery item
		$('a').click(function(event) {
			// alert("ok");
			// Prevent location change
			event.preventDefault();

			// Define object and gallery options
			var $pswp = $('.pswp')[0],
			options = {
				index: $(this).parent('figure').index(),
				bgOpacity: 0.85,
				showHideOpacity: true
			};

			// Initialize PhotoSwipe
			var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
			gallery.init();
		});

		// 'use strict';

		// /* global jQuery, PhotoSwipe, PhotoSwipeUI_Default, console */

		// (function($) {

		// // Init empty gallery array
		// var container = [];

		// // Loop over gallery items and push it to the array
		// $('#gallery').find('figure').each(function() {
		// 	var $link = $(this).find('a'),
		// 	item = {
		// 		src: $link.attr('href'),
		// 		w: $link.data('width'),
		// 		h: $link.data('height'),
		// 		title: $link.data('caption')
		// 	};
		// 	container.push(item);
		// });

		// // Define click event on gallery item
		// $('a').click(function(event) {
		// 	alert("ok");
		// 	// Prevent location change
		// 	event.preventDefault();

		// 	// Define object and gallery options
		// 	var $pswp = $('.pswp')[0],
		// 	options = {
		// 		index: $(this).parent('figure').index(),
		// 		bgOpacity: 0.85,
		// 		showHideOpacity: true
		// 	};

		// 	// Initialize PhotoSwipe
		// 	var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
		// 	gallery.init();
		// });

		// }(jQuery));
    </script>
	<script>
    	$(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true
            });
            $('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                thumbItem:9,
                slideMargin: 0,
                speed:1000,
                // auto:true,
                loop:true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }  
            });
		});
    </script>
</body>
</html>
