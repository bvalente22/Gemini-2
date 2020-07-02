<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>G2 Serial Port Modes</title>

<style type="text/css">
.auto-style2 {
	color: #00FF00;
}
.auto-style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: medium;
	text-align: left;
	color: #FFFF00;
	margin: 10px;
}
</style>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />

</head>

<?php include("topv.php"); ?>


<body style="color: #FFFFFF; background-color: #000000">

<table align="center" style="width: 900px">
	<tr>
		<td class="h2">
			Front Panel Layout
			and Descriptions For The Gemini-2 Mini Version</td>
	</tr>
	<tr>
		
<hr class="style2" style="height: 4px" />
<table align="center" style="width: 900px">
	<tr> 
	<td class="auto-style3">Please be aware that the Gemini-2 main unit contains 
	a battery that powers the processors internal CMOS RAM and Timer functions 
	when the Gemini-2 is powered off. It is important to keep this battery 
	fresh.&nbsp; It uses a CR2450. You should always have a spare on 
	hand, so take the time and order a couple now.
	You won't regret doing that. They have a nice self life.</td> </tr>
</table>
<table align="center" style="width: 900px">
	<tr> 
	<td class="style6">Please read the text below the picture for an explanation of the connectors 
	use, or click on a connector to be taken to the description of that connector. 	The bottom 
	paragraph gives some important information on the internal battery.</td> </tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		
		<!--<a href="gemini-images/Frontpanel/Gemini-2_Front_Panel_pinouts.jpg" target="_blank">-->
		<map id="ImgMap0" name="ImgMap0">
			<area coords="751, 188, 887, 265" href="#Power_jack" shape="rect" />
			<area coords="25, 230, 187, 365" href="#Autoguider_input" shape="rect" />
			<area coords="428, 768, 536, 863" href="#USB_port" shape="rect" />
			<area coords="26, 369, 187, 503" href="#Feature_Port" shape="rect" />
			<area alt="" coords="282, 729, 420, 862" href="#Ethernet_Port" shape="rect" />
			<area coords="24, 665, 188, 823" href="#HC Port" shape="rect" />
			<area coords="27, 508, 183, 663" href="#Serial/GPS" shape="rect" />
			<area coords="96, 60, 277, 173" href="#PortE" shape="rect" />
			<area alt="" coords="418, 18, 553, 131" href="#DEC_connector" shape="rect" />
			<area alt="" coords="607, 15, 749, 129" href="#RA" shape="rect" />
			<area alt="" coords="544, 784, 671, 853" href="#USB-A" shape="rect" />
		</map>
		<!--<a href="gemini-images/Frontpanel/Gemini-2_Front_Panel_pinouts.jpg" target="_blank">-->
		
		<img alt="" height="900" src="gemini-images/Frontpanel/Thumbnails/Gemini-2_Mini_Front_Panel_Drawing_small.jpg" width="900" usemap="#ImgMap0"  /><br />
		Fig 1. For a larger image click 
		<a href="gemini-images/Frontpanel/Gemini-2_Mini_Front_Panel_Drawing.jpg" target="_blank">here</a>.
		</td>
	</tr>

		<tr><td class="style6"><br />
		All the connector pin-outs are referenced from the Gemini-2 itself, 
			looking down on the front panel.  This means if a pin is labeled TXD then it
		is an output.  Pins labeled RXD are inputs.
		</td></tr>

		<tr><td class="style6">
		
			<hr />
		
		<br />Jack (Jack Socket) descriptions: Starting at top Left going 
			clockwise.<br />
			<ul>
				<li>&nbsp;<strong><a name="PortE">Port E</a></strong> - 
				<span class="style3">THIS IS 
				NOT AN ETHERNET CONNECTION. DO NOT PLUG A ETHERNET CABLE INTO THIS JACK.</span> This jack can 
				only be set up to detect external limit switches, 
				and stop the mount if any one is detected.&nbsp; It functions 
				just the same as the Gemini-1 Encoder input jack for this 
				purpose, so the
				<a href="http://www.gemini-2.com/downloads/pdf/GeminiL4UserManual.pdf" target="_blank">
				Level 4 Gemini-1 manual's</a> description is accurate for this 
				jack.&nbsp; 
				See page 127 and 128.&nbsp; The Level 4 manual refers to them as 
				End Switches.&nbsp; You can turn them on and off using either 
				serial command 312, or the web interface page Batteries/Ports (<a href="http://www.gemini-2.com/web/web-battery-ports.php" target="_blank">Example 
				Battery/Ports page</a>).&nbsp;Serial commands 14 and 15 used to enable or disable these inputs respectively.
				</li>

			</ul>
			<ul>
				<li><strong><a name="DEC_connector">DEC connector</a></strong> - 
				this is to the DEC motor.&nbsp; This is the top motor on the mount.&nbsp; 
				The wiring is the same as the Gemini-1 with Din connectors.&nbsp; See 
				page 130 of the Level 4 manual for a description of the 
				pin-outs.&nbsp; </li>
			</ul>
	
			<ul>
				<li><strong><em><a name="RA">RA Connector</a></em></strong> - this is to the RA motor on the telescope. This will be the bottom motor. 
				The wiring is the same as the Gemini-1 with Din connectors.&nbsp; 
				See page 130 of the
				<a href="/downloads/pdf/GeminiL4UserManual.pdf" target="_blank">
				Level 4 manual</a> for a description of the pin-outs.&nbsp;Notice 
				that the RA and DEC jack has been rotated so that if one uses 
				right angle motor cables, there is no longer interference 
				between the connectors.</li>
			</ul>
			<ul>
				<li><strong><em><a name="Power_jack">Power jack </a></em></strong> - This jack in input only.&nbsp; It has a&nbsp; 5 Amp fuse in-line before 
				any other circuits.&nbsp; It is a 2.1mm/5.5mm size connectors. I recommend 5 
				amp rated connectors, I recommend the Switchcraft 762 or 763 
				series.&nbsp; The 
				<a href="http://www.digikey.com/product-search/en?WT.z_header=search_go&amp;lang=en&amp;site=us&amp;keywords=CA-2191&amp;formaction=on&amp;x=0&amp;y=0" target="_blank">CA-2191</a> 
				Right Angle Connector with 6Ft leads from Digikey work 
				nicely also. They have an 18Gauge wire.&nbsp; Mouser also 
				carries a similar cable from
				<a href="http://www.mouser.com/ProductDetail/Kobiconn/172-4207/?qs=%2fha2pyFaduiINI6yhUxRAT2mvU2ZgxtH%2f85ZK1IOD9U%3d" target="_blank">
				Kobiconn Part Number 172-4207</a>.&nbsp; They only have 24" 
				leads.&nbsp; I recommend a CINCON Medical Power supply 90-267V AC 
				input with 15V 6.67A output part number
				<a href="http://www.mouser.com/ProductDetail/Cincon/TR100M150-11E12-LVL-V/?qs=sGAEpiMZZMtz8P%2feuiupSd5oavmXb5skAPUGLJPzw9I%3d" target="_blank">
				TR100M150-11E12-LVL-V</a> from Mouser Electronic,&nbsp; This 
				power supply has powered my Gemini 1 and is now powering my 
				Gemini 2.&nbsp; It's plug will fit directly into the Gemini 2 
				power plug.&nbsp; The 15 Volts is directly in the middle of the 
				recommend 12-18V DC range recommended by Losmandy.</li>
			</ul>
			<ul>	<li><strong><em><a name="USB_port">USB port</a></em></strong> - this is the USB port that you will use. 
				The USB-A 
				port next to it is not supported.&nbsp; There are 
				only drivers for Windows and Linux at this time.&nbsp; Linux 
				supports it directly.&nbsp; See the driver section for the 
				Windows drivers.&nbsp;</li> 
				<ul>
				<li>Info about using the Gemini-2's USB port: The Gemini-2 USB 
				device connection works. Its use is widely supported, by ASCOM, 
				GCC, Stellarium, ... since it just shows up as a virtual COM 
				port. Just plug your setup together and try. If it works it 
				works.
				</li>
				<li>Some quirks and limitations are caused by the USB standard (most 
				important the limitation of the cable length). Some operating 
				systems like Windows add additional inconveniences by 
				enumerating the VCOM ports differently if different USB sockets 
				are used.
				</li>
				<li>Regarding these different sockets a PC provides... most PCs 
				already have USB hubs inside for offering multiple sockets. So 
				the real question would be if there's someone using the USB 
				connection w/o a hub.&nbsp; Another question would be, how far the 
				USB connection can be extended using cascaded hub and I'm sure 
				that Gemini-2 will work very gracefully even at the limits of the USB 
				specification.&nbsp; Normally by USB standards only 4 hubs 
				maximum are allowed, which provided a limit of 64 feet.</li>
				<li>Gemini-2 offers the USB device communication as convenience in 
				parallel to supporting the serial ports (that modern laptops 
				don't offer anymore) to get rid of the annoyances of 
				Serial-to-USB adapters. </li>
				<li>Most of the people that have tried the Ethernet connection just don't want to miss it, 
				because it makes a world of a difference. You get web access, remote connectivity, 
				wireless if you want. Gemini-2's UDP datagrams offer a consistent view at all 
				important variables (coordinates, time, ...) at 
				one glance within a millisecond, something where serial protocol 
				from RS232 over USB up to TCP can't compete. It is simply perfect.
				</li>
				<li>
				There can be some advantage in using different technologies like USB and Ethernet in parallel - but not for Gemini-2, 
				but for camera devices that want to transmit huge amounts of data over USB. 
				So there's no real need to tunnel all data through one technologies ... 
				but surely it can be done, if there are reasons to do this.</li>
				<li>
				The USB function in the Gemini-2 does not provide for a USB 
				Hub.
			</li></ul>
				
			</ul>
			<ul>
				<li><strong><em><a name="USB-A">USB-A</a></em></strong> This USB-A is not supported at this time.  About the only
				thing it can be used for is to provide +5V at 500MA or less.</li>
			</ul>


			<ul>
				<li><strong><em><a name="Ethernet_Port">Ethernet Port</a></em></strong> - this is a standard 10/100 speed 
				Ethernet 
				connection. See connecting to Ethernet port under the Gemini-2 
				menu at the top of this page.&nbsp; The Gemini-2 does support 
				DHCP, so that a router can assign it a IP address.&nbsp; Without 
				DHCP, the default IP address is 192.168.0.111.&nbsp; All 
				Gemini-2 units ship with the same MAC address.&nbsp; Both the 
				default MAC address and default IP address are changeable in the 
				Web interface in the network tab.&nbsp; If your network supports 
				NETBIOS, the NETBIOS name for the Gemini-2 is gemini, so instead 
				of <a href="http://192.168.0.111">http://192.168.0.111</a>, you 
				could use <a href="http://gemini">http://gemini</a> to get to 
				the web interface.&nbsp; (Both links will only work if the 
				Gemini-2 or Gemini-2 Mini is connected via Ethernet and your 
				system supports NetBIOS in the latter case.)  Please note: If your computer
				does not have a Ethernet connection that supports auto-detection of cable type,
				and is only a 10/100Mhz speed connection, then you are going to have to
				use a Ethernet crossover cable.  I suggest you Google Ethernet crossover cable to 
				get more info.</li>
			</ul>
			<ul>
				<li><strong><em><a name="HC Port">Graphics HC Port</a></em> - 
				THIS PORT IS NOT COMPATIBLE WITH THE GEMINI-1 SERIAL CABLE.</strong> 
				(This port has been relabeled on the new version of the Gemini-2 
				to "HC". This is the <span class="auto-style2">
				default</span> serial port that the Graphics hand controller 
				connects too.&nbsp; The baud rate 
				has to be set to 57600 baud to communicate with the Graphics Hand 
				controller. A firmware update or Sram reset will set this 
				serial port the to default setting of 57600. Note: The graphics 
				hand controller will only operate at 57600 baud.&nbsp; On the 
				Gemini-2 it uses +/- 3.3 Volts for the working voltage, although 
				the inputs to the serial connections can swing from +25V to -25V with no damage,&nbsp; 
				On the Gemini-1 units the output voltages in +/- 5 Volts with 
				the same +\- 25 Voltage swing inputs on the serial pins and still be safe.<ul>
					<li>There are two versions of the hand controller.&nbsp; The 
					first version can be noted by the 5 small switches that is 
					under the gasket at the bottom of the screen.&nbsp; You can 
					barely see the white tops of these switches, if you can see 
					them at all.&nbsp; The top PCB board in this version is blue 
					in color.&nbsp; The micro-SDcard is on the bottom of the top 
					PCB board.&nbsp; The top PCB with the LCD on it was a 
					commercial product sold by another company.&nbsp; It is no 
					longer being manufactured.</li>
					<li>The Second Version is totally produced by Losmandy, 
					except for the LCD itself.&nbsp; It is the version being 
					supplied with the Gemini-2 Mini and some of the later 
					Original versions of the Gemini-2.&nbsp; Hopefully this version will be 
					in production for many years.&nbsp; The micro-SDcard is on the 
					bottom board of the two board set.&nbsp; It came into prototype 
					in 2012, and delivery in late 2012 or early 2013, 
					the best I can find out.&nbsp; Both this version and the 
					first version have the same size LCD.&nbsp; This version 
					does not have the 5 small switches at the bottom of the LCD.</li>
				</ul>
				<br />
				<li><strong><em><a name="Serial/GPS">Serial/GPS</a></em> - 
				THIS PORT IS NOT COMPATIBLE WITH THE GEMINI-1 SERIAL CABLE.</strong>  (This jack is relabeled on the new version to Serial/GPS) This is the serial port that you normally 
				use to connect to either a computer, or a GPS unit. The Gemini-2 
				will poll upon power up to see if a GPS is connected, and then 
				set the time, date and locations from it if found. For serial 
				port cable wiring see
				<a href="cable_wiring.php" target="_blank">cable_wiring.php</a>.&nbsp; 
				To set the baud rates, you have to go into the web interface 
				(See <a href="ConnectingtoG2.php" target="_blank">connecting to 
				Ethernet port</a> ) and then select the menu option Serial Ports 
				(<a href="http://gemini/serial.cgi" target="_blank">Serial Port 
				page</a>. &lt;-- Link only works if Gemini-2 is connected to 
				computer displaying this web page, and responds to http://gemini)&nbsp; By default the Gemini-2 sets this port to 9600 baud 
				if a firmware update is done, or Sram is reset.&nbsp; At power 
				up it will take the serial port to 4800 baud to look for a GPS, 
				and then set it back to the baud rate selected in the Serial 
				Port page.&nbsp;&nbsp; For more on GPS receivers and using them 
				please see <a href="GPS.php" target="_blank">GPS receivers</a></li>

			<br />	<br />
			
				<li><strong><em>Port F or <a name="Feature_Port">Feature Port</a></em></strong> or - This is an expansion port.&nbsp; The signals 
				on this port 
				has many different uses.&nbsp; It provides 2 extra 3.3V TTL 
				serial ports. (you will need level converters/inverter to use these) and 
				a couple of Analog to Digital inputs, plus +5V and ground 
				signals.&nbsp; The only accessory for this port at this time is 
				a
				<a href="http://www.gemini-2.com/featureport-serialport.php" target="_blank">
				USB Adapter Cable</a>, that can be used with MAC and other 
				computers that you will have to make yourself.</li>
			</ul>

			<ul>
				<li><strong><em><a name="Autoguider_input">Autoguider input</a></em></strong>. -&nbsp; This is a standard ST4 compatible auto-guider input 
				jack.&nbsp;&nbsp; It is used to provide guide signals into the 
				Gemini-2 while tracking.&nbsp; For it to function the Gemini 2 
				has to be either in the Photo mode or the All-Speed mode.&nbsp; 
				In the hand controller see Menu--&gt;HC--&gt;Mode. The standard 
				hand controller described under the hand controller port 
				can be plugged into this port to test the ST4 functions.&nbsp; 
				If using the older version of the standard hand controller, the 
				led will not light up, but the buttons will function to simulate 
				ST4 inputs.</li>
			</ul>


		</td></tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Please note that there is an internal CR2450 3 Volt 
		Lithium battery inside under the front cover.&nbsp;&nbsp;  Please see the 
		<a href="warning.php" target="_blank">Warning page</a> before changing 
		this battery, You can also see the battery voltage from the 
		<a href="web/ajxmenu_bottom_files/index.php" target="_blank">Web interface</a> -
		<a href="web/web-battery-ports.php" target="_blank">Battery/Ports</a> page..
		</td></tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7">
		Page updated on July 31, 2016</td>
	</tr>
</table>


<?php include("bottom.php"); ?>




</body>
</html>
