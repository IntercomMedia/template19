<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>MoneyPrime.com</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
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
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
    </head>
    
    
        <body class="loadingPage">
				<div class="seal">
					<object width="150" height="60" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0">
						<param name="movie" value="/img-p/seal-wt.swf">
						<param name="quality" value="high">
						<param name="wmode" value="transparent">
						<embed width="150" height="60" src="/img-p/seal-wt.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent">
					</object>
				</div>
			</div>
            <div style="text-align: center;padding: 20px; overflow: hidden;color:#fff">
                    <h2 style="color:#fff;">Please wait while we search our cash provider network...</h2>
					<div class="inner">
						<div id="percentBar" style="height: 60px; width: 100%; max-width: 400px; background: rgba(255,255,255,.4); margin: 20px auto; position: relative;">
							<p id="percentText" style="position: absolute;
					width: 100%;
					text-align: center;
					line-height: 60px;
					font-size: 2.307em;
					z-index: 900; color: #fff;margin: 0;"></p>
							<div id="progressBar" style="width: 0; height: 60px; background: rgba(0,0,0,.5); position: absolute; top: 0;"></div>
						</div>
						<p>This process can take several minutes</p>
					</div>
            </div>
         
         
         
        <script type="text/javascript">
        
        function timeDown(percentBar, startime){
        	var time = startime * 60 * 100;
        	startime = time;
        	var progressBar = document.getElementById(percentBar);
        	
        	
        	var countDown = window.setInterval(loseTime, 10);
        	
        	function loseTime(){
        		time = time -1;
        		displayTime();
        		displayPercentage();
        	}
        	
        	function displayTime(){
        		var minutes = Math.floor(time / 6000);
        		var seconds = Math.floor((time - minutes * 6000) / 100);
        		var milseconds = time - (minutes * 6000) - (seconds * 100);
        		
        		minutes = trailingZero(minutes);
        		seconds = trailingZero(seconds);
        		milseconds = trailingZero(milseconds);
        		document.getElementById('percentText').innerHTML = (minutes + ':' + seconds + ':' + milseconds)
        	}
        	
        	function displayPercentage(){
        		percentNum = (startime-time)/time;
        		percentNum = Math.floor(percentNum *1000) / 100;
        		progressBar.style.width = percentNum + '%';
        	}
        	
        	function trailingZero(myNum){
        		if(myNum < 10){
        			myNum = '0' + myNum;
        		}
        		return myNum;
        	};
        	
        }
        
        timeDown('progressBar', 5);
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
    </script>
    </body>