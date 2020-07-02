<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



<style type="text/css">
.auto-style2 {
	border-style: solid;
	border-width: 2px;
}
.auto-style3 {
	text-decoration: underline;
}
</style>
</head>

<body style="color: #FFFFFF; background-color: #000000">











<table align="center" style="width: 900px">
	<tr>
		<td class="h2">Second Communication Port Cable for Gemini-1</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">The Pictures and testing of this cable was provided by Brian Portman. Thanks Brian for your help.<br />
		Please read all the steps before attempting to build this cable.
		</td>
	</tr>
</table>


<table  align="center" style="width:900px">
	<tr>
		<td class="style6">
		<ol><li>
			This page will teach you how to make a cable that can be 
		connected to the to the "DB15 Hand Controller Port" of the Gemini-1.&nbsp; 
		This cable will provide a USB to Serial virtual port into your computer 
			by replacing the Deluxe Hand Controller connected to the DB15 
			connector.&nbsp; 
		
		</li>
		<li>
			There are drivers for many different operating systems available.&nbsp; 
			See <a href="http://www.ftdichip.com/Drivers/VCP.htm" target="_blank">http://www.ftdichip.com/Drivers/VCP.htm</a>&nbsp; for the different drivers, 
			including MAC OSX, Windows, Windows 8.1 and Linux.
		</li>

		<li>
			This cable can be used if your main RS-232 port has gone on the 
			fritz, or just as a second port. You can have this port connected to 
			ASCOM, and the main RS-232 port connected to GCC for example. The 
			reverse is also true. The one word of caution if using both ports at 
			the same time, is do not send conflicting commands to the Gemini 
			from the applications connected to the Gemini.&nbsp; Unpredictable 
			results can happen, and you could damage your mount.<li>
			For this cable to be safe in connecting into the Gemini Deluxe hand 
			controller port, you should use an 
			<a href="#USB-Isolator" target="_self">USB Isolator</a>.<li>
			GPS receivers will not work through this communications port, as the 
			Gemini does not interrogate this port for GPS.<li>
			Also you will have to use a program that can tell the Gemini how to 
			boot.&nbsp; See <a href="#booting" target="_self">item 6</a> under using the cable below.<li>
			Here are the items you will need to build this cable:
			</li>
			<ol type="a">
				<li>A USB to TTL 5V Serial FTDIchip cable. Part number&nbsp;
				<a href="http://shop.clickandbuild.com/cnb/shop/ftdichip?productID=125&op=catalogue-product_info-null&prodCategoryID=102" target="_blank">TTL-232RG-VIP-WE</a> available from
					<a href="http://www.digikey.com/product-search/en?keywords=TTL-232RG-VIP-WE" target="_blank">Digikey</a> or
					<a href="http://www.mouser.com/ProductDetail/FTDI/TTL-232RG-VIP-WE/?qs=%2fha2pyFadujx5k75gqjHkoYcPogD7SIlE6dZpulE3h4Uft8ZSATqhw%3d%3d" target="_blank">Mouser</a>.
					</li>
				<li>A DB15 Male Connector with Solder cup 
					connections.&nbsp; From
					<a href="http://www.digikey.com/product-detail/en/DA-15P-K87/1003-1885-ND/2581298" target="_blank">Digikey</a> from
					<a href="http://www.mouser.com/ProductDetail/HARTING/09642217800/?qs=7xTtp7L5VAcn%2fPcPP6NCZw%3d%3d" target="_blank">Mouser</a>
				</li>
				<li>A plastic D-Sub Backshell for covering the 
					connector.&nbsp; From
				<a href="http://www.digikey.com/product-search/en?keywords=1-1991253-5" target="_blank">Digikey</a>&nbsp; from
					<a href="http://www.mouser.com/ProductDetail/TE-Connectivity/1-1991253-5/?qs=c%2f3c818u0Z4mKodtYTnNsw%3d%3d" target="_blank">Mouser</a></li>
				<li>Some heat shrink to fit over the solder cup 
					connections. </li>
				<li>A short peace of wire.&nbsp; </li>
				<li>A good Soldering Iron, wire cutters and wire strippers, 
					and some way to heat the heat shrink.</li>
				<li>An USB ISOLATED Adapter.&nbsp; Optional but highly 
					recommended.</li>
			</ol>
			</li>
			</ol>
					
		</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		
		<a href="gemini-images/featureport-serial/PC182517.JPG" target="blank">
		
		<img alt="" height="656" src="gemini-images/Gemini1/USB-Serial-cable/TTL-232RG-VIP-WE.JPG" width="900" class="auto-style2" /></a><br />The package as it arrived from 
		Mouser or Digikey, nicely sealed in anti-static packaging.</td>
	</tr>
	<tr>
		<td class="style7"><br /><br /><br />
		<a href="gemini-images/featureport-serial/PC182519.JPG" target="_blank">
		<img alt="" class="auto-style2" height="562" src="gemini-images/featureport-serial/thumbnails/PC182519_small.JPG" width="750" /></a>
		<br /> Cable removed from package, the cable will have an transparent 
		plastic end.<br /><br /> </td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7">

