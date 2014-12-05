<HTML>
<HEAD>
<TITLE>Reservations</TITLE>
<meta http-equiv="Content-Style-Type" content="text/css">
<LINK HREF="style.css" TYPE="text/css" REL="stylesheet">
</HEAD>
<BODY BGCOLOR=#1D2D41 LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
<!-- ImageReady Slices (1 - Home.psd - Slices: 03, left, right) -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" background="images/left_px.jpg" style="background-position:top; background-repeat:repeat-x "><img src="images/spacer.gif"></td>
    <td valign="top"><TABLE WIDTH=778 BORDER=0 CELLPADDING=0 CELLSPACING=0 align="center">
	<TR>
		<TD>
			<IMG SRC="images/left.jpg" WIDTH=26 HEIGHT=902 ALT=""></TD>
		<TD WIDTH=727 HEIGHT=902 ALT="" valign="top">
		  <TABLE WIDTH=727 BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
		<TD>
			<IMG SRC="images/spacer.gif" WIDTH=727 HEIGHT=57 ALT=""></TD>
	</TR>
	<TR>
		<TD WIDTH=727 HEIGHT=397 ALT="" valign="top">
		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="727" height="397">
            <param name="movie" value="flash/header.swf">
            <param name="quality" value="high">
            <embed src="flash/header.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="727" height="397"></embed>
		    </object>
		</TD>
	</TR>
	<TR>
		<TD WIDTH=727 HEIGHT=296 ALT="" valign="top" background="images/px.jpg">
		<table width="727" height="296" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="202" valign="top">
	  <div style="margin-left:7px; margin-top:6px ">
        <table border="0" cellspacing="0" cellpadding="1" bgcolor="#FFFFFF">
          <tr>
            <td valign="top"><table width="187" height="130" border="0" cellspacing="0" cellpadding="0" bgcolor="#DBE5EC">
                <tr>
                  <td width="187" valign="top">
                    <div style="margin-left:12px; margin-top:7px; width:166px" class="gray"> Corporate Headquarters <br>
                        <strong>Fashion Limousine Service, Inc. </strong><br>
                Tel: 1-212-543-2222<br>
                Tel: 1-718-706-2441 <br>
                Fax: 1-718-706-2443</div></td>
                </tr>
            </table></td>
          </tr>
        </table>
	    </div>    
	  <div style="margin-left:7px; margin-top:7px ">
	    <table border="0" cellspacing="0" cellpadding="1" bgcolor="#FFFFFF">
          <tr>
            <td valign="top"><table width="187" height="130" border="0" cellspacing="0" cellpadding="0" bgcolor="#DBE5EC">
                <tr>
                  <td width="187" valign="top">
                    <div style="margin-left:12px; margin-top:7px;margin-bottom:5px;width:166px;" class="gray"> <strong>Chris Boyadjian - President</strong> <br>
                Tel.: 1-347-728-5609<br>
                eMail.: <a href="mailto:chris@fashionlimo.com">Chris@FashionLimo.com</a><br>
                <strong>Adam Yegoryan - CFO</strong><br>
                Tel.: 1-347-728-5917 <br>
                eMail.: <a href="mailto:adam@fashionlimo.com">Adam@FashionLimo.com</a><br>
                <strong>Allan Babaian - CEO</strong><br>
                Tel.: 1-917-647-9052<br>
                eMail.: <a href="mailto:allan@fashionlimo.com">Allan@FashionLimo.com</a><br>
                  </div></td>
                </tr>
            </table></td>
          </tr>
        </table>
	    </div></td>
    <td width="525" valign="top">
	<div style="height:3px; background-image:url(images/px1.jpg) "><img src="images/spacer.gif"></div>
	<table width="525" height="293" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top">	<div style=" padding-left:15px; padding-bottom:10px; padding-top:5px;">
	  <?php if(isset($_POST['submit'])) {

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
<b>First Name:</b>	" . $_POST['firstName'] . "<br/>
<b>Last Name:</b> " . $_POST['lastName'] . "<br/>
<b>Middle Initial:</b>	" . $_POST['middleName'] . "<br/>

<b>Organization:</b>	" . $_POST['organization'] . "<br/>

<b>Primary Phone:</b>	" . $_POST['primaryPhone'] . "<br/>
<b>Seconday Phone:</b>	" . $_POST['secondaryPhone'] . "<br/>
<b>FAX:</b>		" . $_POST['fax'] . "<br/>
<b>Email:</b>		" . $_POST['email'] . "<br/>


<b>Pickup Time:<b/>	" . $_POST['pickupMonth'] . " / " . $_POST['pickupDate'] . " / " . $_POST['pickupYear'] . " @ " . $_POST['pickupHour'] . " : " . $_POST['pickupMinutes'] . $_POST['pickupAMPM'] . "<br/>

<b>Flight Type:</b>	" . $_POST['rentalType'] . " for how many hours (if applicable) " . $_POST['rentalHours'] . "<br/>

<b>Flight Info:</b>	" . $_POST['airportSelection'] . " " . $_POST['otherAirport'] . " " . $_POST['flightInfo'] . "<br/>
<b>Pickup Address:</b>	".$_POST['pickupAddress'] . "<br/>
<b>Destination Address:</b>	".$_POST['destinationAddress'] . "<br/>

<b>Vehicle:</b>	" . $_POST['vehicleRequested'] . "<br/>
<b>Comments:</b>	" . $_POST['comments'] . "<br/>
	");

		$message  = "First Name:	" . $_POST['firstName'] . " Last Name:	" . $_POST['lastName'] . "Middle Initial:	" . $_POST['middleName'] . " \n";
		$message .= " \n";
		$message .= "Organization:	" . $_POST['organization'] . " \n";
		$message .= " \n";
		$message .= "Primary Phone:	" . $_POST['primaryPhone'] . "Seconday Phone:	" . $_POST['secondaryPhone'] . " \n";
		$message .= "FAX:		" . $_POST['fax'] . "Email:		" . $_POST['email'] . " \n";
		$message .= " \n";
		$message .= "Pickup Time:	" . $_POST['pickupMonth'] . " / " . $_POST['pickupDate'] . " / " . $_POST['pickupYear'] . " @ " . $_POST['pickupHour'] . " : " . $_POST['pickupMinutes'] . " " . $_POST['pickupAMPM'] . " \n";

		$message .= "Flight Type:	" . $_POST['rentalType'] . " for how many hours (if applicable) " . $_POST['rentalHours'] . " \n";
		$message .= " \n";
		$message .= "Flight Info:	" . $_POST['airportSelection'] . " " . $_POST['otherAirport'] . " \n";
		$message .= "		" . $_POST['flightInfo'] . " \n";
		$message .= " \n";
		$message .= "	Pickup Address	" . $_POST['pickupAddress'] . " \n";
		$message .= "	Destination Address	" . $_POST['destinationAddress'] . " \n";
		$message .= " \n";
		$message .= "Vehicle:	" . $_POST['vehicleRequested'] . " \n";
		$message .= "Comments:	" . $_POST['comments'] . " \n";
		$message .= " \n";

		
		$messagesms = "You have a reservation in your mailbox";

		$recipient = "adam@fashionlimo.com, chris@fashionlimo.com, +1-7187062443@efaxsend.com, allan@fashionlimo.com";
		$recipientsms = "3477285610@page.nextel.com, 3477285609@page.nextel.com";      // CHANGE THIS EMAIL TO REFLECT WHO YOU WANT TO RECEIVE THE RESERVATION ON THEIR CELL
		$sender = "reservations@fashionlimo.com"; // CHANGE THIS EMAIL TO REFLECT WHO YOU WANT THE MAIL TO BE FROM EX. reservation-request@yourdomain.com

		$subject   = "Reservation: " . $_POST['firstName'] . " " . $_POST['primaryPhone'];

		mail($recipient, $subject, $message, "From: $sender");
		mail($recipientsms, $subject, "From $sender");
		}else{
	 ?><script language="javascript" type="text/javascript" src="reservationvalidation.js"></script>
<FORM METHOD="POST" name="reservation" ACTION="<?php echo $_SERVER['PHP_SELF']; ?>" onSubmit="return validateinfo()">
<table border="0" align="center" width="452" cellspacing="0" cellpadding="2">
          <tr>
            <td valign="middle" colspan="3"><font face="tahoma" size="-2"><b>Please provide the following contact information: (<font color="#FF0000">*</font> - Required)</b></font></td>
          </tr>
          <tr>
            <td width="119" valign="middle"><font face="tahoma" size="-2"><b><font color="#FF0000">*</font></b>First Name: <br>
                          <input type="text" name="firstName" size="15">
            </font></td>
            <td width="116" valign="middle"><font face="tahoma" size="-2"><b><font color="#FF0000">*</font></b>Last Name: <br>
                          <input type="text" name="lastName" size="15">
            </font></td>
            <td width="205" valign="middle"><font face="tahoma" size="-2">Middle Initial:<br>
                  <input type="text" name="middleName" size="5" maxlength="1">
            </font></td>
          </tr>
          <tr>
            <td valign="middle" colspan="3"><font face="tahoma" size="-2">Organization:<br>
                  <input type="text" name="organization" size="50">
            </font></td>
          </tr>
          <tr>
            <td valign="middle" colspan="2"><font face="tahoma" size="-2"><b><font color="#FF0000">*</font></b>Primary Phone:<br>
                          <input type="text" name="primaryPhone" size="25">
            </font></td>
            <td valign="middle"><font face="tahoma" size="-2">Secondary Phone:</font> <br>
                          <INPUT TYPE="text" name="secondaryPhone" size="25"></td>
          </tr>
          <tr>
            <td valign="middle" colspan="2"><font face="tahoma" size="-2">FAX:</font> <br>
                <INPUT TYPE="text" name="fax" size="25"></td>
            <td valign="middle"><font face="tahoma" size="-2"><b><font color="#FF0000">*</font></b>E-mail:</font> <br>
                <INPUT TYPE="text" name="email" size="25"></td>
          </tr>
        </table>
        <br>
        <table width="452" border="0" align="center" cellpadding="2" cellspacing="0">
          <tr>
            <td width="156" valign="top"><font face="tahoma" size="-2">Pick-up address:</font></td>
            <td width="292" valign="top"><input type="text" name="pickupAddress" size="45" value="Leave blank if airport pick-up" onFocus="this.value='';" onBlur="if(this.value=='') this.value='(leave blank if airport pick-up)';"></td>
          </tr>
          <tr>
            <td width="156" valign="top"><font face="tahoma" size="-2"><b><font color="#FF0000">*</font></b>Arrival, Departure, or Hourly? </font> </td>
            <td valign="top"><font face="tahoma" size="-2">If hourly, how many hours </font> </td>
          </tr>
          <tr>
            <td valign="top"><font face="tahoma" size="-2">
              <select size="1" name="rentalType">
                <option value="">(select)</option>
                <option value="Arrival">Arrival</option>
                <option value="Departure">Departure</option>
                <option value="Hourly">Hourly</option>
              </select>
            </font></td>
            <td valign="top"><font face="tahoma" size="-2">
              <select size="1" name="rentalHours">
                <option value="">N/A</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="24">24+</option>
              </select>
            </font></td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><font face="tahoma" size="-2"><b><font color="#FF0000">*</font></b>Airport and Flight Information: </font></td>
          </tr>
          <tr>
            <td colspan="2" valign="top">
              <table border="0" align="center" width="100%" cellspacing="0" cellpadding="2">
                <tr>
                  <td valign="top"><font face="tahoma" size="-2">
                    <select size="1" name="airportSelection">
                      <option selected value="">(N/A)</option>
                      <option value="LGA">LGA</option>
                      <option value="JFK">JFK</option>
                      <option value="Newark">Newark</option>
                      <option value="McArthur">McArthur</option>
                      <option value="Teterboro">Teterboro</option>
                      <option value="other">other</option>
                    </select>
                  </font></td>
                  <td valign="bottom"><input type="text" name="otherAirport" size="20" value="Other Airport" onFocus="this.value='';" onBlur="if(this.value=='') this.value='(if other airport)';"></td>
                  <td valign="bottom"><input type="text" name="flightInfo" size="20" value="Flight Information" onFocus="this.value='';" onBlur="if(this.value=='') this.value='(please enter flight information)';"></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td valign="top"><font face="tahoma" size="-2"><b><font color="#FF0000">*</font></b>Destination address:</font></td>
            <td valign="top"><input type="text" name="destinationAddress" size="45"></td>
          </tr>
          <tr>
            <td valign="top"><font face="tahoma" size="-2"><b><font color="#FF0000">*</font></b>Vehicle Requested:</font></td>
            <td valign="top">
              <select size="1" name="vehicleRequested">
                <option value="">(select)</option>
                <option value="Mercedes-Benz S500" selected>Mercedes-Benz S500</option>
                <option value="BMW 745 LI">BMW 745 LI</option>
                <option value="Suburban">Suburban</option>
                <option value="Lincoln Town Car">Lincoln Town Car</option>
                <option value="8 Passenger Stretch Limousine">8 Passenger Stretch Limousine</option>
                <option value="6 Passenger Stretch Limousine">6 Passenger Stretch Limousine</option>
                <option value="10 Passenger Stretch Limousine">10 Passenger Stretch Limousine</option>
                <option value="Cargo Van">Cargo Van</option>
              </select>
              <br>
            </td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><table border="0" align="center" width="452" cellspacing="0" cellpadding="2">
                <tr>
                  <td valign="top"><font face="tahoma" size="-2"><b><font color="#FF0000">*</font></b>Date of Pick-Up:</font></td>
                  <td valign="top">
                    <select size="1" name="pickupMonth">
                      <option value="">(month)</option>
                      <option value="January - 01">January - 01</option>
                      <option value="February - 02">February - 02</option>
                      <option value="March - 03">March - 03</option>
                      <option value="April - 04">April - 04</option>
                      <option value="May - 05">May - 05</option>
                      <option value="June - 06">June - 06</option>
                      <option value="July - 07">July - 07</option>
                      <option value="August - 08">August - 08</option>
                      <option value="September - 09">September - 09</option>
                      <option value="October - 10">October - 10</option>
                      <option value="November - 11">November - 11</option>
                      <option value="December - 12">December - 12</option>
                    </select>
                  </td>
                  <td valign="top">
                    <select size="1" name="pickupDate">
                      <option value="">(date)</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                  </td>
                  <td valign="top">
                    <select size="1" name="pickupYear">
                      <option value="">(year)</option>
                      <option value="2004">2004</option>
                      <option value="2005">2005</option>
                      <option value="2006">2006</option>
                      <option value="2007">2007</option>
                      <option value="2008">2008</option>
                      <option value="2009">2009</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td valign="top"><font face="tahoma" size="-2"><b><font color="#FF0000">*</font></b>Time of Pick-Up:</font></td>
                  <td valign="top">
                    <select size="1" name="pickupHour">
                      <option value="">(hour)</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                  </td>
                  <td valign="top">
                    <select size="1" name="pickupMinutes">
                      <option value="">(minutes)</option>
                      <option value="00">00</option>
                      <option value="15">15</option>
                      <option value="30">30</option>
                      <option value="45">45</option>
                    </select>
                  </td>
                  <td valign="top">
                    <select name="pickupAMPM" size="1" id="select5">
                      <option value="">(am/pm)</option>
                      <option value="AM">AM</option>
                      <option value="PM">PM</option>
                    </select>
                  </td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><font face="tahoma" size="-2">Additional Information or Comments:</font><br>
                          <textarea name="comments" cols="44" rows="4" wrap="VIRTUAL"></textarea>
                          <br></td>
          </tr>
        </table>
        <center>
          <input name="submit" type="submit" value="Send">
          <input type="reset" value="Reset" name="Reset">
        </center>
	    </form>
	  <?php
}
?></div></td>
    
  </tr>
