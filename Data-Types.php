


<?php 
$x = 5985;
var_dump($x);
?>

<hr />

<?php 
$x = 10.365;
var_dump($x);
?>

<hr />

<?php 
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

<hr />

<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>

<hr />

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>
