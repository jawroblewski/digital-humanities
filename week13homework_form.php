<?php
$book = $_POST[‘book’];
//create our empty array

$books = array();

function add_books($book, $bookID) {

global $books;

$books[$bookID] = $book;

echo 'Added "'.$book.'" to the catalogue with ID = '.$bookID.'<br/>';

}

function output_books() {

global $books;

$i = 0;

foreach ($books as $key => $value) {

$i++;

//book id

$bookID = $key;

$bookNo = $i;

//make each word first letter upper case

$bookTitle = ucwords($value);

echo '<tr><td>'.$bookNo.'</td><td>'.$bookID.'</td><td>'.$bookTitle.'</td></tr>';

}

}

//add book 1 to catalogue

add_books($book1, $bookID1);

//add book 2 to catalogue

add_books($book2, $bookID2);

//add book 3 to catalogue

add_books($book3, $bookID3);

<html>
<body>

	<ul>
		<li>$bookID1</li>
		<li>$bookID2</li>
		<li>$bookID3</li>
		</ul>
</body>
<html>
echo ‘Book= ‘.$book.’<br />’;

?>

