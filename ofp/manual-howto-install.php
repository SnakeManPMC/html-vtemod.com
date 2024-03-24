<!DOCTYPE html>
<html lang="en">
<head>
<title>Manual HOWTO Install Vietnam: The Experience Operation Flashpoint</title>
<LINK href="../vte.css" rel=stylesheet type="text/css">
<META name="description" content="Manual HOWTO Install Vietnam: The Experience Operation Flashpoint">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<h1>Manual HOWTO Install Vietnam: The Experience Operation Flashpoint</h1>
</header>

<section>
	<h2>HOWTO Install</h2>

<p>
<i>Updated for v0.3 - Nov 12th, 2006.</i> Please note that in 2024-03-24T01:33:21Z many parts of this tutorial are outdated, for example you should not use WinRAR but 7-Zip instead, etc. This page has been left in its original form for historical nostalgia reasons, if you are installing OFP or ArmA 1 to 3 addons or mods in 2024 or in the future, you surely can find more updated tutorials in PMC websites like <a href="https://www.pmctactical.org/arma/manual-howto-install-addons.php" target="_blank">ArmA 1 HOWTO Install Addons</a> and <a href="https://www.pmctactical.org/arma2/manual-howto-install-addons.php" target="_blank">ArmA 2 HOWTO Install Addons</a>. You can also ask help from <a href="https://www.pmctactical.org/forum/" target="_blank">PMC Tactical Forum</a>, I will help anyone looking for assistance getting PMC addons/mods installed and working.
</p>

<p>
There has been some questions about how to install VTE, first we must emphasize that it is not any way related to VTE that its difficult to install, this is generic OFP installation question. VTE is a total modification (mod, ie collection of addons) like anything else and all addon/mod installation questions would work here. But anyways, lets begin.
</p>

<p>
When you first start your OFP dir <i>could</i> look like this. What we mean by could, is that your OFP can be installed on various directories, the most common would be the lame C:\Program Files\ which is windows default directory.
</p>

<img src="screenshots/VTE_i_OFP_dirs-01.jpg" class="imgresponsive" loading="lazy" alt="PMC VTE OFP HOWTO Install Screenshot" title="PMC VTE OFP HOWTO Install Screenshot">

<p>
When you double click the downloaded VTE file (check latest from <a href="index.php">VTE OFP Root page</a>), WinRAR pops up and shows you screen something like this:
</p>

<img src="screenshots/VTE_i_Winrar-01.jpg" class="imgresponsive" loading="lazy" alt="PMC VTE OFP HOWTO Install Screenshot" title="PMC VTE OFP HOWTO Install Screenshot">

<p>
Click the button Extract To and browse to your OFP directory and make sure its selected/highlighted, now click OK and Winrar unpacks VTE into the OFP dir.
</p>

<img src="screenshots/VTE_i_Winrar-02.jpg" class="imgresponsive" loading="lazy" alt="PMC VTE OFP HOWTO Install Screenshot" title="PMC VTE OFP HOWTO Install Screenshot">

<p>
After you have unpacked (it takes some time even on faster machines, its after all big rar packet) the VTE download, your OFP directory should look like this:
</p>

<img src="screenshots/VTE_i_OFP_dirs-02.jpg" class="imgresponsive" loading="lazy" alt="PMC VTE OFP HOWTO Install Screenshot" title="PMC VTE OFP HOWTO Install Screenshot">

<p>
Notice how winrar created x_vte/ directory there.
</p>

<p>
All right, now browse into the x_vte dir and it should look like this:
</p>

<img src="screenshots/VTE_i_OFP_dirs-03.jpg" class="imgresponsive" loading="lazy" alt="PMC VTE OFP HOWTO Install Screenshot" title="PMC VTE OFP HOWTO Install Screenshot">

<p>
Now grab those required addons that VTE needs to run. These are the following; Bn880 tracers, CoC Unified Artillery, CoC Mines, CoC Diver, JAM3 and USMC markers.
</p>

