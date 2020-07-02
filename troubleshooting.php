<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Troubling Gemini-2 Problems</title>



<?php include("topv.php"); ?>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<style type="text/css">
.auto-style1 {
	text-decoration: underline;
}
.auto-style3 {
	margin-left: 40px;
}
</style>


</head>

<body style="color: #FFFFFF; background-color: #000000" class="h2">


<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Troublingshooting Gemini-2 Problems</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">Note: most links are from this site and not on the 
		Gemini-2 itself.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6">Please note if you are using older versions of the firmware, please update
		 to the latest and try your problem again before reporting your problems.&nbsp; 
		To tell your firmware dates go
		<a href="tellfirmwareversion.php" target="_blank">here.</a></td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
	<tr>
		<td class="style6" ><strong>When either the Gemini-2 or Gemini-1 starts to show problems/errors, 
		always change the battery.&nbsp; Low batteries can give very 
		weird symptoms.</strong></td>
	</tr>
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td width="300px" class="style7"><a href="#1">Report Problems</a></td>
		<td width="300px" class="style7"><a href="#6">ASCOM Driver won't connect</a></td>
		<td width="300px" class="style7"><a href="#Install-uninstall-driver-fails">ASCOM Driver won't Install</a></td>
	</tr>
	<tr>
		<td width="300px" class="style7"><a href="#5">Back after power fail</a></td>
		<td width="300px" class="style7"><a href="#12">DEC or RA misbehaving</a></td>
		<td width="300px" class="style7"><a href="#14">Ethernet problems</a>.</td>
	</tr>
	<tr>
		<td width="300px" class="style7"><a href="#8">Forced Cold Start</a></td>
		<td width="300px" class="style7"><a href="#3">HC not connecting</a></td>
		<td width="300px" class="style7"><a href="#4">How to Bench Test</a></td>
	</tr>
	<tr>
		<td width="300px" class="style7"><a href="#7">Low Battery Symptoms</a></td>
		<td width="300px" class="style7"><a href="#13">Motor Stall Faults.</a></td>
		<td width="300px" class="style7"><a href="#11">Mount rejecting stars</a></td>
	</tr>
	<tr>
		<td width="300px" class="style7"><a href="#Removing_Virus_or_Malicious_Software">Removing Virus or Malicious Software</a></td>
		<td width="300px" class="style7"><a href="#10">Screen changing languages when touched.</a></td>
		<td width="300px" class="style7"><a href="#2">Slews Wrong Direction</a></td>
	</tr>
	<tr>
		<td width="300px" class="style7"><a href="#9">Some Screens of the HC not functioning 
		after firmware upgrade</a></td>
		<td width="300px" class="style7"><a href="#2a">Tracks in Wrong Direction</a></td>
		<td width="300px" class="style7"></td>
	</tr>
<!--	<tr>
		<td width="300px" class="style7"><a href="#15"> </a></td>
		
	</tr>-->
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>

<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">1. <a name="1"></a> <em><u>Reporting Problems:</u></em><br />
		&nbsp;&nbsp;&nbsp;
		If you are having problems that you would like to 
		report to the writer of the code for either the Gemini-2 or the ASCOM 
		driver, please follow the steps at
		<a href="http://www.gemini-2.com/error-reporting.php" target="_blank">
		http://www.gemini-2.com/error-reporting.php</a></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp; &nbsp;</td>
	</tr>
</table>
<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">2. <a name="2"></a> <u><em>
		Mount Slews the Wrong way:</em></u><br />
