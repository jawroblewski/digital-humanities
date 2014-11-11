<?php 
$bksout = array();
$bksout[0] = 'Title1';
echo "You have checked out " . "$bksout[0].'<br />';
array_push($bksout, 'Title2', 'Title3', 'Title4', 'Title5');
echo "You have checked out " . $bksout[1].'<br />';
echo "You have checked out " . $bksout[2].'<br />';
echo "You have checked out " . $bksout[3].'<br />';
echo "You have checked out " . $bksout[4].'<br />';
array_pop($bksout);
echo "You have returned " . $bksout[0].'<br />';
?>