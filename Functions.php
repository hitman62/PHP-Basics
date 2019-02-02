

<?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function
?>

<hr />

<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>

<hr />

<?php
function familyName2($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyName2("Hege", "1975");
familyName2("Stale", "1978");
familyName2("Kai Jim", "1983");
?>

<hr />

<?php
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>







<hr />

<p>Fuction with var passed from outside function</p>

<?php
	$color = "red";  
?>

<?php


// to pass a variable from outside a function set as global
function writeColor() {
	global $color;  
    echo $color;
}

writeColor();


?>