&nbsp;&nbsp;&nbsp; If your mount slews in the wrong direction with the 
		arrow buttons or during an alignment, please check these items. 		
		<ol type="A"><li>Make sure the RA and Dec cable are connected correctly. 
			Remember the DEC is the top connector on the mount, and the RA is the bottom connector.</li>
			<li>Make sure your Latitude, Longitude, and Timezone are set 
			correctly.&nbsp; Timezone is the most common error, with the format 
			of the Latitude and Longitude being second.&nbsp; The seconds must 
			be between 0 and 59 like a clock.<br />See
			<a href="http://www.gemini-2.com/hc/E019.php" target="_blank">
			site menu</a>.&nbsp; On HC, Menu--&gt;Site</li>
			<li>Make sure you Local and UTC times are showing correctly on the 
			Web interface.<br />See 
			<a href="http://www.gemini-2.com/web/web-site-time.php" target="_blank">
			Site/Time</a> on the Web interface.</li>
			<li>Make sure that your mount type is selected correctly, 
			<br />See	<a href="http://www.gemini-2.com/hc/En-mounttype.php" target="_blank">
			mount type menu</a>. On HC, Menu--&gt;Mount--&gt;Type</li>
			<li>Check that the gearing is correct. 
			<br />See <a href="http://www.gemini-2.com/hc/En-customgearing.php">
			gearing</a> and
			<a href="http://www.gemini-2.com/hc/default_gearing_setting.php" target="_blank">
			gearing chart</a>.&nbsp; Oh HC, see Menu--&gt;mount--&gt;gearing.</li>
			<li>If you have just done a firmware upgrade, Please make sure you 
			have done a
			<a href="http://www.gemini-2.com/web/web-firmware-sram.php" target="_blank">
			SRAM Reset</a> at the bottom of the Web interface page Firmware/SRAM.&nbsp; </li>
			<li>Make sure your battery is good.&nbsp; See <a href="#7">Low Battery Symptoms</a></li>
			<li><a name="2a"></a>If all the above is correct, and the mount 
			still slews in the wrong direction, and also tracks in the wrong 
			direction, you might have a mount where the gearboxes was replaced 
			with Mclennan gearboxes.&nbsp; These gearboxes reverse the direction of 
			the drive train.&nbsp; You will have to use 
			<a href="http://www.gemini-2.com/web/web-mount.php" target="_blank">custom mount</a> 
			and change the sign of The RA Worm Ratio and the Dec Worm Ratio, or if 
			you mount is a G11 and both gearboxes was upgraded, you can select 
			MI-250.&nbsp; You will have to reset your limits also. In menu bar 
			see "Tips/Programs"--&gt;"Gearboxes and Mods"--&gt;"Mclennan Gearbox 
			Upgrade"</li>
		</ol></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;&nbsp; &nbsp;</td>
	</tr>
</table>

<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">3. <a name="3"></a> <u><em>Hand 
		Controller will not connect:</em></u><br />
