<?php
	error_reporting(0);
	require_once 'classes/class.phpmailer.php';

if(isset($_POST['btnSubmit'])){
	$admin_email = "info@liburnian.com";

	$txtFName		=	$_REQUEST['txtFName'];
	$companyName	=	$_REQUEST['companyName'];
	$txtEmail		=	$_REQUEST['txtEmail'];
	$txtPhone		=	$_REQUEST['txtPhone'];
	$enquiry		=	$_REQUEST['enquiry'];


	$EmailBody = "<table width='755' border='0' align='center' cellpadding='0' cellspacing='0' style='border:0px solid #41ad49;'>
				  <tr>
					<td>
					<table width='100%' border='0' align='center'>
	<td align='center'><img src='images/logo.png'/>
                </td>


				  </tr>
			<tr>
					<td><table width='100%' align='center' border='0' cellspacing='0' cellpadding='0'>
				  <tr>
						<td colspan='2' nowrap='nowrap' style='font-family:Georgia;font-size: 11px;font-style: normal;color: #000000;text-decoration: none;background-color: #c7c7c7;vertical-align:middle;text-align:center;height:30px;'><span  style='font-family: Georgia;font-size: 12px;font-weight: normal;color:#000000;text-decoration: none; ' >New Enquiry from ".$txtFName." through contact us form </span></td>
    			  </tr>
					 </table>
					</td>
				  </tr>
					<td align='left'>
					<table width='100%' cellpadding='0' cellspacing='8' border='0' bgcolor='#ffffff'>
                            <tr style='font-family: Georgia;font-size: 11px;font-style: normal;color:#000;text-decoration: none;vertical-align:middle;text-align:left;height:20px;text-indent:10px;'>
                                <td style='font-weight:bold;' width='200'>Full Name:</td>
                                <td>".$txtFName."</td>
                            </tr>
                                		<tr style='font-family: Georgia;font-size: 11px;font-style: normal;color:#000;text-decoration: none;vertical-align:middle;text-align:left;height:20px;text-indent:10px;'>
                                <td style='font-weight:bold;' width='200'>Company Name:</td>
                                <td>".$companyName."</td>
                            </tr>
                            <tr style='font-family: Georgia;font-size: 11px;font-style: normal;color:#000;text-decoration: none;vertical-align:middle;text-align:left;height:20px;text-indent:10px;'>
                                <td style='font-weight:bold;'>Email Address:</td>
                                <td>".$txtEmail."</td>
                            </tr>
							<tr style='font-family: Georgia;font-size: 11px;font-style: normal;color:#000;text-decoration: none;vertical-align:middle;text-align:left;height:20px;text-indent:10px;'>
                                <td style='font-weight:bold;'>Phone Number:</td>
                                <td>".$txtPhone."</td>
                            </tr>
							<tr style='font-family: Georgia;font-size: 11px;font-style: normal;color:#000;text-decoration: none;vertical-align:middle;text-align:left;height:20px;text-indent:10px;'>
                                <td style='font-weight:bold;'>Enquiry </td>
                                <td>".$enquiry."</td>
                            </tr>


                    </table>
					</td>
				  </tr>
				</table></td>
				  </tr>
				  <tr>
					<td><table width='100%' align='center' border='0' cellspacing='0' cellpadding='0'>
				  <tr>
			<td colspan='2' nowrap='nowrap' style='font-family:Georgia;font-size: 11px;font-style: normal;color: #000000;text-decoration: none;background-color: #c7c7c7;vertical-align:middle;text-align:center;height:30px;'><span  style='font-family: Georgia;font-size: 12px;font-weight: normal;color:#000000;text-decoration: none; '>&nbsp;&nbsp;&nbsp;All rights reserved to <span  style='font-family: Georgia;font-size: 12px;font-weight: bold;color:#000000;text-decoration: none; ' ><a href='#' target='_blank' style='font-family: Georgia;font-weight: bold;color:#000000;text-decoration: none; ' >Liburnian Advisors</a></span></td>
							  </tr>
					 </table>
					</td>
				  </tr>
				</table>";
	$mail = new PHPMailer();
	$mail->AddReplyTo($admin_email,'Liburnian Advisors');
	$mail->WordWrap = 50;                              // set word wrap
	$mail->IsHTML(true);                               // send as HTML
	$mail->From     = $txtEmai;
	$mail->FromName = $txtFName;
	$mail->Subject  = "Contact Us";
	$mail->Body = $EmailBody;
	$mail->AddAddress($admin_email, 'Liburnian Advisors');
	if(!$mail->Send())
	{
		header("Location: contact.php?flag=2");
	}
	else
	{
		header("Location: contact.php?flag=1");
	}


}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LIBUTNIAN ADVISORS</title>
<link rel="stylesheet" type="text/css" href="fontface.css" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu-toggle').click(function(){
		$('#menu ul').slideToggle();
	});
});
</script>

<!-- FOR J Query Validation -->

<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" title="no title" charset="utf-8" />

<script language="javascript" type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="js/cmxforms.js"></script>
<!-- FOR J Query Validation -->

<style type="text/css">
label { width: 10em; z-index:11110; }
label.error {
 width: 212px;
    height: 75px;
    display: none;
    position: absolute;
    background: transparent url(images/tipTop.png) no-repeat top;
		text-indent:15px;
		padding-top:8px;
		color: #B36E12;
		margin-top:-30px;
		margin-bottom:10px;
/*clear:both; float:none; color: red; padding-left:.5em;*/}
p { clear: both; }
.submit { margin-left: 12em; }
em { font-weight: bold; padding-right: 1em; vertical-align: top; }
</style>
<script language="javascript" type="text/javascript">
	$(document).ready(function(){ $("#frmContactUs").validate(); });
