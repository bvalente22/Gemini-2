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
			<area alt="" coords="23, 533, 88, 564" href="index.php" shape="rect" />
		</map>
		
		<img alt="" heigth="840" src="images/network-NTP.jpg" Width="900" usemap="#ImgMap0" height="840" /></td>
	</tr> 
	<tr>
		<td class="style7">This is the Network setting page.</td>
	</tr> 
	<tr>
		<td class="style6">
		<ol>
			<li>
			LAN IP Setting: There is both a current and stored setting.&nbsp;&nbsp; The 
			stored setting will be what the gemini-2 defaults back to if no DHCP 
			server can be found at startup.&nbsp; The default IP address for the 
			Gemini-2 is 192.168.0.111&nbsp;</li>
			<li>
			LAN Netmask: should almost always be 255.255.255.0</li>
			<li>
			Default Gateway: This address should be the same as your routers base 
			address if using a router on your network.&nbsp; If you change the 
			Default gateway to match your routers address to something like, 
			192.168.1.1 then you must also change the IP address of the Gemini-2 
			to match that base address.&nbsp; It could be anything in the range 
			of 192.168.1.2 to 192.168.1.254.&nbsp; Otherwise the Gemini-2 cannot 
			find your network. Also make sure you do not use the IP address of 
			anything that is already on your network, such as your computer.&nbsp; 
			Also the stored setting is what the Gemini will fall back too, if no 
			DHCP address is found.</li>
			<li>
			Primary DNS server: address should be the same as your routers 
			base address if using a router on your network.&nbsp; If you assign the Primary DNS server 
			address to your routers base address, hopefully your router will 
			allow the use of NetBIOS name resolution.&nbsp; If it does, then
			<a href="http://gemini">http://gemini</a>&nbsp; for web pages access 
			and <a href="ftp://admin@gemini">ftp://admin@gemini</a> for micro 
			SDcard directory/file access using Windows file manager should work.&nbsp; 
			DNS servers change an Name into an IP Address.</li>
			<li>
			<a name="NetTimeProtocal"></a>Net Time Protocal Server:&nbsp; This IP address is where the 
			Gemini-2 can get NTP time from.&nbsp; It can be from a local 
			computer on your network, or from a National Time standard.&nbsp; If 
			from a Local Windows computer, that computer will probably need a 
			registry Patch to be able to act as a NPT time server.</li>
			<li>
			Do not mess with the MAC address, unless you have two Gemini-2 units 
			on the same network. If you do have two Gemini-2 units, please see
			<a href="web-network_change_mac.php" target="_blank">Changing MAC 
			Address</a>&nbsp; It is really easy to change 
			the MAC Address on one of the Gemini-2 units.&nbsp; Just change the 
			:5f to a :5E for example under both the "Current Setting" and 
			"Stored Setting". Then change the default and stored IP 
			address to 192.168.0.110 or one that fits you network under both the 
			"Current Setting" and "Stored Setting" .&nbsp; These 
			changes will allow a Router to assign different IP addresses to each 
			Gemini-2.&nbsp; THis way each will be seen as seperate devices on 
			the network.&nbsp; Just note you will have to use eaches seperate IP 
			address to access them.&nbsp; You will not be able to use 
			http://Gemini/ to do so.</li>
			<li>
			Do not mess with the UDP port address.&nbsp; The ASCOM driver 
			expects this port to be used for UPD communications.</li>
			<li>
			Do not mess with the TCP socket port unless you understand what this 
			does.</li>
			<li>
			To help protect against spam and abuse, you can now specify the host 
			IP address so that the Gemini-2 will only respond to the host 
			assigned to it.&nbsp; For a transparent UDP or TCP communication one 
			can do two things for protection now: Setting the port to zero 
			disables the feature. One who needs it and especially in an 
			observatory can specify the IP address of the host that is allowed 
			to use this. The default will stay at INADDR_ANY (0.0.0.0), but as 
			you can see a warning at the network page. Users who use this 
			address, allowing each host on the Internet to access their Gemini, 
			are responsible to use a separate network or protect it.&nbsp; 
			This only effects applications that use sockets like skysafari that 
			connects through unprotected sockets.&nbsp; The Web interface and FTP 
			access will still be available, because they are password protected.</li>
			<li>
			The DHCP server Timeout in seconds, is the amount of time that the 
			Gemini-2 can look for an DHCP assigned IP address, before it 
			defaults back tho the Store Setting address, normally 192.168.0.111.</li>
			<li>
			Use DHCP to acquire network setting:&nbsp; check box, if checked will 
			tell the Gemini-2 to try and gets it's network setting from a DHCP 
			server, normally the router on your network.&nbsp; Note that most 
			computers cannot assign a DHCP ip address to devices connected to it 
			via Ethernet.</li>
			<li>
			If doing a direct connection to a laptop computer without a router, 
			you will have to turn off DHCP in the Gemini-2, or wait for the 
			timeout.&nbsp; See <a href="/ConnectingtoG2.php" target="_blank">
			Connecting to an Ethernet Port</a> for more information.</li></ul></td>
	</tr> 
			<tr><td></td></tr>
</table>
<table align="center" width="900px" class="tableborder1">
	<tr><td class="style6-border-white"><em>If your Gemini-2 is connected Via Ethernet, 
		turned ON, and 
		Responds to <a href="http://gemini/network.cgi" target="_blank">http://gemini/network.cgi</a> then this link 
		will open this page in the Gemini-2 web interface, after prompting for a 
		log-in.</em></td></tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on 
		May 8, 2016
		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