&nbsp;&nbsp; If the hand controller will not connect, and is only 
		giving the message "Connecting to Gemini"</td>
	</tr>
	<tr>
		<td class="style6">
		<ol type="A"><li>
		
			make sure the hand controller is plugged into the bottom Serial Port 
			2/Graphics HC connector.</li>
			<li>
		
			If you just updated the firmware, then the micro SDcard in the HC 
			might have become corrupted. If this has happened, you will have to 
			remove the micro SDcard from the hand controller and then use an 
			external 
			micro SDcard reader/writer (normally USB device) to examine the cards contents.&nbsp; 
			Note: the only way to see the contents of the micro SDcard in the 
			hand controller is with an external reader/writer. The 
			root of the card should look like this:<br />
			<img alt="" height="88" src="gemini-images/troublingshooting/HC_root.jpg" width="152" /></li><br />
			<ol type="I">
			<li>The current.bin file indicates that the program was programmed into the ARM processor. <br />If it had 
			not been programmed, then it's name would still be gemhc.bin</li>
			<li>While the catalogs directory should have about 20 star catalogs with 
			there names ending in .guc&nbsp; All the catalog files are optional.&nbsp; 
			You can have just the ones you want.</li>
				<li>The HCfirmware directory should look like this with 37 files 
				in it.&nbsp; None of these files are optional.&nbsp; All must be 
				in the HCFirmware directory for the HC to work correctly.<br />
				<img alt="" height="344" src="gemini-images/troublingshooting/inside-hcfirmware_dir.jpg" width="700" />
				</li> 
				<li>To remove and replace the micro SDcard please see:
				<a href="http://gemini-2.com/Removing_SDCards.php" target="_blank">
				Removing Micro SDcard</a></li>
				<li>Also the micro-SDcard in the hand controller comes loose in 
				it socket.&nbsp; This is especially true of the first versions 
				of the hand controller.&nbsp; Normally simply reseating the card 
				will fix the problem.</li>
				<li>Another problem is that the RJ-12 connectors on the coiled 
				cord, becomes worn.&nbsp; They are pretty simple to cut off and 
				replace, if you have a crimper for RJ12 connectors.&nbsp; Most 
				Home Depots, Lowes and Radio Shacks carriers the connectors and 
				crimpers.</li>
				<li>Since the GFU program has now been releases, You can also 
				try first formatting the the micro-SDcard in the hand controller 
				and then use GFU to upload all new files.&nbsp; You will 
				how-ever have to have the hand controller partially working for 
				this to work.&nbsp; To format the mico-SDcard, go to Menu --&gt; 
				HC--&gt;SDcard--&gt;Format SDcard--&gt;Select Yes.&nbsp; Wait for the 
				Format to finish.&nbsp; Then open up GFU, on on the option boxes 
				only check "HC" and "catalogs," leave Gemini and Flash 
				unchecked.&nbsp; Hit the Start button.&nbsp; When the GFU 
				routines stops, unplug the hand controller and then plug it back 
				in.&nbsp; It should start uploading all the hand controller 
				files, which will take about 45 minutes or so.</li>
			</ol>
			
		</ol>
		<!--
		<ol type="a" start="3">
			<li>
		
			</li>
		</ol>
		-->
		</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;&nbsp;</td>
	</tr>
</table>
<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">4. <a name="4"></a> <span class="auto-style1"><u><em>How to Bench Test.</em></u>
		<ol type="A"><li>
		
			I prefer to do bench testing with motors removed from the mount.&nbsp; 
			Now you can safely run the Gemini-2 or Gemini-1 without motors, but 
			you can tell so much more with the motors connected.
			<ol type="I">
				<li> 
				You can almost test all the functions of the Gemini-2 on the bench this way.  Just about all of the pictures 
				taken for this web site was done this way.</li>
				<li> 
				Notice when first powering on, that the RA motor does not turn.&nbsp; 
				It only starts rotating after a boot mode is selected. (Assuming 
				you are in parking mode 0, more on this later.)</li>
				<li> 
				The RA motor turns CCW for GM-8 and G11.&nbsp; It turns CW for 
				HGM-200, Titan, Titan 50 and MI-250.&nbsp; The speed is about 1 
				revolution in 10 seconds, but depends on the mount type.</li>
			</ol>
		
		</li>
			<li>Testing the guider input:&nbsp; If you have a Classic/Standard 
			hand controller, this can be plugged into the Guider input jack.&nbsp; 
			You can use the DEC and RA button to then simulate Guider input 
			signals.<br />If you have a GPUSB from Shoestring Astronomy along 
			with there GPUSBNudge program to do the same thing.
			<ol type="I">
				<li>
				RA
				buttons will cause the RA shaft to slow down with an -RA button 
				and speed up with a +RA button.</li>
				<li>
				DEC buttons will cause the CW with Positive DEC (GM8 &amp; G11) and 
				CCW with negative DEC button (again GM8 &amp; G11)&nbsp; The other 
				mounts will be opposite.
				</li>
			</ol>
			</li>
			<li>Testing Hand Controller input.&nbsp;
			<ol type="I">
				<li>The hand controller normally connects to the Serial Port 2 
				input jack.&nbsp; The baud rate for the hand controller is 
				always 57600 baud.&nbsp; This can only be set using the Web 
				interface using the 
				<a href="http://www.gemini-2.com/web/web-serial-ports.php" target="_blank">Serial Ports tab</a>.&nbsp; Set Serial Port 2.&nbsp;</li>
				<li>Will the hand controller work into Serial Port 1, Yes, but 
				you must set the baud rate of that port to 57600.&nbsp; Serial 
				port 1 will default to 9600 baud after a firmware update, so 
				having the hand controller connected to it is not the best idea.</li>
			</ol>
			</li>
			<li>Testing Serial Port 1 for GPS connection.&nbsp;
			<ol type="I">
				<li>
				Please see this
				<a href="http://www.gemini-2.com/GPS.php" target="_blank">page</a> 
				for using the Losmandy GPS or the Star GPS unit.</li>
				<li>
				Please note that the GPS does not update the TimeZone setting.&nbsp; 
				All GPS units only return UTC time.&nbsp; The Gemini-2 then can 
				take that time and the TimeZone value you have set using either 
				the site menu or the TimeZone menu and display your local time.&nbsp; 
				If your Timezone is set wrong, then the Gemini-2 will calculate 
				the local time wrong.&nbsp; If you do not like to worry about 
				daylight saving time changing the TimeZone requirements, then 
				set the TimeZone to UTC which would be zero.&nbsp; Enter UTC 
				Time and Date manually or use a GPS unit.&nbsp; The local time 
				now will display the UTC time and date, and the G2 will be 
				happy.&nbsp; Make sure your Latitude and Longitude are correct.</li>
				<li>
				It is possible to simulate a GPS connection using programs such as GPS port director found under useful Programs. 
				This program will allow a GPS connected to a PC to be redirected to a com port connected into the Gemini-2. Your PC
				is of course going to have to have 2 serial ports.  Now one of these can be a USB style GPS unit 
				(such as the ones that used to be supplied with Microsoft 
				Streets and Maps.&nbsp; There are also many cheap USB GPS units 
				on the market.), where it's driver
				creates a virtual serial port.  Most likely, you would have to use a USB to Serial adapter for the second serial port.</li>
			</ol>
			</li>
			
		</ol></td>
	</tr>
