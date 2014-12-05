<html>
<head>
<title>Reservation Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#000000" text="#FFFFFF"><table border="0" align="center" width="50%" height="100%" cellspacing="0" cellpadding="0"> 
<tr> 
  <td valign="middle"> <div align="center"><font face="tahoma" size="-2"> <b>Thank 
      You</b><br>
      Here is a copy of the information you have submitted. You may wish to print 
      this for your records. </font> </div>
    <hr width="50%" size="1" color="#cccccc"> <pre>

	<?php

	if(!isset($_POST['middleName']) || $_POST['middleName'] == "")
		$_POST['middleName'] = "NA";
		
	if(!isset($_POST['organization']) || $_POST['organization'] == "")
		$_POST['organization'] = "NA";

	if(!isset($_POST['secondaryPhone']) || $_POST['secondaryPhone'] == "")
		$_POST['secondaryPhone'] = "NA";

	if(!isset($_POST['fax']) || $_POST['fax'] == "")
		$_POST['fax'] = "NA";
				
	if(!isset($_POST['otherAirport']))
		$_POST['otherAirport'] = "";
	
	if(!isset($_POST['flightInfo']))
		$_POST['flightInfo'] = "";
	
	if(!isset($_POST['pickupAddress']))
		$_POST['pickupAddress'] = "";

	if(!isset($_POST['comments']) || $_POST['comments'] == "")
		$_POST['comments'] = "NA";
		
	echo("
First Name:	" . $_POST['firstName'] . "
Last Name:	" . $_POST['lastName'] . "
Middle Initial:	" . $_POST['middleName'] . "

Organization:	" . $_POST['organization'] . "

Primary Phone:	" . $_POST['primaryPhone'] . "
Seconday Phone:	" . $_POST['secondaryPhone'] . "
FAX:		" . $_POST['fax'] . "
Email:		" . $_POST['email'] . "

Name on Card:	" . $_POST['nameOnCard'] . "
Payment Type:	" . $_POST['paymentType'] . "
Card Number:	" . $_POST['creditCardNumber'] . "
Expiration:	" . $_POST['expireMonth'] . " / " . $_POST['expireYear'] . "

Pickup Time:	" . $_POST['pickupMonth'] . " / " . $_POST['pickupDate'] . " / " . $_POST['pickupYear'] . " @ " . $_POST['pickupHour'] . " : " . $_POST['pickupMinutes'] . $_POST['pickupAMPM'] . "

Flight Type:	" . $_POST['rentalType'] . " for how many hours (if applicable) " . $_POST['rentalHours'] . "

Flight Info:	" . $_POST['airportSelection'] . " " . $_POST['otherAirport'] . "
		".$_POST['flightInfo'] . "

		".$_POST['pickupAddress'] . "
		".$_POST['destinationAddress'] . "

Vehicle:	" . $_POST['vehicleRequested'] . "
Comments:	" . $_POST['comments'] . "
	");

		$message  = "First Name:	" . $_POST['firstName'] . " \n";
		$message .= "Last Name:	" . $_POST['lastName'] . " \n";
		$message .= "Middle Initial:	" . $_POST['middleName'] . " \n";
		$message .= " \n";
		$message .= "Organization:	" . $_POST['organization'] . " \n";
		$message .= " \n";
		$message .= "Primary Phone:	" . $_POST['primaryPhone'] . " \n";
		$message .= "Seconday Phone:	" . $_POST['secondaryPhone'] . " \n";
		$message .= "FAX:		" . $_POST['fax'] . " \n";
		$message .= "Email:		" . $_POST['email'] . " \n";
		$message .= " \n";
		$message .= "Name on Card:	" . $_POST['nameOnCard'] . " \n";
		$message .= "Payment Type:	" . $_POST['paymentType'] . " \n";
		$message .= "Card Number:	" . $_POST['creditCardNumber'] . " \n";
		$message .= "Expiration:	" . $_POST['expireMonth'] . " / " . $_POST['expireYear'] . " \n";
		$message .= " \n";
		$message .= "Pickup Time:	" . $_POST['pickupMonth'] . " / " . $_POST['pickupDate'] . " / " . $_POST['pickupYear'] . " @ " . $_POST['pickupHour'] . " : " . $_POST['pickupMinutes'] . " " . $_POST['pickupAMPM'] . " \n";
		$message .= " \n";
		$message .= "Flight Type:	" . $_POST['rentalType'] . " for how many hours (if applicable) " . $_POST['rentalHours'] . " \n";
		$message .= " \n";
		$message .= "Flight Info:	" . $_POST['airportSelection'] . " " . $_POST['otherAirport'] . " \n";
		$message .= "		" . $_POST['flightInfo'] . " \n";
		$message .= " \n";
		$message .= "		" . $_POST['pickupAddress'] . " \n";
		$message .= "		" . $_POST['destinationAddress'] . " \n";
		$message .= " \n";
		$message .= "Vehicle:	" . $_POST['vehicleRequested'] . " \n";
		$message .= "Comments:	" . $_POST['comments'] . " \n";
		$message .= " \n";

		$recipient = "baelimo@yahoo.com";         // CHANGE THIS EMAIL TO REFLECT WHO YOU WANT TO RECEIVE THE RESERVATION
		$sender = "reservation@bigappleexecutivelimousine.com"; // CHANGE THIS EMAIL TO REFLECT WHO YOU WANT THE MAIL TO BE FROM EX. reservation-request@yourdomain.com

		$subject   = "Reservation: " . $_POST['firstName'] . " " . $_POST['lastName'] . " @ " . $_POST['email'];

		mail($recipient, $subject, $message, "From: $sender");

	 ?>
	</pre> 
</body>
</html>
