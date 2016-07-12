function phoneInputHandler(event, next, max) {
	  var key = event.keyCode || event.charCode;
	  var selection = false;
	  var a = [8, 46, 9, 37, 39];
	  if (typeof window.getSelection != "undefined") {
	      selection = window.getSelection().toString();
	  } else if (typeof document.selection != "undefined" && document.selection.type == "Text") {
	      selection = document.selection.createRange().text;
	  }
	  					    
	  //
	  // Jonathan's Additions 
	  // added "key !== 9" in the conditional.
	  //
	  
	  for (i = 48; i < 58; i++) {
			a.push(i);
		}
	
		if (!(a.indexOf(key)>=0) && key !== 8 && key !== 46 && key !== 9 && !selection) {
			event.preventDefault();
		}else if(event.target.value.length > max -1 && key !== 8 && key !== 46 && key !== 9 && !selection) {
	    	$(next).focus();
	    }
	}
	
	
	$('#phone').keydown(function(event){
	  phoneInputHandler(event, '#phone2', 3);
	});
	$('#phone2').keydown(function(event){
	  phoneInputHandler(event, '#phone3', 3);
	});
	$('#phone3').keydown(function(event){
	  phoneInputHandler(event, '#mphone', 4);
	});
	$('#mphone').keydown(function(event){
	  phoneInputHandler(event, '#mphone2', 3);
	});
	$('#mphone2').keydown(function(event){
	  console.log('Trig');
	  phoneInputHandler(event, '#mphone3', 3);
	});
	$('#mphone3').keydown(function(event){
	  console.log('Trig');
	  phoneInputHandler(event, '#email', 4);
	});
	
	$('#ssn1').keydown(function(event){
	  phoneInputHandler(event, '#ssn2', 3);
	});
	$('#ssn2').keydown(function(event){
	  phoneInputHandler(event, '#ssn3', 2);
	});
	$('#ssn3').keydown(function(event){
	  phoneInputHandler(event, '#license', 4);
	});
	
	$('#empph1').keydown(function(event){
	  phoneInputHandler(event, '#empph2', 3);
	});
	$('#empph2').keydown(function(event){
	  phoneInputHandler(event, '#empph3', 3);
	});
	$('#empph3').keydown(function(event){
	  phoneInputHandler(event, '#emp_lengthM', 4);
	});
	
	$("form").bind("keypress", function (e) {
	  if (e.keyCode == 13) {
	      e.preventDefault();
	  }
});

//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
// Google Maps Auto Complete
//- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

var placeSearch, autocomplete;
var input = document.getElementById('address1');
var componentForm = {
	address1: 'short_name',
	city: 'long_name',
	state: 'short_name',
	zip: 'short_name'
};
	
var options = {
  types: ['geocode']
};


function initAutocomplete() {
	autocomplete = new google.maps.places.Autocomplete(input, options);
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}