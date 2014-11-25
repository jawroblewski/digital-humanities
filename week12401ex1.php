<?php
$books = array();
function checkout_books($book) {
global $books;
array_push($books, $book);
echo 'You have checked out "'.$book.'" <br/>';
}

function checkin_books($booknum) {

global $books;
unset($books);
echo 'You have checked in book = '.$booknum.'<br/>';
$i = 0;
$booklist = array();
foreach ($books as $key => $value) {
        $newBooks[$i] = $value;
        $i++;
}
$books = $booklist;
}
foreach ($books as $key => $value) {
$booknum = $key;
$bookNo = $bookID+1;
$book1 = 'Book Title 1';
$book2 = 'Book Title 2';
$book3 = 'Book Title 3';
add_books($book1);
add_books($book2);
add_books($book3);
unset($books[$booknum]);
print_r($books);
?>