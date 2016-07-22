<?php 
function check_user_agent ( $type = NULL ) {
        $user_agent = strtolower ( $_SERVER['HTTP_USER_AGENT'] );
        if ( $type == 'bot' ) {
                // matches popular bots
                if ( preg_match ( "/googlebot|adsbot|yahooseeker|yahoobot|msnbot|watchmouse|pingdom\.com|feedfetcher-google/", $user_agent ) ) {
                        return true;
                        // watchmouse|pingdom\.com are "uptime services"
                }
        } else if ( $type == 'browser' ) {
                // matches core browser types
                if ( preg_match ( "/mozilla\/|opera\//", $user_agent ) ) {
                        return true;
                }
        } else if ( $type == 'mobile' ) {
                // matches popular mobile devices that have small screens and/or touch inputs
                // mobile devices have regional trends; some of these will have varying popularity in Europe, Asia, and America
                // detailed demographics are unknown, and South America, the Pacific Islands, and Africa trends might not be represented, here
                if ( preg_match ( "/phone|iphone|itouch|ipod|symbian|android|htc_|htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|nintendo/", $user_agent ) ) {
                        // these are the most common
                        return true;
                } else if ( preg_match ( "/mobile|pda;|avantgo|eudoraweb|minimo|netfront|brew|teleca|lg;|lge |wap;| wap /", $user_agent ) ) {
                        // these are less common, and might not be worth checking
                        return true;
                }
        }
        return false;
}

