<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php 
            require('library/bootstrapCss.php');
            // require('library/MDBootstrapCss.php');
        ?>
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.css" rel="stylesheet">

        <style>
        /* Scaffolding */

html,
body {
  width: 100%;
  height: 100%;
}
/* 
body {
  font-family: "lato", sans-serif;
  font-size: 18px;
  font-weight: 400;
  line-height: 1.778;
  color: #222;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 700;
}

a {
  color: #228B22;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
} */


/* Backgrounds */

.bg-holder {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: 50% 50%;
  color: #fff;
}

.bg-holder .content {
  color: #fff;
  text-align: center;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}

h2 {
  font-size: 32px;
  line-height: 1.5;
}

.pic1 {
  background-image: url('image/gainMuscle.jpg');
}

.pic2 {
  background-image: url('https://raw.githubusercontent.com/aentan/Parallax-Scroll/master/demo/img/pic2.jpg');
}

.pic3 {
  background-image: url('https://raw.githubusercontent.com/aentan/Parallax-Scroll/master/demo/img/pic3.jpg');
}

@media (min-width: 768px) {
  .pic1 {
    background-image: url('image/gainMuscle.jpg');
  }
  .pic2 {
    background-image: url('https://raw.githubusercontent.com/aentan/Parallax-Scroll/master/demo/img/pic2_bigger.jpg');
  }
  .pic3 {
    background-image: url('https://raw.githubusercontent.com/aentan/Parallax-Scroll/master/demo/img/pic3_bigger.jpg');
  }
}


/* Content Sections */

section {
  padding: 48px;
}

section .content {
  margin: 0 auto;
  max-width: 640px;
}

.content h2 {
  margin: 0 0 16px;
  font-size: 18px;
}

section p {
  margin: 0;
}

section p + p {
  text-indent: 2em;
}

section + hr {
  border: 0;
  border-top: 1px solid #ccc;
  height: 0;
}

section .gist {
  margin: 24px 0;
}

section .gist .gist-data {
  border-bottom: 0;
}

section .gist-meta {
  display: none;
}

.content code {
  font-family: monospace, serif;
  font-size: 16px;
  color: gray;
  white-space: nowrap;
}


/* Intro */

.intro h1 {
  margin: 0;
  font-size: 48px;
  line-height: 1.5;
}

.intro p {
  margin: 0;
  font-size: 24px;
}

.cta {
  margin-top: 32px;
}

.btn-cta {
  color: #fff;
  font-size: 16px;
  border: 2px solid #fff;
  border-radius: 4px;
  padding: 8px 16px;
  margin: 0 4px;
  text-decoration: none;
}

.btn-cta:hover {
  background-color: white;
  color: #228B22;
  text-decoration: none;
}


/* Footer */

.footer {
  text-align: center;
}

.social {
  margin: 16px;
  list-style: none;
}

.social li {
  display: inline-block;
  margin: 8px;
}</style>
</head>
<body>
    <div class="bg-holder pic1" data-width="1024" data-height="768">
      <div class="content intro">
        <h1>パララックス</h1>
        <p>Parallax-Scroll</p>
        <div class="cta">
          <a href="https://github.com/aentan/Parallax-Scroll/archive/master.zip" class="btn-cta">Download</a>
          <a href="https://github.com/aentan/Parallax-Scroll" class="btn-cta">View on GitHub</a>
        </div>
      </div>
    </div>
    
    <section>
      <div class="content">   
        <p>Parallax-Scroll is a jQuery plugin to create elements with background images that behaves as if their <code>background-attachment</code> property is between <code>scroll</code> and <code>fixed</code>, similar to the parallax scrolling effect you see on Spotify and is loosely based on Peder Andreas Nielsen&rsquo;s <a href="https://github.com/pederan/Parallax-ImageScroll" target="_blank">Parallax ImageScroll</a>.</p>
        <p>It makes clever use of <code>background-position</code> and <code>background-size</code> properties instead of CSS3 tranforms. It runs buttery smooth and retains the rubber-band scroll behavior in Safari. Works great on mobile too.</p>
        <p>Parallax-Scroll is a jQuery plugin to create elements with background images that behaves as if their <code>background-attachment</code> property is between <code>scroll</code> and <code>fixed</code>, similar to the parallax scrolling effect you see on Spotify and is loosely based on Peder Andreas Nielsen&rsquo;s <a href="https://github.com/pederan/Parallax-ImageScroll" target="_blank">Parallax ImageScroll</a>.</p>
        <p>It makes clever use of <code>background-position</code> and <code>background-size</code> properties instead of CSS3 tranforms. It runs buttery smooth and retains the rubber-band scroll behavior in Safari. Works great on mobile too.</p>
      </div>
    </section>
    
    <div class="bg-holder pic2" data-width="1024" data-height="768">
      <div class="content">
        <h2>マークアップ</h2>
        <p>Markup</p>
      </div>
    </div>
    
    <section>
      <div class="content">
        <p>The basic markup consists of content sections placed between background holders. The width and height of the original images must be supplied via data attributes. They are required for the calculation of aspect ratios.</p>
        <script src="https://gist.github.com/aentan/88b746bd3e861519b3ed.js"></script>
        <p>Add background images to the <code>.bg-holder</code> elements with the following styles.</p>
        <script src="https://gist.github.com/aentan/ec919cd0292a141cba08.js"></script>
        <p>The nicest thing about using CSS background images is that by adding media queries we can do responsive image sizes.</p>
        <script src="https://gist.github.com/aentan/e7c42332289d156f1079.js"></script>
      </div>
    </section>
    
    <div class="bg-holder pic3" data-width="1600" data-height="1200">
      <div class="content">
        <h2>イニシャライズとオプション</h2>
        <p>Initialization &amp; Options</p>
      </div>
    </div>
    
    <section>
      <div class="content">
        <p>To initialize the plugin, call the <code>parallaxScroll</code> method on your background elements.</p>
        <script src="https://gist.github.com/aentan/cdfee1f0ee4451cece28.js"></script>
        <p>The plugin accepts one option &ndash; friction. It should be a float value that is more than 0 and less than 1. 0 causes the background to behave as it has <code>background-attachment: scroll</code> (which is useless). 1 (maximum friction) is the same as <code>background-attachment: fixed</code>. A value greater than 1 will cause the background to scroll in reverse!</p>
        <p>Other features available in Pederan&rsquo;s plugin such as <code>holderMinHeight</code> and <code>coverRatio</code> can be achieved purely with CSS and should be. The fallback option to turn off parallax in mobile devices is unnecessary because this plugin works smoothly on mobile devices.</p>
      </div>
    </section>
    
    <hr>
    
    <section>
      <div class="content">
        <h2>Notes</h2>
        <p>Most likely requires a jQuery of lower version than other plugins you use. If in doubt I recommend 1.8.0 or higher.</p>
        <p>The only limitation is that the <code>background-size</code> property is not supported by IE&lt;9 so this plugin would not work on that ancient browser.</p>
        <p>This plugin is loosely based on Peder Andreas Nielsen&rsquo;s <a href="https://github.com/pederan/Parallax-ImageScroll" target="_blank">Parallax ImageScroll</a>. Beautiful tilt-shift photos by <a href="https://www.flickr.com/photos/rolohauck/" target="_blank">rolohauck</a>.</p>
      </div>
    </section>
    
    <hr>
    
    <section class="footer">
      <div class="content">
        <p>Made by <a href="http://aenism.com/" target="_blank">Aen</a>. Code licensed under <a href="https://github.com/aentan/Parallax-Scroll/blob/master/LICENSE" target="_blank">MIT</a>.</p>
        <ul class="social">
          <li><a class="github-button" href="https://github.com/aentan/Parallax-Scroll" data-count-href="/aentan/Parallax-Scroll/stargazers" data-count-api="/repos/aentan/Parallax-Scroll#stargazers_count">Star</a></li>
          <li><a class="github-button" href="https://github.com/aentan/Parallax-Scroll" data-count-href="/aentan/Parallax-Scroll/network" data-count-api="/repos/aentan/Parallax-Scroll#forks_count">Fork</a></li>
          <li><a href="https://twitter.com/share" class="twitter-share-button" data-via="Aen" data-show-count="false">Tweet</a></li>
          <li><a href="https://twitter.com/Aen" class="twitter-follow-button" data-show-count="true">Follow @Aen</a></li>
        </ul>
        <script async defer id="github-bjs" src="https://buttons.github.io/buttons.js"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      </div>
    </section>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-21041420-11', 'auto');
      ga('send', 'pageview');










