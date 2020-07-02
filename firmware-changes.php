<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Firmware changes for Gemini 2</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>

<style type="text/css">
.auto-style1 {
	margin-left: 80px;
}
</style>

</head>

<body style="color: #FFFFFF; background-color: #000000">
<table align="center" style="width: 900px">
	<tr>
		<td class="h2">
			<br/>
				Gemini 2 Firmware Changes</td>
	</tr>
</table>
	<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			
			<em>There is no guarantee that this list is complete.</em>&nbsp; 
			Latest changes listed first.<br />
			</td>
			</tr>
</table>				

<hr class="style2" style="width: 900px" />


<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul>
				<li>
				March 12 2017  Firmware Version Level 1.20 Hand Controller<ul>
					<li>&nbsp;new mainboard firmware to to support the new G11T 
					and G811 mount combinations. , </li>
					<li>&nbsp;This new firmware also supports all the older version mounts except the Titan 25, which has been removed from this firmware.</li>
				</ul>
				
				</li>
				</ul>
			</td>
			</tr>
</table>
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul>
				<li>
				March 12 2017 Firmware Version Level 5.21 Main Unit<ul>
					<li>&nbsp;new mainboard firmware to to support the new G11T 
					and G811 mount combinations. , </li>
					<li>&nbsp;This new firmware also supports all the older version mounts except the Titan 25, which has been removed from this firmware.</li>
				</ul>
				
				</li>
				</ul>
			</td>
			</tr>
