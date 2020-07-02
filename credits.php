<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="en-us" http-equiv="Content-Language" />
<title>Gemini 2 Mount Controller</title>

<link href="http://gemini-2.com/gemini-2.css" rel="stylesheet" type="text/css" />


<?php include("topv.php"); ?>

</head>

<body style="color: #FFFFFF; background-color: #000000" class="h3" >
<html lang="en">



<table  align="center" style="width:900px">
	<tr>
		<td class="h2">Credits for the Gemini-2 mount controller. 
	</td></tr>
</table>


<table align="center" style="width: 900px">
	<tr class="style6">
		<td class="style6">
		The Following persons are 
		affiliated with Losmandy (Hollywood General Machining, Inc.) in some manner:
		<ol><li>
		<span lang="de">Dr.-Ing. René Görlich&nbsp; (Dr.<span lang="en-us">-</span>Ing</span> stands for Doctor of Engineering) 
			Writer of Gemini-1 and Gemini-2 firmware.<br />
		</li>
			<li>
			Scott Losmandy (Owner of Hollywood General Machining, Inc.)</li>
			<li>
			Russell Jamcic (One of Scotts right hand men on the Mounts)</li>
		</ol>
		<p>The following personnel are not affiliated with Losmandy in any way. 
		(in no particular order)</p>
		<ol><li>Karen Posselt now Karen
		<span lang="de">Görlich</span> as of Aug 14, 2015</li>
			<li>Thomas S Hilton</li>
			<!--<li>
			Robert Turner</li>-->
			<li>
			Paul Kanevsky</li>
			<li>
			Mark Crossley</li>
			<li>
			Peter Simpson</li>
			<li>
			Florian Appert</li>
			<li>
			David Sandage</li>
			<li>
			Didier Garriou</li>
			<li>
			Bob Erdmann</li>
		</ol>
		<p>A Little History:</p>
		<span lang="de">Dr.-Ing. René Görlich </span>developed the Gemini-1 controller and released the 
		first version back in November of 2000.&nbsp; That system went through 4 
		major versions of the PCB and also many version of the firmware up 
		through Level 4 V1.05&nbsp; You can see this development at the bottom 
		of <span lang="de">
		<a href="http://www.docgoerlich.de/Gemini.html" target="_blank">Dr.-Ing. René Görlich 
		site</a>, and the different PCB versions  </span>
		<a href="pcb-pictures.php" target="_blank">here.</a>&nbsp; What most 
		people do not know is that the Gemini-1 unit during the initial development was 
		tested first in Australia.  The Level 4 version of the Eprom for Gemini-1 was also
		tested in Australia by  René himself.&nbsp; He traveled to the outback to do much of the testing of
		the Level 4 version of the Gemini-1.<br />
		This system was designed and developed by <span lang="de">
		Dr René Görlich</span> as a bet, that he could do it for under 2K$.&nbsp; 
		A direct quote from René: "Roland Christen stated in a news group that 
		nobody would be able to design a telescope control servo system at a 
		price below 2k$. I did, but to a certain degree I've have to admit he was right to a certain degree. Only dedicated users, companions, testers 
		like you made it possible to put it on the astronomy market at much 
		lower cost."<br />
		<br />
		I think, but am not sure, that at the time he was using one 
		of Losmandy's digital drive systems on his mount.&nbsp; I think that 
		Scott Losmandy and Larry Myers was contacted for funding, and Aveox was 
		used for the servo part of the Gemini and also to lay out the PCB 
		boards.<br />
		<br />
		Well as electronic do, they change and advance.&nbsp; Most of the time 
		electronic parts do not stay in production for more than 10 years at 
		maximum.&nbsp; This happened with the Gemini and severely hampered 
		production on new units starting in 2008.&nbsp; <br />
		<br />
		At the time
		<span lang="de">Dr.-Ing. René Görlich</span>, was not in a position to start on the Gemini-2 
		because of his work as a&nbsp; Dean at <span lang="de">Technische Universität Berlin</span> (he 
		supervised 45 professors and 1500 students over a 5 year period, and 
		still taught also, and still teaches but is no longer in the position of 
		Dean.)&nbsp; 
		So the development of a replacement had to wait, even though it was 
		being discussed heavily.&nbsp; <br />
		<br />
		I think that<span lang="de"> Dr.-Ing. René Görlich</span>, and Scott Losmandy started the actual 
		development of the Gemini-2 in 2009, as I was contacted in June of 2010 
		and asked if I would like to be a beta tester and could I recommend 
		others to be beta testers also.&nbsp; I said Yes, and recommended two 
		others to be beta testers, because of there work in developing the new 
		ASCOM Gemini.net driver.<br />
		<br />
		So the beta test began, and rumors were going left and right that there 
		might be a new Gemini controller.&nbsp; Well about 6 months after the 
		beta test began, one of the beta testers put pictures of the Gemini-2 on 
		a web page.&nbsp; He never expected anyone to see it, but as we all 
		know, if it is on the web, it is not secret.&nbsp; The news was spread 
		in the Gemini users group.&nbsp; Scott started being hounded for units.&nbsp; 
		He sold some units, and asked that the ones he sold them too, be made 
		part of the beta test program.&nbsp;&nbsp; I am really not sure when he 
		started selling them without people being in the beta test program, but 
		I think it was around Sept or Oct of 2010.<br />
		<br />
		<br />
		How others have contributed:<br />
		<ol><li>Karren
		<span lang="de">Görlich</span> - She helped <span lang="de"> Dr.-Ing. René Görlich</span> develop all the graphical characters used in the hand controller, and has helped him with the user interface of the hand controller. 
			She has also helped him in testing the hand controller interface.&nbsp; 
			Without her, the hand controller would have taken a lot more time to 
			develop.</li>
					<li>
			Paul Kanevsky - He was the major coder behind the ASCOM Gemini.net 
			driver, and has been working on it to include all the new features 
			that the Gemini-2 has, along with a new UDP protocol to communicate 
			with the Gemini-2 at a speed that cannot be matched by USB or Serial 
			connections.&nbsp; He has also been a beta tester. Paul has done it 
			again with the writing of the GFU (Gemini Firmware Upload) program 
			now for both Windows, 
			which is now the easiest way to update firmware in the Gemini-2.&nbsp; 
					He also answers most if not all the ASCOM Gemini.net 
					questions, and continues to support both the Gemini.net 
					driver, and the Gemini Firmware update program.&nbsp; Next to 
					René he is probably the most important person contributing 
					to the success of the Gemini 1 and Gemini-2.</li>

		<li>
		
		I, Thomas Hilton, started the Gemini-2 and the Gemini-2 beta uses group 
		in June of 2010, and also the Gemini ASCOM users group, and the Gemini 
		ASCOM Beta group back in August of 2009.&nbsp; I saw a need for a new 
		Gemini ASCOM driver and started out with the writer of the visual basic 
		version.&nbsp; It became very apparent that the new driver needed to be 
		done is a .NET language, because ASCOM 5.0 had been released.&nbsp; 
		Since he was not willing to do that, Paul, Robert, Mark and others 
		jumped in to do the first version of the ASCOM Gemini.net driver.&nbsp; 
		I was a beta tester for it, as I don't know how to write code. After the 
		Gemini-2 came along I also started the Gemini-2 Web site, and continue to update it.&nbsp; I had a previous site up, called ArizonaSkys that had allot of support information about the Gemini-1 
			mount controller. I also developed the combined file method of 
			updating the Gemini-2 controller. I have also been a very active 
			beta tester, and a critic to René when necessary and I am sure he 
			feels that I can be a "Pain the A--" sometimes.&nbsp;&nbsp;&nbsp; 
			But I must say, that was not very often, as he is a pleasure to 
			work with, and I consider him a good friend, even though we have never 
			met in person.</li>
			<li>
			David Sandage has worked with René for many years and is the 
			moderator of the Gemini users group along with René - They made me a 
			moderator of that group, last year also.&nbsp; David has made many 
			great suggestions, and been an avid beta tester of the Gemini-2. He 
			is also one of the authors of the Gemini-1 Level 4 manual.&nbsp; He 
			helped write the first getting started guide, but the changes to the 
			hand controller, that guide became obsolete. </li>
			<li>
			Robert Turner jumped in and did the Web based 
			Mobile hand controller - this 
			was based on his work with Paul Kanevsky in developing the ASCOM Gemini.net driver.&nbsp; 
			Robert developed just the hand controller portion and GPS portion of the ASCOM 
			Gemini.net driver.&nbsp; 
			He then developed the mobile web based controller, to work in 
			iPhones/iPads and Androids phones and tablets.&nbsp; He has also been a beta 
			tester. For some unknown reason Robert has dropped out of the Gemini 
			Groups and is no longer supporting the&nbsp;Mobile Hand controller.
			</li>
			<li>
			Mark Crossley - was a beta tester for the Gemini.net ASCOM driver 
			and also did the very nice manual for this driver.&nbsp; He also 
			contributed many ideas to it's design. Mark from time to time jumps 
			in and fixes the manual when I add to it.&nbsp; He just knows much 
			more about editing and publications, than I do.&nbsp; </li>
			<li>
			Peter Simpson jumped in and helped René on two fronts, the UDP code, and refining the math for the modeling.&nbsp; He has only been 
			a beta tester since May of 2011. He has also contributed to the 
			coding and testing of the ASCOM Gemini.net driver. </li>
			<!--<li>
			Stephen Mounioloux - After he received his Gemini-2, Stephen 
			approached me and asked if he could take a stab at developing a 
			program to download the combined.zip programs into a PC and then load 
			them into the Gemini over the Ethernet interface.&nbsp; I was very 
			proud to give him all the necessary steps, and he wrote a remarkable 
			program to do just that.&nbsp; I even wrote a dedicated web page 
			just for that method, and now consider that the primary method of 
			uploading the firmware to the Gemini-2 controller.</li>-->
			<li>
			Florian Appert - Florian came up with a method to provide night 
			vision screens for the web interface and work with René to 
			incorporate them into the code.</li>
			<li>
			Both
			Bob Erdmann and
			<a href="http://garriou.didier.free.fr/astro/gemini_anglais.html" target="_blank">Didier Garriou</a> have granted permission to use there IC and NGC 
			catalogs respectively in both the main unit and the Hand Controller.&nbsp; 
			Thank you both.</li>
		</ol>
		
		<br />
		As you can see, the Gemini and the Gemini-2 have been developed by many  people, but 
		<span lang="de">Dr.-Ing. René Görlich </span>is the spearhead, the