<img alt="" height="1200" src="gemini-images/Gemini1/USB-Serial-cable/IMG_1671.JPG" width="900" />
	<br /> The parts you will need.</td>
</tr>
	<tr>
		<td class="style6"><br /><br />
		We will use the colored wire table from the 
		<a href="http://www.ftdichip.com/Support/Documents/DataSheets/Cables/DS_TTL-232RG_CABLES.pdf">FTDI 
		Manual</a> to determine how to wire the cable.
		<hr />
		</td>
	</tr>
	<tr>
		<td class="style7"><br />
		<img alt="" height="477" src="gemini-images/Gemini1/USB-Serial-cable/FTDI_cable_Connections.jpg" width="900" /><br />
		
		</td>
	</tr>
	<tr>
		<td class="style7">
		<br />
		And the chart from the Paragraph 6.2 of the
		<a href="http://gemini-2.com/downloads/pdf/GeminiL4UserManual.pdf" target="_blank">Gemini-1 Users Manual</a><br />
		<img alt="" height="482" src="gemini-images/Gemini1/USB-Serial-cable/Gemini-1_Manual_table.jpg" width="600" /></td></tr>
</table>
<table  align="center" style="width:900px">

	<tr>
		<td class="style6" width="900">
		Here is how the wires will be connected.
		<ol><li>The Orange Wire (TxD) on the cable will be connected to Pin 11 
			on the DB15 Connector.</li>
			<li>The Yellow Wire (RxD) on the cable will be connected to Pin 15 
			on the DB15 Connector.</li>
			<li>The Red Wire (+5V input) on the cable will be connected to Pin 1 
			on the DB15 Connector. </li>
			<li>The Black Wire (Ground) will need to be connected to two pins of 
			the DB15 connector.<ol type="A">
				<li>&nbsp;&nbsp;This is where the short peace of wire comes in.&nbsp; 
				It will needed to bridge between connector pins 5 and 14.</li>
				<li>The black wire from the cable will need to also go into 
				either pin 5 or 14.</li>
			</ol>
			</li>
			<li>The green and brown wires will not be used.&nbsp; I would put 
			heat shrink over them, and keep them in the DB15 plastic cover.</li>
		</ol>
		
		</td>
	</tr>
</table>
<table  align="center" style="width:900px">

	<tr>
		<td class="style7" width="900"><br /><br />

		Here a picture of the connector wires.<br />

<img alt="" height="1200" src="gemini-images/Gemini1/USB-Serial-cable/Wired_Connector.JPG" width="900" />

	</td>
	</tr>
</table>


<table  align="center" style="width:900px">

	<tr>
		<td class="style7" width="900"><br /><br />

		Picture of the completed cable: <br />
		<br />
		
				<img alt="" height="828" src="gemini-images/Gemini1/USB-Serial-cable/completed_cable.jpg" width="900" /></td>		
	</tr>
</table>





