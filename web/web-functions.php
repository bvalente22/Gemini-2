<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		<td class="style7">
		
		
		<map id="ImgMap0" name="ImgMap0">
			<area alt="" coords="46, 1376, 100, 1405" href="index.php" shape="rect" />
		</map>
		
		
		<img alt="" height="1448" src="images/functions.jpg" width="900" usemap="#ImgMap0" />
		</td>
	</tr> 
	<tr>
		<td class="style7">This page allows you to change many of the modes of 
		the Gemini-2.</td>
	</tr> 
	<tr>
		<td class="style6">You can use it this page to:<br />
		<ul><li>GoTo Coordinate Input - slew the mount to a specific location in 
			the sky by entering target Right ascension and target Declination.&nbsp; 
			Hit Set target RA/Dec to accept the setting and then GoTo RA/DEC to 
			slew the mount to these coordinates. </li>
			<li>Physical Position - you can set the mounts Physical Position of 
			the RA and Dec motors.
			The numbers are motor encoder ticks in both axes. One can calculate 
			the total count for a circle by dividing 360 degrees * 60 minutes * 
			60 seconds (1,296,000 arc seconds for a full circle) by the step 
			resolution of the axis. At equatorial mount's CWD position the axes 
			are at the half of this physical position.</li>
			<li>Alt/Az - this is to set the Azimuth and elevation if you are in 
			the Alt/AZ mode of operation. It does not function in the Equatorial 
			mode of operation.
		</li>
			<li>Park/Sleep/wakeup/Reboot Mount.<ul>
				<li>Park @ CWD - this will part the mount with the 
				counterweights down and the declination pointing to the 
				appropriate pole for the hemisphere the mount is in. </li>
				<li>Part @ Zenith -&nbsp; this will move the Declination to 90 
				degrees with the counterweights down.</li>
				<li>Park @ Home - this will move both axes to a predefined 
				position, set by using the Set Home Position button.</li>
				<li>Set Home Position -&nbsp; Set the mount to where ever you 
				want the Home position to be, then hit the Set Home Position 
				button.</li>
				<li>Stop Tracking - this should stop all tracking, in both the 
				Equatorial and Alt/AZ modes.</li>
				<li>Restart Tracking - this should start the tracking back in 
				the desired tracking rate.</li>
				<li>Reboot - this should start the mount from as if power was 
				just turned on.&nbsp; It will do which ever startup method 
				selected at the bottom of the mount page.</li>
				<li>Cold Reboot -&nbsp; This will do the same as above but do an 
				Cold start instead of what is selected at the bottom of the 
				mount page. </li>
			</ul>
			<li><strong>Parking modes</strong> 
				defines how the mount and what rules the mount follows to perform an Un-Park. There are 3 
				different modes.</li>&nbsp; The rules are in  
				firmware after July 27, 2013 
				These modes can only be set on the Functions page of the web 
			interface or through serial command 92.&nbsp; Ascom Gemini.net 
			driver can set Park Mode 2. 
				<ul>
					<li>Every Move or Mode 0 - Every command that moves the mount wakes the 
					mount up (current state). This includes pressing the 
					directional buttons, changing the tracking rate, using any 
					of the Un-Park button. This is the default mode, and is the 
					only mode in firmware before July 27, 2013</li>
					<li>GoTo Commands or Mode 1 -&nbsp; HC directional buttons, classical HC and 
					AG inputs are ignored, but GoTo commands and un-park 
					commands wake it up.</li>
					<li>Explicit Wakeup or Mode 2 - Only a Un-Park command :hW# will wake the mount up.&nbsp; 
					This mode is there to provide compatibility with the ASCOM 
					standard rules.&nbsp; The Un-Park buttons in the hand 
					controller, Web interface, and the Un-Park command in the 
					ASCOM driver send this string to the mount.&nbsp; The ASCOM 
					driver now has a check box under Configuring Park, that will 
					select this mode of Operation.&nbsp; Please note that 
					parking or un-parking does not change from one mode to the 
					other. </li>
				</ul>
				
			</li>
			<li>Manage Periodic Error - PEC - this is where you can:<ul>
				<li>Train PEC -&nbsp; start the mount training the PEC curve.&nbsp; 
				You will normally use a guide scope to do this, and guider 
				inputs.&nbsp; You could use a cross-hair eye-piece and the hand 
				controller.&nbsp; Please note that the hand controller will only 
				let you move at guide speeds while the PEC training is working.&nbsp; 
				PEC training take some time, as the worm has to turn 1 complete 
				turn for a complete curve to be generated.&nbsp; Note: PEC is 
				only built for RA.</li>
				<li>Abort PEC training - this will stop the training and discard 
				the curve that was being stored.</li>
				<li>Start PEC replay - this starts applying the PEC curve to the 
				mount tracking. </li>
				<li>End PEC replay - this stops the PEC curve from being applied 
				to the mount tracking. The PEC curve is retained for future use.</li>
				<li>Enable PEC on Start Tracking.&nbsp; If PEC data is loaded, 
				the PEC will startup when tracking starts.&nbsp; Version 5.2 22 
				July 2015 or later main board firmware.</li>
				<li>Disable PEC on Start Tracking.  Will disable the Start PEC 
				on start of tracking function.  Version 5.2 22 July 2015 or later main board firmware.</li>
			</ul>
			</li>
			<li>Classic Hand Controller Mode - This lets you select the mode 
			that the Classic Hand Controller will function in.&nbsp; This is an 
			optional <a href="images/HC.jpg">Classic hand controller</a>, that can be 
				plugged into the Classic hand controller jack.&nbsp; This hand 
				controller can be purchased from Losmandy. It is on there
				<a href="http://www.losmandy.com/replacement.html" target="_blank">
				replacement parts web page.</a>&nbsp; I really recommend it.&nbsp; 
				It can also be used to test the Guider inputs. 
			<ul>
				<li>All Speeds Mode: This mode allows the classic hand 
				controller buttons to change the speed of the movement by 
				momentarily touching the opposite button.&nbsp; Each touch of 
				the opposite button will speed up the motor movement.&nbsp; 
				Guiding can also be accomplished in this mode.</li>
				<li>&nbsp; Photo Mode - this is the desired mode for guiding.&nbsp; 
				The opposite button touch speed up does not function in this 
				mode.</li>
				<li>Visual Mode -&nbsp; this is the same as the All Speeds mode, 
				except the mount cannot be guided with guider input either 
				through the guider input jack, or serial commands</li>
			</ul>
			</li>
			<li>Tracking Speeds - This is where you can select the desired 
			default tracking speed. Please see the
			<a href="/../definitions.php" target="_blank">definitions page</a> 
			for a description of each tracking speed.</li>
		</ul></td>
	</tr> 
			<tr><td></td></tr>
</table>
<table align="center" width="900px" class="tableborder1">
	<tr><td class="style6-border-white"><em>If your Gemini-2 is connected Via Ethernet, 
		turned ON, and 
		Responds to <a href="http://gemini/functions.cgi" target="_blank">http://gemini</a> then this link 
		will open this page in the Gemini-2 web interface, after prompting for a 
		log-in.</em></td></tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Sept 8, 2016
		</td>
	</tr>
</table>
</body>




<?php include("bottom.php"); ?>