founder, and the driving force behind them both.   Many years ago he developed the G1&nbsp;and it has provided many an astronomer great and accurate service.&nbsp; 
		We are hoping that the Gemini-2 builds on that reputation.<br />
		<br />
		The Gemini-2 keeps developing.&nbsp; There has been so many menus and 
		improvements that René has added due to the suggestions posted by the 
		users on the 
		<a href="https://groups.io/g/Gemini-II" target="_blank">Gemini-II Users Group</a>.&nbsp; It has come a long way, and René still 
		has many more upgrades and additions planned for it.&nbsp; As one user 
		has said, about the only thing it won't do after a long night of 
		observing is make you a cup of coffee.<br />
		<br />
		I know that many others have also contributed with there suggestions 
		into the development of the Gemini-2,&nbsp; and I really hope I have not 
		missed any major players.&nbsp; If I have please let me know.<br />
		<br />
		Thank You ALL!!!!.
		</td>
	</tr>
</table>
<table  align="center" style="width:900px">
	<tr>
		<td class="style7">
		Page last updated on Oct 15, 2017
		</td>
	</tr>
</table>
<!--
<table align="center" style="width: 900px">
	<tr>
		<td >
		<a href="http://www.digits.com" target="_blank">
	    <img src="http://counter.digits.com/?counter={e8d13978-5089-2294-910b-65c8508b354e}&template=simple" 
	     alt="Hit Counter by Digits" border="0"  />  </a>
		</td>
	</tr>
</table>
-->
</html>
</body>





<?php include("bottom.php"); ?>



