<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text..html; charset=utf-8" http-equiv="Content-Type" />
<title>Polar Align Correct</title>

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
		<td class="style6">
		<map id="ImgMap0" name="ImgMap0">
			<area coords="83, 256, 358, 341" href="E004.php#start" shape="rect" />
			<area coords="309, 520, 440, 598" href="E012.php" shape="rect" />
		</map>
		<img height="611"src="En-Images/E027.jpg" width="450"style="float: left" usemap="#ImgMap0" />
		</td>
		<td width="10px"></td>
		<td class="style6">
		<u><em>PAC</em></u> - 
		This is the PAC or Polar Align Correct menu.  It will only show up after a model is built.
		<span class="style3">Using it will wipe out any model your built.</span>  <br />
		<br />In using the alignment script, pay attention to when you have a 
		star that is nearly straight up in the sky. Ideally, you'll want one 
		that is a little south (if you happen to be in the northern hemisphere) 
		or vice versa if you're in the southern hemisphere. That'll put it near 
		that intersection.<br />
		<br />
		When you come to this page from any other location, the star that the 
		telescope was pointed at, is what you are going to re-center on. The 
		telescope will move off of that object by the amount of Polar Error that 
		it has calculated from doing an alignment. <br />
		<br />
		You can do the PAC on any target once the button shows up in the 
		startup. You'll just get better results using a target near that 
		intersection.<br />
		<br />
		The centering will be done using the Alt and AZ adjustment on the mount --- 
		not using the slew controls on the directional paddle.<br />
		<br />
		Take your time and be patient! <br />
		<br />
		<br />
	</td>
	</tr>
</table>

<table align="center" style="width: 900px">
	<tr>	
		<td class="style6">
		Note that once you've hit the "done" button, the PAC alignment will 
		discard the previously built pointing model, so you'll start over again, 
		and take you back to the main menu.&nbsp; 
		The suggestion is to do the PAC twice to get good results.&nbsp; Then 
		after that you will need to do at least a synchronize or a cold start.<br />
		<br />
		Also I would suggest that you use a camera and software that provides 
		cross-hairs to do this alignment with. With the telescope pointed almost 
		vertical you are going to have a hard time seeing through an eyepiece.</td>
	</tr>
</table>
<!--
<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		&nbsp;</td>
	</tr>
</table>
-->
</body>

<?php include("bottom.php"); ?>


