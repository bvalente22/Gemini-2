<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style1 {
	font-size: small;
}
</style>



</head>

<body style="color: #FFFFFF; background-color: #000000">

<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Using a GPS receiver</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6"> I only know of three GPS receivers specially made for 
		the Gemini Series for mount controllers. I have also listed two 
		alternatives to actual GPS receivers connected into the Gemini-2 at the 
		bottom of this page.<br />
		<br />
		What Information does the GPS receiver provide:<br />
		1. Longitude<br />
		2. Latitude (the Gemini-2 uses this to determine Northern or Southern 
		Hemisphere automatically.)<br />
		3. Time/date in UTC&nbsp; (All GPS receivers only provide time in UTC/date 
		and does not provide local time/local date to the 
		Gemini-2.&nbsp; Now if you have the Timezone set correctly, including 
		daylight saving time, then the Gemini-2 can calculate the local time/date and 
		display it on the hand controller.&nbsp; If the timezone is set to zero 
		then the Gemini-2 will display UTC Time/Date on the hand controller. Either 
		way, the Gemini-2 will calculate proper star positions.&nbsp; It will do 
		so, even if the timezone is set incorrectly if using a GPS.&nbsp; All 
		that matters is that the Gemini-2 have the correct UTC Time and Date, 
		Longitude and Latitude which it gets from the GPS Satellites.)<br />
		4. Where the GPS data is valid or not, and if not valid, the data is not 
		used.<br />
		<br />
			Losmandy makes only the GPS receiver for the Gemini-2, the one for the Gemini-1 
		has been discontinued. You can see the one for Gemini-2 
			on <a href="http://www.losmandy.com/access.html" target="_blank">
			Losmandy Accessory Page</a>. This is a picture of the 
			Gemini-2 Version.<br /><img alt="" height="450" src="http://www.losmandy.com/hi-rez-images/GPS_2a.jpg" width="900" />
			&nbsp;The one for the Gemini-1 has a 
			part number of GCC, and the one for the Gemini-2 has a part number 
			of GCC-2. Please note that the GPS for the Gemini-1 will not work on the Gemini-2
			<ul><li>If you are really good at modifying cable, there are 
				instruction in Gemini-2 Users group in 
				<a href="https://groups.io/g/Gemini-II
