<?php
$total = 0;
$subtotal = 0; 
function rocketThrust1($booster1, $booster2)
{
global $subtotal;
$subtotal = $booster1 + $booster2;
}
function rocketThrust2($booster1, $booster2)
{
	global $total, $subtotal;
	$total = $subtotal + $booster1 + $booster2;
}
rocketThrust1($booster1 = 50, $booster2 = 100);
echo 'Rocket thrust is currently stable at '.$subtotal.' newtons';
rocketThrust2($booster1 = 100, $booster2 = 100);
echo 'Rocket thrust is currently stable at '.$total.' newtons';
?>