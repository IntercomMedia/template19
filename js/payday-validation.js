//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// Add validation methods
//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

jQuery.validator.addMethod('payPeriod1', function(val, el, params){
		var npd1Arr= val.split('-');
		if(npd1Arr.length < 3) {
			return false;
		}
		
		var today=new Date(new Date().toDateString());
		var nextPD1=new Date(npd1Arr[0], npd1Arr[1] - 1, npd1Arr[2]);
		var maxDays = params;
							
		if(!maxDays) {
			return false;
		}
		
		var maxMS=maxDays * (1000 * 60 * 60 * 24);
		params = 20;
		
		return nextPD1.getTime() < today.getTime() + maxMS && nextPD1.getTime() > today.getTime();
}, jQuery.validator.format("Date of 1st payday may not be more than {0} days based on your pay period selection"));

jQuery.validator.addMethod('payPeriod2Min', function(val, el, params){
		var firstPay = $('#next_pay').val();
		var npd1Arr= firstPay.split('-');
		var npd2Arr= val.split('-');
		if(npd2Arr.length < 3 || npd1Arr.length < 3) {
			return false;
		}
		
		console.log(npd1Arr);
		
		var minDays = params;
		if(!minDays) {
			return false;
		}
		
		var today=new Date(new Date().toDateString());
		var nextPD1=new Date(npd1Arr[0], npd1Arr[1] - 1, npd1Arr[2]);
		var nextPD2=new Date(npd2Arr[0], npd2Arr[1] - 1, npd2Arr[2]);

		
		minDays = params;
		
		var minMS=minDays * (1000 * 60 * 60 * 24);
		console.log(nextPD2.getTime(), nextPD1.getTime() + minMS);
		return nextPD2.getTime() > nextPD1.getTime() + minMS;
		
}, jQuery.validator.format('Date of 2nd payday may not be less than {0} days after date of 1st payday based on your pay period selection'));
			
jQuery.validator.addMethod('payPeriod2Max', function(val, el, params){

		var firstPay = $('#next_pay').val();
		var npd1Arr= firstPay.split('-');
		var npd2Arr= val.split('-');
		
		if(npd2Arr.length < 3 || npd1Arr.length < 3) {
			return false;
		}
		
		var maxDays = params;
		if(!maxDays) {
			return false;
		}
		
		var today=new Date(new Date().toDateString());
		var nextPD1=new Date(npd1Arr[0], npd1Arr[1] - 1, npd1Arr[2]);
		var nextPD2=new Date(npd2Arr[0], npd2Arr[1] - 1, npd2Arr[2]);
		
		var maxMS=maxDays * (1000 * 60 * 60 * 24);
		return nextPD2.getTime() < nextPD1.getTime() + maxMS;
		
}, jQuery.validator.format('Date of 2nd payday may not be more than {0} days after date of 1st payday based on your pay period selection'));

//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// Validation instantiation
//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

var validator = $("#page4Form").validate({
	errorPlacement: function(error, element) {
		error.appendTo(element.parent().find('.err-message'));
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
	    $(element).parents(".fieldElement").addClass('validContainer');
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
		dobY: {
			required: true,
		},
		
		ssn: {
			required: true,
			minlength: 4
		},
		
		amt: {
		required: true,
	  },
	  
	  'next_pay': {
	  	required: true,
	  },
	  'next_pay2': {
	  	required: true,
	  },
	  freq: {
	  	required: true,
	  }
	}
});
    	    
    	    
//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// Helper Date Functions
//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 

