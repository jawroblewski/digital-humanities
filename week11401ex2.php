<?php
$tasks= array();
$stasks[0] = 'Task1';
echo $tasks[0].'<br />';
array_push($tasks, 'task2');
echo $tasks[1].'<br />';
echo array_shift($tasks);
?>
