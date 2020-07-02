﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>



</head>

<body style="color: #FFFFFF; background-color: #000000">





<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Adding Gemini-2 to network places</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">We are going to add an FTP link into the Gemini-2 so 
		that the Windows Explorer can see the contents of the micro-SDcard.&nbsp; 
		This will work in both XP and Windows 7, but each is a little different.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		1. Open "Control Panel" via your start menu and double click on "<strong>Internet 
		Options</strong>" if using XP, or Network and Internet if using Win 7. 
		Now if using Win 7 click on internet options. For Win 7 a menu<br />
		similar to this should open.
		</td>
	</tr>
</table>
<table align="center" style="width: 910px">
	<tr>
		<td class="style7">
		<img alt="" height="603" src="gemini-images/Network-Places/internet_properties.jpg" width="450" /><img alt="" height="603" src="gemini-images/Network-Places/internet_properties-advanced.jpg" width="450" /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		2. Click on the Advanced tab 
		in the left menu, and the menu on the right should open.&nbsp; 
		We need to make sure that certain options are selected.
		<ul><li>Make sure that "<strong>Enable FTP Folder View (outside of Internet Explorer)"</strong> is selected.</li>
			<li>Scroll Down to "<strong>Use Passive FTP (for firewall and DSL 
			modem Compatibility)"</strong> and also select it.</li></ul></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		3. Now if using XP, go to the start menu and select "My Network Places."&nbsp;&nbsp; 
		If using Windows 7 then go to the start menu and select&nbsp; "Computer"&nbsp; 
		Since I don't have XP, most of the demo will be for Win 7.&nbsp; If 
		using Win 8.1, go to the start menu and select Windows Explorer. &nbsp;Right 
		click on "This PC" and then on "Add a Network Location" in the pop-up 
		box.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		4. If using XP, Click on add Network Place.&nbsp; A "Welcome to Add 
		network Place Wizard" should pop up.&nbsp;&nbsp; If using Windows 7 in 
		the Window that came up when you selected "Computer" in step 3 above,<br />
		right mouse click on an empty spot.&nbsp; 
		and select&nbsp; "add a network location"&nbsp; the wizard below should 
		pop up.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		<img alt="" height="627" src="gemini-images/Network-Places/Add%20network%20location.jpg" width="687" /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		5. Click on the Next button.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		<img alt="" height="627" src="gemini-images/Network-Places/choose-custom-network-location.jpg" width="687" /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		6. 
		Highlight the "Specify the address of a wbesite, network location, or 
		FTP site. then click on the Next button of this window.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		<img alt="" height="627" src="gemini-images/Network-Places/enter-gemini-location.jpg" width="687" /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		7. In the Internet or Network Address block put "FTP//:admin@YOUR 
		GEMINI-2 IP ADDRESS" 
		without the apostrophes. Then hit Next</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		<img alt="" height="627" src="gemini-images/Network-Places/name-location.jpg" width="687" /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		8.&nbsp; A box will appear the will let you name the location so you can 
		easily recognize it.&nbsp; I named mine FTP into Gemini.&nbsp; After 
		naming it, hit Next.&nbsp; If a box comes up asking for a user name and 
		password, put in admin for the user name and leave the password blank, 
		but check the box to remember the password.&nbsp; This box comes up in 
		Windows 8.1</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		<img alt="" height="627" src="gemini-images/Network-Places/finish-add-network-location.jpg" width="687" /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		9. This box lets you know that you have finished creating the shortcut.&nbsp; 
		Hit Finish. If you have the checkbox Open the network connection when 
		you 
		hit finish, the it should open up a window into the micro-SDcard.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		<img alt="" height="676" src="gemini-images/Network-Places/micro-sdcard.jpg" width="900" /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		10. Below is an example of what my computer network location looks like 
		after doing this.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		<img alt="" height="444" src="gemini-images/Network-Places/What-it-looks-like.jpg" width="744" /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		11.&nbsp; What is nice about this method, is that you can copy and past 
		the shortcut to your desktop. That way you will never have to type
		<a href="FTP://admin@gemini">FTP://admin@gemini</a> again.&nbsp; See my 
		desktop example, so that I can<br />
		easily copy and save the log files, the Pec files, and Config files.</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		
		<img alt="" height="156" src="gemini-images/Network-Places/shortscurs_on_desktop.jpg" width="297" /></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		12. The left and right shortcuts was created by right clicking on the 
		desktop and putting it the proper location and title.&nbsp; The center 
		one is a copy of the shortcut from My Computer Network places. The other 
		two are optional icon that I find handy.<br />
		<ul><li>To create the left Icon, right mouse click on a blank space in the
		desktop, and in the address box put the IP address of the Gemini-2 plus /index.htm (http://192.168.0.111/index.htm </li>
		<br /> then when the name box comes up give it a name you like.&nbsp; 
			This icon is optional.<li>To create the right Icon, you first have 
			to have a directory created on your hard drive for it to point to.&nbsp; 
			I used C:\Gemini-2\logfiles.&nbsp; Then you can right mouse click on 
			your desktop and put that in as the address box, and then name it 
			what you would like.&nbsp; This icon is optional.</li></ul></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		13. The other nice thing about this is that it makes updating the 
		firmware easy using Windows File Explorer,
		<a href="updateFileExplorer.php" target="_blank">See instructions here</a>.&nbsp; All you have to do is copy the unzipped downloaded 
		firmware into this shortcut.&nbsp; It will replace any files already on 
		the <br />
		micro-SDcard.&nbsp; Then go into the Firmware/SRAM tab of the web 
		interface and select Flash Firmware.<br />
		After that unplug and replug in the hand controller, and let it update.<br />
		</td>
	</tr>
</table>
</body>




<?php include("bottom.php"); ?>