</table>
<table align="center"  style="width: 900px">
	<tr><td>&nbsp;</td>
	</tr>
</table>

<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6"> <a name="5"></a>5. <u><em>Back After Power Fail.</em></u>
		<ol type="A">
		<li>
		Gemini has a voltage supervisor on board that is primarily used to save all important data (positional, date, time) at power-off. 
		This is necessary to allow for permanent PEC and Warm (Re)Start. 
		</li>
		<li>
		This supervisor triggers an interrupt if the voltage drops down below about 10V. 
		All GoTo operations are stopped, motors are halted, Housekeeping is done, all files are closed.
		</li>
		<li>
		G2 then enters a loop and waits for browning out (power off) or for regaining power. 
		If power comes back the message "Back after power fail" is displayed and 
		normal operation can proceed.
		</li>
		</ol>
	</td>
	</tr>
</table>
<table align="center"  style="width: 900px">
	<tr><td>&nbsp;</td>
	</tr>
</table>


<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">
		6. <a name="6"></a><u><em>ASCOM Driver won't connect:</em></u>
			<ol type="A">
			<li>
			The ASCOM Gemini.net driver normally depends on what is called "NetBios 
			Name Resolution" to find and connect to the Gemini-2 using Ethernet.&nbsp; 
			For this to work, several things have to be in place:
			<ol type="I">
				<li>
				See <a href="configuringEthernetASCOMdriver.php" target="_blank">
				Configuring Ethernet ASCOM Driver</a> and follow these steps to 
				configure the ASCOM driver for Ethernet connection.</li>
				<li>
				NetBios Name Resolution has to be enabled on the system.&nbsp;
				<a href="Enabling_netbios.php" target="_blank">Enabling NetBios</a></li>
				<li>
				DHCP is also the normal default mode for setting the IP address.
				<ol type="i">
					<li>If you are connecting directly into a laptop wired 
					connector (not using a router), you are probably
					using static IP addresses.</li>
					<li>It is possible to make Windows provide a DHCP address to 
					the Gemini-2 using "Internet Connection Sharing (ICS)." The 
					problem with this is that it normally makes the network 
					after the Laptop a Public network, which limits things.&nbsp; 
					I am not going to get into how to configure ICS here, as 
					this really depends on your Lan layout. Here are several 
					links on how to do it for Win 7.<ol type="a">
						<li>
						<a href="http://windows.microsoft.com/en-us/windows/using-internet-connection-sharing#1TC=windows-7" target="_blank">
						Using ICS with Win 7</a>.</li>
						<li>
						<a href="http://windows.microsoft.com/en-us/windows/using-internet-connection-sharing#1TC=windows-7" target="_blank">
						Set up a shared Internet connection using ICS</a></li>
					</ol>
					</li>
				</ol>
				
				</li>
			</ol>
			</li>
				<li>The UPD ports that the ASCOM Gemini.net communicates through 
				in the router have to be available and enabled.&nbsp; This is a 
				router setting, and they are normally open in most routers, and 
				because there or thousands of different routers available, this 
				cannot be covered here.</li>
				<li>The ports also must not be blocked by the Firewall.&nbsp; If 
				they are, then you will have to tell your firewall to allow 
				them. </li>
				<li><a name="Install-uninstall-driver-fails"></a>If you try to install a newer version of the ASCOM 
				Gemini.net driver, or try to uninstall the Gemini.net driver 
				using the Control Panel and get an error message that some of 
				the components are missing and the install or uninstall fails, 
				then you are going to have to use a different program to try and 
				remove the rest of the driver.&nbsp; Paul, the writer of the 
				ASCOM Gemini.net driver recommends trying VSRevo Group's Revo 
				Uninstaller.&nbsp; There is a free and paid ($39.25 for 1 
				computer) versions and portable ($69.25 for unlimited computers) 
				versions
				<a href="http://www.revouninstaller.com/revo_uninstaller_free_download.html" target="_blank">
				here.</a> </li>
			</ol>
			</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" class="tableborder1" style="width: 900px">
	<tr class="style6">
		<td>
		7. <a name="7"></a><em><u>Low Battery Symptoms:</u></em>
		<ol type="A">
			<li>
			The internal battery 
			in the main Gemini 2 unit powers both the Real Time clock and the internal CMOS-RAM both of 
			which are 
			located inside the ARM processor that is the brains of the Gemini-2.&nbsp; 
			This battery is a CR2354, and the type of holder makes it a little 
			difficult to replace in the Original Gemini-2. (<a href="http://gemini-2.com/videos/Losmandy_Gemini_Battery_CR2354.mp4" target="_blank">CR2354 
			battery change video</a>.)&nbsp;In the new Gemini-2 Mini the battery 
			type is a CR2450 and is much easier to change. (<a href="http://gemini-2.com/videos/Losmandy_Gemini_Battery_CR2450.mp4" target="_blank">CR2450 
			battery change video</a>). There is no battery in the hand 
			controller.&nbsp;&nbsp; Symptoms of a low or dead battery:</li>
			<ol type="I">
				<li>Not remember the site on power up, </li>
				<li>Comes up with the wrong time or date,</li>
				<li>Does not remember mount type,</li>
				<li>Model or PEC not remembered,</li>
				<li>GOTO's are erratic</li>
				<li>Forced Cold Start. </li>
				<li>There could be many other problems caused by this also.</li>
			</ol>
			<li>Replace this battery when the battery level scale shows it to be 
			2.75 volts or lower.&nbsp; You find this reading on the Web 
			interface under Battery, Ports tab. See
			<a href="/web/web-battery-ports.php" target="_blank">web battery, 
			ports</a> as an example.</li>
			<li class="style6Red">IMPORTANT: As soon as you have replaced the battery, 
			<em><u>Please power on the Gemini-2 and set the time and date.</u></em> If you don't it is possible 
			that the ARM processor will try and draw a lot of power from the 
			battery, and could cause internal damage.</li>
			<li class="style6">To Remove the front panel requires a 1/16 inch 
			Allen Wrench.&nbsp; They can be ordered from Losmandy for&nbsp; a 
			small fee plus shipping.</li>
		</ol>
		</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<!--
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
-->
<table align="center" class="tableborder1" style="width: 900px">
	<tr class="style6">
		<td>
		8. <a name="8"></a><em><u>Forced Cold Start:</u></em>
		<ol type="A">
			<li>
			The internal battery 
			in the main Gemini 2 unit powers both the Real Time clock and the internal CMOS-RAM both of 
			which are 
			located inside the ARM processor that is the brains of the Gemini-2.&nbsp; 
			This battery is a CR2354, and the type of holder makes it a little 
			difficult to replace in the Original Gemini-2. (<a href="http://gemini-2.com/videos/Losmandy_Gemini_Battery_CR2354.mp4" target="_blank">CR2354 
			battery change video</a>.)&nbsp;In the new Gemini-2 Mini the battery 
			type is a CR2450 and is much easier to change. (<a href="http://gemini-2.com/videos/Losmandy_Gemini_Battery_CR2450.mp4" target="_blank">CR2450 
			battery change video</a>). There is no battery in the hand 
			controller.&nbsp;&nbsp; Symptoms of a low or dead battery:</li>
			<ol type="I">
				<li>Forced Cold Start. Also this can also happen on Gemini-1 
				systems as well.</li>
				<li>Not remember the site on power up, </li>
				<li>Comes up with the wrong time or date,</li>
				<li>Does not remember mount type,</li>
				<li>Model or PEC not remembered,</li>
				<li>GOTO's are erratic </li>
				<li>There could be many other problems caused by this also.</li>
				
			</ol>
			<li>Also there is a selection menu on the hand controller "Menu 
			--&gt;Startup --&gt;Cold Start" that will force a startup in cold start.&nbsp; 
			Like wise, the Web interface also has this same selection. Also see 
			at the bottom of page
			<a href="http://www.gemini-2.com/web/web-mount.php" target="_blank">
			http://www.gemini-2.com/web/web-mount.php</a> for an example.&nbsp;It's 
			normal selection is "Ask if Possible".&nbsp; 
			If you have your Gemini-2 connected via Ethernet, then
			<a href="http://gemini/mountpar.cgi" target="_blank">http://gemini/mountpar.cgi</a> 
			will take you to the web interface page. You will have to log in.</li>
		</ol>
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">
		9. <a name="9"></a> <u><em>
		Some Screens of HC not functioning after firmware update:</em></u><br />
