<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		<td class="h3">Error Reporting Proceedures</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr><td class="style6">It is really hard to troubleshoot a remote computer 
		or mount without seeing the problem.  
	<br />So please give us as much information as possible.  
	<br />Please do not leave out details.
	<br /> What might not see important to you, might be just the 
		ticket that lets up know what is wrong.
	</td></tr>
</table>
<table align="center" style="width: 900px">
	<tr><td class="style6">
	</td></tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">Click on for <a href="#reporting_Gemini2_Error">Error Reporting for Gemini-2 itself</a></td>
		<td class="style7">Click on for <a href="#reporting_Ascom_Error">Error Reporting for ASCOM Driver</a></td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7"><a name="reporting_Gemini2_Error"></a>Reporting Error for Gemini-2&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
		When reporting problems that include the Gemini-2 
		controller or it's hand controller the following information would be 
		very helpful to help diagnosis the problem.<br /><br />
		
		All of the below will greatly help us understand 
		your problem better, and make better decisions on how to guide you.<br /><br />
		
		1. Your name and how to contact you. If you do not want to post this on the users group
		please use:
		
		<!--<p align="center">Contact tom hilton:</p>-->
		
	<!--webbot bot="HTMLMarkup" startspan --><script language=javascript>

	  <!--
	  var contact = "Contact Tom Hilton"
	  var email = "tomh"
	  var emailHost = "gemini-2.com"
	  document.write("<a href=" + "mail" + "to:" + email + "@" + emailHost+ ">" + contact + "</a>" + ".")
	  //-->

		</script><!--webbot bot="HTMLMarkup" endspan -->
		Please include you phone number if you would like a call and the best time to call.

		<br />
		<br />
		2.Which Gemini version you have. Gemini-1 with telephone connectors for 
		motors. Gemini-1 with round motor plugs, The original Gemini-2 version, 
		or the New Gemini-2 Mini version.&nbsp; If you are running the 5.2 
		Firmware (Gemini-2 either version), on the hand controller please go to 
		the "Menu--&gt;HC--&gt;Info" and tell us which graphics chip your hand 
		controller has.<br />
		<br />
		3. Firmware Versions - 
		Please include the dates of the firmware. instructions for finding 
		these
		The main way to tell the firmware version is from the web interface. See 
		<a href="http://www.gemini-2.com/tellfirmwareversion.php" target="_blank">http://www.gemini-2.com/tellfirmwareversion.php</a>.&nbsp; If 
		you have not connected to the web interface click
		<a href="ConnectingtoG2.php" target="_blank">here for instructions</a>.&nbsp; 
			The hand controller can now also tell you the firmware dates. Go to Menu-->HC--><a href="hc/E020A.php" target="_blank">INFO</a>.

		
		
		<br /><br />
		
		4. Your Latitude and Longitude as you entered it in 
		the hand controller - 
		<a href="http://www.gemini-2.com/quickstart/startup-site.php" target="_blank">http://www.gemini-2.com/quickstart/startup-site.php</a>&nbsp; 
		Also your location by City State and country.<br /><br />
		
		5. The Time offset you entered into your hand 
		controller - <a href="http://www.gemini-2.com/hc/E023.php">
		http://www.gemini-2.com/hc/E023.php</a><br /><br />
		
		6. Your mount type<br /><br />
		
		7. Your power source and voltage and the battery voltage of the internal 
		battery as reported in the web interface.&nbsp; Also the voltage as reported on the 
		web interface, <a href="http://gemini/ad.cgi">http://gemini/ad.cgi</a> 
		or http://Your Gemini2 IP address/ad.cgi<br /><br />
		
		8. Your limit setting from hand controller -
		<a href="http://www.gemini-2.com/hc/En-%20limits-safety.php">
		http://www.gemini-2.com/hc/En- limits-safety.php</a><br /><br />
		
		9. Your computer operating system if you have the 
		Gemini-2 connected to a computer.<br /><br />
		
		10. If you know how, the log files from the 
		micro-SDcard inside the Gemini-2. You can normally get to these if using 
		windows, by typing <a href="ftp://admin@gemini">ftp://admin@gemini</a><span style="mso-spacerun:yes">&nbsp;
		</span>into Windows Explorer (not the web browser), and then copy the 
		Logs (In the logs&nbsp; folder) to your desktop, zip it 
		and the upload it to the files 
		section in the gemini-2 group. To do this: go to: <br />
		
		<a href="https://groups.io/g/Gemini-II/files/User_Logs_error_files_and_suggestions" target="_blank">
		https://groups.io/g/Gemini-II/files/User_Logs_error_files_and_suggestions</a><br />
		make a directory named with your handle or last 
		name. Then post the files in the new directory you made.<br /><br />
		
		11. If the problem is an alignment problem, please 
		tell use each star you use, and the error reading after adding that star 
		to the alignment model. This can help determine what is also going on.<br /><br />
		
		12. Please give a clear description of the symptoms 
		you are seeing.<br /><br />
		
		13. All the steps that we can take to duplicate the 
		problem is very important. All stars and pointing location you use, etc.<br /><br />
		
		14. If your problem involves the Gemini.net ASCOM 
		driver in any way, please follow the instructions below to report them.  <br /><br />
		
		<!--13. After your problem is fixed, Please come back 
		and delete your log files, as the files section can only hold 100Mbytes 
		for all files stored there.<span style="mso-spacerun:yes">&nbsp; </span>
		The admin will delete your files after about a year period.<br /><br /> -->
		
		15. 	Please place a message in the 
		<a href="https://groups.io/g/Gemini-II/" target="_blank">Gemini-2 users group</a> telling us about the email 
		you sent and also the error and what procedures led up to	the error.&nbsp; 
		Please note all the steps you took will greatly help in determining&nbsp; the errors. <br />
		<br />
		16. After your problem is fixed, Please come back 
		and delete your log files, as the files section can only hold 100Mbytes 
		for all files stored there. The admin will delete your files after about a year period.<br />
		
		</td> 
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">If the on-line users group does not provide enough 
		help then I suggest contacting Losmandy: You can call them at 747-283-1075 or FAX: 747-283-1078.&nbsp; 
		You can email Scott at <a href="mailto:scott@losmandy.com">
		scott@losmandy.com</a> or Russell using
		<a href="mailto:russell@losmandy.com">russell@losmandy.com</a> </td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6"><hr style="width: 900px; height: 4px" /></td>
	</tr>
