<!DOCTYPE html>
<html lang="en">
<head>
<title>Vietnam Da Nang Terrain - Vietnam: The Experience ArmA 3</title>
<LINK href="../vte.css" rel=stylesheet type="text/css">
<META name="description" content="Vietnam Da Nang Terrain - ArmA 3 Vietnam: The Experience">
<META name="keywords" content="Da, Nang, Terrain, ArmA 3, Vietnam The Experience, VTE, Vietnam War Mod">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<?php include("/var/www/include/ads.php"); ?>
<?php include("/var/www/include/header-start.php"); ?>
<h1>Vietnam Da Nang Terrain - Vietnam: The Experience ArmA 3</h1>
<?php include("/var/www/include/header-end.php"); ?>
</header>

<section>
<?php include("/var/www/include/section-start.php"); ?>

	<h2>Vietnam Da Nang Terrain</h2>

<p>
143km x 143km with 71,680 x 71,680 resolution satellite image from ArcGIS world imagery (2 meters / pixel).
</p>

<p>
<a href="https://www.google.com/maps/@16.0360754,108.2185178,11.5z" target="_blank">google/maps</a>
</p>

<a href="screenshots/VTE-Vietnam-Da-Nang-Satellite.jpg" target="_blank"><img src="screenshots/VTE-Vietnam-Da-Nang-Satellite.jpg" width="256" height="256" alt="PMC Vietnam, Da Nang Terrains Satellite Texture"></a>

	<h2>Terrain Specifications</h2>

<p>
Heightmap grid size: 4096 x 4096<br>
Cell size: 35m<br>
Satellite texture resolution: 71,680 x 71,680 pixels<br>
Satellite surface mask size: 1024 x 1024 pixels<br>
Texture layer size: 140m x 140m
</p>


	<h2>Changelog</h2>

<pre>
--- v0.1
- initial release

--- v0.1.1
- airfield elevations leveled
- location names added
- openstreetmap road shapefile fixed.
- airfield temporary runway texture added (also in mapview)
- srtm 0m or below water depths fixed to 0.25m (actual ground)

--- v0.1.2
- ocean depths -5m to -50m fixed
- water creeping through land fixed

--- v0.2
- 3,622,137 vegetation objects added
</pre>

<p>
Back to <a href="terrains.php">VTE terrains</a> page.
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
