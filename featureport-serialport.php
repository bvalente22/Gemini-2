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
</style>
</head>

<body style="color: #FFFFFF; background-color: #000000">

<table  align="center" style="width:900px">
	<tr>
		<td class="style6">
		1. This page will teach you how to make a cable that can safely be 
		connected to the Feature port of the Gemini-2 telescope controller.&nbsp; 
		This cable will provide a USB to Serial virtual port into your computer.&nbsp; 
		There are drivers for many different operating systems available.&nbsp; 
		See <a href="http://www.ftdichip.com/Drivers/VCP.htm" target="_blank">
		http://www.ftdichip.com/Drivers/VCP.htm</a>&nbsp; for the different drivers, 
		including MAC OSX, Windows, Windows 8.1 and Linux.<br />2. The other thing this cable can be used for is to replace 
		the boot-loader of the main processor if anything goes really wrong, and 
		it seems like the Gemini-2 has died. now 99.9% of the time it is not the 
		boot-loader but the micro-SDcard format messed up, and this cable will 
		not fix that. So don't make the cable just for that reason, this is just 
		added information about what this cable can be used for.</td></tr>
	<tr>
		<td class="style6"><br />
	The cable you are going to need has a part number TTL-232R-3V3-WE.&nbsp; 
		I got mine from
		<a href="http://www.mouser.com/ProductDetail/FTDI/TTL-232R-3V3-WE/?qs=Xb8IjHhkxj4YydU0DsHWuQ%3d%3d">
		Mouser Electronics</a> at a cost of $20.00 USA plus shipping. The data 
		sheet is available
		<a href="http://www.ftdichip.com/Support/Documents/DataSheets/Cables/DS_TTL-232R_CABLES.pdf" target="_blank">
		here.</a> You can find other sources from the search engine
		<a href="http://www.findchips.com/avail?part=TTL-232R-3V3-WE" target="_blank">
		http://www.findchips.com</a> </td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		
		<a href="gemini-images/featureport-serial/PC182517.JPG" target="blank">
		
		<img alt="" height="562" src="gemini-images/featureport-serial/thumbnails/PC182517_small.JPG" width="750" class="auto-style2" /></a><br />The package as it arrived from Mounser, nicely sealed in anti-static packaging.</td>
	</tr>
	<tr>
		<td class="style7"><br /><br />
		<a href="gemini-images/featureport-serial/PC182519.JPG" target="_blank">
		<img alt="" class="auto-style2" height="562" src="gemini-images/featureport-serial/thumbnails/PC182519_small.JPG" width="750" /></a>
		<br /> Cable removed from package</td>
	</tr>
	<tr><td class="style6"> There is two different ways shown to make this cable. 
	<ol><li>Crimp a RJ45 on the end of it.</li>
		<li>Use a  <a href="#second_way">RJ45 to screw Terminal adapter.</a>&nbsp; </li></ol></td></tr>
	<tr>
		<td class="style6"><br />This is the Crimp a RJ45 connector on the end.<br /><br />
		</td>
	</tr>
	<tr>
		<td class="style7">
		<a href="gemini-images/featureport-serial/PC182520.JPG" target="_blank">
		<img alt="" class="auto-style2" height="562" src="gemini-images/featureport-serial/thumbnails/PC182520_small.JPG" width="750" /></a><br />
		There are the item you will need to put the cable together.&nbsp; 
</td></tr>
	<tr>
		<td class="style6"><br />
		Items you will need.
		<ol><li>RJ45 Cat6 connector.&nbsp; I used the EZ-RJ45&nbsp; Cat6 from Platinum Tools 
			available at
			<a href="http://www.showmecables.com/product/EZ-RJ45-Cat6-Connector.aspx" target="_blank">
			Show&nbsp;Me Cables</a> The use of Cat6 connectors is necessary 
			because of the wire size from the FTDI cable is too large to fit into 
			Cat5E connector.&nbsp; Here is a
			<a href="http://www.platinumtools.com/multimedia/youtube.php?id=fDWM6Bpb_yA" target="_blank">
			video</a> of how the EZ-RJ45 works to give you some idea of how to 
			put the 3 wires into the RJ45 connector.</li>
			<li>RJ45 crimper.
			</li>
			<li>small wire cutters.</li>
			<li>Possibly heat shrink.</li>
			<li>
			<a href="http://www.showmecables.com/product/RJ45-Strain-Relief-Boot-Black.aspx" target="_blank">RJ45 Boot 
			from Show Me cables</a></li>
		</ol>
		We will use the colored wire table from the FTDI document to determine how to wire the cable.
		<hr />
		</td>
	</tr>
	<tr>
		<td class="style7"><br />
		<img alt="" height="232" src="gemini-images/featureport-serial/Cable_Discription1.JPG" width="900" /><br />
		
		<img alt="" height="205" src="gemini-images/featureport-serial/Cable_Discription2.JPG" width="900" /></td>
	</tr>
	<tr>
		<td class="style7">
		
