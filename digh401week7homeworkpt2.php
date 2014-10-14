<?php
$total = 0;
$booster3 = 200;
function rocketThrust1($booster1, $booster2)
{
global $total;
$total = $booster1 + $booster2;
}
function rocketThrust2($booster3=200) 
{
global $total;
$total = $total + $booster3;
}
rocketThrust1($booster1=50, $booster2=100);
echo 'Rocket thrust is currently stable at '.$total.' newtons';
rocketThrust2($booster3=200);
echo 'Rocket thrust is currently stable at '.$total.' newtons';
?>