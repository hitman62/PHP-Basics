

<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?>



<?php 
function newTest() {
$pabo = "sloppy";
echo $pabo;
}
?> 

<?php
newTest();
?>

<hr />

<?php
function myTest() {
    $x = 8; // local scope
    echo "<p>Local Variable x inside function is: $x</p>";
    
 
} 

myTest();

// using x outside the function will generate an error
echo "<p>Global Variable x outside function is: $x</p>";
?>

<hr />

<?php
$x = 22.3;
$y = 55;

function myTest2() {
    global $x, $y;
    $y = $x + $y;
}

myTest2();
echo $y; // outputs 15
?>

<hr />

<?php
function myTest3() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest3();
myTest3();
myTest3();
?>