/*
 *  Parallax-Scroll - v0.2.0
 *  jQuery plugin for background-attachment: scroll with friction, similar to the parallax scrolling effect on Spotify.
 *  http://parallax-scroll.aenism.com
 *
 *  Made by Aen Tan
 *  Under MIT License
 */
$(function(){$(".bg-holder").parallaxScroll({friction:.5,direction:"vertical"})});










/*
 *  Parallax-Scroll - v0.2.0
 *  jQuery plugin for background-attachment: scroll with friction, similar to the parallax scrolling effect on Spotify.
 *  http://parallax-scroll.aenism.com
 *
 *  Made by Aen Tan
 *  Under MIT License
 */
!function(a,b){"function"==typeof define&&define.amd?define(["jquery"],b):b(a.jQuery)}(this,function(a){"use strict";var b,c={friction:.5,direction:"vertical"},d=a(window),e=0;return window.requestAnimationFrame=function(a){var b=(new Date).getTime(),c=Math.max(0,5-(b-e)),d=window.setTimeout(function(){a(b+c)},c);return e=b+c,d},b=function(b,e){return{init:function(){this.$background=a(b),this.settings=a.extend({},c,e),this._initStyles(),this._bindEvents()},_initStyles:function(){this.$background.css({"background-attachment":"scroll"})},_visibleInViewport:function(){var a=d.height(),b=this.$background.get(0).getBoundingClientRect();return b.top<a&&b.bottom>0||b.bottom<=a&&b.top>a},_bindEvents:function(){var a=this;d.on("load scroll resize",function(){a._requestTick()})},_requestTick:function(){var a=this;this.ticking||(this.ticking=!0,requestAnimationFrame(function(){a._updateBgPos()}))},_updateBgPos:function(){if(this._visibleInViewport()){var a=d.width(),b=d.height(),c=this.$background.data("width"),e=this.$background.data("height"),f=c/e,g=this.$background.width(),h=this.$background.height(),i=g/h,j=f>i,k=g/c,l=e*k,m=c*k,n=this.$background.offset().top,o=d.scrollTop(),p=o-n,q=b+l,r=a+m,s=p*(b/q),t=p/b,u=p*(a/r),v=p/a,w=(b-h)/2;w=j?w*t:w;var x=(a-g)/2;x=j?x:x*v;var y,z,A=j?2*this.settings.friction*i:this.settings.friction*i;"horizontal"===this.settings.direction?(y=j?a+"px auto":"auto "+b+"px",z=x-u*A+"px 50%"):(y=j?"auto "+b+"px":a+"px auto",z="50% "+(s*A-w)+"px"),this.$background.css({"background-size":y,"background-position":z})}this.ticking=!1}}},b.defaults=c,a.fn.parallaxScroll=function(a){return this.each(function(){new b(this,a).init()})},b});
    </script>
</body>
</html>