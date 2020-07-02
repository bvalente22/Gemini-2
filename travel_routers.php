<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Gemini 2 Mount Controller</title>


<?php include("topv.php"); ?>


<link href="gemini-2.css" rel="stylesheet" type="text/css" />


<style type="text/css">
.auto-style1 {
	margin-left: 10px;
	margin-right: 10px;
}
</style>


</head>

<body style="color: #FFFFFF; background-color: #000000">



<table align="center" style="width: 900px">

	<tr>
		<td class="h3">Travel Routers and Bridges for making the Gemini-2 Wifi capable.</td>
	</tr>
</table>

<br />

<table align="center" style="width: 900px">
	<tr>
		<td class="style7">NOTE: To use any of the below methods requires a local WiFi network, that the below device can find.  
		This means you need a router providing that network.  A laptop cannot provide that network.</td>
	</tr>
</table>



<br />
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Adding Wifi to the Gemini-2 is pretty easy with the travel routers 
		listed below.&nbsp; Most of them can even be powered off of the Gemini-2 
		USB port.&nbsp; I recommend doing this over setting up a dedicated 
		laptop to connect the Gemini-2 too.<br>here is a picture of what a 
		client bridge does:<br>
		<div align="center">
		
			<img alt="" height="374" src="gemini-images/NetworkConfiguration/client_bridge.jpg" width="900"></div><br><br>List of some tested routers.<br>
		<ol>
		
			<li>
			<a href="#Netgear_WINCE2001">Netgear WINCE2001</a> </li>
			<li>
			D-Link DAP-1350 (discontinued and not covered in this write-up)</li>
			<li>
			<a href="#ZyXel_MWR102">ZyXel MWR102</a> and ZyXEL NBG2105</li>
			<li>
			<a href="#TP-Link_TL-WR702N">TP-Link TL-WR702N</a></li>
			<li>
			<a href="#Other_Considerations">Other Considerations</a> Please read.</li>
			<li>
			Using <a href="#DD-WRT_firmware">DD-WRT firmware</a> 
			to create a bridge router.<br /></li>
		</ol>
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Tested routers that will not work with the Gemini-2
		
		
			Netgear Trek PA2000
			<br /><br />
		
		
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<br>
		Routers that worked with the Gemini-2.
		<ol>
		
			<li>
			<a name="Netgear_WINCE2001">Netgear WINCE2001</a>&nbsp;
			<img alt="" height="240" src="gemini-images/NetworkConfiguration/WINCW2001.jpg" width="240" class="auto-style1" style="float: left"><br /> Discontinued 
			but still available on Amazon for now, but used or refurbished.<br />The Netgear part number is WNCE2001. This adapter has been discontinued. 
			You can get factory refurbished units from AMAZON for now.    
			Now you will have to have a wireless router to use the WNCE2001.  
			It can only act as a bridge (receiver.) There has to be an established WiFi network already for it to communicate with. 
			It can be powered from the USB-A port of the Gemini. 
			When used in this method, you will need to configure the WNCE2001 from a laptop prior to using it with the 
			Gemini II (just follow the directions supplied with the unit) or get the manual here. 
			If you are powering it from the USB port you will need to increase the DHCP timeout setting on the 
			Gemini II to about 40 seconds to allow the Netgear to power up and acquired 
			an IP address from your router. (otherwise the Gemini II will time out). 
			The maximum delay time the Gemini will accept seems to be 40 seconds. (even though you can enter a longer value.) 
			This works for some WNCE2001/Gemini-2 units and does not for others. 
			I could not get mine to get an DHCP assigned address with my WNCE2001 because it 
			takes 56 seconds to initialize. 
			So I am stuck using Static IP addresses when using the WNCE2001.  
			But this is OK, as that way I always know the IP address of the Gemini-2.  
			I followed the instructions starting on page 6 of the manual.  
			The instruction tell you that a setup page will automatically appear in your browser, 
			but I found this not to be the case, I had to type http://mywifiext.net to get the setup page to come up.
			<br /><br />
			</li>
			<li>
			D-Link DAP-1350 (discontinued and not covered in this write-up)<br /><br /></li>
			<li><a name="ZyXel_MWR102">ZyXel MWR102</a> and ZyXEL NBG2105
			<img alt="" height="240" src="gemini-images/NetworkConfiguration/ZyXEL_NBG2105.jpg" width="240" class="auto-style1" style="float: left"><br />The ZyXel MWR102 unit, which has all the same features as Router, AP, and Bridge modes. 
			They do not include instructions on how to put it into the "Client Bridge" mode in the users manual.  
			But I have a web page to "configure the MWR102 for Client Bridge mode"  
			The bad news is that ZyXEL has also discontinued it.  It has been replaced by a ZyXEL NBG2105.  
			The MWR102 is still available on Amazon and Tigerdirect, but for how long?  
			The NBG2105 is available on Amazon and NewEgg, but again for how long?  
			It will not only act as a bridge as the Netgear will, but also act as a router, and Access Point.  
			What this means is that unlike the Netgear you do not have to have a wireless router to use it.  You can use it as an AD-HOC device.  
			This means that a laptop or tablet can talk directly to the Gemini.  
			The Gemini with with device actually becomes the host for the wireless network.  
			This device can also be powered from the Gemini USB port. 
			This device is also faster as it is N networking compatible. Amazon has these for about $37<br />Well after testing with the MWR102, I can say that it is harder to get working in the bridge mode than the WINCE2001, 
			but it will work in that mode.&nbsp; 
			I did not test the Access moder or the Router mode. <br /><br />
			</li>
			<li><a name="TP-Link_TL-WR702N">TP-Link TL-WR702N</a>
			<img alt="" class="auto-style1" height="240" src="gemini-images/NetworkConfiguration/TL-WE702N.jpg" style="float: left" width="240"><br />TP-Link TL-WR702N that has a client mode that works very well with the Gemini-2 to provide a WiFi Ethernet connection.  
			It takes it about 15 seconds for it to connect from power on.  
			The main problem is that the instruction sheet I received, is not in English, but the mini-CD that comes with it does.  
			To configure this unit the frirst time, connect an Ethernet cable to you computer to it and power it with USB or the supplied power supple. 
			This units base IP address is 192.168.0.254, with a user name of admin and password of admin.  
			That brings up a configuration menu.  
			To use it with the Gemini-2 select client mode, and then answer all the questions and you are on your way. 
			Remove the Ethernet cable from your computer, and plug it into the Gemini-2 and now you have an 
			wireless Wifi adapter for the Gemini-2.  
			It was really simple to get it working.  
			This unit is available from Amazon for about $17.00&nbsp;&nbsp; 
			Use two of them to set up a remote system in the field.&nbsp; One 
			used as a router providing WiFi DHCP, and the other as above 
			connected to the Gemini-2.&nbsp; If you cannot find this particular 
			one TP-Link calls these either Pocket routers or Nano Routers. I 
			think the TL-TW702N is now being replaced by other models as I write 
			this. Some 
			of the part numbers are: TL-WR802N,&nbsp; TL-WE702N, or&nbsp; 
			TL-WR710N.&nbsp; Now I have not tested any of these three.<br />
			<br /></li>
			<li><a name="Other_Considerations">Other Considerations</a><br />There is also one other thing to take into account when connecting any 
			of the above devices or the Gemini-2 itself.<br />Some routers let you block WiFi connected devices by there MAC 
			address.&nbsp; If your network router is set up to do this, then you are 
			going to have to go into the setup routine for your network router 
			and tell it the MAC address of the of the travel router you are using, and 
			also the Gemini-2 or 
			turn MAC blocking off until you have the above device configured and 
			connected to the Gemini-2 and your network. You can then go back into 
			your router and allow the MAC address of the above device and the 
			Gemini-2.&nbsp; I cannot advise you how to do this as there are too many 
			routers for me to know how each is configured. Only allowing known 
			MAC addresses on a WiFi network is an additional security measure 
			besides using password security.<br /><br /></li>
			<li><a name="DD-WRT_firmware">DD-WRT firmware</a><br />It is possible to load the 
			<a href="http://www.dd-wrt.com/" target="_blank">http://dd-wrt.com</a> firmware into an older router and turn it into a bridge.
			Find out if your older router has DD-WRT firmware for it 
			<a href="http://dd-wrt.com/site/support/router-database" target="_blank">here</a>.&nbsp; 
			The client bridged instructions are
			<a href="http://www.dd-wrt.com/wiki/index.php/Client_Bridged">here</a> or 
			<a href="http://www.dd-wrt.com/wiki/index.php/Repeater_Bridge" target="_blank">
			Repeater Bridge</a>.&nbsp; 
			DD-WRT firmware is very versatile and offers many options.&nbsp; 
			Most routers you would do this to will be AC wired, but there range 
			will usually be more than a travel-router.&nbsp; Most will also have 
			4 hardware ports also.&nbsp; Some if newer will also support both 
			client-bridged plus providing an additional WiFi LAN connection to 
			extend the WIFi even further.&nbsp; I used a D-Link DIR-615e to test 
			this with.&nbsp; It worked great.<br /><br /></li>
		</ol>
		</td>
	</tr>
</table>
			
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		</td>
	</tr>
</table>
 <table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on 
		Feb 28, 2015 		</td>
	</tr>
</table>



</body>




<?php include("bottom.php"); ?>