&nbsp;&nbsp; If 
		some or most of the screens in the hand controller are malfunction after 
		a firmware update then the micro-SDcard in the hand controller is 
		probably corrupt.&nbsp; Do the following steps to try and recover and 
		redo the hand controller.</td>
	</tr>
	<tr>
		<td class="style6">
		
		<ol type="A">
		<li>
			make sure the hand controller is plugged into the bottom Serial Port 
			2/Graphics HC connector.</li>
			
			<li>
			If you just updated the firmware, then the micro SDcard in the HC 
			might have become corrupted. If this has happened, you might be able 
			to recover by doing a format of the Micro-SDcard.&nbsp;</li>
			<ol type="a">
				<li>On the Hand Controller Main Screen, Select "Menu" =&gt; "HC" =&gt; 
				"SD Card" =&gt; "Format SDcard" =&gt;"Yes"&nbsp; This will do an 
				internal format of the micro-SDcard in the hand controller unit.
				</li>
				<li>
				Now we are going to use GFU firmware download program twice. So 
				bring up the GFU program and make sure the IP address the 
				location of the Download are correct.
				</li>
				<li>Now uncheck all the 
				check boxes except HC.&nbsp; Your GFU screen should look similar 
				to this: 
				</li>
				
				</ol>
			</ol>
			</td>
			</tr>
	</table>
	<table  align="center" style="width:900px">
	<tr>
		<td class="style6">
			<img alt="" height="380" src="gemini-images/troublingshooting/gfu_first.jpg" width="900" />
			</td>
		</tr>
	</table>				
	<table  align="center" style="width:900px">
	<tr>
		<td class="style6">

			 <p class="auto-style3">d. Hit the "Start" Button<br />
			e.  and then let GFU go through Download, Extract, and Upload.<br />
			f. Now unplug the hand controller, and then plug it back in.&nbsp; 
				It should start uploading programs into the hand controller, and 
				also flash itself.<br />
							g. Now we need to do the same thing except 
				with the catalogs of the hand controller.<br />
			h. Open GFU back up and unselect all the checkboxes except catalogs.
			 </p>
			</td>
			</tr>
			</table>
				
	<table  align="center" style="width:900px">
	<tr>
		<td class="style6">
		<img alt="" height="422" src="gemini-images/troublingshooting/gfu_second.jpg" width="900" />
		</td>
	</tr>