$ismobile = check_user_agent('mobile');
$siteName = 'Cash 101';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo (isset($PAGE[$page_name]['page_title'])) ? $PAGE[$page_name]['page_title'] : $PAGE['default']['page_title'] ;?></title>
    <meta name="description" content="<?php echo (isset($PAGE[$page_name]['meta_desc'])) ? $PAGE[$page_name]['meta_desc'] : $PAGE['default']['meta_desc']; ?>" >
    <link href="inc/base.css" rel="stylesheet" type="text/css" />
    
    <link href="inc/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="inc/12667/brand.css" rel="stylesheet" type="text/css" />
    <link href="inc/styles.css" rel="stylesheet" type="text/css" />
    <?php
       $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
       $pos_blackberry = strrpos($ua, "blackberry");
       $pos_webkit = strrpos($ua, "webkit");
       $url = "http://optimizedmobile.yoursite.com/";
   ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/datetime.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/pikaday.js"></script>
    <script type="text/javascript">	
    	$.validator.addMethod("phoneUS", function(phone_number, element) {
			phone_number = phone_number.replace(/\s+/g, "");
			
			return this.optional(element) || phone_number.length > 9 &&
				phone_number.match(/^(\+?1-?)?(\([2-9]([02-9]\d|1[02-9])\)|[2-9]([02-9]\d|1[02-9]))-?[2-9]([02-9]\d|1[02-9])-?\d{4}$/);
			}, "Please specify a valid phone number");
		
        function popup(content){
        	<?php if(!$ismobile): ?>
	        	var content = '<img src="'+ content +'"/>'
	        	var template = '<div class="popup"><a class="close" href="#">X</a><div class="inner"> ' + content + '</div></div>'
				if($('.popup').length < 1){
					$('body').append(template);
		        	var windowH = $(window).height();
					var windowW = $(window).width();
					content = $('.popup');
					content.fadeIn('fast');
				
					content.css({
						left: ((windowW - content.outerWidth())/2),
						top: ((windowH - content.outerHeight())/2)
					});			
				
					$('.popup .close').click(function(){
						$(this).parent().fadeOut('fast', function(){
							$(this).remove();
						});
						return false;
					});
				}
			return false;
			<?php endif; ?>
        }
        
        
        $(document).ready(function() {
        	var currentDate = new Date();
					var currentTime = currentDate.getTime();
	    	
        
        <?php if ($pageName == 'page4' || $pageName == 'page5'): ?>
		var picker = new Pikaday({ 
			field: document.getElementById('next_pay'),
			minDate: currentTime,
			format: 'L'
		});
		
		var picker2 = new Pikaday({
			field: document.getElementById('next_pay2'),
			minDate: currentTime,
			format: 'L'
		});
		<?php endif; ?>
        // Initialize placeholder
        if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
            $('#mainPanel').parallax("center", .15, false);
            $('.prominent').parallax("center", .15, false);
            $('#congratulationsPanel').parallax("center", .15, false);
            $('#infoPanels').parallax("right", .15, true);
            $('.prominent header .icon').parallax("right", .26, true);
        }
        
        $("#emp_status").change(function(){
        	if($(this).val() == 32){
	        	$('.empField').addClass('required');
        	}
        	else{
	        	$('.empField').removeClass('required');
        	}
        });
       
        $('input, textarea').placeholder();

         <?php
    	    if ($pageName=='home' || $pageName=='howItWorks') { ?>
    	    var validator = $("#mainForm").validate({
    	    	errorPlacement: function(error, element) {
    	    		error.appendTo( $(element).parents(".fieldElement").find(".validateIcon") );
    	    	},
    	    	errorElement: "span",
    	    	wrapper: "div",
    	    	
    	    	highlight: function(element, errorClass, validClass) {
    	    	     $(element).addClass(errorClass).removeClass(validClass);
    	    	     $(element).parents(".fieldElement").addClass('error');
    	    	    $(element).parents(".fieldElement").removeClass('valid');
    	    	},
    	    	
    	    	  unhighlight: function(element, errorClass, validClass) {
    	    	    $(element).removeClass(errorClass).addClass(validClass);
    	    	    $(element).parents(".fieldElement").removeClass('error');
    	    	    $(element).parents(".fieldElement").addClass('valid');
    	    	},
    	    	
    	    	
        		
        		submitHandler: function(form) {
					var url = "http://www.thecredithub.com/match/?os=" + $('#optsel').val();
					window.open(url);
					form.submit();
				},
    	    		
    	    	invalidHandler: function(form, validator) {
    	    		var errors = validator.numberOfInvalids();
    	    		if (errors) {
	    	    		
    	    		$("#amtindex").val(0);
    	    			var message = errors == 1
    	    				? "<img src='images/iconErrorLarge.png' alt='errors'/>You missed 1 field. It has been highlighted"
    	    				: "<img src='images/iconErrorLarge.png' alt='errors'/>You missed " + errors + " fields. They have been highlighted";
    	    				
    	    			$(".errors").html(message);
    	    			$(".errors").slideDown("fast");
    	    			$('html').click(function() {
    	    			  $(".errors").slideUp("fast");
    	    			});
    	    			$(".errors").click(function(event){
    	    			    event.stopPropagation();
    	    			});
    	    		}
    	    	},
    	    	
    	    	submitHandler: function(form){
				    form.submit();
				},
    	    	
    	    	rules: {
    	    		fname: {
    	    			required: true,
    	    			minlength: 2
    	    		},
    	    		
    	    		lname: {
    	    			required: true,
    	    			minlength: 2
    	    		},
    	    		
    	    		email: {
    	    			required: true,
    	    			email: true
    	    	    },
    	    	    
    	    	    zip: {
    	    	    	required: true,
    	    	    	minlength: 5,
    	    	    	digits: true
    	    	    },
    	    		
    	    		ssn: {
    	    			required: true,
    	    	    },
    	    	}
    	    });
				$("#amtindex").change(function() {
					$("#mainForm").submit();
				});
    	    <?php }
            if ($pageName=='page5') { ?>
    	    var validator = $("#page5Form").validate({
    	    	errorPlacement: function(error, element) {
    	    		error.appendTo( $(element).parents(".fieldElement").find(".validateIcon") );
    	    	},
    	    	errorElement: "span",
    	    	wrapper: "div",
    	    	
    	    	highlight: function(element, errorClass, validClass) {
    	    	     $(element).addClass(errorClass).removeClass(validClass);
    	    	     $(element).parents(".fieldElement").addClass('error');
    	    	    $(element).parents(".fieldElement").removeClass('valid');
    	    	},
    	    	unhighlight: function(element, errorClass, validClass) {
    	    	    $(element).removeClass(errorClass).addClass(validClass);
    	    	    $(element).parents(".fieldElement").removeClass('error');
    	    	    $(element).parents(".fieldElement").addClass('valid');
    	    	},
    	    	
    	    	submitHandler: function(form) {
					var url = "http://www.thecredithub.com/match/?os=" + $('#optsel').val();
					window.open(url);
					form.submit();
				},
    	    		
    	    	invalidHandler: function(form, validator) {
    	    		var errors = validator.numberOfInvalids();
    	    		if (errors) {
    	    			var message = errors == 1
    	    				? "<i class='fa fa-check-circle'></i>You missed 1 field. It has been highlighted"
    	    				: "<i class='fa fa-check-circle'></i>You missed " + errors + " fields. They have been highlighted";
    	    				
    	    			$(".errors").html(message);
    	    			$(".errors").slideDown("fast");
    	    			$('html').click(function() {
    	    			  $(".errors").slideUp("fast");
    	    			});
    	    			$(".errors").click(function(event){
    	    			    event.stopPropagation();
    	    			});
    	    		}
    	    	},
    	    	
    	    	rules: {
    	    		dobY: {
    	    			required: true,
    	    		},
    	    		email:{
	    	    		required: true,
	    	    		email: true
    	    		},
    	    		ssn: {
    	    			required: true,
    	    			minlength: 4
    	    		},
    	    		
    	    		amt: {
    	    			required: true,
    	    	    },
    	    	    
    	    	    next_pay: {
    	    	    	required: true,
    	    	    },
    	    	    
    	    	    next_pay2: {
    	    	    	required: true,
    	    	    },
    	    	    freq: {
    	    	    	required: true,
    	    	    }
    	    	}
    	    });
    	    
    	    <?php }
    	    if ($pageName=='page2') { ?>
    	    	        $('input, textarea, select').blur(function(){
					    	var valid = $('.validContainer').length;
					    	var fields = $('.required').length;
					    	var completed = (valid/fields) * 100;
					    	$('.completion span').css('width', completed + '%');
					    	if(completed > 100){
					    		$('#congratulationsPanel p').text('Click the "Request Cash Now" button and submit for cash!');
					    	}
					    	else if(completed > 75){
					        	$('#congratulationsPanel p').text('Almost Done, Cash is Waiting!');
					    	}
					    	else{
					        	$('#congratulationsPanel p').html('Complete the form below to <strong>secure your loan.</strong>')
					    	}
					    });
    	                var validator = $("#page2Form").validate({
    	            		errorPlacement: function(error, element) {
    	            			error.appendTo( element.siblings(".validateIcon"));
    	            		},
    	            		errorElement: "span",
    	            		wrapper: "div",
    	            		
    	            		highlight: function(element, errorClass, validClass) {
    	            		     $(element).addClass(errorClass).removeClass(validClass);
    	            		     $(element).parents(".fieldElement").addClass("errorContainer");
    	            		},
    	            		unhighlight: function(element, errorClass, validClass) {
    	            		    $(element).removeClass(errorClass).addClass(validClass);
    	            		    if($(element).parents(".fieldElement").find('.error').length){
									$(element).parents(".fieldElement").removeClass('validContainer');
									$(element).parents(".fieldElement").addClass("errorContainer");
    	            		    }
    	            		    else{
    	            		    	$(element).parents(".fieldElement").removeClass("errorContainer");
									$(element).parents(".fieldElement").addClass('validContainer');
    	            		    }
    	            		    
    	            		    $('.error').focus(function(){
    	            		        var vIcon = $(this).parents('.fieldElement').find('.validateIcon')
    	            		        var position = $(this).position();
    	            		        vIcon.css({
    	            		            display: 'block',
    	            		            left: position.left
    	            		        });
    	            		    });
    	            		    
    	            		    $('.error').blur(function(){
    	            		        var vIcon = $(this).parents('.fieldElement').find('.validateIcon')
    	            		        var position = $(this).position();
    	            		        vIcon.css('display', 'none');
    	            		        
    	            		    });
    	            		},
    	            			
    	            		invalidHandler: function(form, validator) {
			    	    		var errors = validator.numberOfInvalids();
			    	    		if (errors) {
			    	    			var message = errors == 1
			    	    				? "<i class='fa fa-check-circle'></i>You missed 1 field. It has been highlighted"
			    	    				: "<i class='fa fa-check-circle'></i>You missed " + errors + " fields. They have been highlighted";
			    	    				
			    	    			$(".errors").html(message);
			    	    			$(".errors").slideDown("fast");
			    	    			$('html').click(function() {
			    	    			  $(".errors").slideUp("fast");
			    	    			});
			    	    			$(".errors").click(function(event){
			    	    			    event.stopPropagation();
			    	    			});
			    	    		}
			    	    	},
    	            		
    	            		rules: {
    	            			fname: {
    	            				required: true
    	            			},
    	            			
    	            			lname: {
    	            				required: true
    	            			},
    	            			
    	            			address1: {
    	            				required: true
    	            			},
    	            			
    	            			city: {
    	            				required: true,
    	            				minlength: 2
    	            			},
    	            			
    	            			state: {
    	            				required: true
    	            			},
    	            			
    	            			zip: {
    	            				required: true,
    	            				digits: true,
    	            				minlength: 5,
    	            				maxlength: 5,
    	            		    	digits: true
    	            			},
    	            			
    	            			email: {
    	            				required: true,
    	            				email: true
    	            			},
    	            			
    	            			dobM: {
    	            				required: true
    	            			},
    	            			
    	            			dobD: {
    	            				required: true
    	            		    	
    	            			},
    	            			
    	            			dobY: {
    	            				required: true
    	            			},
    	            		
    	            		    
    	            		    phone1: {
    	            		    	required: true,
    	            		    	minlength: 3,
    	            		    	maxlength: 3,
    	            		    	digits: true
    	            		    },
    	            		    phone2: {
    	            		    	required: true,
    	            		    	minlength: 3,
    	            		    	maxlength: 3,
    	            		    	digits: true
    	            		    },
    	            		    phone3: {
    	            		    	required: true,
    	            		    	minlength: 4,
    	            		    	maxlength: 4,
    	            		    	digits: true
    	            		    },
    	            		    
    	            		    
    	            		    mphone1: {
    	            		    	minlength: 3,
    	            		    	maxlength: 3,
    	            		    	digits: true
    	            		    },
    	            		    mphone2: {
    	            		    	minlength: 3,
    	            		    	maxlength: 3,
    	            		    	digits: true
    	            		    },
    	            		    mphone3: {
    	            		    	minlength: 4,
    	            		    	maxlength: 4,
    	            		    	digits: true
    	            		    },
    	            		    
    	            		    
    	            		    ssn1: {
    	            		    	required: true,
    	            		    	digits: true,
    	            		    	minlength: 3,
    	            		    	maxlength: 3,
    	            		    	digits: true
    	            		    },
    	            		    
    	            		    ssn2: {
    	            		    	required: true,
    	            		    	digits: true,
    	            		    	minlength: 2,
    	            		    	maxlength: 2,
    	            		    	digits: true
    	            		    },
    	            		    
    	            		    ssn3: {
    	            		    	required: true,
    	            		    	digits: true,
    	            		    	minlength: 4,
    	            		    	maxlength: 4,
    	            		    	digits: true
    	            		    },
    	            		    
    	            		    license: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    license_state: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    opt1: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    home_lengthM: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    military: {
	    	            		    required: true
    	            		    },
    	            		    employer: {
    	            		    	required: {
							        	depends: function(element) {
							          		return $("#emp_status").val() == 32;
									  	}
							        },
    	            		    	minlength: 2
    	            		    },
    	            		    
    	            		    empph1: {
    	            		    	required: {
							        	depends: function(element) {
							          		return $("#emp_status").val() == 32;
									  	}
							        },
							        minlength: 3,
    	            		    	maxlength: 3,
    	            		    	digits: true
    	            		    },
    	            		    
    	            		    empph2: {
    	            		    	required: {
							        	depends: function(element) {
							          		return $("#emp_status").val() == 32;
									  	}
							        },
							        minlength: 3,
    	            		    	maxlength: 3,
    	            		    	digits: true
    	            		    },
    	            		    
    	            		    empph3: {
    	            		    	required: {
							        	depends: function(element) {
							          		return $("#emp_status").val() == 32;
									  	}
							        },
							        minlength: 4,
    	            		    	maxlength: 4,
    	            		    	digits: true
    	            		    },
    	            		    
    	            		    title: {
    	            		    	required: {
							        	depends: function(element) {
							          		return $("#emp_status").val() == 32;
									  	}
							        },
    	            		    	minlength: 2
    	            		    },
    	            			
    	            			emp_city: {
    	            				required: {
							        	depends: function(element) {
							          		return $("#emp_status").val() == 32;
									  	}
							        },
    	            				minlength: 2
    	            			},
    	            			
    	            			emp_state: {
    	            				required: {
							        	depends: function(element) {
							          		return $("#emp_status").val() == 32;
									  	}
							        }
    	            			},
    	            			
    	            			emp_zip: {
    	            				required: {
							        	depends: function(element) {
							          		return $("#emp_status").val() == 32;
									  	}
							        },
    	            				digits: true,
    	            				minlength: 5,
    	            				maxlength: 5,
    	            		    	digits: true
    	            			},
    	            		    
    	            		    emp_status: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    income: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    pay_period: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    emp_lengthM: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    military: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    next_pay: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    next_pay2: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    dir_dep: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    bank_name: {
	    	            		    required: true
    	            		    },
    	            		    
    	            		    bank_account:{
	    	            		    required: true
    	            		    },
    	            		    
    	            		    bank: {
    	            		    	required: true,
    	            		    	minlength: 2
    	            		    },
    	            		    
    	            		    routing: {
    	            		    	required: true,
    	            		    	minlength: 2
    	            		    },
    	            		    
    	            		    bank_lengthM: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    acct_type: {
    	            		    	required: true
    	            		    },
    	            		    
    	            		    acct: {
    	            		    	required: true,
    	            		    	minlength: 2
    	            		    }
    	            		}
    	            	});
    	        
    	    <?php } ?>
    	    
    	    <?php if ($pageName=='page2 repeat' || $pageName=='page2 repeat repeat-2') { ?>
    	    	var validator = $("#repeat-1-Form").validate({
    	    		errorPlacement: function(error, element) {
    	    			error.appendTo( element.siblings(".validateIcon"));
    	    		},
    	    		errorElement: "span",
    	    		wrapper: "div",
    	    		
    	    		highlight: function(element, errorClass, validClass) {
    	    		     $(element).addClass(errorClass).removeClass(validClass);
    	    		     $(element).parents(".fieldElement").addClass("errorContainer");
    	    		},
    	    		unhighlight: function(element, errorClass, validClass) {
    	    		    $(element).removeClass(errorClass).addClass(validClass);
    	    		    $(element).parents(".fieldElement").removeClass("errorContainer");
    	    		    $('.error').focus(function(){
    	    		        var vIcon = $(this).parents('.fieldElement').find('.validateIcon')
    	    		        var position = $(this).position();
    	    		        vIcon.css({
    	    		            display: 'block',
    	    		            left: position.left
    	    		        });
    	    		    });
    	    		    
    	    		    $('.error').blur(function(){
    	    		        var vIcon = $(this).parents('.fieldElement').find('.validateIcon')
    	    		        var position = $(this).position();
    	    		        vIcon.css('display', 'none');
    	    		        
    	    		    });
    	    		},
    	    			
    	    		invalidHandler: function(form, validator) {
    	    			var errors = validator.numberOfInvalids();
    	    			if (errors) {
    	    				var message = errors == 1
    	    					? "<img src='images/iconError.png' alt='errors'/>You missed 1 field. It has been highlighted"
    	    					: "<img src='images/iconError.png' alt='errors'/>You missed " + errors + " fields. They have been highlighted";
    	    					
    	    				$(".errors").html(message);
    	    				$(".errors").slideDown("fast");
    	    				$('html').click(function() {
    	    				  $(".errors").slideUp("fast");
    	    				});
    	    				$(".errors").click(function(event){
    	    				    event.stopPropagation();
    	    				});
    	    			}
    	    		},
    	    		
    	    		rules: {
    	    			amt: {
    	    				required: true
    	    			},
    	    			
    	    			email: {
    	    				required: true,
    	    				email: true
    	    			},
    	    			
    	    			ssn3: {
    	    				required: true,
    	    				minlength: 4,
    	    				maxlength: 4
    	    			},
    	    			
    	    			dobY: {
    	    				required: true
    	    			},
    	    			
    	    			pay_period: {
    	    				required: true
    	    			},
    	    			
    	    			next_pay: {
    	    				required: true
    	    			},
    	    			
    	    			next_pay2: {
    	    				required: true
    	    			}
    	    		}
    	    	});
    	    	
    	    <?php } ?>
        });

        </script>
    </head>
    <body class="<?php echo $pageName; ?>">
                <div class="wrapper">
                    <?php if($pageName !== 'pop') { ?>
	                    <header id="mainHeader">
	                    	<div class="container-12">
		                        <a href="index.php" class="logo">[SITENAME]</a>
		                        <?php if(!$ismobile): ?>
		                        	<div id="seal">
		                        		<img src="images/ssl_seal_green.png" alt="256 Bit SSL Secure"/>
									</div>
								<?php endif; ?>
	                    	</div>
	                    </header>
	                 <?php } ?>
    