</td></tr>
</table>
<table  align="center" style="width:900px">

	<tr>
		<td class="style6" width="600"><br /><br />
		From the above table we will only be using 3 wires.<br>
		We can make 2 different cable combinations.  <br />
		We can make one for the Com 3 port of the feature port, which<br />
		uses pins 8, 7, and 6 of the feature port, <br />
		or the Com 4 Port of the feature port, which uses Pin 8, 5 and 4.  <br />
		This set of instructions will be making a cable for the Com 
		3 port<br />
		<ol><li>Ground which is black and will go into the feature port pin 8.</li>
			<li>TXD which is Orange and will be going into feature port pin 7.</li>
			<li>RXD&nbsp; which is Yellow and will be going into feature port 
			pin 6.</li>
			<li>CTS# (Brown) will be cut off and capped off with heat shrink.</li>
			<li>RTS# (Green) will be cut off and capped off with heat shrink.</li>
			<li>VCC (Red) will be cut off and capped off with heat shrink.</li>
			</ol>
		</td>
		<td class="style6" width="300">
		<img alt="Feature Port" height="381" src="gemini-images/featureport-serial/Feature_Port.jpg" width="300" /></td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style6"><br />
		<hr />
		<ol><li>
		First cut off the silver tinned part of the wires unless you are using 
			the EZ-RJ45 connectors. The cable that goes into the RJ45 has the conductor on them.</li>
			<li>
			Slip the RJ45 protective cover and head shrink over the wire if you 
			decide to use them (optional)</li>
			<li>
			Cut off just enough of the Black, Yellow, and Orange wire to make 
			sure they are the same length.</li>
			<li>
			Arrange the wire in Black, Orange, and Yellow order and slip them 
			completely in the RJ45 connector all the way.&nbsp; If you are using 
			the EZ-RJ45 connectors, put the wire in till all the tinned part of 
			the wire exits the front of the connector with a little insulation 
			sticking out also.</li>
			<li>
			Slip the heat shrink all the way until some of it is in the RJ45 
			connector. See Gold Pin Side up picture below.</li>
			<li>
			Crimp the connector with RJ45 crimpers.</li>
			<li>
			If you used the EZ-RJ45 connector, use a hobby knife to trim off the 
			excess sticking out the front of the connector.&nbsp; No wire or 
			insulation should be sticking out.</li>
			<li>
			Use a Heat Gun to shrink the heat shrink tubing.</li>
			<li>
			Slide the protective boot into place.</li></ol>
		</td>
	</tr>
	<tr>
		<td class="style7"><br />
		<img alt="" height="632" src="gemini-images/featureport-serial/finishedtop.jpg" width="900" />
		<br />Gold Pin side up</td>
	</tr>

	<tr>
		<td class="style6">
		<hr />
		<br />You now have completed the cable. Follow 
		the instructions given at the <a href="http://www.ftdichip.com/Drivers/VCP.htm" target="_blank">
		http://www.ftdichip.com/Drivers/VCP.htm</a> 
		for which ever driver you are going to use. For Windows drivers I 
		suggest the "Setup Executable" link show on the right side of the page.&nbsp; 
		You run this before plugging in the the cable.&nbsp; If you are using 
		any other driver, download that driver and unzip it to a empty 
		directory.&nbsp;&nbsp; When you plug in the USB cable follow the prompts 
		given to install the driver.<br />
		<br />
		<strong><em>You will also have to enable the pins of the feature port 
		for the Gemini to see this cable.<br />
		Go into the Web interface, and go to the Battery/Ports page.&nbsp; At the 
		bottom Click the F5 and F4 Port F Pins boxes.&nbsp; (they are numbered 
		binary so F5= Pin 6 and F4 = Pin 5.) On the Serial Port Setting page, 
		you can set the baud rate to what ever you want.&nbsp;
		</em></strong>
		
</td>
</tr>
	<tr>
		<td class="style7"><br />
		<img alt="" height="148" src="gemini-images/featureport-serial/enable-pins.jpg"  align="middle" width="432" />
</td>
	</tr>
	<tr>
		<td class="style6"><br />
		You will need to set the desired baud rate for the Serial Port on the Web interface 
		<a href="/web/web-serial-ports.php" target="_blank">Serial Port</a> 
		page.&nbsp; I have tested this cable from my laptop into the ASCOM 
		Gemini.net driver running at 57900 baud and it seemed to work fine.&nbsp; 
		However if you use it into a USB hub with a very long run, then you 
		might want to use a slower baud rate.<br />
<hr class="style2" style="width: 900px" />
		</td>
	</tr>
</table>

<table  align="center" style="width:900px">
	<tr><td class="h3"><a name="second_way"></a><br />
A second way to make the cable
	</td></tr>
	<tr>
		<td class="style6"><br />
		A second way and possibly easier way using one of these
		<a href="http://www.parts-express.com/pe/showdetl.cfm?Partnumber=335-374&amp;utm_source=OrderShippedEmail&amp;utm_medium=Email&amp;utm_content=OrderShipped-335-374&amp;utm_campaign=OrderShipped-2013-06-24" target="_blank">
		RJ45 Plug to Screw Terminals</a> to make a cable.&nbsp; The only problem 
		with this way is that the USB connector is blocked. See image below.<br />
		</td>
	</tr>
	<tr>
		<td class="style6">
		<a href="gemini-images/featureport-serial/feature-ethernet-usb.jpg">
		<img alt="" class="auto-style2" height="567" src="gemini-images/featureport-serial/feature-ethernet-usb_small.jpg" width="900" /></a>		
		</td>
	</tr>
	<tr><td class="style6">
		<br /><img alt="" height="1147" src="gemini-images/featureport-serial/wiring-usb-feature.jpg" width="900" /><br />
		It is hard to tell from the photo, but the side towards you is the screw 
		terminal side.  
		You have to back the screws out to insert the wires. The wires need to be stripped about 1/8 inch. 
		From Left to right the wires are Black, Orange, Yellow into terminals 
		4-, 4+, 3-.</td></tr>
</table>

</body>




<?php include("bottom.php"); ?>



