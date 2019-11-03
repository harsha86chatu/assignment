<?php
$selected = array();
$rejected = array();
//Company List
$companies = array
  (
  	array("Company A","requires an apartment or house, and property insurance."),
	array("Company B","requires 5 door car or 4 door car, and a driver's license and car insurance."),
	array("Company C","requires a social security number and a work permit."),
	array("Company D","requires an apartment or a flat or a house."),
	array("Company E","requires a driver's license and a 2 door car or a 3 door car or a 4 door car or a 5 door car."),
	array("Company F","requires a scooter or a bike, or a motorcycle and a driver's license and motorcycle insurance."),
	array("Company G","requires a massage qualification certificate and a liability insurance."),
	array("Company H","requires a storage place or a garage."),
	array("Company J","doesn't require anything, you can come and start working immediately."),
	array("Company K","requires a PayPal account.")
  );
for ($i = 0; $i <= 10000; $i++) {
	$compname = $companies[$i][0];
	$req = $companies[$i][1];

if($compname!="" && $req!=""){
	if(preg_match("/(doesn't require anything)/i", $req)){
		$selected[] = $compname;
	}else if(preg_match("/(scooter|bike|motorcycle)/i", $req)){
		if(preg_match("/(driver's license)/i", $req)){
			$selected[] = $compname;
		}
	} else{
		$rejected[] = $compname;
	}
	}
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Project</title>
</head>
<body>
<h2>Companies can work</h2>
<ol>
<?php foreach ($selected as $vals){ 
	echo "<li>".$vals."</li>";
}
 ?>
</ol>
<h2>Companies cannot work</h2>
<ol>
<?php foreach ($rejected as $valr){ 
	echo "<li>".$valr."</li>";
}
 ?>
</ol>
</body>
</html>