</table>
	<table  align="center" style="width:900px">
	<tr>
		<td class="style6">
				i. Hit the "Start" Button, and then let GFU go through 
				Download, Extract, and Upload <br />
				j. Again unplug the hand controller and plug it back in. 
				It will start uploading all the catalogs to the hand controller 
				from the main unit. The catalog files are large, and this 
				can take an hour or so.
		</td>
	</tr>
</table>


<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">
		</td>
	</tr>
	<tr>
		<td class="style6">
		
		<a name="Removing_Virus_or_Malicious_Software"></a><u>Removing Virus or 
		Malicious Software</u>:
If you suspect that your Windows computer has a virus or 
			Malicious Software, Microsoft has two tools that can help you get 
			rid of it.<br />
		<ol>
			<li>Windows Defender Offline <a href="http://windows.microsoft.com/en-US/windows/what-is-windows-defender-offline" 
			target="_blank">http://windows.microsoft.com/en-US/windows/what-is-windows-defender-offline</a></li>
			<li>Malicious Software Removal tool <a href="http://www.microsoft.com/security/pc-security/malware-removal.aspx" 
			target="_blank">http://www.microsoft.com/security/pc-security/malware-removal.aspx</a></li>
		</ol>
		<p>I suggest that you use custom scan and only scan one drive at a time.&nbsp; 
		If the scan does not complete you will loose the results of the scan.</p>
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">
		10. <a name="10"></a><em><u>Calibrating the Screen:</u></em> If the 
		screen changes languages when pushing on it, the the most probable cause 
		is that the screen touchpad calibration is way off.&nbsp; This is pretty easy to fix.&nbsp; 
		Just turn off the Gemini-2 and turn it back on while watching the Hand 
		controller.&nbsp; The second screen displayed will be the calibration 
		screen.&nbsp; You need to touch in the center of it, to start the 
		calibration routine.&nbsp; You have to be fast as this screen is only 
		displayed for about 1 second if you do not touch it.&nbsp; After 
		touching it, it will give you three calibration points to touch, each on 
		a seperate screen.&nbsp; I recommend using a stylus to do this.
		Then there will be a final screen that will go-away with a count down 
		timer.&nbsp; This should fix the problem.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>

