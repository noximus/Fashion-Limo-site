<HTML>
<HEAD>
<TITLE>Contact</TITLE>
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
	  <div style="margin-left:7px; margin-top:7px "><table border="0" cellspacing="0" cellpadding="1" bgcolor="#FFFFFF">
  <tr><td valign="top"><table width="187" height="130" border="0" cellspacing="0" cellpadding="0" bgcolor="#DBE5EC">
  <tr>
    <td width="187" valign="top">
	<div style="margin-left:12px; margin-top:7px;margin-bottom:5px;width:166px;" class="gray">
	<strong>Chris Boyadjian - President</strong> <br>
	Tel.: 1-347-728-5609<br> 
	eMail.: <a href="mailto:chris@fashionlimo.com">Chris@FashionLimo.com</a><br>
<strong>Adam Yegoryan - CFO</strong><br>
Tel.: 1-347-728-5917 <br>
eMail.: <a href="mailto:adam@fashionlimo.com">Adam@FashionLimo.com</a><br>
<strong>Allan Babaian - CEO</strong><br>
Tel.: 1-917-647-9052<br>
eMail.: <a href="mailto:allan@fashionlimo.com">Allan@FashionLimo.com</a><br> 
</div>	</td>	
  </tr>
</table>
</td></tr>
</table>
</div>	</td>
    <td width="525" valign="top">
	<div style="height:3px; background-image:url(images/px1.jpg) "><img src="images/spacer.gif"></div>

    <?php if(isset($_POST['submit'])) {
/* PRECONDITION:  the fields [name,  email]
 * from the corresponding contact.html form are passed into this script.
 * POSTCONDITION:  the fields are submitted via the SMTP server to the recipient.
 */
$recipient = "chris@fashionlimo.com, adam@fashionlimo.com, allan@fashionlimo.com";


$client = "From: " . $HTTP_POST_VARS['fName'] . "<" . $HTTP_POST_VARS['eMail'] . ">";

// Concatenate all the fields from the corresponding contact.html form.
$message = "Name: " . $HTTP_POST_VARS['fName'] ." " . $HTTP_POST_VARS['lName'] ."\nPhone Number: ". $HTTP_POST_VARS['phone'] ."\nE-mail: " . $HTTP_POST_VARS['eMail']."\nComments: ". $HTTP_POST_VARS['comments'];

// PHP mail function using the SMTP server 
// first parameter is the recipient, second parameter is the subject, followed by the body message, followed by who the mail is FROM (sender/client email).
mail("$recipient", "Fashion Limo Contact Submission: " . $HTTP_POST_VARS['fName'], "$message", "$client") or die("Error sending e-mail :(  Please try again."); 

echo "<div align=\"center\">
  <p><strong>Thank you for contacting us. We will recieve a reply soon. 
    </strong> </p>
  <p><strong><a href=\"contact.php\" target=\"content\">Go back 
    to main page</a></strong></p>
</div>";
}else{
?>
    <table width="525" height="293" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="169" valign="top">
          <div style="margin-left:15px; margin-top:22px "><img src="images/6txt3.jpg"></div>
          <div style="margin-left:41px; margin-top:6px; line-height:25px">
            <div style="margin-top:0px "><strong>First Name:<br>
          Last Name:<br>
          Phone Number: <br>
          E-Mail:<br>
          Your Message Here:</strong></div>
        </div></td>
        <td width="356" valign="top"><script language="javascript" type="text/javascript" src="contactvalidation.js"></script>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="contact" onSubmit="return validateinfo()">
              <div style="margin-top:38px ">
                <input name="fName" type="text" style="width:309px; height:20px; font-family:tahoma; font-size:11px; border-width:0px; border-style:solid; background-image:url(images/6form1.jpg); background-attachment:fixed; padding:3px; background-repeat:no-repeat  ">
              </div>
              <div style="margin-top:3px ">
                <input name="lName" type="text" style="width:309px; height:20px; font-family:tahoma; font-size:11px; border-width:0px; border-style:solid; background-image:url(images/6form1.jpg); background-attachment:fixed; padding:3px; background-repeat:no-repeat  ">
              </div>
              <div style="margin-top:3px ">
                <input name="phone" type="text" style="width:309px; height:20px; font-family:tahoma; font-size:11px; border-width:0px; border-style:solid; background-image:url(images/6form1.jpg); background-attachment:fixed; padding:3px; background-repeat:no-repeat  ">
              </div>
              <div style="margin-top:3px ">
                <input name="eMail" type="text" style="width:309px; height:20px; font-family:tahoma; font-size:11px; border-width:0px; border-style:solid; background-image:url(images/6form1.jpg); background-attachment:fixed; padding:3px; background-repeat:no-repeat  ">
              </div>
              <div style="margin-top:3px ">
                <textarea name="comments" style="width:309px; height:102px; font-family:tahoma; font-size:11px; border-width:0px; border-style:solid; background-image:url(images/6form2.jpg); background-attachment:fixed; padding:3px; overflow:auto; background-repeat:no-repeat  "></textarea>
              </div>
              <input type="submit" name="submit" value="Submit">
          </form></td>
      </tr>
    </table>
    <?php
}
?></td>
  </tr>
</table>

		</TD>
	</TR>
	<TR>
		<TD WIDTH=727 HEIGHT=82 ALT="" valign="top" background="images/bottom.jpg">
		<div align="center" style="margin-top:20px " class="copy">FasionLimo.com &copy; 2005<img src="images/spacer.gif" width="73" height="1"><a href="index.html"><img src="images/house.jpg" width="11" height="12" border="0"></a><img src="images/spacer.gif" width="22" height="1"><a href="contact.php"><img src="images/mail.jpg" width="13" height="9" border="0"></a><img src="images/spacer.gif" width="240" height="8"><img src="images/spacer.gif" width="200" height="8"><br>
		  <br>
		  <font size="2">Created by <a href="http://www.mediabandits.com" target="_blank"><font color="#FFFFFF">MediaBandits.com</font></a></font>		</div>
		</TD>
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