function check_holiday (dt_date) {

	// check simple dates (month/date - no leading zeroes)

	var n_date = dt_date.getDate(),

		n_month = dt_date.getMonth() + 1;

	var s_date1 = n_month + '/' + n_date;

		

	if (   s_date1 == '1/1'   // New Year's Day

		|| s_date1 == '6/14'  // Flag Day

		|| s_date1 == '7/4'   // Independence Day

		|| s_date1 == '11/11' // Veterans Day

		|| s_date1 == '12/25' // Christmas Day

	) return true;

	

	// weekday from beginning of the month (month/num/day)

	var n_wday = dt_date.getDay(),

		n_wnum = Math.floor((n_date - 1) / 7) + 1;

	var s_date2 = n_month + '/' + n_wnum + '/' + n_wday;

	

	if (   s_date2 == '1/3/1'  // Birthday of Martin Luther King, third Monday in January

		|| s_date2 == '2/3/1'  // Washington's Birthday, third Monday in February

		|| s_date2 == '5/3/6'  // Armed Forces Day, third Saturday in May

		|| s_date2 == '9/1/1'  // Labor Day, first Monday in September

		|| s_date2 == '10/2/1' // Columbus Day, second Monday in October

		|| s_date2 == '11/4/4' // Thanksgiving Day, fourth Thursday in November

	) return true;



	// weekday number from end of the month (month/num/day)

	var dt_temp = new Date (dt_date);

	dt_temp.setDate(1);

	dt_temp.setMonth(dt_temp.getMonth() + 1);

	dt_temp.setDate(dt_temp.getDate() - 1);

	n_wnum = Math.floor((dt_temp.getDate() - n_date - 1) / 7) + 1;

	var s_date3 = n_month + '/' + n_wnum + '/' + n_wday;

	

	if (   s_date3 == '5/1/1'  // Memorial Day, last Monday in May

	) return true;



	// misc complex dates

	if (s_date1 == '1/20' && (((dt_date.getFullYear() - 1937) % 4) == 0) 

	// Inauguration Day, January 20th every four years, starting in 1937. 

	) return true;

		

	if (n_month == 11 && n_date >= 2 && n_date < 9 && n_wday == 2

	// Election Day, Tuesday on or after November 2. 

	) return true;

	

	return false;

}


//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// Event Handlers
//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 


// Check payday2 and populate based on valid non weekend/holiday date

function popNextPayday() {
	
	var npd1 = $('#next_pay').val(),
			npd2 = $('#next_pay2').val(),
			npd1Arr= npd1.split('-'),
			npd2Arr= npd2.split('-'),
			nextPD1=new Date(npd1Arr[0], npd1Arr[1] - 1, npd1Arr[2]),
			nextPD2=new Date(npd2Arr[0], npd2Arr[1] - 1, npd2Arr[2]);
	
	//Check if Weekend
	switch(nextPD2.getDay()){
	    case 0: 
	    	console.log("sunday!");
	    	nextPD2.setDate(nextPD2.getDate() + 1); 
			break;
	    case 6: 
	    	console.log("saturday!");
	    	nextPD2.setDate(nextPD2.getDate() + 2); 
	    break;
	}
	
	//Check if Holiday
	if(check_holiday(nextPD2)) {
		// Check if Friday.
		if(nextPD2.getDay() == 5){
		 	console.log("Holiday Friday!");
		  nextPD2.setDate(nextPD2.getDate() - 1); 
		}else{
		  console.log("Holiday Weekday!");
			nextPD2.setDate(nextPD2.getDate() + 1); 
		}
	}
	
	// Edit Date
	var npd2Val = nextPD2.getFullYear() + '-' + (nextPD2.getMonth() + 1) + '-' + (nextPD2.getDate());
	$('#next_pay2').val(npd2Val);
}

// Add rules based off of pay period
function addPayRules(el) {
  var payPeriod = $(el).val();
	var minDays;
	var maxDays;
  	switch (payPeriod) {
		case '2':
				minDays=6;
				maxDays=10;
				break;
			case '4':
				minDays=13;
				maxDays=17;
				break;
			case '8':
				minDays=28;
				maxDays=33;
				break;
			case '16':
				minDays=13;
				maxDays=18;
				break;
	}
	$('#next_pay').rules('add', {payPeriod1: maxDays});
	$('#next_pay2').rules('add', {payPeriod2Min: minDays});
	$('#next_pay2').rules('add', {payPeriod2Max: maxDays});
};



$('#pay_period').on('change', function(){
	addPayRules(this);
});

$('#next_pay, #next_pay2').blur(function(){
	if($('#next_pay2').val() !== ''){
		popNextPayday();
	}
});

addPayRules('#pay_period');