</script>

</head>
<body>
<div id="outer">
  <div id="header">
    <div class="wrapper">
      <div id="logo"> <a href="index.html"><img src="images/logo.png" alt="" /></a> </div>
      <!--logo ends -->
      <a id="menu-toggle">☰</a>
      <div id="menu">
        <ul>
          <li class="first"><a href="index.html">Home</a></li>
          <li><a href="overview.html">overview</a></li>
          <li><a href="team.html">team</a></li>
          <li><a href="strategy.html">strategy</a></li>
          <li><a href="services.html">services</a></li>
          <li class="active"><a href="contact.php">contact</a></li>
        </ul>
      </div>
      <!--menu ends -->
      <div class="clear"></div>
    </div>
    <!--wrapper ends -->
  </div>
  <!--header ends -->
  <div class="clear"></div>
  <div id="banner" class="contact">
    <div class="wrapper">

    </div>
    <!--wrapper ends -->
  </div>
  <!--home banner ends -->
  <div class="clear"></div>
  <div id="content">
    <div class="wrapper">
    	<div class="heading">
      	<h1>Liburnian Advisors SA  <span>- Contact Us</span></h1>
      </div><!--heading ends -->
 <? if($_REQUEST['flag']==1){
            ?>              <br class="spacer" />
            <?
            echo '<div class="good_msg">Thank you for your enquiry. We will contact you very soon.</div>';
            }
            else if($_REQUEST['flag']==2){
            ?>              <br class="spacer" /><?
            echo '<div class="bad_msg">Sorry. There was some error. Please try again.</div>';

            }

            ?>
      <p class="big">Contact one of our team now by using the form below or<br /> give us a call. We’d love to hear from you!</p>
      <div id="contact-left">
        <p><strong>Send us a message</strong></p>
        <form name="frmContactUs" id="frmContactUs" method="post" action="contact.php">
          <p><label>Your name *</label><input type="text" name="txtFName" id="txtFName" class="validate[required]"  /></p>
          <p><label>Company name *</label><input type="text" name="companyName" id="companyName" class="validate[required]"  /></p>
          <p><label>Email address *</label><input type="text" name="txtEmail" id="txtEmail" class="validate[required,custom[email],length[0,100]]"  /></p>
          <p><label>Phone number *</label><input type="text" name="txtPhone" id="txtPhone" class="validate[required,custom[telephone],length[0,11]]"  /></p>
          <label>What would you like to talk to us about</label><textarea name="enquiry" ></textarea>
          <p><input type="submit" value="Send now"  name="btnSubmit" id="btnSubmit" /></p>
        </form>
      </div><!--contact left ends -->
      <div id="contact-right">
      	<h4>Useful Contact <span>info</span></h4>
        <div>
          <h5 class="last">General Enquiries<br />
          T: <span>++41 22 319 23 24</span><br />
          E: <span>info@liburnian.com</span></h5>
        </div>
      </div><!--contact right ends -->
      <div class="border"></div>
      <div class="heading">
      	<h1>Locations</h1>
      </div>
      <div class="contact-left">
   <div style="width:655px; height:300px;" class="gmap" id="gmap-markers"></div>

        <a href="#" class="thumb"><img src="images/map-img1.jpg" alt="" /></a>
        <a href="#" class="thumb"><img src="images/map-img2.jpg" alt="" /></a>
        <a href="#" class="thumb"><img src="images/map-img3.jpg" alt="" /></a>
      </div><!--contact left ends -->
      <div class="contact-right">
      	<h4>Useful Contact <span>info</span></h4>
        <div>
          <h5>Find Us</h5>
          <p>Head Office<br />
          86, Rue du Rhône<br />
          1204 Geneva, Switzerland</p>
          <h5 class="last">Call US<br />
          T: <span>+41 22 319 23 23</span><br />
          T: <span>+41 22 319 23 23</span><br />
          T: <span>+41 22 319 23 23</span></h5>
        </div>
      </div><!--contact right ends -->
    </div><!--wrapper ends -->
  </div>
  <div class="clear"></div>
  <div id="footer">
    <div class="wrapper">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="overview.html">overview</a></li>
        <li><a href="team.html">team</a></li>
        <li><a href="strategy.html">strategy</a></li>
        <li><a href="services.html">services</a></li>
        <li><a href="contact.html">contact</a></li>
      </ul>
      <p>© Liburnian Advisors SA 2014. All Rights Reserved</p>
    </div>
    <!--wrapper ends -->
  </div>
  <!--footer ends -->
  <div class="clear"></div>
</div><!--outer ends -->

 <!--basic scripts-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/map/jquery-2.0.3.min.js"><\/script>')</script>
               <!--page specific plugin scripts-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/map/gmaps.js"></script>

        <!--flaty scripts-->
         <script type="text/javascript">
            $(document).ready(function(){
                //--------------------------- Google Maps --------------------------------//
                //For more example visit: http://hpneo.github.io/gmaps/examples.html


                //Map with markers-------------------------
                var map_markers = new GMaps({
                  div: '#gmap-markers',
                  lat: 46.203531,
                  lng: 6.149868
                });
                map_markers.addMarker({
                  lat: 46.203531,
                  lng: 6.149868,
                  title: '86, Rue du Rhône 1204 Geneva',
                  infoWindow: {
                    content: '<p>86, Rue du Rhône 1204 Geneva</p>'
                  }
                });

            });
        </script>
</body>
</html>