<p>
Download these addons from:<br>
<a href="https://www.thechainofcommand.com/" target="_blank">CoC homepage</a> link<br>
<a href="ftp://www.ofpr.info/ofpd/unofaddons2/JAM3_FIXED6.rar" target="_blank">JAM3 download ofpr.info FTP</a> link<br>
Bn880 tracers (link missing, sorry)
</p>

<p>
Make additional -mod directory for these addons. First, browse into the OFP directory again, click right mouse button and choose the menu; new -&gt; folder. Now write a name for it and call it "x_vte_common". Now your OFP directory should look like this:
</p>

<img src="screenshots/VTE_i_OFP_dirs-04.jpg" class="imgresponsive" loading="lazy" alt="PMC VTE OFP HOWTO Install Screenshot" title="PMC VTE OFP HOWTO Install Screenshot">

<p>
Then browse to the new x_vte_common/ directory and create another directory there called addons/, use the same method, right mouse click etc. Now you should have x_vte_common/addons/ directory there. In this dir place the required addons which I just listed above. When you're done so the directory should look like this:
</p>

<img src="screenshots/VTE_i_RequiredAddons-01.jpg" class="imgresponsive" loading="lazy" alt="PMC VTE OFP HOWTO Install Screenshot" title="PMC VTE OFP HOWTO Install Screenshot">

<p>
Now all the basic pbo file and mod directory creation is behind us, its time to do the magical OFP shortcut thingy.
</p>

<p>
I am assuming you have absolutely no shortcuts on your desktop (hardly a chance for that, but lets do everything from scratch here).
</p>

<p>
Right click on windows desktop, select; New -&gt; Shortcut. Then browse to the "FLASHPOINTRESISTANCE.EXE" file which is located in your OFP directory. Then click OK, Next and Finish. Now your windows created the shortcut for you.
</p>

<p>
Now look at the windows desktop, right click on the new shortcut that is there called FLASHPOINTRESISTANCE.EXE (if you did not rename it), and select Properties. The properties for this shortcut by default looks like this:
</p>

<img src="screenshots/VTE_i_Shortcut-01.jpg" class="imgresponsive" loading="lazy" alt="PMC VTE OFP HOWTO Install Screenshot" title="PMC VTE OFP HOWTO Install Screenshot">

<p>
Now after the target line FLASHPOINTRESISTANCE.EXE write there " -nosplash -mod=x_vte;x_vte_common -nomap" so the complete edited line would now say: "FLASHPOINTRESISTANCE.EXE -nosplash -mod=x_vte;x_vte_common -nomap" without the quotes and of course with the path to your OFP directory. The new target line looks like this:
</p>

<img src="screenshots/VTE_i_Shortcut-02.jpg" class="imgresponsive" loading="lazy" alt="PMC VTE OFP HOWTO Install Screenshot" title="PMC VTE OFP HOWTO Install Screenshot">

<p>
Now just click Apply and then OK and the shortcut is complete.
</p>

<p>
At this point all you need to do is browse to the x_vte/ directory and right mouse click to the VTE_SPmissions/ directory and select Cut, then browse into the &lt;OFP&gt;/Missions/ directory and right click somewhere and select Paste. Then your &lt;OFP&gt;/Missions/ directory should look like this (except with VTE_SPmissions/ dir):
</p>

<img src="screenshots/VTE_i_OFP_dirs-05.jpg" class="imgresponsive" loading="lazy" alt="PMC VTE OFP HOWTO Install Screenshot" title="PMC VTE OFP HOWTO Install Screenshot">

<p>
Its all done now, just click the new shortcut that its on your desktop that you created and OFP with the mod dir of VTE will be launched!
</p>

<p>
Back to <a href="index.php">VTE OFP homepage</a>.
</p>

</section>

<footer>
<?php include("../include/footer.php"); ?>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
