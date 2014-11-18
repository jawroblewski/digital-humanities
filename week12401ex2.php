<?php
$tasks = array();
$tasks[0] = 'laundry';
echo $tasks[0].'<br />';
array_push($tasks, 'homework', 'bills', 'groceries');
echo $tasks[1].'<br />';
unset($tasks[2]);
echo 'homework is complete<br />';
$tasks['first'] = 'laundry';
print_r($tasks);
echo '<br />Top priority is = '.$tasks['first'];
?>