<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>MoneyPrime.com</title>
    
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=.75, maximum-scale=1, user-scalable=no" />
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.activity-indicator-1.0.0.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
	<style>
		
		.loader,
		.loader:before,
		.loader:after {
		  border-radius: 50%;
		}
		.loader:before,
		.loader:after {
		  position: absolute;
		  content: '';
		}
		.loader:before {
		  width: 5.2em;
		  height: 10.2em;
		  background: E3EDF4;
		  border-radius: 10.2em 0 0 10.2em;
		  top: -0.1em;
		  left: -0.1em;
		  -webkit-transform-origin: 5.2em 5.1em;
		  transform-origin: 5.2em 5.1em;
		  -webkit-animation: load2 2s infinite ease 1.5s;
		  animation: load2 2s infinite ease 1.5s;
		}
		.loader {
		  font-size: 11px;
		  text-indent: -99999em;
		  margin: 20px auto;
		  position: relative;
		  width: 10em;
		  height: 10em;
		  box-shadow: inset 0 0 0 1em #85C928;
		  -webkit-transform: translateZ(0);
		  -ms-transform: translateZ(0);
		  transform: translateZ(0);
		}
		.loader:after {
		  width: 5.2em;
		  height: 10.2em;
		  background: #E3EDF4;
		  border-radius: 0 10.2em 10.2em 0;
		  top: -0.1em;
		  left: 5.1em;
		  -webkit-transform-origin: 0px 5.1em;
		  transform-origin: 0px 5.1em;
		  -webkit-animation: load2 2s infinite ease;
		  animation: load2 2s infinite ease;
		}
		@-webkit-keyframes load2 {
		  0% {
		    -webkit-transform: rotate(0deg);
		    transform: rotate(0deg);
		  }
		  100% {
		    -webkit-transform: rotate(360deg);
		    transform: rotate(360deg);
		  }
		}
		@keyframes load2 {
		  0% {
		    -webkit-transform: rotate(0deg);
		    transform: rotate(0deg);
		  }
		  100% {
		    -webkit-transform: rotate(360deg);
		    transform: rotate(360deg);
		  }
		}
	</style>
    </head>
    <body class="loadingPage">
        <div class="wrapper" style="max-width: 960px; margin: 0 auto;">
           <div id="header_loading">
				<div class="seal">
					<object width="150" height="60" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0">
						<param name="movie" value="/img-p/seal-wt.swf">
						<param name="quality" value="high">
						<param name="wmode" value="transparent">
						<embed width="150" height="60" src="/img-p/seal-wt.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent">
					</object>
				</div>
			</div>
        </div>
    </body>