</table>
	
	</td>
  </tr>
</table>

		</TD>
	</TR>
	<TR>
		<TD WIDTH=727 HEIGHT=82 ALT="" valign="top" background="images/bottom.jpg">
		  <div align="center" style="margin-top:20px " class="copy">FashionLimo.com &copy; 2004<img src="images/spacer.gif" width="73" height="1"><a href="index.html"><img src="images/house.jpg" width="11" height="12" border="0"></a><img src="images/spacer.gif" width="22" height="1"><a href="contact.php" target="content"><img src="images/mail.jpg" width="13" height="9" border="0"></a><img src="images/spacer.gif" width="240" height="8"><img src="images/spacer.gif" width="200" height="8"><a href="#" class="copy"><br>
                <br>
                <font size="2">Created by </font></a><font size="2"><a href="http://www.mediabandits.com" target="_blank"><font color="#FFFFFF">MediaBandits.com</font></a></font> </div></TD>
	</TR>
	<TR><TD WIDTH=727 HEIGHT=70 ALT=""><img src="images/spacer.gif"></TD>
	</TR>
</TABLE>
		</TD>
		<TD>
			<IMG SRC="images/right.jpg" WIDTH=25 HEIGHT=902 ALT=""></TD>
	</TR>
</TABLE></td>
    <td width="50%" background="images/right_px.jpg" style="background-position:top; background-repeat:repeat-x "><img src="images/spacer.gif"></td>
  </tr>
</table>

<!-- End ImageReady Slices -->
</BODY>
</HTML>