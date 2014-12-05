// VALIDATION FUNCTIONS FOR THE JOB SUBMISSION FORM: jobsubmit.php
function validateinfo() 
{
	if (document.reservation.firstName.value == "")
	{
		alert("Please enter your First Name.\n");
		document.reservation.firstName.focus();
		return false;
	}
	
	if (!nameIsGood(document.reservation.firstName))
	{
		alert("Please enter a valid First Name.  It should not have numbers or extended characters.\n");
		document.reservation.firstName.focus();
		return false;
	}
	
	if (document.reservation.lastName.value == "")
	{
		alert("Please enter your Last Name.\n");
		document.reservation.lastName.focus();
		return false;
	}

	if (!nameIsGood(document.reservation.lastName))
	{
		alert("Please enter a valid Last Name.  It should not have numbers or extended characters.\n");
		document.reservation.lastName.focus();
		return false;
	}

	if (document.reservation.middleName.value != "")
	{
		if(!nameIsGood(document.reservation.middleName))
		{
			alert("Please enter a valid Middle Initial.  It should not have numbers or extended characters.\n");
			document.reservation.middleName.focus();
			return false;
		}
	}
				
	if(!numberCheck(document.reservation.primaryPhone))
		return false;

	if(!emailCheck(document.reservation.email))
		return false;


	if (document.reservation.pickupMonth.value == "")
	{
		alert("Please select the pick up Month.\n");
		document.reservation.pickupMonth.focus();
		return false;
	}

	if (document.reservation.pickupDate.value == "")
	{
		alert("Please select the pick up Date.\n");
		document.reservation.pickupDate.focus();
		return false;
	}

	if (document.reservation.pickupYear.value == "")
	{
		alert("Please select the pick up Year.\n");
		document.reservation.pickupYear.focus();
		return false;
	}

	if (document.reservation.pickupHour.value == "")
	{
		alert("Please select the pick up Hour.\n");
		document.reservation.pickupHour.focus();
		return false;
	}

	if (document.reservation.pickupMinutes.value == "")
	{
		alert("Please select the pick up Minutes.\n");
		document.reservation.pickupMinutes.focus();		
		return false;
	}

	if (document.reservation.pickupAMPM.value == "")
	{
		alert("Please specify whether the pickup time is AM or FM.\n");
		document.reservation.pickupAMPM.focus();
		return false;
	}

	if (document.reservation.rentalType.value == "")
	{
		alert("Please select whether the rental is for Arrival, Departure or Hourly.\n");
		document.reservation.rentalType.focus();
		return false;
	}
						
	if (document.reservation.rentalType.value == "Hourly" && document.reservation.rentalHours.value == "")
	{
		alert("Since you have selected Hourly rental, please select the number of Hours.\n");
		document.reservation.rentalHours.focus();
		return false;
	}


	if (document.reservation.destinationAddress.value == "")
	{
		alert("Please enter the Destination Address.\n");
		document.reservation.destinationAddress.focus();
		return false;
	}

	if (document.reservation.vehicleRequested.value == "")
	{
		alert("Please select the Vehicle Requested.\n");
		document.reservation.vehicleRequested.focus();
		return false;
	}
	
	if (document.reservation.comments.value == "")
		document.reservation.comments.value = "NA";
}

function isNumber(txtField)
{
	var num_pattern = /^\d+$/;
	if (txtField) 
	{
		var num_pattern_result;
		num_pattern_result = txtField.search(num_pattern);
		if(num_pattern_result < 0)
			return false;
		else
			return true;
	}
	else
		return false;
}

function numberCheck(num)
{
	if (num.value) 
	{
		var phone_pattern = /(\(?\d{3}\)?)?(-| )?\d{3}(-| )?\d{4}/;
		var pattern_result;
		pattern_result = num.value.search(phone_pattern);
		if(pattern_result < 0)
		{
			if(num.name == "primaryPhone")
			{
				alert("The Primary Phone number that you've entered does not seem to be valid, please enter a valid one, including the area code, such as 212-123-4567.\n");
				num.focus();
				return false;
			}
			else if(num.name == "secondaryPhone")
			{
				alert("The Secondary Phone number that you've entered does not seem to be valid, please enter a valid one, including the area code, such as 212-123-4567.\n");
				num.focus();
				return false;
			}
			else
			{
				alert("The Fax number that you've entered does not seem to be valid, please enter a valid one, including the area code, such as 212-123-4567.\n");
				num.focus();
				return false;			
			}
		}
		else
			return true;
	}
	else
	{ // we ask for at least the primary phone
			if(num.name == "primaryPhone")
			{
				alert("Please enter your Primary Phone number, including the area code, such as 212-123-4567.\n");
				num.focus();
				return false;
			}
			else
				return true;
	}
}

function emailCheck(mailaddress)
{
	if(mailaddress.value)
	{
		var email_pattern = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,3}|[0-9]{1,3})(\]?)$/;
		var email_pattern_result;
		email_pattern_result = mailaddress.value.search(email_pattern);
		if(email_pattern_result < 0)
		{
			alert("Your Email Address does not appear to be valid.  Please re-enter in the correct format: such as someone@something.com\n");
			mailaddress.focus();
			return false;
		}
		else 
			return true;
	}
	else
	{
		alert("Please enter your Email Address.\n");
		mailaddress.focus();
		return false;
	}
}	

function nameIsGood(textfield)
{
	if(textfield.value != "")
	{
		var name_pattern = /^[A-Za-z ]+$/;
		var name_pattern_result;
		name_pattern_result = textfield.value.search(name_pattern);
	
		if(name_pattern_result < 0)
			return false;
		else 
			return true;
	}
	else
		return false;
}