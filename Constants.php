

<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>

<hr />

<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>

<hr />

<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
 
myTest();
?>



