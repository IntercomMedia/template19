jQuery.validator.addMethod('payPeriod1' function(val, el, params){

		var npd1Arr= val.split('-');
		
		var today=new Date(new Date().toDateString());
		var nextPD1=new Date(npd1Arr[0], npd1Arr[1] - 1, npd1Arr[2]);

		var maxDays = $(params[0]).val();
		switch (minDays) {
			case '2':
				maxDays=6;
				break;
			case '4':
				maxDays=13;
				break;
			case '8':
				maxDays=28;
				break;
			case '16':
				maxDays=13;
				break;
		}
		
		params[0] = maxDays;
		var maxMS=maxDays * (1000 * 60 * 60 * 24);

		return nextPD1.getTime() > today.getTime() + maxMS;
}, jQuery.validator.format("Date of 1st payday may not be more than {0} days based on your pay period selection"));

jQuery.validator.addMethod('payPeriod2Min', function(val, el, params){
	
		var npd1Arr= $(params[1]).val().split('-');
		var npd2Arr= val.split('-');
		
		var minDays = $(params[0]).val();
		switch (minDays) {
			case '2':
				minDays=6;
				break;
			case '4':
				minDays=13;
				break;
			case '8':
				minDays=28;
				break;
			case '16':
				minDays=13;
				break;
		}
		
		params[0] = minDays;
		
		var today=new Date(new Date().toDateString());
		var nextPD1=new Date(npd1Arr[0], npd1Arr[1] - 1, npd1Arr[2]);
		var nextPD2=new Date(npd2Arr[0], npd2Arr[1] - 1, npd2Arr[2]);

		var minDays = params[0];
		var minMS=minDays * (1000 * 60 * 60 * 24);
		return nextPD2.getTime() < nextPD1.getTime() + minMS;
		
	}, jQuery.validator.format('Date of 2nd payday may not be less than {0} days after date of 1st payday based on your pay period selection'));

jQuery.validator.addMethod('payPeriod2Max', function(val, el, params){
	
		var npd1Arr= $(params[1]).val().split('-');
		var npd2Arr= val.split('-');
		
		var today=new Date(new Date().toDateString());
		var nextPD1=new Date(npd1Arr[0], npd1Arr[1] - 1, npd1Arr[2]);
		var nextPD2=new Date(npd2Arr[0], npd2Arr[1] - 1, npd2Arr[2]);
		
		var maxDays = $(params[0]).val();
		switch (minDays) {
			case '2':
				maxDays=6;
				break;
			case '4':
				maxDays=13;
				break;
			case '8':
				maxDays=28;
				break;
			case '16':
				maxDays=13;
				break;
		}
		
		params[0] = maxDays;
		
		var maxMS=maxDays * (1000 * 60 * 60 * 24);
		return nextPD2.getTime() < nextPD1.getTime() + minMS;
		
	}, jQuery.validator.format('Date of 2nd payday may not be less than {0} days after date of 1st payday based on your pay period selection'));


if (document.formOffer.pay_period.options[document.formOffer.pay_period.selectedIndex].value != '' && document.formOffer.next_pay.options[document.formOffer.next_pay.selectedIndex].value != '' && document.formOffer.next_pay2.options[document.formOffer.next_pay2.selectedIndex].value != '') {
		var npd1Arr=document.formOffer.next_pay.value.split('-');
		var npd2Arr=document.formOffer.next_pay2.value.split('-');

		var today=new Date(new Date().toDateString());
		var nextPD1=new Date(npd1Arr[0], npd1Arr[1] - 1, npd1Arr[2]);
		var nextPD2=new Date(npd2Arr[0], npd2Arr[1] - 1, npd2Arr[2]);

		var minDays;
		var maxDays;
		switch (document.formOffer.pay_period.value) {
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
		var minMS=minDays * (1000 * 60 * 60 * 24);
		var maxMS=maxDays * (1000 * 60 * 60 * 24);

		if (nextPD1.getTime() > today.getTime() + maxMS) {
			lErr[0]=false;
			lErr.push('Date of 1st payday may not be more than ' + maxDays + ' days based on your pay period selection');
		}
		else if (nextPD2.getTime() < nextPD1.getTime() + minMS) {
			lErr[0]=false;
			lErr.push('Date of 2nd payday may not be less than ' + minDays + ' days after date of 1st payday based on your pay period selection');
		}
		else if (nextPD2.getTime() > nextPD1.getTime() + maxMS) {
			lErr[0]=false;
			lErr.push('Date of 2nd payday may not be more than ' + maxDays + ' days after date of 1st payday based on your pay period selection');
		}
	}