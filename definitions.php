<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>

<style type="text/css">
.auto-style2 {
	text-decoration:underline;
}
</style>


<base target="_blank" />



</head>

<body style="color: #FFFFFF; background-color: #000000">

<body>



<p class="style6">
<table align="center" style="width: 900px">
	<tr>
		<td class="h2">Definitions</td>
	</tr>
</table>


<table align="center" style="width: 900px">
	<tr>
		<td width="300Px"><a href="#Adaptive_King_Tracking_Speed">Adaptive_King_Tracking_Speed</a></td>
		<td width="300Px"><a href="#Alignment">Alignment</a></td>
		<td width="300Px"><a href="#Memory Types">ARM</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Askifpossible">Ask if possible</a></td>
		<td width="300Px"><a href="#All_Speed_Mode">All_Speed_Mode</a></td>
		<td width="300Px"><a href="#Balance_menu">Balance Menu</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="troubleshooting.php#7" target="_blank">Battery Replacement</a></td>
		<td width="300Px"><a href="#Civil_Time_or_Local_Time">Civil_Time_or_Local_Time</a></td>
		<td width="300Px"><a href="#Closed_Loop_Tracking_Speed">Closed_Loop_Tracking_Speed</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Cold_Start">Cold_Start</a></td>
		<td width="300Px"><a href="#Comet">Comet/User tracking Speed</a></td>
		<td width="300Px"><a href="#Crossing_the_Pole">Crossing_the_Pole</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#CWD">CWD</a></td>
		<td width="300Px"><a href="#Home_Position">Home_Position</a></td>
		<td width="300Px"><a href="#Hour_Angle">Hour Angle</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="/hc/En-limits-safety.php">Limits</a></td>
		<td width="300Px"><a href="#Lunar_and_Solar_Tracking_Speed">Lunar_and_Solar_Tracking_Speed</a><br /></td>
		<td width="300Px"><a href="#Memory Types">Memory types in G-2</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Meridian">Meridian</a><br /></td>
		<td width="300Px"><a href="#Meridian_Flip">Meridian_Flip</a><br /></td>
		<td width="300Px"><a href="#Model">Model</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Model_Parameters">Model_Parameters</a></td>
		<td width="300Px"><a href="#Search">Object Search</a></td>
		<td width="300Px"><a href="#Park">Park and Un-Park</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Parking Modes">Parking Modes 1, 2,or 3</a></td>
		<td width="300Px"><a href="#Photo_mode">Photo_mode</a></td>
		<td width="300Px"><a href="#Polar_Alignment">Polar_Alignment</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Polar_Align_Assist">Polar_Align_Assist</a></td>
		<td width="300Px"><a href="#Polar_Axis_Correction">Polar_Axis_Correction</a></td>
		<td width="300Px"><a href="#Programming_Serial_and_UPD_commands">Programming_Serial_and_UPD_commands</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Pulse_Guiding">Pulse_Guiding</a></td>
		<td width="300Px"><a href="#QuickStart">Quick Start</a></td>
		<td width="300Px"><a href="#RA-DEC_Trackinge_Error">RA-DEC_Error and Tracking Heavy Duty Tracking ERROR</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Reset_Model">Reset_Model</a></td>
		<td width="300Px"><a href="#Memory Types">SD Card</a></td>
		<td width="300Px"><a href="#Memory Types">SRAM</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Sidereal_Speed">Sidereal_Speed</a></td>
		<td width="300Px"><a href="#Sidereal_Time">Sidereal_Time</a></td>
		<td width="300Px"><a href="#SolarSystem">Solar System Catalog</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Synchronize">Synchronize</a></td>
		<td width="300Px"><a href="#Targetunreachable">Target unreachable error</a></td>
		<td width="300Px"><a href="#Telescope_Speeds">Telescope Speed</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Terrestrial_Speed">Terrestrial_Speed</a></td>
		<td width="300Px"><a href="#Time_Zone_Offset">Time_Zone_Offset</a></td>
		<td width="300Px"><a href="#TVC">TVC</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Undo_Last">Undo_Last_Alignment</a></td>
		<td width="300Px"><a href="#Visual_Mode">Visual_Mode</a></td>
		<td width="300Px"><a href="#Warm_Start">Warm_Start</a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#Warm_ReStart">Warm_ReStart</a></td>
		<td width="300Px"><a href="#Western_Go_To_Limit">Western_Go_To_Limit</a></td>
<!--		<td width="300Px"><a href="#"></a></td>
	</tr>
	<tr>
		<td width="300Px"><a href="#">  &nbsp;</a></td>
		<td width="300Px"><a href="#">  </a></td>
		-->
	</tr>
</table>

<br /><br />



