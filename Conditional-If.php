

<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<hr />

<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

<hr />

<?php

$myVar = 24;

 if ($myVar < 25) {
    echo "Less Than 25";
 } elseif ($myVar > 25) {
    echo "More Than 25";
 }
 else {
    echo "WTF";
 }
 
 
 echo "<br>";



/**
 * if (myVar < 24) {
 *     echo "";
 * } elseif (myvar > 26) {
 *     echo "";
 * }
 * } elseif (myvar = 25) {
 *     echo "25";
 * } else {
 *     echo "WTF";
 * }
 * }
 */


echo "$myVar";



?>