<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">
		11. <u><em>
		Mount Rejecting stars:</em></u><br />
&nbsp;&nbsp;&nbsp; If your mount 
		is rejecting stars telling you they are not reachable, please check these items. 		
		<ol type="A">
			<li>Make sure your Latitude, Longitude, and Timezone are set 
			correctly.<br />See
			<a href="http://www.gemini-2.com/hc/E019.php" target="_blank">
			site menu</a>.&nbsp; On HC, Menu--&gt;Site</li>
			<li>Make sure you Local and UTC times are showing correctly on the 
			Web interface.<br />See 
			<a href="http://www.gemini-2.com/web/web-site-time.php" target="_blank">
			Site/Time</a> on the Web interface.</li>
			<li>Make sure that your mount type is selected correctly, 
			<br />See	<a href="http://www.gemini-2.com/hc/En-mounttype.php" target="_blank">
			mount type menu</a>. On HC, Menu--&gt;Mount--&gt;Type</li>
			<li>Make sure your limits are set correctly. See
			<a href="http://www.gemini-2.com/limits.php" target="_blank">Limits</a>.</li>
			
			<li>If you have just done a firmware upgrade, Please make sure you 
			have done a
			<a href="http://www.gemini-2.com/web/web-firmware-sram.php" target="_blank">
			SRAM Reset</a> at the bottom of the Web interface page Firmware/SRAM.&nbsp; </li>
			<li>Make sure your battery is good.&nbsp; See <a href="#7">Low Battery Symptoms</a></li>
			<li><a name="2a"></a>If all the above is correct, and the mount 
			still rejects stars, Please try entering your time and date as UTC, 
			and set the time offset to ZERO</li>
		</ol></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">
		12. <a name="12"></a> <u><em>
		DEC or RA misbehaving:</em></u><br />