<table  align="center" style="width:900px">

	<tr>
		<td class="style6" width="900">
		<a name="USB-Isolator"></a>
		Now Please note that this cable has no electrical isolation built in. 
		This cable is connecting directly into the pins of the processor of the 
		Gemini-1.&nbsp; Any kind of ground loop or static charge could possibly 
		damage the processor. I Therefore 
		<span class="auto-style3"><strong><em>highly recommend that you provide an USB Isolator</em></strong></span> such as the one of ones the below: <br />
				<ul>
				<li>
				<a href="http://www.keterex.com/kxusb150.php" target="_blank">
				http://www.keterex.com/kxusb150.php</a> or same unit at</li>
				<li>
				<a href="http://www.mouser.com/ProductDetail/Keterex/KXUSB-150/?qs=%2fha2pyFadujAILCkpEIfMsVbMBCCnvQep%252baEFHwr61U%3d" target="_blank">
				mouser.com</a></li>
				<li><a href="http://www.olimex.com/dev/usb-iso.html" target="_blank">http://www.olimex.com/dev/usb-iso.html</a> or 
				<a href="http://www.mouser.com/ProductDetail/Olimex-Ltd/USB-ISO/?qs=sGAEpiMZZMsyM1rGGtQxrO1HI6bIq7Ze" target="_blank">from Mouser
				</a>
				</li>
				</ul>
				</td>		
	</tr>
</table>




<table  align="center" style="width:900px">

	<tr>
		<td class="style7" width="900">


		<img alt="" height="924" src="gemini-images/Gemini1/USB-Serial-cable/OLIMEX.jpg" width="900" />
		<br />		Here a picture of the OLMEX USB ISOLATOR.<br /><br />

		</td>
	</tr>
</table>

<table  align="center" style="width:900px">

	<tr>
		<td class="style7" width="900">


		<img alt="" height="900" src="gemini-images/Gemini1/USB-Serial-cable/cable_with_OLMEX.jpg" width="900" />
		<br />		Cable with the OLMEX USB ISOLATOR attached.<br /><br />

		</td>
	</tr>
</table>
<table  align="center" style="width:900px">

	<tr>
		<td class="style6" width="900">
		USING the Cable
		<ol><li> Power off the Gemini-1</li>
			<li> You will remove the Deluxe Hand controller from the Gemini-1.</li>
			<li> Now connect the DB15 end of this cable to the Gemini-1</li>
			<li> If Using windows, then you need to install the FTDI Virtual 
			Serial Port Driver.&nbsp; I recommend using the
			<a href="http://www.ftdichip.com/Drivers/CDM/CDM%20v2.12.04%20WHQL%20Certified.exe" target="_blank">
			EXE version</a> as that is quite a bit less hassle free.&nbsp; Other 
			drivers are available
			<a href="http://www.ftdichip.com/Drivers/VCP.htm" target="_blank">
			here</a>.</li>
			<li> Connect the USB end into one of the USB ports on your computer.&nbsp; 
			If you installed the driver as in step 4, then your computer will 
			create a virtual serial port to it.&nbsp; You might have to use the 
			device manager to determine which port it is.</li>
			<li><a name="booting"></a> You are going to have to use an utility such as
			<a href="http://www.docgoerlich.de/GCC/" target="_blank">GCC</a> or 
			the
			<a href="http://www.gemini-2.com/Gemini2_drivers/GeminiTelescopeInstaller.exe" target="_blank">
			ASCOM driver</a> or the <a href="#rebooter">rebooter program</a> to 
			get Gemini-1 to boot.&nbsp; 
			The reason for this, is that without the Deluxe Hand controller, the 
			Gemini-1 has no way of knowing which mode to boot in. (Cold, Warm or 
			Warm-Restart.)&nbsp; If this is the only connection you have then 
			the program will have to boot the Gemini through it. If you still 
			also have the RS-232 port active and using it, then you can boot the 
			Gemini through either communications port.</li>
			<li> Turn on your Gemini-1 and enjoy the second communications port.</li>
		</ol>


		<p>&nbsp;</p>


		</td>
	</tr>
</table>




<table  align="center" style="width:900px">
	<tr>
		<td class="tableborder1"> <div class="style6">
		<a name="rebooter"></a>When I was running Astronomy Stores I paid to have a small 
			Rebooter.exe program written to use
			with the the adapters I was selling.  This program will also work with this cable.  The link to
		the program is <a href="http://gemini-2.com/downloads/rebooter/Rebooter_Program.zip">Rebooter</a>.&nbsp; 
		I never did recover the cost of having this program written. It is a simple EXE and does not
		require installation.&nbsp; Example of it's 
		interface:<br /></div>
<!--		</td>
	</tr>
</table>




<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" > -->
		<div class="style7">
		<img alt="" height="195" src="gemini-images/Gemini1/USB-Serial-cable/rebooter.jpg" width="396" /></div></td>
	</tr>>
</table>




<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on July 12, 2015
		</td>
	</tr>
</table>


</body>




<?php include("bottom.php"); ?>



