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
		<td class="h3">Math behind converting from Decimal Degrees to 
		Degrees:Minutes:Seconds</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="h2">
		Courtesy of Dave Cochrun</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		
			Here is an example of the math involved in making a conversion from 
			decimal degrees to degrees, minutes, seconds or DMS.&nbsp; DMS is very 
			similar to clock time hours, minutes, seconds.&nbsp; Each hour (day) is 
			divided into 60 minutes and each minute is divided into 60 seconds.&nbsp;&nbsp; 
				<br /><br />We are going to convert Latitude 30.181360 and Longitude -85.781929 to Degrees : Minutes :Seconds
				<br /><br />First lets tackle the Latitude of&nbsp; 30.181360&nbsp; 
			<ol>
				<li>Keep the whole degrees (30) and put that in the D field.
			D = 30, M = ?, S=?
			</li>
				<li>Take everything to the right of the decimal point and the decimal 
				point and multiply by 60 like this...
				0.181360 x 60 = 10.8816 This is the decimal number of minutes.</li>
				<li>;Keep the whole minutes (10) and put that in the M field. D = 30, M=10, S=?</li>
				<li>Take everything to the right of the decimal point and the decimal 
				point and multiply by 60 like this...
		 		0.8816 x 60 = 52.896 This is the decimal number of seconds.
				Put this number in the S field D = 30, M = 10, S = 52.896 Now keep the 52 for 
				seconds. Since the decimal part of the seconds is larger than 0.50 you would round up the seconds to 53.</li>
				<li>So you enter 30:10:53 into the hand controller input field.
				The Gemini hand controller does not show Seconds on the 
				Site page, but you can enter it in the input box on the entry page.</li>
			</ol>
		</td>
	</tr>
</table>
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">Now lets do the Longitude of -85.781929

		<ol>
			<li>Keep the whole degrees (-85) and put that in the D field. D = -85, M = ?, S=? </li>
			
			<li>Take everything to the right of the decimal point and the decimal 
			point and multiply by 60 like this...
			0.781929 x 60 = 46.9157 This is the decimal number of minutes.</li>
			
			<li>Keep the whole minutes (46) and put that in the M field D = -85, M=46, S=? </li>
			
			<li>Take everything to the right of the decimal point and the decimal 
			point and multiply by 60 like this...
			0.9157 x 60 = 54.942This is the decimal number of seconds.
			Put this number in the S field.
			D = -85, M = 46, S = 54.942 Now keep the 54 for 
			seconds. Since the decimal part of the seconds is larger than
			0.50 you would round up the seconds to 55. </li>
			
			<li>So you enter -85:46:55 into the hand controller input field.
		 	The Gemini hand controller does not show Seconds on the Site page, 
			but you can enter it in the input box on the entry page.</li>
		</ol>
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
		<td class="style7whiteborder" >
		Page last updated on Oct 27, 2017 		</td>
	</tr>
</table>

</body>




<?php include("bottom.php"); ?>



