<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <style>
      html {
  scroll-behavior: smooth;
      }
      html,body{font-family:Verdana,sans-serif;font-size:12px;line-height:1.5}html{overflow-x:hidden}
      html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}
      html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}
     .ab-sidebar{height:100%;width:200px;background-color:#fff;position:fixed!important;z-index:1;overflow:auto}
     @media (min-width:993px){.ab-modal-content{width:900px}.ab-hide-large{display:none!important}.ab-sidebar.ab-collapse{display:block!important}}
     @media (max-width:992px){.ab-sidebar.ab-collapse{display:none}.ab-main{margin-left:0!important;margin-right:0!important}.ab-auto{max-width:100%}}
     .ab-bar-block .ab-dropdown-hover,.ab-bar-block .ab-dropdown-click{width:100%}
    .ab-bar-block .ab-dropdown-hover .ab-dropdown-content,.ab-bar-block .ab-dropdown-click .ab-dropdown-content{min-width:100%}
    .ab-bar-block .ab-dropdown-hover .ab-button,.ab-bar-block .ab-dropdown-click .ab-button{width:100%;text-align:left;padding:8px 16px}
    .ab-bar-block .ab-bar-item{width:100%;display:block;padding:8px 16px;text-align:left;border:none;white-space:normal;float:none;outline:0}
    .ab-bar-block.ab-center .ab-bar-item{text-align:center}.ab-block{display:block;width:100%}
    .ab-animate-left{position:relative;animation:animateleft 0.4s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
    .ab-bar .ab-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
    .ab-hide-small{display:none!important}.ab-mobile{display:block;width:100%!important}.ab-bar-item.ab-mobile,.ab-dropdown-hover.ab-mobile,.ab-dropdown-click.ab-mobile{text-align:center}
    /* .ab-dropdown-hover.ab-mobile,.ab-dropdown-hover.ab-mobile .ab-btn,.ab-dropdown-hover.ab-mobile .ab-button,.ab-dropdown-click.ab-mobile,.ab-dropdown-click.ab-mobile .ab-btn,.ab-dropdown-click.ab-mobile .ab-button{width:100%}} */
    .ab-btn,.ab-button{border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
    .ab-btn,.ab-button{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}   
.ab-disabled,.ab-btn:disabled,.ab-button:disabled{cursor:not-allowed;opacity:0.3}.ab-disabled *,:disabled *{pointer-events:none}
.ab-dropdown-hover:hover > .ab-button:first-child,.ab-dropdown-click:hover > .ab-button:first-child{background-color:#ccc;color:#000}
.ab-bar-block .ab-dropdown-hover .ab-button,.ab-bar-block .ab-dropdown-click .ab-button{width:100%;text-align:left;padding:8px 16px}
.ab-bar .ab-button{white-space:normal}
.ab-overlay{position:fixed;display:none;width:100%;height:100%;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.5);z-index:2}
.ab-animate-opacity{animation:opac 0.8s}@keyframes opac{from{opacity:0} to{opacity:1}}
.ab-white,.ab-hover-white:hover{color:#000!important;background-color:#fff!important}
.ab-xlarge{font-size:24px!important}.ab-xxlarge{font-size:36px!important}.ab-xxxlarge{font-size:48px!important}.ab-jumbo{font-size:64px!important}
.ab-container,.ab-panel{padding:0.01em 16px}.ab-panel{margin-top:16px;margin-bottom:16px}
.ab-container:after,.ab-container:before,.ab-panel:after,.ab-panel:before,.ab-row:after,.ab-row:before,.ab-row-padding:after,.ab-row-padding:before,
.ab-cell-row:before,.ab-cell-row:after,.ab-clear:after,.ab-clear:before,.ab-bar:before,.ab-bar:after{content:"";display:table;clear:both}
.ab-tiny{font-size:10px!important}.ab-small{font-size:12px!important}.ab-medium{font-size:15px!important}.ab-large{font-size:18px!important}
a:hover, #btn:hover {
  background-color: rgb(192,192,192);
}
#btn2:active {
  background-color: #3e8e41;
  /* box-shadow: 0 5px #666; */
  transform: translateY(2px);
}
    </style>
     
    </head>
    <body>
      
      <div class="ab-sidebar ab-bar-block ab-animate-left" style="display:none;z-index:5" id="mySidebar">
        <button id="btn" class="ab-bar-item ab-button ab-large" onclick="ab_close()">Close &times;</button>
        <a href="#" class="ab-bar-item ab-button" style="color:black;">Link 1</a>
        <a href="#" class="ab-bar-item ab-button" style="color:black;">Link 2</a>
        <a href="#" class="ab-bar-item ab-button" style="color:black;">Link 3</a>
      </div>
    
      <!-- Page Content -->
      <div class="ab-overlay ab-animate-opacity" onclick="ab_close()" style="cursor:pointer" id="myOverlay"></div>

      <div>
        <button id="btn2" class="ab-button ab-white ab-xlarge" onclick="ab_open()">&#9776;</button>
        <div class="ab-container">
        
        </div>
      </div>
     
    <script>
      function ab_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
      }

      function ab_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
      }
    </script>
    </body>
</html>