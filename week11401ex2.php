<?php
$tasks = array();
$tasks[0] = 'task1';
echo $tasks[0].'<br />';
array_pad($tasks,5,"task2", "task3" "task4" "task5");
print_r($tasks);
array_shift($tasks);
print_r($tasks);
?> 
