<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>MoneyPrime.com</title>
    
    <link href="css/base.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=.75, maximum-scale=1, user-scalable=no" />
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.activity-indicator-1.0.0.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
    $(document).ready(function() {
        function getInternetExplorerVersion()
        // Returns the version of Internet Explorer or a -1
        // (indicating the use of another browser).
        {
          var rv = -1; // Return value assumes failure.
          if (navigator.appName == 'Microsoft Internet Explorer')
          {
            var ua = navigator.userAgent;
            var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
            if (re.exec(ua) != null)
              rv = parseFloat( RegExp.$1 );
          }
          return rv;
        }
        
        var ieV = getInternetExplorerVersion();
    	 	
    		window.onorientationchange = function(){
    			orientationSwitch();
    		}
    			
    		function orientationSwitch() {
    		  /*window.orientation returns a value that indicates whether iPhone is in portrait mode, landscape mode with the screen turned to the
    		    left, or landscape mode with the screen turned to the right. */
    		  var orientation = window.orientation;
    		  switch(orientation) {
    	    	    case 0:
    	    	        /* If in portrait mode, sets the body's class attribute to portrait. Consequently, all style definitions matching the body[class="portrait"] declaration
    	    	           in the iPhoneOrientation.css file will be selected and used to style "Handling iPhone or iPod touch Orientation Events". */
    	    	        $('body').removeClass("landscape");
    	    	        $('body').addClass("portrait");
    	    	        break; 
    	    	       
    	    	    case 90:
    	    	        /* If in landscape mode with the screen turned to the left, sets the body's class attribute to landscapeLeft. In this case, all style definitions matching the
    	    	           body[class="landscapeLeft"] declaration in the iPhoneOrientation.css file will be selected and used to style "Handling iPhone or iPod touch Orientation Events". */
    	    	        $('body').removeClass("portrait");
    	    	        $('body').addClass("landscape");
    	    	        break;
    	    	   
    	    	    case -90: 
    	    	        /* If in landscape mode with the screen turned to the right, sets the body's class attribute to landscapeRight. Here, all style definitions matching the
    	    	           body[class="landscapeRight"] declaration in the iPhoneOrientation.css file will be selected and used to style "Handling iPhone or iPod touch Orientation Events". */
    	    	        $('body').removeClass("portrait");
    	    	        $('body').addClass("landscape");
    	    	        break;
    	    	    }
    		    } 
    	
    });
    </script>
    </head>
    <body class="loadingPage">
        <div class="wrapper">
            <header id="mainHeader">
                <a href="index.php" class="logo"></a>
                <?php if(!$ismobile): ?>
	            	<div id="seal">
	            		<img src="images/ssl_seal_green.png" alt="256 Bit SSL Secure"/>
					</div>
				<?php endif; ?>
            </header>
            <div id="mainPanel" class="loading2s">
            	<div class="container-12">
            		<header>
                        <h1><span>You are almost there!</span><br/>
                        <span>This process can take a few more minutes.</span></h1>
                        <p>
                        <strong class="btn">Please do not refresh</strong>
                        <strong class="btn">Do not leave or go back</strong>
                        <strong class="btn">Do not close this page!</strong><br/>
                        We appreciate your patience while we obtain your loan approval.</p>
                    </header>
                    <div class="clear-fix"></div>
                    <div class="loading">
	                    <!-- Loader 2 -->

						<svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						  viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
						<circle fill="#8CB848" stroke="#fff" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"/>
						<line fill="none" stroke-linecap="round" stroke="#445059" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
						  <animateTransform 
						       attributeName="transform" 
						       dur="2s"
						       type="rotate"
						       from="0 50 50"
						       to="360 50 50"
						       repeatCount="indefinite" />
						</line>
						<line fill="none" stroke-linecap="round" stroke="#445059" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
						  <animateTransform 
						       attributeName="transform" 
						       dur="15s"
						       type="rotate"
						       from="0 50 50"
						       to="360 50 50"
						       repeatCount="indefinite" />
						</line>
						</svg>            
                    </div>
            	</div>
            </div>
            <div id="featuresPanel">
                <div class="container-12">
                    <div class="feature grid-4 alpha">
                    	<div class="inner">
                        	<i class="fa fa-ban"></i>
							<h2>Do Not</h2><p>Press the Back Button</p>
                    	</div>
                    </div>
                    <div class="feature grid-4 alpha">
                    	<div class="inner">
                    		<i class="fa fa-ban"></i>
                        	<h2>Do Not</h2><p>Close This Window</p>
                    	</div>
                    </div>
                    <div class="feature grid-4 alpha">
                    	<div class="inner">
                        	<i class="fa fa-pencil"></i>
                        	<h2>Sign</h2><p>Your Online Loan Document so ensure Deposit of Funds</p>
                    	</div>
                    </div>
                </div>        
            </div>
        </div>
    </body>