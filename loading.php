<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>MoneyPrime.com</title>
    <link href="inc/base.css" rel="stylesheet" type="text/css" />
    <link href="inc/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="inc/styles.css" rel="stylesheet" type="text/css" />
    <?php 
    if( strstr($_SERVER['HTTP_USER_AGENT'],'Android') ||
    	strstr($_SERVER['HTTP_USER_AGENT'],'webOS') ||
    	strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') ||
    	strstr($_SERVER['HTTP_USER_AGENT'],'iPod')
    	){?>
    	<link rel="stylesheet" type="text/css" media="all" href="css/mobile.css" /> 
    <?php
    } ?>
    <meta name="viewport" content="width=device-width, initial-scale=.75, maximum-scale=1, user-scalable=no" />
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
    <script type="text/javascript">
    $(document).ready(function() {
        
        function timeDown(percentBar, startime){
        	var time = startime * 60 * 100;
        	startime = time;
        	var progressBar = $(percentBar).children('.progressBar');
        	
        	
        	var countDown = window.setInterval(loseTime, 10);
        	
        	function loseTime(){
        		time = time -1;
        		if(time < 0) {
                    window.clearInterval(countDown);
        		}else {
        		    displayTime();
                    displayPercentage();
        		}
        	}
        	
        	function displayTime(){
        		var minutes = Math.floor(time / 6000);
        		var seconds = Math.floor((time - minutes * 6000) / 100);
        		var milseconds = time - (minutes * 6000) - (seconds * 100);
        		
        		minutes = trailingZero(minutes);
        		seconds = trailingZero(seconds);
        		milseconds = trailingZero(milseconds);
        		$(percentBar).children('p').html(minutes + ':' + seconds + ':' + milseconds)
        	}
        	
        	function displayPercentage(){
        		percentNum = (startime-time)/startime;
        		percentNum = Math.floor(percentNum * 1000) / 10;
        		progressBar.width(percentNum + '%');
        	}
        	
        	function trailingZero(myNum){
        		if(myNum < 10){
        			myNum = '0' + myNum;
        		}
        		return myNum;
        	};
        	
        }
        
        timeDown('#percentBar', 1);
    	/*retina image replacement script */
    	        var root = (typeof exports == 'undefined' ? window : exports);
    	
    	
    	        function RetinaImagePath(path) {
    	            this.path = path;
    	            this.at_2x_path = path.replace(/\.\w+$/, function(match) { return "@2x" + match; });
    	        };
    	        
    	        root.RetinaImagePath = RetinaImagePath;
    	        
    	        RetinaImagePath.confirmed_paths = [];
    	        
    	        RetinaImagePath.prototype.is_external = function() {
    	            return !!(this.path.match(/^https?\:/i) && !this.path.match('//' + document.domain) )
    	        }
    	        
    	        RetinaImagePath.prototype.check_2x_variant = function(callback) {
    	            var http, that = this;
    	            if (this.is_external()) {
    	              return callback(false);
    	        } else if (this.at_2x_path in RetinaImagePath.confirmed_paths) {
    	              return callback(true);
    	        } else {
    	            http = new XMLHttpRequest;
    	            http.open('HEAD', this.at_2x_path);
    	            http.onreadystatechange = function() {
    	                if (http.readyState != 4) {
    	                  return callback(false);
    	                }
    	        
    	                if (http.status >= 200 && http.status <= 399) {
    	                  RetinaImagePath.confirmed_paths.push(that.at_2x_path);
    	                  return callback(true);
    	                } else {
    	                  return callback(false);
    	                }
    	              }
    	              http.send();
    	            }
    	        }
    			
    			
    	        function RetinaImage(el) {
    	            this.el = el;
    	            this.path = new RetinaImagePath(this.el.getAttribute('src'));
    	            var that = this;
    	            this.path.check_2x_variant(function(hasVariant) {
    	              if (hasVariant) that.swap();
    	            });
    	        }
    			
    	        root.RetinaImage = RetinaImage;
    	        
    	        RetinaImage.prototype.swap = function(path) {
    	            if (typeof path == 'undefined') path = this.path.at_2x_path;
    	        
    	            var that = this;
    	            function load() {
    	                if (! that.el.complete) {
    	                setTimeout(load, 5);
    	            } else {
    	                that.el.setAttribute('width', that.el.offsetWidth);
    	                that.el.setAttribute('height', that.el.offsetHeight);
    	                that.el.setAttribute('src', path);
    	            }
    	        }
    	        load();
    	    }
    			
    	    if (root.devicePixelRatio > 1) {
    	        var images = document.getElementsByTagName("img"), retinaImages = [], i, image;
    	        for (i = 0; i < images.length; i++) {
    	        image = images[i];
    	        retinaImages.push(new RetinaImage(image));
    	        }
    	    }
    	 	
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
    <body class="loadingPage loading2 loading">
        <div class="wrapper">
            <header id="mainHeader">
                <a href="index.php" class="logo"></a>
                <?php if(!$ismobile): ?>
	            	<div id="seal">
	            		<img src="images/ssl_seal_green.png" alt="256 Bit SSL Secure"/>
					</div>
				<?php endif; ?>
            </header>
            <div id="mainPanel">
                <div class="container-12">
                    <header class="grid-7">
                        <h1><span>YOUR REQUEST IS <br/>BEINGPROCESSED</span>
                        <span>Please be patient while we obtain your loan approval.</span></h1>
                    </header>
                    <div class="loadingProgress grid-5">
                    	<div class="inner">
	                    	<h2>Please Wait</h2>
	                    	<p>This process can take several minutes</p>
	                    	<div id="percentBar">
	                    		<p></p>
	                    		<div class="progressBar"></div>
	                    	</div>
                    	</div>
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