conversations/messages/155" target="_blank">message 155</a>.  that tells 
				how to modify the Gemini-1 GPS for use on the Gemini-2. I take no responsibility and you do this modification at your own risk.  
				I don't have either version, so no instruction are given here, and I cannot and have not tested the modifications.</li></ul>
			</td>
			</tr>
			</table>
			<table align="center" style="width: 900px">
			<tr><td>
			</td></tr>
			</table>
			<table align="center" style="width: 900px">
			<tr><td class="style6">
			
				<b>The <a href="http://stargps.ca/" target="_blank">StarGPS unit by 
				PixSoft, Inc.</a></b> is a 65 channel GPS unit, It comes with one 
				adapter included in the price. For use with a Gemini-1, Gemini-2 
				or Gemini-2 Mini, &nbsp; 
				The New Gemini-2 Mini has only one power connector.&nbsp; So if 
				you order the GPS for it you will also get the cable for the 
				Original Gemini-2 plus the Y Splitter cable shown below.&nbsp; </td></tr>
			</table>
			<table align="center" style="width: 900px">
				<tr>
					<td class="style7">
					<img alt="" height="271" src="gemini-images/gps/stargps.jpg" width="300"  /><br />The star GPS itself<br />
					<br />
					</td>
					<td class="style7">
					<img alt="" height="271" src="gemini-images/gps/GPS-Gemini2.jpg" width="300" /><br />The G2 Adapter cable<br />
					<br />
					</td>
					<td class="style7">
					
				    <img alt="" height="271" src="gemini-images/gps/DC-Y-cable.jpg" width="300" /><br />Y Splitter cable for G2 Mini<br />
				    the wires are 18 Gauge.
				    </td>
				</tr>
			</table>
			<table align="center" style="width: 900px">
				<tr>
					<td class="style6">	PixSoft has adapters for the Gemini-1 
					that used telephone style motor cable, the Gemini-1 that has 
					round motor cables, and the Gemini-2.&nbsp; All of them uses the 
					same GPS, but with a different adapter.&nbsp; This new 65 channel 
					NX02 unit is very sensitive, and the unit I have even works 
					from inside my house. </td>
				</tr>
		</table>
			<table align="center" style="width: 900px">
				<tr>
					<td class="style7">
			<img alt="" height="293" src="gemini-images/gps/GPS-USB.jpg" width="390" /> 
			<br />USB adapter for StarGPS
			
			</td>
				<td class="style6">
				This same GPS can also be used with a USB adapter so that you can plug it into 
				your laptop.&nbsp; The ASCOM Gemini.net driver then can read it and 
				pass the setting into the Gemini 1 or Gemini-2.&nbsp; This is the 
				way I prefer to get GPS information into my mount, and also my 
				observing programs. You may need a Windows Driver to allow this 
				adapter to work. They are listed under GPSView in paragraph 1
				<a href="http://stargps.ca/GPS.htm#gpsview" target="_blank">at 
				this link</a>. They make the USB adapter have a virtual com 
				serial port emulation, so that most any program looking for the 
				GPS as a serial device will find the starGPS.&nbsp; You do need 
				to let it go into the NMEA mode first.&nbsp; See Useful programs 
				in the menu, then, GPS related programs to enhance your use of 
				this adapter, and the StarGPS.</td>
			</tr>
				
			<table align="center" style="width: 900px">
				<tr>
					<td>&nbsp;</td>
				</tr>
	</table>
	<table align="center" style="width: 900px">
				
			<tr>
			  <td class="h3"> Configuring the Gemini-2 for a GPS receiver</td>
			</tr>
	</table>
	<table align="center" style="width: 900px">
			<tr>
				<td class="style6">	
				<ul><li>
				The default baud rate that the Gemini-2 uses to detect a GPS is 4800 baud.  The Gemini-2 main unit, after being powered up
				will go out the selected serial port (normally Serial port 1) and try a detect if a GPS is connected and get the GPS 
				coordinates.
				Now the success of this may or may not be displayed on the Hand controller at the top. 
				Normally the messages will be "GPS coordinates updated" or 
				"No GPS data Received"
				</li>
				</ul>
				</td>
				</tr>
				</table>
		<table align="center" style="width: 900px">
			<tr><td class="style6">	
				<ul><li>
				When they will be displayed on the hand controller:
				</li>

				
				<ul><li>
					When the Gemini-2 is set to be started up in "warm start." </li>
					<li>
					When the Gemini-2 is set to be started up in "warm restart." </li>					
					</ul>
				</ul>					
					</td>
					
		
				<td class="style7">
					<img alt="" height="590" src="gemini-images/gps/HC_Rebooting_and_GPS_Found.jpg" width="450" />
					</td>			
					</tr>
		</table>
		<table align="center" style="width: 900px">
			<tr><td class="style6">	
			<ul><ul><li>
					When a manual query is initiated from the hand controller 
					site menu.&nbsp;	
					</li>					
					</ul>
				</ul>					
				</td>
			<td class="style7">
			
			
					<img alt="" height="600" src="gemini-images/gps/site_menu_queryGps.jpg" width="450" />
				</td>
				</tr>
			</table> 
		<table align="center" style="width: 900px">
			<tr><td class="style6">	
			<ul>
					<ul><li>
					When a manual query is initiated from the Web interface&nbsp;
					<a href="gemini-images/gps/web_query_GPS.jpg" target="_blank">Site/Time</a> at the bottom of the page.&nbsp; 
					The results can also be seen on the					
					<a href="gemini-images/gps/state_page_w_GPS_success.jpg" target="_blank">state page</a> of the Web interface.</li>
				</ul>
			
				<li>When will they not be displayed:<ul>
					<li>When the Gemini-2 was booted in the "Ask if Possible" 
					mode where the Quick Start, Cold Start, Warm Start, or Warm 
					Restart selections are shown.</li>
					<li>When the Gemini-2 is started up in the Cold Start mode, 
					where the Polar Align Assist, Modeling, or Catalog Tour 
					menus are displayed.</li>
				</ul>
				</li>
				<li>Configuring the GPS baud rate and the Serial port to detect 
				the GPS on:<ul>
					<li>The GPS baud rate is set at the bottom of the
					<a href="http://www.gemini-2.com/web/web-serial-ports.php" target="_blank">
					Serial Ports</a> where it says Set GPS Baudrate. Do not 
					change the serial port 1 or serial port 2 baud rates as that 
					will not effect the GPS at all.</li>
					<li>The port where the Gemini-2 will look for the GPS is 
					selected on the
					<a href="http://www.gemini-2.com/web/web-site-time.php" target="_blank">Site/Time</a> menu at the bottom of the page.&nbsp; Normally 
					this will be serial port 1.</li>
				</ul>
				</li>
				</ul>
			</td>
			</tr>
	</table>

	<table align="center" style="width: 900px">
				
			<tr>
			  <td class="h3">Instructions for each make of GPS Receiver</td>
			</tr>
	</table>
			
				
	<table align="center" style="width: 900px">
		<tr>
			<td class="style6">Losmandy Brand - Use with Gemini-2:
				<ol>
						<li>
						The Gemini-2 Losmandy GPS plugs into the Serial port of the Gemini-2 main unit. This is normally serial port 1.
						</li>
						<li>
						Plug in the GPS and power on the Gemini-2.&nbsp; You 
						have three options to get the the Gemini-2 to read the GPS receiver.
						</li>
					<ol type="A">
							<li>Go into the site menu and select "Query GPS". This is the recommended method. The GPS will not 
							normally return Coordinates updated, if the Gemini-2 
							has just been powered up, This is because almost all 
							GPS takes a few minutes to acquire the satellites.
							</li>
							<li>Use the Web interface and Select "Query GPS" at 
							the bottom of site/time page:
							</li>
						<ol type="a">
							<li>Here are four commands that you can click on 
							from this web page to select which serial port 
							and which baud rate the Gemini will try to use 
							for commanding the GPS receiver. Of course the Gemini-2 must
							be connected via Ethernet, and responding to web commands for them
							to work.
							</li>
							<ol type="i">
								<li>
									<a href="http://gemini/serial.cgi?sg=0&amp;set=Set+GPS+Baudrate" target="_blank">
									4800 baud</a>&nbsp; - This will make the 
									baud rate for the GPS 4800 baud.</li>
									<li>
									<a href="http://gemini/serial.cgi?sg=1&amp;set=Set+GPS+Baudrate" target="_blank">
									9600 baud</a>&nbsp; - This will make the 
									baud rate for the GPS 9600 baud.</li>
									<li>
									<a href="http://gemini/sitetime.cgi?gp=0&amp;set=Query+GPS+Receiver" target="_blank">
									Serial Port 1</a>&nbsp; - This is the same 
									as using the Query GPS Receiver for Serial 
									port 1 </li>
									<li>
									<a href="http://gemini/sitetime.cgi?gp=0&amp;set=Query+GPS+Receiver" target="_blank">
									Serial Port 2</a>&nbsp; - This is the same 
									as using the Query GPS Receiver for Serial 
									port 2</li>
							</ol>
						</ol>
						<li>If you have not logged into the Web 
						interface, then clicking on one of the above 
						links will bring up the log in box.</li>
						<li>Cycle power to the Gemini-2.</li>
							
					</ol>
				</ol>
				</td>
						
			</tr>
	</table>
	
	<table align="center" style="width: 900px">
		<tr>
				<td class="style6">StarGPS Brand - Use with Gemini-2:
					<ol>
						<li>
						Turn the Gemini-2 Power switch off. Plug the StarGPS GPS 
						plugs into the Serial port 1 of the Gemini-2 main unit, 
						and the second power plug on the right side of the main 
						unit, or if a Gemini-2 Mini, use the included Y Power 
						adapter cable to power the StarGPS and the Mini at the 
						same time.<br /><br /> </li>
						
						<li>
						Have power 
						being supplied to the Gemini-2 with the Gemini-2's power switch 
						off, so that the GPS will be powered up, but the Gemini powered 
						down. <em><span class="auto-style1">The 
						reason for this is that the GPS in the first 45 
						seconds tries to determine the type of mount it is 
						connected to.&nbsp; Since the Gemini can respond with 
						some Meade LX-200 commands, the GPS will think it is 
						connected to a LX-200 instead of a Gemini.&nbsp; If this 
						happens then it will never go into the NMEA 
						mode, which is the ONLY mode the Gemini-2 (or Gemin-1) 
						will read GPS data in.&nbsp;</span></em><br /><br /></li>
						<li>
						Watch the light on the GPS unit.&nbsp; It will stay solid 
						green for about 45 seconds.&nbsp; It will then 
						start blinking very fast for about 5 seconds.&nbsp;(It has 
						now switched to the NMEA mode)&nbsp;Wait until it blinks once 
						every 2 seconds (Indicating that it has a location fix)<br /><br /></li>
						</ol>
						</td>
					</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
				<td class="style6">
				<ol start="4"	>					
						<li>
						Power on the Gemini-2 unit. The Gemini-2 should 
						now automatically get the GPS coordinates from the GPS. Where 
						the Gemini 2 displays a message will be determined by 
						the above boot modes in Configuring the Gemini-2 for a 
						GPS receiver paragraphs above. 
						<em>An alternate method is to not 
						plug the GPS into the serial port until it has switched 
						to the NMEA mode. You would use this if the Gemini is 
						already powered up and you do not want to power it down.&nbsp; 
						You will have to use one of the below methods to get the 
						Gemini to read the GPS in this alternate method.</em><br /><br /></li>

						</ol>
						</td>
					</tr>
	</table>
	<table align="center" style="width: 900px">
		<tr>
				<td class="style6">
				<ol start="5"	>					
						
						<li>
						You have three options to get the the Gemini-2 to read 
						the GPS receiver, if it did not read the GPS in step 4 
						above.</li>
						<ol type="A">
							<li>Go into the site menu and select "Query GPS" 
							this is the recommended method if the Gemini-2 
							failed to read the coordinates in step 5 above.</li>
							<li>Use the Web interface and Select "Query GPS" at 
							the bottom of site/time page:
							<ol type="a">
								<li>Here are four commands that you can click on 
								from this web page to select which serial port 
								and which baud rate the Gemini will try to use 
								for commanding the GPS receiver. Of course the Gemini-2 must
								be connected via Ethernet, and responding to web commands for them
								to work.</li>
								<ol type="i">
									<li>
									<a href="http://gemini/serial.cgi?sg=0&amp;set=Set+GPS+Baudrate" target="_blank">
									4800 baud</a>&nbsp; - This will make the 
									baud rate for the GPS 4800 baud.</li>
									<li>
									<a href="http://gemini/serial.cgi?sg=1&amp;set=Set+GPS+Baudrate" target="_blank">
									9600 baud</a>&nbsp; - This will make the 
									baud rate for the GPS 9600 baud.</li>
									<li>
									<a href="http://gemini/sitetime.cgi?gp=0&amp;set=Query+GPS+Receiver" target="_blank">
									Serial Port 1</a>&nbsp; - This is the same 
									as using the Query GPS Receiver for Serial 
									port 1 </li>
									<li>
									<a href="http://gemini/sitetime.cgi?gp=0&amp;set=Query+GPS+Receiver" target="_blank">
									Serial Port 2</a>&nbsp; - This is the same 
									as using the Query GPS Receiver for Serial 
									poet 2</li>
								</ol>
								
								<li>If you have not logged into the Web 
								interface, then clicking on one of the above 
								links will bring up the log in box.</li>
								<li>Cycle power to the Gemini-2.</li>
								
							</ol>
					</td>
				</tr>
	</table>			

	<table align="center" style="width: 900px">

				<tr>
					<td class="style6">Note: StarGPS units NX01 and Early Releases of the NX02 
					used 9600 baud.&nbsp; If you cannot get your GPS to 
					function, then you might try changing Serial Port 1 to 9600 
					baud. See the <a href="http://gemini/serial.cgi">Gemini-2 Web interface</a> for changing it to 9600 
					baud on the serial ports web page.&nbsp; If you are 
					connected to a Gemini 2 with an Ethernet connection<br />
					This
					<a href="http://gemini/serial.cgi?sg=0&amp;set=Set+GPS+Baudrate" target="_blank">
					command 4800 baud</a> should set it to 4800 baud, and this
					<a href="http://gemini/serial.cgi?sg=1&amp;set=Set+GPS+Baudrate">
					command 9600 baud</a> should change it to 9600. baud.</td>
				</tr>