</table>
<a name="ASCOM"></a>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">Reporting Error 
		for ASCOM Driver&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6"><a name="reporting_Ascom_Error"></a>Pleases follow this error report procedure below, in 
		case you do fine anything that was missed.<br />
		<br />
		Please provide as much information as noted in the above section for 
		Gemini which will help also determine ASCOM errors.&nbsp; Lack of 
		information, really makes it hard to troubleshoot for you.<br />
		<br />
		
		1. All of the info from the above section please.<br />
		<br />
		2. Your name and how to contact you. If you do not want to post this on the users group
		please use:
		
		<!--<p align="center">Contact tom hilton:</p>-->
		
	<!--webbot bot="HTMLMarkup" startspan --><script language=javascript>

	  <!--
	  var contact = "Contact Tom Hilton"
	  var email = "tom"
	  var emailHost = "gemini-2.com"
	  document.write("<a href=" + "mail" + "to:" + email + "@" + emailHost+ ">" + contact + "</a>" + ".")
	  //-->

		</script><!--webbot bot="HTMLMarkup" endspan -->
		Please include you phone number if you would like a call and the best time to call.  I will forward
		your contact info to the writer of the ASCOM Gemini.net driver.

		<br />
		<br />
		3. The default 
		error logging setting is 2. If you are experiencing error conditions, 
		please change this to a setting of 6.
		You can find this setting on the Setup menu directly below the GPS 
		setting window. See Figure 1.<br />
		</td></tr>
		
		<tr>
		<td class="style7">
		
		<img alt="" height="765" src="gemini-images/error-reporting/ASCOM-Logging.jpg" width="900" /><br />
		Figure 1
		</td></tr>
		<tr><td  class="style6">
		<br />
			4. After changing it to a level of 6, please try and duplicate the error 
		again. Also please use either the Windows snipping tool in Vista, Win 7, 
			Win10,
		or Alt-PrtSc to capture any error messages and post them to a Wordpad 
		file, and save it as a rich text document, zip them&nbsp; and then post 
		them. To do this: go to: <br />
		
		
&nbsp;<a href="https://groups.io/g/Gemini_ASCOM_Driver/files/Logs_and_error_files" target="_blank">https://groups.io/g/Gemini_ASCOM_Driver/files/Logs_and_error_files</a>	
<br />
		make a directory named with your handle or last 
		name. Then post the files in the new directory you made.<br />
		<br />
			5. 	You will normally find your log files in C:/..../My documents/ASCOM&nbsp; 
			Where /..../ is your user name and is found under c:/users<br />
		They will be by date.<br />
		<br />
			6. 	Please place a message in the 
			<a href="https://groups.io/g/Gemini_ASCOM_Driver" target="_blank">Gemini ASCOM</a> users group telling us about the email 
		you sent and also the error and what procedures led up to	the error.&nbsp; 
		Please note all the steps you took will greatly help in determining&nbsp; the errors. <br />
		<br />
			7. After your problem is fixed, Please come back 
		and delete your log files, as the files section can only hold 100Mbytes 
		for all files stored there. The admin will delete your files after about a year period.<br /><br />
		
			8. 
			Here is what the Groups.io&nbsp; page should look like after you log in 
			to Groups.io <br />
			</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style7">
		<img alt="" height="451" src="gemini-images/ascom/Create_New_folder_for_Error_files.jpg" width="900" />

		<!--<img alt="Sample Yahoo groups file page" height="338" src="/gemini-images/ascom/Ascom-%20Group-Files-Section.jpg" width="900" />-->
</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		The box indicated by the red arrow is used to create a new folder.  The long box to the right of "create new folder box" that says 
		"upload" is used to upload a file.<br />
		Once you click on it, give the folder your handle or last name, then 
		click on the folder to make sure you enter the folder you just created.&nbsp; 
		Then use the upload button to upload your file.</td>
	</tr>
</table>		<br />
<table align="center" style="width: 900px">
	<tr>	
		<td class="style6">
		Thanks<br />
		The ASCOM Gemini.NET developers.
		</td>
	</tr>
</table>	
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">&nbsp;</td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Nov 3, 2017
		</td>
	</tr>
</table>
</body>




<?php include("bottom.php"); ?>



