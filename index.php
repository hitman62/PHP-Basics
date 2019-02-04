
<h1>PHP Basics</h1>

<p><i>Updated 2/2/19</i></p>

<p><a href="Syntax.php">Syntax</a></p>

<p><a href="Variables.php">Variables</a></p>

<p><a href="Echo.php">Echo</a></p>

<p><a href="Data-Types.php">Data-Types</a></p>

<p><a href="Strings.php">Strings</a></p>

<p><a href="Constants.php">Constants</a></p>

<p><a href="Operators.php">Operators</a></p>

<p><a href="Conditional-If.php">Conditional-If</a></p>

<p><a href="Conditional-Switch.php">Conditional-Switch</a></p>

<p><a href="While-Loops.php">While-Loops</a></p>

<p><a href="For-Loops.php">For-Loops</a></p>

<p><a href="Functions.php">Functions</a></p>

<p><a href="Arrays.php">Arrays</a></p>

<p><a href="Sorting-Arrays.php">Sorting Arrays</a></p>

<p><a href="Superglobals.php">Superglobals</a></p>




<h2>PHP Forms</h2>

<p><a href="Form-Handling.php">Form Handling</a></p>

<p><a href="Form-Validation.php">Form Validation</a></p>

<p><a href="Form-Required.php">Form Required</a></p>

<p><a href="Form-URL-Email.php">Form URL/Email</a></p>

<p><a href="Form-Complete.php">Form Complete</a></p>



<?php


echo "INFO_GENERAL";

phpinfo(1);

// echo "INFO_CREDITS";

// phpinfo(2);

echo "INFO_ENVIRONMENT";

phpinfo(16);

echo "INFO_VARIABLES";

phpinfo(32);

echo "INFO_CONFIGURATION";

phpinfo(4);

echo "INFO_MODULES";

phpinfo(8);



// echo "INFO_LICENSE";

// phpinfo(64);

// echo "All<hr />";
// Show all information, defaults to INFO_ALL
// phpinfo();


// Show just the module information.
// phpinfo(8) yields identical results.
// phpinfo(INFO_MODULES);

?>