&nbsp;&nbsp;&nbsp; If your mount 
		DEC or RA misbehaving, please check these items. 		
		<ol type="A">
			<li> That the motor cables are in the correct place. The DEC is the TOP motor.  Don't feel bad if you get them backward. It happens all the time.
			
			
			</li>
			<li> DEC or RA not moving, Getting a STALL message.&nbsp; This 
			indicates that you probably have one of 3 things wrong.
			<ol type="a">
				<li>You have a bad motor cable.
				</li>
				<li>You have a bad motor. This has many indications, some of them very strange.<ol type="i">
					<li>If the motor still turns, but seems to go twice as far 
					as it should, then the encoder is bad.&nbsp; This is a very 
					rare case but does happen. (it indicates only one of the 
					encoder sensors is working. This provides only half the 
					pulses it should, so the motor has to turn twice as far to 
					satisfy the Gemini-2 encoder count.)</li>
					<li>If the motor starts off spinning at high speed, the 
					encoder is probably bad.&nbsp; This happens most often. (if 
					the Gemini-2 receives no encoder pulses it commands more 
					current to the motor. That makes the motor start spinning 
					wildly.&nbsp; Sometime a DEC motor will only do this when 
					commanded to move.)</li>
					<li>If the motor will not move and you are getting STALL 
					warning, then the motor winding, or connector might have 
					gone bad.<br />
					</li>
				</ol>
				</li>
				<li>The internal driver inside the Gemini has gone bad.</li>
			</ol>
			
			
			</li>
			
			<li>DEC or RA not moving, but no STALL message.&nbsp; Check that the 
			OLDHAM coupler is not slipping on the worm shaft.&nbsp; It is 
			between the worm and gearbox.</li>
			
		</ol></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">13. <a name="13"></a> <u><em>
		Motor Stall Faults:</em></u><br />
&nbsp;&nbsp;&nbsp; If your mount 
		RA or DEC is having motor stall faults, here is a couple of suggestions. 		
		<ol type="A">
			<li> Ensure the power supply is sufficient in voltage and amperage. 
			Many forum posters recommend at least 15V and 4-5 Amps minimum, and 
			so do I.</li>
			<li> &nbsp;Use slower slewing speeds with 12V supplies.&nbsp; If you 
			are using only a 12V power source and have the stall faults.&nbsp; 
			Lowered the slewing speeds to 500 for RA and DEC and see if this 
			clears the .</li>
			
		</ol></td>
	</tr>
</table>
<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style6">14. <a name="14"></a> <u><em>
		Ethernet Problems:</em></u><br />
&nbsp;&nbsp;&nbsp; If you are using an USB to Ethernet adapter. 		
		<ol type="A">
			<li> Ensure that the computers Advanced Power setting: "USB selective suspend setting" is set to disabled.&nbsp; 
			See Image. 
			<a href="ethernet_connections.php#Turn_off_USB_suspend" target="_blank">See image</a>.</li>
			<li> Make sure the drivers you are using is the latest.</li>
			
		</ol></td>
	</tr>
</table>

<table align="center" class="tableborder1" style="width: 900px">
	<tr>
		<td class="style7">
		<a href="http://download.teamviewer.com/download/TeamViewerQS_en.exe" target="_blank">Teamviewer Quick Support download</a>
		</td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7">
		Page last updated on May 31, 2018
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