</table>

	<table align="center" style="width: 900px">
	<tr>
		<td>&nbsp;</td>
	</tr>
				
			<tr>
			  <td class="h3">Alternatives to GPS receivers plugged into Gemini 1 and Gemini 2</td>
			</tr>
	</table>


<table align="center" style="width: 900px">
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">Alternative  1. Now the ASCOM Gemini.net driver can connect to a GPS that is connected directly to the computer.  
		You can use a USB GPS receiver directly into your computer.  
		Most USB GPS receivers will create a virtual Serial port that the ASCOM Gemini.net driver can read.  
		Once the ASCOM Gemin.net Driver has the data from the GPS receiver, it can pass it directly to the Gemini-1 or Gemini-2.&nbsp;&nbsp; 
		From the ASCOM Gemini.net manual:<br />
		<br />
		GPS Settings
This button provides access to the GPS configuration form. You configure the port number and speed of
the serial port on your PC to which the GPS is connected. There are options for automatically updating
the PC clock as well as the location data from the GPS, and manually performing a query.<br />
		</td>
	</tr>
	<tr>
		<td class="style7">
		
		<img alt="AscomGPSsetting" height="224" src="gemini-images/gps/AscomGPSsetting.jpg" width="285" /></td>
	</tr>
	<tr>
		<td class="style6">Ensure that your GPS is set to output NMEA data at the same serial speed, and is not set to SiRF or some
other proprietary protocol. This form only updates from the GPS when you press the [Query] button
whilst it is updating, the Query button will change to [Stop]. Pressing either the [Stop], [Cancel], or [OK]
button will halt the GPS update. Pressing either the [OK] or [Cancel] button will close the form.
The icon in the top right hand corner of the form indicates if the data being received from the GPS is
reliable or not </td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>Alternative 2. Also the Web interface has a tab called Mobile Hand Controller.  This is an unsupported program, but it does offer some 
		nice features.  The one I like is being able to use the GPS of a Cell Phone or Tablet to update the Site/Time data of
		the Gemini-2.&nbsp; After opening it up, go to Menu and Select "Site".&nbsp; 
		If the program detects a GPS then it will allow you to update the 
		Gemini-2 with the GPS coordinates from the Cell Phone or Tablet.</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td> If you would like to use your cell phone to get the GPS coordinates, I know of an
		<a href="androidgps.php" target="_blank">Android App</a> that does this and also provides the coordinates in the correct format for
		the Gemini-2.</td>
	</tr>
</table>

<table  align="center" style="width:900px">
	<tr>
		<td class="style7">
		Page last updated on Sept 09, 2016
		</td>
	</tr>
</table>


</body>




<?php include("bottom.php"); ?>



