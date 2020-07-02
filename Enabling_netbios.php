<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini-2</title>
<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>




</head>

<body style="color: #FFFFFF; background-color: #000000">

<table style="width: 80%" align="center">
	<tr>
		<td class="h2"><br />
		Enabling Netbios on Windows networks
		</td>
	</tr>
	<tr>
		<td class="style6"><br />
		This guide will help you connect using the Ethernet's 
		netbios naming to connection to your Gemini 2.
		</td>
	</tr>
	<tr class="style6">
		<td class="style3"><br />
		Enabling NetBios over TCIP for Local Network:
		</td>
	</tr>
	<tr><td class="style6">
		Netbios is what will allow you to use the 
		<a href="http://gemini" target="_blank">http://gemini</a>&nbsp; if using 
		a web page to access the Web interface, <br />or <a href="ftp://admin@gemini">
		ftp://admin@gemini</a> if 
		using Windows File manager to access the directories/files of the micro 
		SDcard, instead of <a href="http://192.168.0.111">http://192.168.0.111</a> 
		(or what ever the Gemini-2 ip address is), or again
		<a href="ftp://admin@192.016.0.111">ftp://admin@192.016.0.111</a> for 
		accessing the SD card contents.<br />
&nbsp;<br />
	Some Windows systems do not have NetBios enabled. <br />
		Note: Normally the default setting on Windows assumes the following: "Use NetBios 
		setting from the DHCP server."&nbsp; <br />
		However, if a static IP address is used or the DHCP server does not 
		provide NetBios setting, then enable NetBios over TCIP"<br />
		<br />
		This is how you enable NetBios over TCP/IP:<br />
		<p>To enable NetBIOS over TCP/IP on Windows 7:</p>
		<ol>
			<li>Click <strong>Start</strong>, and then click <strong>Network</strong>. 
			(click Start, type <strong>ncpa.cpl</strong> into the search box for 
			Windows 7 or Vista, hit ENTER).</li>
			<li>Click on the <strong>Network and Sharing Center</strong></li>
			<li>Click Manage Network Connections.</li>
			<li>Right click on the Local Area Connection select <strong>
			Properties</strong>.</li>
			<li>Select <strong>Internet Protocol version 4 (TCP/IPv4)</strong></li>
			<li>Click the <strong>Advanced</strong> button under the General 
			tab.</li>
			<li>Click the <strong>WINS</strong> tab.</li>
			<li>Click <strong>Enable NetBIOS Over TCP/IP</strong>.</li>
			<li>Click OK and Exit the settings.</li>
		</ol>
		<p>An alternet method of doing this is:</p>
		<ol><li>On the windows Task bar (normally at the bottom of the screen 
			click on the network icon (looks like a small computer)</li>
			<li>The click the Open Network and sharing center. </li>
			<li>Then click on Change adapter setting on the Left panel.</li>
			<li>Right click on the network adapter you want to use to connect to 
			the Gemini-2 with.&nbsp; Desktops normally only have one choice, 
			which is the hardware Ethernet port, while laptops will normally 
			have two.&nbsp; One is the hardware Ethernet port and the other the 
			Wireless network adapter.&nbsp; Right mouse click on the one that 
			you intend to use to connect to the Gemini-2, and select <strong>
			properties</strong>.</li>
			<li>Right mouse click on Internet Protocol Version 4 (TCP/IPv4) and 
			select Properties.</li>
			<li>Select Advanced...</li>
			<li>Select the WINS tab</li>
			<li>Under NetBIOS setting at the bottom, either select Default or 
			Enable NetBIOS over TCP/IP.&nbsp; Normally Default should work fine.</li>
			<li>Close all menu's - You should now be able to use
			<a href="http://gemini">http://gemini</a> for web browsers and
			<a href="ftp://admin@gemini">ftp://admin@gemini</a> for the Windows 
			File explorer.</li></ol>
</td></tr>
<tr><td class="style6">To Enable Netbios on Windows XP
<ol><li>

    Open the Network Connections folder.
    </li>
	<li>

    Right click the local area network connection and click Properties.
    </li>
	<li>

    Double click Internet Protocol (TCP/IP).
    </li>
	<li>

    Click Advanced.
    Click WINS.
    </li>
	<li>

    Click the Enable NetBIOS Over TCP/IP button.
</li></ol>

</td></tr>
<tr><td class="style6">To Enable Netbois on 95/96/ME
<ol><li>
    Click Start | Settings | Control Panel | Network.
    </li>
	<li>
    Double click the TCP/IP->adapter entry for the local area network.
    </li>
	<li>
    Click NetBIOS.
    </li>
	<li>
    The I want to enable NetBIOS over TCP/IP box is normally checked and grayed out.  If it’s un-checked, click the box to put in a check mark.
</li></ol>
</td></tr>
<tr><td class="style6"></td></tr>

</table>

</body>


<?php include("bottom.php"); ?>




</html>
