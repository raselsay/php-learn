<?php
session_start();
$a = "In this chapter we will look at some commonly used functions to manipulate strings.";
// print(str_word_count($a));
// print(strrev($a));
// print(strpos($a,'at'));
// $result = str_replace($a,'we','our');

$letter = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "P");
$string = str_replace($letter, "y", "Hello World of PHP");
print($string);

print('<br>');
print('<br>');
print('<br>');
print('<br>');
if (strlen($a) > 100 ) {
	print('it\'s Long Text');
} else {
	print('it\'s ok !');
}
?>

<h3>Hi : <?php echo $_SESSION['username']?></h3> 