<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		Definition of terms:<br />
		<ol start="1">
		
		<li>
		<em><u><a name="Adaptive_King_Tracking_Speed">Adaptive King Tracking Speed</a>:</u></em> 
		In the absence of the Earth’s atmosphere, sidereal 
		rate tracking would be all that is
		needed to accurately track objects with fixed RA and Dec. coordinates 
		(any object	outside the solar system). However, because the Earth’s atmosphere 
		refracts (bends) light, it complicates the situation. The light from an object close to 
		the horizon must pass through more atmosphere than an object higher in the sky. It is 
		therefore subject to more refraction, causing the object to appear to be slightly higher in the 
		sky than it actually is. This is called refraction. As the object climbs higher in the sky, it is 
		subject to less and less refraction, and catches up with its refracted image. This means 
		that objects appear to move at a rate slightly slower than sidereal rate when they are close to 
		the horizon.  Several methods have been devised to compensate for this effect called 
		"differential refraction.”
		<br />
		The King method (published 1931 by Edward Skinner King) helps to avoid 
		star trailing in photographs caused by differential refraction. Differential 
		refraction may especially affect wide field photographs with long exposures. 
		<br />
		King proposed two measures: </li>
		<ul>
			<li>Offsetting the polar axis slightly towards the zenith, and
			</li>
			<li>Adjusting the tracking rate. 
			</li>
			</ul>
		The values necessary to accomplish this depend on the geographical 
		coordinates of the
		observing site and the declination of the object being photographed.
		Gemini's Adaptive King rate tracking varies the tracking speed to match 
		the required value for the selected object’s declination. The user must offset the 
		elevation of the polar axis himself.<br /><br />

		<li><em><u><a name="Alignment">Alignment</a>:</u></em>&nbsp; Used to build a model. If no model is built, the 
		first use of Alignment will do an Initial alignment. Additional use of 
		the Alignment instruction will add stars to the model.&nbsp; Note: that 
		a model has to be built on both sides of the meridian.&nbsp; To switch 
		sides a meridian flip must be done.&nbsp; When 
		switching sides, (a meridian flip) the first Alignment will start 
		building a model on the other side, if no model has been built on that 
		side.
		Models can be built on either side of the meridian.&nbsp; The gemini-2 
		will automatically switch between them according to which side of the 
		meridian it is on. (Pointing to the west from the east side in not 
		considered switching sides, and the reverse is also true. If a meridian 
		flip has not been accomplished, you have not switched sides.) This 
		allows you to include some western stars in your eastern model, and some 
		eastern stars in your western model.&nbsp; How doing this effects the 
		model has not been tested yet.&nbsp; When the results of doing this is 
		known, I will change this paragraph.&nbsp; If you are using the built in 
		model builder, which has an East and West button, be advised that these 
		two buttons only select stars on the East or West.&nbsp; They do not 
		select which model is being used.&nbsp; To switch to the other model the 
		mount must go through the pole.&nbsp; An easy way to do this is to 
		select a star that has a HA greater than +/-4.6&nbsp; This almost always 
		assures that the mount will flip sides.
		<br /><br />
		</li>

		<li><em><u><a name="Memory Types">Memory and ARM</a>:</u></em> There are 
			several types of memory used inside the Advanced RISC Machine, which is a family of reduced instruction set computing (RISC)
			architectures for computer processors normally refered to as ARM microprocessors. The main board uses one and the hand controller
			has a smaller version of one. SRAM, and SD RAM described below.<ul>
				<li>Internal Memory.<ul>
					<li>512K of Flash memory.&nbsp; This is the memory that 
					holds the program that runs the Microprocessor, and also the 
					boot loader. This memory holds it contents without battery 
					backup.</li>
					<li>32K of battery backed up Static Ram "SRAM" for storing variables.</li>
					<li>16KB for the Ethernet interface.  The Hand controller ARM does not have a Ethernet interface.</li>
				</ul>
				</li>
				<li>&nbsp; External Memory:<ul>
					<li>A micro-SDcard, usually 2GB in size, but can be bigger.&nbsp; 
					This is used to store the English, German, French, and 
					Spanish Web interface menus.&nbsp; It also stores the star 
					catalogs used in the main unit.&nbsp; (The hand controller 
					stores it's own catalogs).&nbsp; You can store a copy of the 
					Models, copy of PEC, Copy of the values stored in the 
					battery backed up Ram.&nbsp; It also contains the Mobile 
					Hand controller if loaded, and a directory containing the 
					Gemini configuration.&nbsp;&nbsp; It can also store the 
					videos that Scott has produced if you wish to upload them to 
					it.</li>
				</ul>
				</li>
			</ul>
			<br /><br />
			</li>

		
		<li><em><u><a name="Askifpossible">Ask if Possible</a>:</u></em>
		This selection will allow the telescope display the "<a href="#QuickStart">Quick Start</a>, 
		<a href="#Cold_Start">Cold Start</a>, <a href="#Warm_Start">Warm Start</a>, or 
		<a href="#Warm_ReStart">Warm Restart</a> menu", if something has
		not been detected where a Cold Start is mandatory.&nbsp; If the 
		SRam has been corrupted, or the log file corrupted, then the 
		Gemini-2 is more than likely going to force a cold start 
		bypassing the above menu selection. Also a low battery in the main unit 
		could cause the SRAM to lose it contents, and force a cold start.<br /><br />
		</li>
		<li>
			<em><u><a name="All_Speed_Mode">All Speed Mode</a>:</u></em> This mode is for centering, slewing, and 
			guiding.<br /> You get to this mode by Menu--&gt;HC--&gt;<a href="/hc/En-hcmode.php" target="_blank">Mode</a>&nbsp; 
			and select All-Speed button.<br />Again only the buttons on the back of the hand controller can change speed by pressing the opposite button. 
			In this mode, all speeds are available, from Guiding 
			Speed to Slewing Speed, by using the opposite-button trick. You can use this mode, for example, while 
			drift aligning, when you need very fine centering of a star at the crosshairs and a fast 
			move from the meridian to the eastern or western horizon. However, for normal observing, 
			you'll probably select either the Visual or Photo Mode.&nbsp; 
			Guiding only works in "All Speed mode" or "<a href="#Photo_mode">Photo_mode</a>"<br /><br />
			</li>
			
			<li>
			<em><u><a name="Balance_Menu">Balance Menu:</a></u></em>&nbsp; 
			This menu is a HC menu see
			<a href="http://www.gemini-2.com/hc/En-balance.php" target="_blank">
			Menu--&gt;Mount--&gt;Balance</a> on the hand controller. It indicates in 
			PWM (Pulse Width Modulation) and offset, how much power is being 
			supplied to the motor and, how far the motor is from the desired 
			position, respectfully.<br /><br />
			</li>
			<li> Battery Replacement is in the 
			<a href="troubleshooting.php#7" target="_blank">Trouble shooting</a> page.<br /><br /></li>
			<li><a name="Civil_Time_or_Local_Time">Civil Time or Local Time</a> - The time that you normally put on 
			your clocks/watches.&nbsp; If you are observing daylight saving 
			time, that time would include the daylight saving time.&nbsp; When 
			observing daylight saving time, normally the time zone offset will 
			be changed by +1. <br /><br />
			</li>
		<li>
		<em><u><a name="Closed_Loop_Tracking_Speed">Closed Loop Tracking Speed</a>:</u></em> The preceding discussion of tracking rates assumes 
		that the mount is accurately polar aligned, allowing tracking to be 
		accomplished using only the RA motor. However, for visual observing 
		sessions, there is no need for extremely accurate polar alignment. By 
		selecting Closed Loop tracking, Gemini can accurately track an object 
		even if polar alignment is off several degrees in any direction. Gemini 
		does this by comparing the coordinates of the object being tracked with 
		the actual coordinates of the telescope. If the&nbsp; coordinates do not 
		match, Gemini makes slow corrections in both RA and Dec. axes to point 
		the telescope back at the object. This process of compare and correct is 
		done about 22 times per second. Although Closed Loop tracking will keep 
		an object centered for a long time, it is not a substitute for a good 
		polar alignment – especially if you intend to photograph extended 
		objects. A misaligned polar axis will lead to field rotation, an effect 
		where objects in the field of view will rotate around the center. 
		However, after having done a good polar alignment, Closed Loop tracking 
		can be used to photograph slow moving objects, such as minor planets or 
		comets. This can work even if the object moves at a varying speed, by 
		repeatedly sending actual coordinates to the Gemini using a computer. 
		Because Gemini uses modeling parameters to calculate coordinates, Closed 
		Loop tracking is only available after a pointing model has been 
		established.<br /><br />
		</li>
		
		<li><em><u><a name="Cold_Start">Cold Start</a>:</u></em> This assumes 
		that no model has been build, or the mount has been physically moved, If 
		the mount is moved In Latitude or Longitude, or even a change of it's 
		position even slightly to the pole, or in vertical or 
		horizontal position at all (anything that will change Polar alignment), you have 
		to do a cold start. You start at CWD position with a cold start. It also 
		wipes out your current models, on both sides of the meridian. This is 
		the mode you use if you are mounted on a tripod.&nbsp; If the tripod 
		gets moved at all or bumped you will have to redo the cold start and 
		your model. The processor uses the CWD position as an approximate 
		starting point. When you do a synchronize or alignment on a bright star, the 
		processor now has a known good point to start it's calculations from, and also resets the limits (using the numbers that has already been set) to there correct position.&nbsp; 
		If this is the first time you have done a cold start, then after the 
		Synchronize/alignment on a bright star, go set your limits.&nbsp; This is 
		important, especially if you have a large scope mounted on your mount.<br /><br />Also see
		<a href="#Warm_Start">Warm Start</a> and <a href="#Warm_ReStart">Warm Restart</a>.<br /><br />
		</li>
		
		<li>
		<em><u><a name="Comet">Comet/User Tracking Speed</a>:</u></em> This rate is very complex and a 
		separate web page will be generated for it.
		<br /><br />
		</li>
		
		<li><em><u><a name="Crossing_the_Pole">Crossing the Pole</a>:</u></em> this is defined as when the Dec continue to 
		climb until it reaches 90 degrees, then when it starts back down on the 
		other side you have crossed the pole.&nbsp; Normally this is 
		accomplished along with a meridian flip, but it does not have to be.<br /><br />
		</li>
		
		<li>
		<em><u><a name="CWD">CWD</a></u></em>, Counter weights and shaft in a 
		vertical Down position with Dec pointed to True North, or True 
		South in the Southern Hemisphere.<br /><br />
		</li>
		
			<li>
			<a name="Home_Position"><u>Home Position</u></a>, Home position is a user defined position.&nbsp; It 
			can be used to park the telescope at any position.&nbsp; It is 
			normally used in Observatories that have roll-of-roofs to park the 
			mount in an horizontal position so that a roof can be closed over 
			the telescope.&nbsp;&nbsp; You define it by moving the telescope to 
			the desired position and then use Menu--&gt;Park--&gt;Set home position.&nbsp; 
			When coming out of this position you must use a Warm Restart.<br /><br />
		</li>
		<li> 
		<em><u><a name="Hour_Angle">Hour Angle</a>: </u></em>Hour angle is just the 
		Time 
		in hours from the object to the meridian. 
		HA will change as the position of the object changes with earth rotation. When the object crosses the meridian, 
		HA will be exactly zero. Past the meridian, it will be positive, before the meridian it will be negative. As an example:
		-4.3 hours HA means the object has not crossed the meridian yet, and is located about 64.5 degrees before it. 
		Hours and degrees are easily converted into each other: deg = hours * 360 / 24

		<br /><br /></li>
		<li>Limits = takes you to the 
		<a href="%22/hc/En-limits-safety.php" target="_blank">Limits page</a>.<br /><br /></li>
		
		<li>
		<em><u><a name="Lunar_and_Solar_Tracking_Speed">Lunar and Solar Tracking Speed</a>:</u></em> Neither the lunar nor solar tracking rates is 
		constant. Since the orbits of Earth and Moon are slightly elliptical, the apparent speed of Moon and Sun will change. 
		When you select the lunar or solar tracking rates, the tracking speed will be calculated 
		based on the actual position and the position one hour later.
		
		Because the Moon orbits the Earth, its RA and Dec. change during the 
		course of the night. The lunar tracking rate compensates for the RA component of that 
		change; there is no compensation for the changes in Dec. While sidereal rate can 
		certainly be used for visual lunar observing, the lunar rate will do a better job keeping the 
		Moon centered in the telescope’s field of view. Since the Moon is relatively near the 
		Earth, even the location on Earth where you are observing must be taken into account. 
		The lunar tracking rate therefore takes the parallax into account by calculating 
		top-centric instead of geocentric positions.
		
		Gemini computes the tracking rates by calculating the current position 
		of the Sun or Moon and the position one hour later. While the tracking rate for the 
		(distant) Sun will not change much during an observing session, the tracking rate for the 
		Moon might vary significantly as its parallax changes moving from the horizon to higher 
		elevations and vice-versa. You can reselect the lunar tracking rate periodically 
		throughout the observing session to allow Gemini to recalculate the correct rate as needed.
		
		Because the Earth is orbiting the Sun, the Sun’s RA and Dec. do change 
		during the course of the day, but much more slowly than the Moon's. The solar 
		tracking rate again compensates for the RA component of that change, but not for the Dec. 
		Since the difference between solar and sidereal rate is only about 4 minutes a 
		day, you will see little difference between the two over a short period of time.<br /><br /></li>
		<li><em><u><a name="Meridian">Meridian</a>:</u></em> Meridian always goes through due North, zenith 
		(directly overhead), and due South points. Altitude of zenith = 90° 
		(straight overhead) always. ... Celestial equator always intercepts 
		horizon at exactly East and exactly West points, from your location.&nbsp;
			<br /><br />
		</li>
		<li><em><u><a name="Meridian_Flip">Meridian Flip</a>:</u></em> The process of causing the mount to switch sides of 
		the mount.&nbsp; 
		In the Gemini 2 you can do this when selecting a target by checking the 
		flip box during a Go To command.&nbsp; If the mount can flip to get to 
		the target it will flip.&nbsp; If it cannot see the target with a flip, 
		then it will not flip even if the flip box is selected. See the 
		<a href="limits.php" target="_blank">limits page</a> for drawing what 
		is meant by East and West sides of the mount. Note the new Align menu 
		selection on the hand controller does not offer this box for flip.&nbsp; 
		Only using the Go To button (located on the right side of the Menu 
		button) will you get a the flip option box.&nbsp; It will be at the 
		bottom of the page of the object you selected. If you do a Go To --&gt; 
		Coordinate Input --&gt; check the flip box, and then Go To at the bottom of 
		the page, the Gemini-2 will do a meridian Flip to the current 
		coordinates, but only if it can safely do so, and can reach the current 
		coordinates from the other side of the mount. <span class="style2"><b><em>NOTE: The mount will never 
		do a meridian Flip while tracking at any of the defined tracking rates.&nbsp; 
		It only does meridian flips during slews or GoTo's</em></b></span>.&nbsp; There are some programs 
		that can control the mount and make it seem to do a meridian flip during 
		tracking such as ACP and others. <br />If you are using the Model builder 
		to build a model and want to do a flip to the other model, you have to 
		pick a star that is between (+/- 4.6 and 6 HA) using the opposite side 
		(East/West buttons) IE.&nbsp; If you are on the east side, hit the West 
		button till a star comes up that has a HA larger than 4.6, and this will 
		almost always cause a meridian flip.&nbsp; This also holds true for the 
		west side and want to goto the east side with a meridian flip.&nbsp; 
		Just hitting the other side button and picking a star, will not insure a 
		flip to the other model.&nbsp; It is this way so that you can add stars 
		that is close to the meridian's other side to the existing model.&nbsp; 
		This helps in transitioning from east to west and back.&nbsp; Also to 
		ensure good meridian flips, while building a model use an alignment star 
		that is close to zenith that can be added to the model on both sides of 
		the meridian.&nbsp; This will help with better GOTO's and better 
		meridian flips. This
		<a href="http://astronomy.mdodd.com/gem_movement.html" target="_blank">
		site</a> shows pictures of G11 and what goes on during a meridian flip.&nbsp;Please refer to the 
		<a href="../Simple_Rules_Gemini_Uses.php" target="_blank">rules that the Gemini-2 uses</a> to determine how it reacts to inputs.
		
		
		<br />
		<br />
		<br />
		</li>
		
		<li><em><u><a name="Model">Model</a>:</u></em> This is the mathematical sum of terms that is built as one 
		builds a model.&nbsp; It is used to insure precise GOTO's.&nbsp;&nbsp;&nbsp; 
		Without a model, the mount really does not know the precise mechanical 
		to physical star locations.&nbsp; It takes into many mechanical 
		attributes of the mount, such as polar misalignment, 
		non-perpendicularities, and then flexure calculated as more stars is 
		added to the model.&nbsp; Since the Gemini-2 
		controller can control so many different types of mounts, with many 
		different types of telescopes attached, there is no practical way to 
		have a pre-defined model.&nbsp; Also a pre-defined model would not be 
		possible without perfect polar alignment.&nbsp; Building models normally 
		use the Bright Star catalog group of stars.&nbsp; These provide the most 
		accuracy.&nbsp; You can however use any object in the sky except the 
		moon and sun to build reliable models, as long as you can center on 
		them.&nbsp; There are two difference methods of providing a model in the 
		Gemini-2.&nbsp; One is more like what was done in the Gemini-1, while 
		the other is a graphics hand controller guide you through building a 
		model.&nbsp; Please see
		<a href="G2_Verse_G1-Modeling.php" target="_blank">G2_Verse_G1-Modeling</a>. 
		There are actually two models built in the Gemini-2.&nbsp; One for the 
		East side, and one for the West side. It is recommended that you put 
		8-10 stars into each model, with at least 1 star from the other side of 
		the Meridian in each model.&nbsp; Try to make sure the first two stars 
		of each model are separated by at least 4 
		hours or more away from each other in RA, and then add more objects in between 
		them. So far the Hand Controller checks only for HA and elevation, not 
		for distances between the objects, but the hour angles are displayed for 
		each object, so you can select it manually. These models are stored in 
		the battery backed up SDam inside the main Processor.&nbsp; You do have 
		the option to store them into the micro-SDcard in the main unit, and 
		also retreave them from this memory. They are never worked on from the 
		micro-SDcard, only the battery backed up SDram in the processor.&nbsp; 
		Please note that the stars that are used to build a model is not 
		retained.&nbsp; Only the last star used in mormally known, so it can be 
		removed from the model if necessary.&nbsp; <br />
		<br />
		</li>
		
		<li><em><u><a name="Model_Parameters">Model Parameters</a>:</u></em>&nbsp; These are calculations in 
			Arc-Seconds of the different pointing and alignment errors 
			from doing a star alignment.
			</li>
			<ul>
				
				<li>Alignment count - tells you how many points are in each 
				model. Note there is an East and West model built separately.&nbsp; 
				However they can only be saved or restored together.&nbsp; You 
				cannot separate them.&nbsp; See Web interface
				<a href="web/web-modeling.php" target="_blank">Page Modeling</a>.&nbsp; </li>
				<li>Polar Axis Misalignment - can be calculated with 3 to 5 
				stars.&nbsp; The amount that your telescope is missaligned from 
				the polar axis.&nbsp; This is also called Polar Axis </li>
				
				<li>Orthogonally Error - This is calculated with the 6 through 9 
				stars. Orthogonally error is were the telescopes is not 
				perfectly aligned Perpendicular to the RA Axis. This can be 
				caused by the Telescope DEC axis Saddle plate not being 
				Perpendicular to the RA Axis, or the telescope not setting in 
				the DEC saddle plate Parallel to the saddle plate.&nbsp; Other 
				mechanical items can cause this but this is the most common.&nbsp; 
				This is also called Non-Perpendicularity on the hand controller 
				model error pages. There are two values given. The first non-perpendicularity measure is at 
				the pole, and the second at the celestial equator. </li>
				
				<li>Flexure - this is calculated with 10+ stars.&nbsp; This is 
				how much the counter weight shaft is flexing.&nbsp; It takes an 
				alignment of 10+ stars on both sides of the meridian to 
				calculate this.</li>
				
				<li>Model Parameters:&nbsp; These are calculations in 
				Arc-Seconds of the different pointing and alignment errors 
				from doing a star alignment.</li>
				
				<li>Refraction is also adjusted for if a model is built. The 
				setting in ASCOM driver allows you to turn this off for 
				coordinates that are sent from your PC, since some software 
				already applies this correction to the transmitted coordinates.<br /><br />
				</li>
			</ul>
			<li><em><u><a name="Search">Object Search</a>:</u></em> 
			<b>Object Search</b> This menu allows you to search around where the mount is pointing. The field of view is in arc seconds, 
			and the search cycles is how many times the mount will make a circle at the arc seconds of deviation from center. 
			Hand controller commands are "Menu--&gt;Search." Also see tutorial 
			<a href="http://www.gemini-2.com/hc/E016.php" target="_blank">page</a>.<br /><br />
			</li>
			
			<li><em><u><a name="Park">Park and Un-Park</a>:</u></em> 
			<b>Park</b> is the act of moving the mount to a fixed defined position, and stopping all tracking movement.&nbsp; 
			Un-Park is releasing the mount from a fixed park position, but does 
			not necessarily star up tracking again.<br /><br />
			</li>
			
		<li><em><u><a name="Parking Modes">Parking Modes</a></u></em> - Parking modes 
		defines how the mount and what rules the mount follows to perform an Un-Park. There are 3 
		different modes. The rules are in firmware after July 27, 2013 
		</li>
				
				<ul>
					<li>Every Move or Mode 0 - Every command that moves the mount wakes the 
					mount up (current state). This includes pressing the 
					directional buttons, changing the tracking rate, using any 
					of the Un-Park button. If a computer is tied to the 
					controller, then any command from it can also wake up the 
					mount and it start tracking in RA.&nbsp; I highly recommend 
					using parking mode 2.&nbsp; It is less convenient, but a 
					much safer parking mode.&nbsp; This is the default mode, and is the 
					only mode in firmware before July 27, 2013</li>
					
					<li>Goto Command or Mode 1 -&nbsp; HC directional buttons, classical HC and 
					AG inputs are ignored, but "GoTo" commands and un-park 
					commands wake it up.</li>
					
					<li>Explicit Wakeup or Mode 2 - Only a Un-Park command :hW# will wake the mount up.&nbsp; 
					This mode is there to provide compatibility with the ASCOM 
					standard rules.&nbsp; The Un-Park buttons in the hand 
					controller, Web interface, and the Un-Park command in the 
					ASCOM driver send this string to the mount.&nbsp; Also 
					checking the Tracking box in the ASCOM Driver will send that 
					command.*&nbsp;&nbsp; The ASCOM 
					driver now has a check box under Configuring Park, that will 
					select this mode of Operation.&nbsp; Please note that 
					parking or un-parking does not change from one mode to the 
					other.&nbsp; Only the Un-Park command in the ASCOM driver 
					and HC will start tracking again. *Except as noted above.</li>
					<li>The parking modes can now be changed in the Web 
					interface on the Functions tab.<br />See example
					<a href="http://www.gemini-2.com/web/web-functions.php" target="_blank">
					functions tab.</a><br /><br />
					</li>
				</ul>
<!--		</ol>
		<ol  start="24" class="auto-style3">-->
		<li>
			<em><u><a name="Photo_mode">Photo mode</a>:</u></em> This speed is used for Centering and guiding.<br /> You 
			get to this mode by Menu--&gt;HC--&gt;<a href="/hc/En-hcmode.php" target="_blank">Mode</a><br />
			Guiding Speed is the principal speed, so pressing a Hand Controller
			directional button moves the telescope at the selected Guiding Speed; Slewing Speed is
			not available.  The following changes in speed are only available on 
			the buttons on the back of the Gemini hand controller, or a <a href="http://www.losmandy.com/hi-rez-images/HC.jpg" target="_blank">
			Standard Hand controller</a> if plugged in. <br />Acceleration to Centering Speed is available in four stages (to allow easy
			centering of an object in the field of view or on a CCD chip) by pressing the opposite
			button while Gemini is guiding:   
			 <br />Pressing the opposite button once changes to 1/8 of Centering Speed to allow fine
			centering of the target.  Then, after about 2 seconds, the speed will increase to ¼ Centering Speed, after another 2 seconds to ½ Centering Speed, 			and finally to full
			Centering Speed. 
			Pressing the opposite button twice changes to full Centering Speed immediately. <br /> 
			If you want to guide a photograph manually, you may do so by plugging a Standard&nbsp; Hand
			Controller into Gemini’s autoguider port. This way you are sure that 
			you cannot accidentally move the scope at centering speed while 
			guiding.&nbsp; A Standard Hand Controller is available from Losmandy 
			under part number HC for $70.00 (price subject to Losmandy's current pricing 
			schedule.)<br /><br />
		</li>
		<li><em><u><a name="Polar_Alignment">Polar Alignment</a>:</u></em> when the mount physical position (not the telescope) is aligned in AZ and Alt to true 
		north, or true south. After any type of polar alignment, where the mount 
		horizontal axis or vertical axis is moved, you have to start at CWD 
		again and build a new model.&nbsp; Moving the mount in horizontal axis or vertical axis 
		invalidates the mathematics used to build a model.&nbsp; In this regard, 
		any model in the mount has to be disregarded, and rebuilt from the 
		start.&nbsp; Also don't expect to be able to see Polaris in your 
		telescope at CWD after doing a polar alignment. This is mainly do to 
		Polaris not being at true north, but a bout 3/4 degree off of true 
		north.<br /><br />
		</li>
		<li><em><u><a name="Polar_Align_Assist">Polar Align Assist</a>:</u></em>&nbsp; This is a routine that will help 
		get the telescope into 1 degree alignment of the pole. It is a pretty 
		simple routine.&nbsp; You have to do it after a cold start, and with no model 
		built.&nbsp; The routine will ask you to pick two stars.&nbsp; You 
		should pick the first about +/-6 hours from the meridian, and the second 
		on as close to the meridian as possible.&nbsp; For the complete 
		procedure <a href="paa.php" target="_blank">see this page</a>.<br /><br />
		</li>
		<li><em><u><a name="Polar_Axis_Correction">Polar Axis Correction</a>:</u></em> This routine will be available after a model 
			is built.&nbsp; Asking for it will move the mount to a star.&nbsp; 
			You then use your horizontal and vertical mount controls (not the 
			buttons on the Gemini controller) to center the star.&nbsp; After 
			this is done, you will have to build a new model, as the PAC routine 
			wipes out the current model.
		<br /><br />
		</li>
		
				<li><em><u><a name="Programming_Serial_and_UPD_commands">Programming Serial and UPD commands</a>: </u></em>&nbsp;The use 
		of the serial commands that tell the Gemini-2 what to do, and how to use 
		the UPD command sequence to send these commands through the ASCOM 
		Gemini.net driver are&nbsp;covered in these two documents.
		<ol type="a">
			<li><a href="http://www.gemini-2.com/web/L5V1serial.html" target="_blank">Serial Command Set</a></li>
			<li><a href="http://gemini-2.com/Gemini2_drivers/UPD_Protocol/Gemini_UDP_Protocol_Specification_1.0.pdf" target="_blank">UDP Protocol</a></li>
		</ol>
		<br />
		</li>

		
		<li><em><u><a name="Pulse_Guiding">Pulse Guiding</a>:</u></em> - This is when the guiding commands are 
			sent as serial commands to the Gemini-1 or Gemini-2, and do not use 
			the Guider ST4 input jack.&nbsp; These commands can be sent into the 
			Serial input, USB input or by using the ASCOM Gemini.net driver the 
			Ethernet input of the Gemini-2.&nbsp;The Gemini-1 only has a Serial 
			input.&nbsp; Note that the ASCOM Gemini.net driver can use 
			any of the serial, USB or Ethernet inputs to provide pulse guiding, 
			but is not required if the software doing the guiding has native 
			Gemini driver of it's own.&nbsp; But the ASCOM Gemini.net using 
			Ethernet is the suggested mode, as it provides the fastest 
			communications speeds, and requires less PC overhead. All the modes below are a form of 
			pulse guiding.
			</li>
			
			<ul>
				<li>Non-Precision Guiding - non-precision pulse guiding uses the 
				PC to tell Gemini when to start guiding movement and when to end 
				it.&nbsp; This mode is used with the Gemini-1.</li>
				
				<li>Precision Pulse Guiding - telling Gemini on how long the 
				pulse should be. The PC then gets out of the way, letting Gemini 
				control the length of the pulse. Gemini-2 can use this mode, 
				where Gemini-1 had some problems doing this. This setting 
				should be turned off for Gemini-1.
				</li>

				<li>Asynchronous Pulse guide - Asynchronous Pulse guide means 
				being able to send the pulses asynchronously and not having to 
				wait for the Gemini to complete the correction. This means that 
				both, RA and DEC can be guided simultaneously. Both, Gemini-1 
				and Gemini-2 can use this mode and this should be left turned on 
				for best guiding results.
				</li>
			
				<li>Synchronous Pulse guide - When a pulse is sent, the 
				driver/PC needs to wait until that pulse correction is completed 
				by Gemini before continuing.&nbsp; This mode may be used with some 
				older software that does not allow both axis to be guided 
				simultaneously.<br /><br />
			</li></ul>
<!--		</ol>
		
		<ol start="29"> -->
		<li><em><u><a name="QuickStart">Quick Start</a>:</u></em> This menu offers the select where it leads you through 
		entering all of of your location data, such as time zone, mount type, and location<br />
		<br />
		</li>
		
		<li><em><u><a name="RA-DEC_Trackinge_Error">RA-DEC_Tracking_ERROR</a> 
		and Heavy Duty Tracking ERROR:</u></em> 
		These are messages telling you that the tracking error in RA or DEC has exceeded the set 
		threshold
		as seen at the bottom of the <a href="web/web-motor.php" target="_blank">Servo Page</a> on the Web interface. They are set to 30 as a default, but you
		can change them to anything you want.&nbsp; Do not change the RA or DEC 
		Slewing Power Percentage.&nbsp; You can change the RA/DEC Tracking Lag 
		or the RA/DEC Tracking Power Percentage.&nbsp; The higher values will 
		lessen the messages seen.<br /><br />
		
		</li>
		
		<li><em><u><a name="Reset_Model">Reset Model</a>:</u></em> clears the model, for the side the telescope is on. To 
		clear the model for both sides of the telescope, you must do a meridian 
		flip to get to the other side, then Reset the model on that side also.<br /><br />
		</li>
	<li>
		SD card is explained in #3 above.<br /><br /></li>
	<li>SRAM is explained in #3 above.
		<br /><br />
		</li>
		
		<li><em><u><a name="Sidereal_Speed">Sidereal Speed</a>: </u></em>Sidereal rate is simply the rate that compensates for the Earth’s motion relative to the
		celestial sphere.  It keeps the mount pointed at a constant RA and Dec. coordinate in the
		sky and will probably be the rate that you use the vast majority of the time.  With sidereal
		tracking selected, the telescope makes one revolution per sidereal day (86164.0905
		seconds).  Note: The sidereal rate assumes that your mount is accurately polar aligned.<br /><br />
		</li>
		
		<li> <em><u><a name="Sidereal_Time">Sidereal Time</a> </u></em>Sidereal time is 
		measured according to the positions of the stars in the sky. A sidereal 
		day is the time it takes for a particular star to travel around and 
		reach same position in the sky. A sidereal day is slightly shorter than 
		a solar day (24 hours), lasting 23 hours, 56 minutes, and 4.1 seconds. A sidereal day 
		is divided into 24 sidereal hours, which are each divided into 60 
		sidereal minutes, and so on. &nbsp; 
		You can use this site to calculate your local Sidereal time from your 
		Longitude:
		<a href="http://tycho.usno.navy.mil/sidereal.html">
		http://tycho.usno.navy.mil/sidereal.html</a> 
		or for a much more detailed explanation see:&nbsp; 
		<a href="http://aa.usno.navy.mil/faq/docs/GAST.php">
		http://aa.usno.navy.mil/faq/docs/GAST.php</a><br /><br />
		</li>
		
		<li><a name="SolarSystem"></a><span class="auto-style2">Solar System Catalogs:</span>&nbsp; These are not really 
		catalogs at 
		all but are calculated by the Gemini-2 internally.&nbsp; Any that 
		are highlighted, brighter (looks like they are already pressed), are 
		not visible objects. <br /><br />
		</li>
<!--		</ol>
		</td>
	</tr>		
</table>

<table align="center" style="width: 900px">
	<tr>
		<td class="style6">
		<ol start="30"> -->
		<li><em><u><a name="Synchronize">Synchronize</a>:</u></em> 
		Synchronizes the telescopes current pointing position to the built model 
		stored in the Gemini-2. This is normally used after a Warm Start.&nbsp; 
		It may also be used to synch the model for more accuracy if looking for 
		dim objects, by synching on a close bright object.&nbsp; Synchronize 
		does not modify the models math terms at all.&nbsp;&nbsp; Now if a model 
		has not been built, Synchronize can be used after a Cold Start to give the Gemini-2 a 
		really precision position for it calculations of where it is pointing 
		at.&nbsp; It can now determine the exact Sidereal time, and where it is 
		pointing. Now for the mathematically inclined here it is in math terms:
		<div>
			The model is a mathematical equation. Sync changes just the two 
			linear components of the equation (HA index and DEC index), while 
			additional align modifies coefficients of the non-linear terms 
			(polar axis offsets, cone error, etc.)&nbsp; Because Sync keeps all the 
			non-linear terms intact while adjusting the linear offsets, you can 
			keep Sync'ing as many times as you want without destroying the more 
			complicated (non-linear) <a href="#Model" target="_self">model</a>.</div>
		<br />
		<br />
		</li>
				
		<li><em><u><a name="Targetunreachable">Target Unreachable Error</a>:</u></em> 
		The target Unreachable error is most likely caused from one of the 
		setting being set wrong.&nbsp; The most common is the <a href="#Time_Zone_Offset">Time_Zone_Offset</a> 
		being set wrong.&nbsp;&nbsp; The second thing is the 
		<a href="/hc/En-limits-safety.php" target="_blank">limits</a> 
		being set wrong.&nbsp; Also make sure that the 
		<a href="hc/E019.php" target="_blank">site information</a> is 
		correct. If all this is correct, then a bad Polar Alignment might be 
		the problem or the limits are set narrow like on MI-250 mounts.&nbsp; 
		<br />Here is some suggestions on preventing the Target Unreachable Error 
		Message:</li>
		<ul >
			<li>Users with mounts that have narrow limits like the MI-250 or having special setups do need 
			a good polar alignment for pointing near the Zenith. They should use PAC or drift align. 
			A bad polar alignments always leads to an unreachable cone around the pole, most users 
			understand this or don't mind it. The Zenith is a well-observed area, 
			so to point there the RA axis has to be at a+/- 6 hours.</li>
			
			<li>Pointing to the Zenith from the East side is better than 
			pointing to it from the West side, because the GOTO limit is not 
			effective there. But if the "Target unreachable" message 
			appears, the firmware has already calculated pointing for both 
			sides w/o success. Only a better polar alignment will help here 
			(with rather narrow safety limits) to avoid this.</li>
			
			<li>
			Is there a better Western GOTO limit than 2.5 degrees, that would give a little more 
			latitude in preventing these unreachable error messages. Answer:
			Earth rotates once every 24 hours, that makes 15 degrees/hour, 
			2.5 degrees give 10 minutes. If less time is sufficient, f.i. 
			for taking a short picture, the Western GOTO limit can be decreased. One 
			degree gives 4 minutes of tracking to the the limit, but it may 
			beep.<br /><br />
			</li>
		</ul>
		<!--</ol>
		<ol start="32"> -->
		<li><em><u><a name="Telescope_Speeds:">Telescope Speeds:</a></u></em> Gemini allows tracking in 6 speeds: 
			<a href="#Sidereal_Speed">Sidereal</a>, <a href="#Lunar_and_Solar_Tracking_Speed">Lunar, Solar</a>,
		<a href="#Adaptive_King_Tracking_Speed">Adaptive King Rate</a>, 
		<a href="#Closed_Loop_Tracking_Speed">Closed 
			Loop</a>, <a href="#Comet/User_Tracking_Speed">Comet/User Defined</a>, and Terrestrial (tracking turned off). In 
			addition, the Hand
			Controller permits the user to move the telescope in both RA and Dec 
			in 4 speeds that are
			established in the setup menu: Guiding, Centering, 
			Move and Slewing. The 
			user can also
			perform Go To movements of the telescope at a separate speed that is 
			also established in 
			the 
			Web Mount setup menu. When a Go To operation occurs, the telescope moves at 
			Go To Speed,
			and then slows down to Centering Speed as it approaches its target. 
			Telescope parking is
			a separate command that disables tracking and moves the mount to a 
			predetermined
			Home position – by default, counterweight down with the telescope 
			pointing to Celestial
			North. Finally, all telescope movement stops and an alarm sounds 
			when the mount slews
			to either its Eastern or Western safety limit. A warning also sounds 
			when the mount
			approaches its Western limit while tracking.
			<br /><br />
		</li>
		<li>
		<em><u><a name="Terrestrial_Speed">Terrestrial Speed/None</a>:</u></em> This rate turns tracking off 
		completely and allows you to observe stationary objects such
			as points on land, or geosynchronous satellites.  It is also useful for keeping the telescope
			from exceeding its safety limits when the Gemini must be left on for extended periods of
			time between observations.
		<br /><br />
		</li>
		
		<li><em><u><a name="Time_Zone_Offset">Time Zone Offset</a>:</u></em> - This 
		tells the Gemini-2 which time zone you are in. When you use this 
		along with your Local time or Civil Time, the Gemini-2 can calculate the correct 
		Coordinated Universal time (UTC), also known as Zuzu time or 
		Greenwich Mean Time.&nbsp; This time zone offset can be in whole Positive or 
		negative numbers. For the ones that live in half or quarter zones, 
		you can also enter the hour:minute of your time offset, such as 
		+09:30 for the Northern Territory of Australia.&nbsp; See
		<a href="http://gemini-2.com/hc/timezonefacts.php" target="_blank">Time Zone Facts</a>&nbsp;&nbsp;and
		<a href="http://gemini-2.com/hc/time_zone_offset_chart.php" target="_blank">Time Zones.</a><br />
		For the ones of you that live in the United 
		Kingdom, when you are observing daylight saving time, you will need 
		to use an timezone offset of +1, with your local time, for the 
		Gemini to calculate UTC correctly.&nbsp;&nbsp; <br /><br />
		</li>

		<li><em><u>		<a name="TVC">TVC</a>:</u></em> (Time Variable Compensation) This menu item helps compensate for the response delay 
		caused by gear backlash when changing direction in Dec. The TVC can eliminate the hysteresis that causes this to Gemini Users Manual 67 happen. 
		You can select a value between 0 and 255, which is the number of steps made at high speed whenever the Dec. 
		direction is changed. You should choose a "TVC Value" that results in a short or no delay when changing the guiding direction in Dec. 
		If you see a short jump, you have to decrease the value.<br /><br />

		So, the number is the number represents motor steps taken at high speed when reversing DEC direction. 
		For a G11, one step is approximately 0.56 arc seconds, so value of 50 means rotate the motor by 
		about 28 arc seconds to take up backlash. Maximum value of 255 provides for about 143 arc seconds of backlash.
		<br /><br />
		</li>

		
		<li><em><u><a name="Undo_Last">Undo Last Alignment</a>:</u></em> Removes the last star added to the model.&nbsp; Can 
		only be used once.<br />
		<br />
		</li>

		<li><em><u><a name="Visual_Mode">Visual Mode</a>:</u></em> This mode is for Centering and slewing.<br />
			In visual mode, the Guiding Speed is not available. When you press a button, the
			telescope moves at Centering Speed.&nbsp; The following only applies to the 
			buttons on the rear of the hand controller. Momentarily pushing the opposite button lets the
			system accelerate to the manual slewing speed.  If you are moving both axes, both will
			speed up.  Ramping up and down in speed occurs independently for both axes.  
			This mode is intended for visual observing and for looking up objects. The auto-guider
			port is not active in this mode.&nbsp; Again, The Gemini-2 will not 
		guide using the Guider inputs or theough The Ascom driver if the 
		Gemini-2 is in "Visual Mode"<br /><br />
		</li>	
		
		<li><em><u><a name="Warm_Start">Warm Start</a>:</u></em> This assumes that a model has been made, and the 
		physical mount (Pier)
		has NOT been moved in any way, including Latitude or Longitude, vertical 
		or horizontal position (the mount is permanently Pier mounted), but the RA or DEC
		could have been moved. Warm Start assumes that the mount is in the CWD starting position.&nbsp;<br /><br />The processor uses the CWD position as an 
		approximate starting point.  
		When you do a synchronize on a bright star, the processor now has a known good point to 
		center the model
		around, and also resets the limits (using the numbers that has already been set) to there correct position. 
		<br /><br />Also see
		<a href="#Cold_Start">Cold Start</a> and <a href="#Warm_ReStart">Warm Restart</a>.<br /><br />
		</li>
			
		<li><em><u><a name="Warm_ReStart">Warm ReStart</a>:</u></em> This mode 
		assumes that the mount has not been moved in Latitude, Longitude, 
		vertical or Horizontal position (the mount is permanently Pier mounted) 
		and also RA and Dec has not been moved. You do not have to start from 
		CWD, but start from the current RA and Dec position. (If you parked at 
		CWD, then CWD would be the current RA and Dec positions). However 
		it can start from any position that is was powered down in, like 
		horizontal in the case of roll off roofs. It also 
		assumes a model has been built.<br />
		<br />The processor uses the last stopping position as an 
		known starting point. The processor will center the model
		around that, and also reset the limits (using the numbers that has already been set) to there correct position. 
		<br /><br />Also see
		<a href="#Cold_Start">Cold Start</a> and <a href="#Warm_Start">Warm Start</a>.<br /><br />
		</li>
		<li><em><u><a name="Western_Go_To_Limit">Western Go To Limit</a>:</u></em> allows you to define a point past which Gemini will
		always Go To the object so that the telescope tube is on the east side of the mount. 
		Gemini will allow the mount to track past this point, but will not Go To any object west of
		this point without a meridian flip, if needed, to put the telescope tube on the east side of
		the mount.  The default value, displayed as 0 degrees, sets the Go To limit to the western
		safety limit minus 2.5 degrees, allowing for at least 10 minutes of tracking. This can 
		be set on the Web interface under the Mount tab, or on the Hand 
		Controller under Menu--&gt;Mount--&gt;<a href="/hc/En-limits-safety_goto.php" target="_blank">Limits</a><br />
		<br />
		</li>
		
<!--		</ol>
		<ol start="41"> -->
		
			
			<li>The Hand controller ARM processor contains much the same memory 
			types, but they are used differently.</li>
		</ol>
		</td>
		</tr>
	</table>

<table  align="center" style="width:900px">
	<tr>
		<td class="style7whiteborder" >
		Page last updated on Jun 18, 2018</td>
	</tr>
</table>


</body>




<?php include("bottom.php"); ?>



