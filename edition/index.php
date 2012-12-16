<?php
	// Create eTag
	$date = date(c);
	$md5 = md5($date);
	header("ETag: ".$md5);
	// Define variables for later use
	$startpopulation = 7095917544;
	$starttime = strtotime('2012-12-16T07:38:40-06:00');
	$currenttime = strtotime(date(c));
	$interval = $currenttime - $starttime;
	$growthrate = 2.49;
	$currentpopulation = round($startpopulation + ($interval * $growthrate));
	$formattedpopulation = number_format($currentpopulation,0,'.',' ')
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
