<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Set Site </title>

<?php include("topv.php"); ?>


<link href="
/gemini-2.css" rel="stylesheet" type="text/css" />

</head>
<body style="color: #FFFFFF; background-color: #000000" class="h1" >
<table align="center" style="width: 900px">
	<tr>
		<td class="h5" align="center">Interactive Hand-Controller Menus - click on green button to Navigate</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style7" width="450px">Values in this screen are Demo Only
		<map id="ImgMap0" name="ImgMap0">
			<area coords="299, 361, 427, 398" href="E006A.php" shape="rect" />
			<area coords="297, 417, 426, 457" href="E007A.php" shape="rect" />
			<area coords="296, 465, 425, 512" href="E009A.php" shape="rect" />
			<area alt="" coords="306, 519, 435, 598" href="E012.php" shape="rect" />
			<area alt="" coords="376, 201, 18" href="E019A.php" shape="circle" />
			<area alt="" coords="376, 242, 18" href="E019B.php" shape="circle" />
			<area alt="" coords="377, 288, 16" href="E019S.php" shape="circle" />


		</map>
		<img alt="" height="611"src="En-Images/E019H.jpg" width="450"usemap="#ImgMap0" /></td>

		<td width="10px"></td>
		<td class="style6">You have to enter your coordinates into the latitude and longitude, don't worry about the offset, we will do that on the next 			screen. If you select the different locations, you can see the sign change on the display.  Notice that the Longitude is 
		Negative in the USA and Positive in Europe <br />
		<br />
		Touch in the Longitude box. When you do the Longitude entry screen will 
		appear.<br />
		Do what is indicated in 
		that screen. After that you will be brought back to 
		this screen.<br />
		<br />
		Touch in the Latitude box, You will be taken to a screen similar to 
		the one you just filled out.
		After filling out that screen you will be brought back here again.<br />
		<br />
		Hit the Back button.&nbsp;&nbsp; <br />
		<br />
		Note: the Hemisphere is selected totally by the sign of the Latitude in the 
		Gemini-2. Positive for Northern Hemisphere and <br />
		negative for Southern Hemisphere. It was the same in the Gemini-1
		also. No switches to change at all.
		<br />
		<br />
		The Query GPS button will have the Gemini-2 try and get the GPS coordinates
		from a GPS unit hooked to Serial Port 1</td>
		</tr>
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		The speed of this ports 
		defaults to 4800 baud for GPS use. It's speed is set in the Web interface 
		under Serial Tab.<br /><br />
		Note: If you are using a GPS receiver to get the time, then the offset 
		does not matter. The Gemini-2 only uses UTC time for all it's 
		calculations, and a GPS returns UTC time only.&nbsp; You can disregard 
		the time screen when using a GPS receiver.</td>
	</tr>
</table>

</body>

<?php include("bottom.php"); ?>


