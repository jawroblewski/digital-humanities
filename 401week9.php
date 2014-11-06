<?php
$a = (12+8)/2;
$b = (15-9)*4;
echo $a;
echo $b;
function squareroots()
{
global $a, $b, $sr1, $sr2;
$sr1=sqrt($a);
$sr2=sqrt($b);
}
function rounding()
{
global $int1, $int2, $sr1, $sr2;
$int1=floor($sr1);
$int2=floor($sr2);
}
squareroots();
echo $sr1;
echo $sr2;
rounding();
echo $int1;
echo $int2;
echo max($int1, $int2);
?>