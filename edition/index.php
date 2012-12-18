<?php
	// Create eTag
	$date = date(W);
	$md5 = md5($date);
	header("ETag: ".$md5);
	// Calculate current world population
	$startpopulation = 7059350169; // Start population value
	$starttime = strtotime('2012-12-18T07:42:40-06:00'); // Start population time and date
	$currenttime = strtotime(date(c)); // Get current time
	$interval = $currenttime - $starttime; // Calculate interval in seconds between start time and date and now
	$growthrate = 2.55; // Constant for population growth per second
	$currentpopulation = round($startpopulation + ($interval * $growthrate)); // Calculate current population
	$formattedpopulation = number_format($currentpopulation,0,'.',' ') // Add thousand separators for output
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>World Population</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<style>
			body {
            		margin: 0px;
            		padding: 0px;
            		border: 0px;
            		font-size: 22px;
            		font-family:'Signika';
				text-align: center;
			}
			.population {
				font-size: 60px;
				font-family:'Octin College';	
				text-align: center;
			}
			.page {
				width: 384px;
			}
			img {
				position:absolute;
				left:0px;
				top:0px;
				z-index:-1;
			}
		</style>
	</head>
	<body>
		<div class="page">
			<img class="dither" src="http://worldpopulation.mrreid.org/edition/map-background.png" />
			&nbsp;<br />
			Current world population:
			<div class="population">
				<?php echo $formattedpopulation; ?>
			</div>
		</div>
	</body>
</html>
