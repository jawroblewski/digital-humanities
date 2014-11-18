<?php
$books = array();
$books[0] = 'Title1';
echo "You have checked out " . $books[0].'<br />';
array_push($books, 'Title2', 'Title3', 'Title4', 'Title5');
echo "You have checked out " . $books[1].'<br/>';
echo "You have checked out " . $books[2].'<br/>';
echo "You have checked out " . $books[3].'<br/>';
echo "You have checked out " . $books[4].'<br/>';
unset($books[4]);
print_r($books);
?>