</table>

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul>
				<li>
				August 23, 2016  Firmware Version Level 5.21 <ul>
					<li>&nbsp;new mainboard firmware to improve the GoTos (starting the 
					RA axis one after the DEC axis to reduce current drain, </li>
					<li>&nbsp;improve satellite 
				tracking by getting rid of leap-frogging, </li>
					<li>&nbsp;getting rid of the 
				worm contact problems by slightly overshooting targets to the East 
					then stopping and moving to the west at centering speed till 
					target is reached, then continuing at side rail speed. This 
					will ensure gears are fully messed at start of side rail 
					tracking.</li>
					<li>&nbsp;and also implemented an Network Time Protocal (NTP) 
					to receive time/date from the many NIST Internet Time 
					Services for time/date 
				setting at startup and over the web interface&nbsp; See
					<a href="hc/E023.php" target="_blank">HC time/date</a>,
					<a href="web/web-NTP.php" target="_blank">web-NTP</a>,

					<a href="web/web-network.php" target="_blank">web network</a> 
					and
					<a href="http://gemini-2.com/web/web-site-time.php" target="_blank">
					web site/time</a>.<ul>
						<li>If a NIST Internet Time Server IP addtess has been 
						set up in the Gemini-2 Network Web page, then at boot 
						up, the Gemini-2 will go out to that NIST Internet Time 
						Server IP address and get the current UTC time and Date,</li>
					</ul>
					</li>
				</ul>
				
				</li>
				</ul>
			</td>
			</tr>
</table>
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul>
				<li>
				August 6, 2016<ul>
					<li>&nbsp;two new catalogs added.  Barnard catalogs and a revised LDN_EN with additional objects added.</li>
					<li>Small change to hand controller to allow proper display 
					of Barnard catalog.</li>
				</ul>
				
				</li>
				</ul>
			</td>
			</tr>
</table>





<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul>
				<li>Main unit Version Level 5.2 dated July 2015 and hand 
					controller Version 1.2 dated 14 Feb 2016 was released 23 Feb 
					2016 to everyone.
				</li>
				</ul>
			</td>
			</tr>
</table>

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>Feb 18, 2016</li>
					<ul><li>Main web pages updated to show new firmware dates.</li>
						<li>The Gemini Firmware Update program removed from Web 
						interface.</li>
					</ul>
				</ul>	
			</td>
			</tr>
</table>

<!--<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>date</li>
					<ul><li>Fix</li>
					</ul></ul>
			</td>
			</tr>
</table>
-->

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>Feb 14 2016</li>
					<ul><li>PAC has a little more fine tuning done.&nbsp; Please 
						note that PAC is not going to get you as close as a 
						drift alignment.&nbsp; It will probably get you within 5 
						arc-mins.&nbsp; For more polar alignment methods' please 
						see <br /> "Manuals/Tips/Misc"--&gt;"Polar Alignment Tips"</li>
					</ul></ul>
			</td>
			</tr>
</table>
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>Feb 08 2016</li>
					<ul><li>PAC has been redone. René found a bug and also updated the 
						mathematics. René said his testing even impressed him.</li>
					</ul></ul>
			</td>
			</tr>
</table>



<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>Jan  14 2016</li>
					<ul><li>Hand-Controller update: Some of the return paths for the back buttons was corrected for the Jan 3 update.</li>
					</ul></ul>
			</td>
			</tr>
</table>
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>Jan 03 2016</li>
				<ul>
					<li>Hand-Controller update: A checkbox has been added to the PEC menu 
						which will allow PEC to start with tracking if checked.
					</li>
					<li>At the bottom of the Park screen, is a new button called Park Modes.
						It will take you to a new screen that will let you select how you get out
						of a parked condition. See
						<a href="hc/E014.php" target="_blank">Park screen</a> and 
						<a href="hc/E014b.php" target="_blank">Park mode</a>.
					</li>
				</ul>
				</ul>
			</td>
			</tr>
</table>

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>Dec 28 2015</li>
					<ul>
						<li>&nbsp;Hand-Controller update: A new System Screen that 
						replaces the Site Screen.&nbsp; This screen adds some control to 
						the HC that has previously only been in the Web interface.&nbsp; 
						This is mainly the ability to: 
					<ol type="a">
						<li> Store the SRAM contents into the Micro SDcard of the main unit,
						</li>
						<li>the ability to reload these stored values, 
						</li>
						<li> The ability to reset the Gemini-2 to Default HGM200 values.&nbsp; 
						</li>
					</ol>
						<li> At the top of the screen is buttons to go to previous "Site," "Time," 
							and "Network" screens.&nbsp; You can see this in the
							<a href="hc/index.php" target="_blank">Hand Controller Tutorial</a>.
						</li>
					</li>
				</ul>
				</ul>
			</td>
			</tr>
</table>

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>22 July 2015
				<ul><li>Option to start PEC when when tracking starts. Only from 
					the <a href="web/web-functions.php" target="_blank">Function page</a> of the Web interface at this time. 
					A new version of the
					<a href="http://www.gemini-2.com/Gemini2_drivers/GeminiTelescopeInstaller.exe" target="_blank">
					ASCOM Gemini.net driver</a> now supports this feature.&nbsp; 
					It is under Tracking on the Advanced Menu. The
					<a href="http://www.gemini-2.com/Gemini2_drivers/Gemini_Telescope_Net_Installation_and_Operation.pdf" target="_blank">
					ASCOM manual</a> was also updated.</li>
					<li>Fixed a state bug in the PEC routine that stopped PEC 
					when least expected.</li>
					<li>New <a href="web/L5V1serial.html" target="_blank">Serial commands</a> added:<ul>
						<li>51 - Return 0 for original Gemini-2, Return 1 for 
						Gemini-2 Mini.</li>
						<li>321 - Return Main Battery Voltage in Volts, This is 
						floating Point value.</li>
						<li>322 - Return Lithium battery Voltage in Volts. This 
						is floating Point value.</li>
						<li>508 - Enable (1) or disable (0) PEC Playback at boot 
						time, if PEC data is available.</li>
					</ul>
					</li>
					<li>Updated 
					<a href="downloads/CGICodes/CGIcodes.txt" target="_blank">CGIcodes.txt</a> file.</li>
					<li>The Keil middleware still has a bug in file handling, 
					especially erasing an old file if it is opened in write 
					mode. René added a workaround for writing the Gemini.cfg and 
					the model file.</li>
					</ul></li>
				</ul>
			</td>
			</tr>
</table>

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>5 July, 2015</li>
					<ul>
					<li>The Hand Controller info page page now tells you what 
					processor is being used.&nbsp; This indicates which model of 
					hand controller you have.&nbsp; If it says "Himax Graphic chip 
					detected"&nbsp; under the build date, then you have the new 
					version the Losmandy designed from scratch.&nbsp;This 
					version started shipping sometime in 2012.&nbsp; If it says 
					anything else, or does not say anything then you have one of the older versions.
					</li>
						<li>The HC screen for the newer version (Himax Graphic 
						chip, Green PCB) of the hand controller can be rotated 
						180°.&nbsp; Use the Menu--&gt;HC--&gt;Display screen, and at the 
						bottom of the screen is a place to put a checkmark to 
						flip the screen.&nbsp; Once this is done, for it to stay you 
						have to hit the "Back" button then "Store Setting". <span class="style3">
						Caution: 
						Screen Calibration has to be done in non-flipped mode</span>.
						<a href="hc/En-hcdisplay.php" target="_blank">
						Example page</a>.&nbsp; <span class="style3">&nbsp;The screen calibration must never be done when the 
						screen is in the flipped mode (cord coming out the top).</span> </li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
	<table align="center" style="width: 880px">
		<tr><td class="style6">
				<a name="LowBattery"></a>
				<ul><li>3 July 2015
			</li>
		
		<ul>
			<li>Bug fix of the Clock Frequency fixed.&nbsp; The Time displayed on the 
			lower right of the main screen should remain constant now.&nbsp; The main 
			unit time is what all GOTO are calculated from, and it maintains 
			correct time.&nbsp; Only the hand controller had this bug.</li>
			
			<li>
				Bug fix: The hash, CR, LF, NL signs of object information of 
				catalog objects are no longer displayed.
			</li>

				
			<li>The hand controller has new battery warning screens. There are 
			two, a yellow one for when the Battery is between 2.7V and 2.5V, and red if battery is 
			2.5V or less. They stay on the screen for about 40 Seconds. <br />
			You must have updated the main unit to Level 5.2, 23 June 2015 or 
			newer firmware for these to work. If you have not then you will get a message 
			from the hand controller to 
			<a href="http://www.gemini-2.com/hc/En-update-main-board-firmware.php" target="_blank">update the main board firmware</a>. The hand controller version must also be V1.2 dated 5 July 2015 or newer. </li>
		</ul>
		</ul>
		</td>
	</tr>
</table>

	<table align="center" style="width: 880px" >
		<tr>
		
		<td class="style7">
				 Here is the below 2.7V warning image<br />

				<img alt="" height="583" src="hc/En-Images/Battery-below-2_7V.jpg" width="430" />				
				</td>
				<td class="style7">
				 Here is the below 2.5V 
				 warning image<br />

				<img alt="" height="583" src="hc/En-Images/Battery-below-2_5V.jpg" width="430" />			
				</td>
				</tr>
				</table>
		</td>
	</tr>
</table>


<table align="center">
	<tr>
		<td class="style7">
		
		New L5.2 Firmware above this Line</td>
	</tr>
</table>
		<hr class="style16" style="width: 800px" />
<table align="center">
	<tr>
		<td>
		
		</td>
	</tr>
</table>

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>15 Feb 2015</li>
				<ul>
				<li>Web interface updated to include the Videos Losmandy 
					produced. </li>
					<li>Web interface updated to include the Mobile Hand 
					Controller.
				</li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				


<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>5 Nov, 2014</li><ul>
					<li>When the Gemini-2 Mini was released, René made the 
					necessary changes to support it's wiring changes.&nbsp; He also 
					made it backwards compatible with the Original Gemini-2 
					versions.&nbsp; No changes was made to add and features or fix 
					anything except the wiring changes for the Gemini-2 Mini.</li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				


<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>1 May, 2014</li>
				<ul>
					<li>Gemini Firmware Updater is now also stored on the micro-SDcard, 
				and can be installed from the Gemini-2 onto you computer 
				(Windows only for this version).&nbsp; It is selected from Tab 
				GFU, of the Web interface.&nbsp; It makes no change in version 
				dates. </li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>23 Feb, 2014</li><ul>
					<li>Fix the Start tracking in the web interface for all three stop 
				modes </li>
					<li>A new script that sets all three passwords from the given input. 
				The telnet password can be changed by using telnet, no separate change is possible for ftp yet.<br />
					</li>
					<li>A German page updated to show motor cgi page published.</li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>20 Feb, 2014</li><ul>
					<li>The Modeling Functions has been updated to fix a bug in the hand 
				controller.</li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				

<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>Oct 25, 2013</li><ul>
					<li>The buttons on the
					<a href="ClassicHandController.php" target="_blank">classic hand 
				controller</a> have been made to react the same as they did with 
				the Gemini-1 system.</li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				


<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>30 Sept, 2013</li><ul>
					<li>Corrections to HC Bookmark screen and HC cosmetics </li>
					<li>The delete model buttons now only delete the selected model, 
				either east or west. This is implemented in both the hand 
				controller and the web interface.</li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				


<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>22 Aug, 2013</li><ul>
					<li>Adaptive tracking on the HC.
			If you GOTO Sun, tracking is changed to Solar, for Moon to Lunar, 
			all other objects to Sidereal.&nbsp; </li>
					<li>Limited Comet Tracking is implemented.<br />Comet Tracking - On hand controller 
				Menu--&gt;Track--&gt;Comet/User Defined</li>
					<li>The tactual buttons on the back of the hand controller is now 
				active in the Balance menu and also the RA tactual buttons are 
				now active on the Hand controller Limits menu.<span class="smalltext">
					</span></li>
					<li>There have been many internal improvements.
				</li>
					<li>Micro-SDcards up to 32Gbytes now work in both the hand 
				controller and main unit. Please make sure you use a premium 
				brand, such as Panasonic, SanDisk, Toshiba or Kingston if you 
				do.&nbsp; </li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				


<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
				<ul><li>13 Aug, 2013
				</li>
				<ul>
					<li>New parking levels 0,1, 2.<br />While the mount resumed tracking in the former (now level 0) parking 
			mode at every button touch, there are two additional parking levels.<br />Level 1 allows that GOTO commands are executed and resume tracking.<br />Level 2 insist on an Unpark 
					command. This function is available at the HC, 
			the GoTo button changes to Unpark as long as the mount is parked. It 
			is also available at the Park screen, and in the ASCOM Gemini.net 
			driver (1.0.51.0 and later).</li>
					<li>Serial status command &lt;97 was extended (it returns 8 instead of 6 
			characters now, there's no change in the ENQ macro).</li>
					<li>Serial command 92 was added for managing the parking level. There's 
			no selection for parking levels on the HC yet, it must be done using 
			the serial command over a communication path, ASCOM or the Functions 
			web page.</li>
					<li>Ruggedized TCP socket support.&nbsp;<br />The transparent socket access, using the serial commands, over the 
			default TCP port 4030 has been extended in several ways. First, Keil 
			reacted to the error reports René sent while trying to connect to 
			Southern Stars' Sky Safari. In fact, SkySafari is programmed in a 
			really cruel way that René now uses to shock his students: For each command 
			(like :GR# or :GD#) a TCP socket is opened, then these few bytes are 
			put into the output buffer and the socket is closed. Keil was not 
			prepared for this behavior (although it complies to RF793), but now 
			they are.<br />It's evident (and you can watch the socket port numbers climb up 
			quickly on the Network Statistics web page) that opening and closing 
			several sockets a second doesn't improve SkySafari's performance, 
			but this is the problem of Southern Stars. The iPhone 4 Rene tested 
			with reacts pretty lame.</li>
					<li>There are good news about using 
					<a href="http://www.stellarium.org/" target="_blank">Stellarium</a>. This is a really 
			nice free planetarium program that works on Linux, Mac and Windows. 
			For Windows, there is a 
			<a href="http://www.welshdragoncomputing.ca/index.php?option=com_content&amp;view=category&amp;layout=blog&amp;id=31&amp;Itemid=39" target="_blank">StellariumScope</a> software available that 
			connects over ASCOM. In René's tests it worked flawlessly over ASCOM and 
			Ethernet. René started to work on a Linux driver, once available it 
			should be possible to port it to MacOS.</li>
					<li>Since the transparent sockets are not password protected, René has added 
			some features to switch them off (by setting the TCP port to zero) 
			and to specify a peer IP address to reject all other hosts. In the 
			future this will be possibly to specify a range of IP 
			addresses (similar to a firewall rule).</li>
					<li>Protection for UDP:
			The same security measures (switching off by setting the port to 
			zero and selecting a peer IP) apply here. <br />The settings (both UDP and TCP) can be done over the Network web 
			page. </li>
					<li>Sebastian Mrozek contributed professionally designed buttons for the 
			HC. They replace the built-in buttons. <span class="smalltext">(Aug 22, 2013)</span></li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				



<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>22 Jun 2013</li><ul>
					<li>The HC has a new 
					<a href="hc/En-balance.php" target="_blank">Balance Menu.</a>&nbsp; See Menu--Mount--&gt;Balance 
					<span class="x-smalltext">(See note 1 )</span></li>
					<li>The HC now starts up in the Centering speed.</li>
					<li>The <strong>default mount type is now G11</strong></li>
					<li>The Model building menus have been reworked.</li>
					<li>The Dec calibration and Dec guiding has been reworked.
					</li>
			</ul></ul>
			</td>
			</tr>
		<tr><td class="smalltext">
			
				<p class="auto-style1">NOTE 1: This menu will not function if the Servo processors, (Separate 
				from the ARM processor) has not been programmed with the 
				firmware for them that was released around Sept 2012. This 
				firmware requires a separate hardware PIC programmer and special 
				cables to install this 
				firmware and is not part of any firmware download for either the 
				main unit or hand controller.&nbsp; All newer Gemini-2 units are shipped with 
				this firmware installed. If your balance menu functions, 
				then you have it.</p>
			</td></tr>
</table>
<!--				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>date Here</li><ul>
					<li>change </li>
					<li> </li>
					<li> </li>
					<li> </li>
					<li> </li>
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>date Here</li><ul>
					<li>change </li>
					<li> </li>
					<li> </li>
					<li> </li>
					<li> </li>
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>date Here</li><ul>
					<li>change </li>
					<li> </li>
					<li> </li>
					<li> </li>
					<li> </li>
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>date Here</li><ul>
					<li>change </li>
					<li> </li>
					<li> </li>
					<li> </li>
					<li> </li>
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>Aug 20, 2010</li><ul>
					<li>Added most functionality of HC using Serial commands </li>
					<li>Web interface </li>
					<ul>
						<li>Can now click on catalog data to move it to textbox 
						</li>
						<li>Added Solar System Objects </li>
					</ul>
					
					
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>Aug 19, 2010</li><ul>
					<li>Modified HC Dimming</li><ul>
						<li>Made PWM Frequench 100Hz </li>
					</ul>
					
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>Aug 15, 2010</li><ul>
					<li>ASCOM Driver Update 
					<ul>
						<li>Added the Ethernet port support </li>
					</ul>
					</li>
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>Aug 14, 2010</li><ul>
					<li>Web interface 
					<ul>
						<li>Added Roberts HC emulation </li>
						<li>added SRAM reset for HGM and MI-250</li>
					</ul>
					</li>
					</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>Aug 10, 2010</li><ul>
					<li>HC Update 
					<ul>
						<li>Updated the screen calibration </li>
						<li>Menu -> Setup -> HC screen Radio buttons larger  </li>
						<li>Added a Dim button to reduce the backlight </li>
					</ul>
					</li>
					
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>Aug 4 2010</li>
				<ul>
					<li>Main board updates 
					<ul>
						<li>Serial Command set pretty complete, except are obs log commands, PEC and native command 220 for setting limits. 
						</li>
						<li>Physical Goto Park is implemented </li>
						<li>A bug in the precession calculations was removed 
						</li>
						<li>GoTo's can be interrupted using the classical HC and the :Q# command. 
						</li>
					</ul>
					</li>
				</ul>
			</ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>Aug 2, 2010</li><ul>
					<li>Firmware updates for both HC and Main units 
					<ul>
						<li>More forgiving syntax check for :Sr and :Sd commands. An asterisk is 
						accepted as a delimiter, also colon and degree sign. 
						</li>
						<li>TheSky6 should GoTo now, as my EXphem does. </li>
						<li>Completed SRAM checksum recalculation calls that site settings does not cause a CMOS reset 
						</li>
						<li>Added web commands for moving the mount</li>
					</ul>
					</li>
					
					<li>Robert developed a Hand controller for the Web interface 
					and Rene did CGI interface for it. </li>
					
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr>
			<td class="style6">
			<ul>
				<li>July 31, 2010</li>
					<ul>
					<li>HC Boot Loader update to fix some bugs </li>
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>July 29 2010</li><ul>
					<li>USB PC Driver provided </li>
			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>July 29 2010</li><ul>
					<li>USB PC Driver provided </li>
			</ul></ul>
			</td>
			</tr>
</table>				


<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>July 27 2010</li><ul>
					<li>Hand Controller change<ul>
						<li>Time Display in lower right corner </li>
						<li>Go To button now Functional </li>
						<li>Only Solar System button works </li>
						<li>Time Menu Corrected </li>
					</ul>
					</li>
			</ul></ul>
			</td>
			</tr>
		<tr><td class="style6">
			&nbsp;</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>July 22 2010</li><ul>
					
					
					<li>The Gemini-2 has a Web interface and Ethernet </li>

					<li>The web interface only accepts Static IP addresses</li>
					<li>What the Gemini-2 is missing that the Gemini-1 has. 
					<ul>
						<li>Mount Modeling </li>
						<li>Tracking Rate Calculations </li>
						<li>GoTo is partially working, no commanded meridian flip yet, Western
						Safety limit is ignored. </li>
						<li>No PEC yet </li>
					</ul>
					</li>
					

			</ul></ul>
			</td>
			</tr>
</table>				
<table align="center" style="width: 900px" class="tableborder1">
		<tr><td class="style6">
			<ul>
				<li>Jun 9 2010</li><ul>
					<li>Received first beta type </li>
			</ul></ul>
			</td>
			</tr>
</table>				
-->
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Sept 12, 2016
		</td>
	</tr>
</table>


	
<br />
</body>




<?php include("bottom.php"); ?>



