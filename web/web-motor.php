﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="../gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>

</head>

<body style="color: #FFFFFF; background-color: #000000">

<table align="center" style="width: 900px">
	<tr>
		<td class="style7">This is the Motor States and Setting</td>
<hr />
	</tr> 
	<tr>
		<td class="style6">Note: the bottom part of this page (below Threshold Setup) will only show up if you have used the 
		dated August 27, 2013 or later firmware.&nbsp; </td>
	</tr> 
	<tr><td class="style7">
		
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="399, 736, 465, 759" href="index.php" shape="rect" />
		</map>
		
		<img alt="" height="799" src="images/motor.jpg" width="900" usemap="#ImgMap0" /></td>
		</tr>
	<tr><td class="style6">The setting above the Thresholds Setup are read only 
		and for informational purposes only. <br />
		</td></tr>
	<tr><td class="style6">The thresholds setting determine where the error 
		messages that is shown on the hand controller for motor lag, Tracking 
		power percentage, and Slewing Power Percentage overages is set.&nbsp; I 
		am not sure, but I think setting any of these to higher values will 
		delay or turn off the 
		associated error message unless that threshold is reached..&nbsp;&nbsp; </td></tr>

	<tr><td class="style6">
	Please note 
		that if you do not see any changes on the hand controllers 
		"Menu"--&gt;"Mount"--&gt;"Balance" then you might not have the servo code 
		programmed into your Servo Controller IC.&nbsp; This should only be on 
		early 2010 and 2011 units.
		<br />
		<hr />
		</td></tr>
			<tr><td class="style6">
		The values in the RA tracking Lag/Dec Tracking Lag are set at a default of 30.  You can change this to a higher
		number to make the message not show up as much.  I my self use 50 with my Mi-250 and Maxon motors.  Also the
		TA tracking Power Percentage and Dec Tracking Power Percentage can be changed if you wish.  Please do not change the
		RA Slewing Power Percentage or the Dec Slewing Power Precentage.  
		
		</td></tr>
		<hr />
		
</table>
<table align="center" width="900px" class="tableborder1">
	<tr><td class="style6-border-white"><em>If your Gemini-2 is connected Via Ethernet, 
		turned ON, and 
		Responds to <a href="http://gemini/motor.cgi" target="_blank">http://gemini/motor.cgi</a> then this link 
		will open this page in the Gemini-2 web interface, after prompting for a log-in.</em>
		</td></tr>

</table>

<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on 
		Jun 13, 2016
		</td>
	</tr>
</table>



</body>




<?php include("bottom.php"); ?>



