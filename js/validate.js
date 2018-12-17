$(document).ready(function() {
	// TODO: Use validateField to validate form fields on the page.

	$("#username").focus(function(){
	$('#1').removeClass("info").addClass("display");
	});
	$("#address").focus(function(){
	$('#3').removeClass("info").addClass("display");
	});
	$("#password").focus(function(){
	$('#2').removeClass("info").addClass("display");
	});
	$("#city").focus(function(){
	$('#4').removeClass("info").addClass("display");
	});
	$("#state").focus(function(){
	$('#5').removeClass("info").addClass("display");
	});
	$("#phone").focus(function(){
	$('#6').removeClass("info").addClass("display");
	});

    
        $("#username").focusout(function(){
  	var user=$(this).val();
	validateUser(user);
	});
    	$("#password").focusout(function(){
	var password=$(this).val();
	validatePassword(password);
	});
	$("#address").focusout(function(){
        var address=$(this).val();
	validateAddress(address);
	});
	$("#city").focusout(function(){
        var city=$(this).val();
	validateCity(city);
	});
	$("#state").focusout(function(){
        var state=$(this).val();
	validateState(state);
	});
	$("#phone").focusout(function(){
        var phone=$(this).val();
	validatePhone(phone);
	});
});

var validateUser = function(user)
{
	//var testUser=/^[a-z0-9][\w.-]{1,50}$/i;
      
	if(!user)
	{
		$("#1").text('Username Required!');
        }
};

var validateAddress = function(address)
{
	if(!address)
	{
		$("#3").text('Address Required!');
	}
}

var validatePassword = function(password)
{
	
	if(!password)
	{
		$("#2").text('Password Required!');
	}
	if(password.length>6)
	{
		$("#2").text('OK');	
	}
	if(password.length<=6 && password.length>=1)
	{
		$("#2").text('Error,Minimum 6 characters required..!');
	}
}

var validateCity = function(city)
{
	if(!city)
	{
		$("#4").text('City Required!');
	}
}

var validateState = function(state)
{
	if(!state)
	{
		$("#5").text('State Required!');
	}
	var states = [
        "AL", "AK", "AZ", "AR", "CA", "CO", "CT", "DE", "FL", "GA",
        "HI", "ID", "IL", "IN", "IA", "KS", "KY", "LA", "ME", "MD",
        "MA", "MI", "MN", "MS", "MO", "MT", "NE", "NV", "NH", "NJ",
        "NM", "NY", "NC", "ND", "OH", "OK", "OR", "PA", "RI", "SC",
        "SD", "TN", "TX", "UT", "VT", "VA", "WA", "WV", "WI", "WY",
        "AS", "DC", "FM", "GU", "MH", "MP", "PR", "PW", "VI"
    ];
    var in_array = $.inArray(state.toUpperCase(), states);
    if(in_array == -1) {
    	$("#5").text('Invalid State code');
    }
    else{
    	$("#5").text('');
    }
}

var validatePhone = function(phone)
{
	if(!phone)
	{
		$("#6").text('Phone Required!');
	}
}

