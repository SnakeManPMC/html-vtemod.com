<!DOCTYPE html>
<html lang="en">
<head>
<title>Vietnam: The Experience - Operation Flashpoint Install Tutorial</title>
<LINK href="../vte.css" rel=stylesheet type="text/css">
<META name="description" content="Vietnam: The Experience - Operation Flashpoint Install Help - PMC Tactical">
<META name="keywords" content="PMC, OFP, Operation, Flashpoint, Vietnam The Experience, VTE, Install, Tutorial">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Vietnam: The Experience Operation Flashpoint Installation Tutorial</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>
	<h2>Updated for v0.3 - Nov 12th, 2006.</h2>

<p>
Please check <a href="https://www.vtemod.com/ofp/manual-howto-install.php" target="_blank">HOWTO Install Operation Flashpoint Addons</a> for further and more updated installation instructions.
</p>

<p>
There has been some questions about how to install Vietnam: The Experience (VTE), first we must emphasize that it is not any way related to VTE that its difficult to install, this is generic Operation Flashpoint (OFP) installation question. VTE is a mod like everything else and all addons/mods installation questions would work here. But anyways, lets begin.
</p>

<p>
When you first start your OFP directory COULD look like this. What we mean by could, is that your OFP can be installed on various directories, the most common would be the lame C:\Program Files\ which is windows default directory.<br>
<img src="screenshots/VTE_i_OFP_dirs-01.jpg" width="333" height="218" alt="Pic">
</p>

<p>
When you double click the downloaded vte file (check latest from <a href="https://www.vtemod.com/">www.vtemod.com</a>), WinRAR pops up and shows you screen something like this:<br>
<img src="screenshots/VTE_i_Winrar-01.jpg" width="407" height="196" alt="Pic"><br>
</p>

<p>
Click the button Extract To and browse to your OFP directory and make sure its selected/highlighted, now click OK and Winrar unpacks VTE into the OFP dir.<br>
<img src="screenshots/VTE_i_Winrar-02.jpg" width="490" height="458" alt="Pic">
</p>

<p>
After you have unpacked (it takes some time even on faster machines, its after all big rar packet) the VTE download, your OFP directory should look like this:<br>
<img src="screenshots/VTE_i_OFP_dirs-02.jpg" width="322" height="233" alt="Pic">
</p>

<p>
Notice how winrar created x_vte/ directory there.
</p>

<p>
All right, now browse into the x_vte dir and it should look like this:<br>
<img src="screenshots/VTE_i_OFP_dirs-03.jpg" width="261" height="129" alt="Pic">
</p>

<p>
Now grab those required addons that VTE needs to run. These are the following; Bn880 tracers, CoC Unified Artillery, CoC Mines, CoC Diver, JAM3 and USMC markers.
</p>

<p>
Download these addons from:<br>
<a href="https://www.thechainofcommand.com/" target="_blank">CoC homepage</a> link<br> <a href="ftp://www.ofpr.info/ofpd/unofaddons2/JAM3_FIXED6.rar" target="_blank">JAM3 download</a> link<br>
<a href="https://www.flashpoint1985.com/cgi-bin/ikonboard311/ikonboard.cgi?;act=ST;f=4;t=44627" target="_blank">BIS topic</a> for Bn880 tracers
</p>

<p>
Make additional MOD directory for these addons. First, browse into the OFP directory again, click right mouse button and choose the menu; new -&gt; folder. Now write a name for it and call it &quot;x_vte_common&quot;. Now your OFP directory should look like this:<br>
<img src="screenshots/VTE_i_OFP_dirs-04.jpg" width="342" height="251" alt="Pic">
</p>

<p>
Then browse to the new x_vte_common/ directory and create another directory there called addons/, use the same method, right mouse click etc. Now you should have x_vte_common/addons/ directory there. In this dir place the required addons which I just listed above. When you're done so the directory should look like this:<br>
<img src="screenshots/VTE_i_RequiredAddons-01.jpg" width="475" height="179" alt="Pic">
</p>

<p>
Now all the basic pbo file and mod directory creation is behind us, its time to do the magical OFP shortcut thingy.
</p>

<p>
I am assuming you have absolutely no shortcuts on your desktop (hardly a chance for that, but lets do everything from scratch here).
</p>

<p>
Right click on windows desktop, select; New -&gt; Shortcut. Then browse to the &quot;FLASHPOINTRESISTANCE.EXE&quot; file which is located in your OFP directory. Then click OK, Next and Finish. Now your windows created the shortcut for you.
</p>

<p>
Now look at the windows desktop, right click on the new shortcut that is there called FLASHPOINTRESISTANCE.EXE (if you did not rename it), and select Properties. The properties for this shortcut by default looks like this:<br>
<img src="screenshots/VTE_i_Shortcut-01.jpg" width="365" height="459" alt="Pic">
</p>

<p>
Now after the target line FLASHPOINTRESISTANCE.EXE write there &quot; -nosplash -mod=x_vte;x_vte_common -nomap&quot; so the complete edited line would now say: &quot;FLASHPOINTRESISTANCE.EXE -nosplash -mod=x_vte;x_vte_common -nomap&quot; without the quotes and of course with the path to your OFP directory. The new target line looks like this:<br>
<img src="screenshots/VTE_i_Shortcut-02.jpg" width="329" height="60" alt="Pic"><br>
Now just click Apply and then OK and the shortcut is complete.
</p>

<p>
At this point all you need to do is browse to the x_vte/ directory and right mouse click to the VTE_SPmissions/ directory and select Cut, then browse into the &lt;OFP&gt;/Missions/ directory and right click somewhere and select Paste. Then your &lt;OFP&gt;/Missions/ directory should look like this (except with VTE_SPmissions/ dir):<br>
<img src="screenshots/VTE_i_OFP_dirs-05.jpg" width="316" height="95" alt="Pic">
</p>

<p>
Its all done now, just click the new shortcut that its on your desktop that you created and OFP with the mod directory of VTE will be launched!
</p>

<p>
Back to <a href="index.php">VTE OFP homepage</a>
</p>

<?php include("/var/www/include/section-end.php"); ?>
</section>

<footer>
<?php include("/var/www/include/footer-start.php"); ?>
<?php include("../include/footer.php"); ?>
<?php include("/var/www/include/footer-end.php"); ?>
<?php include("/var/www/include/support.php"); ?>
<?php include("/var/www/include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
