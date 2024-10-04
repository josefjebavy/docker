<?php
// Získání hostname
$hostname = gethostname();

// Získání environmentálních proměnných
$envVariables = getenv();

// Tisk hostname
echo "Hostname: " . $hostname . "\n";
echo "<br>";

echo "ENV VAR: ";
if (isset($envVariables["VAR"])) {
    echo $envVariables["VAR"] . "\n";
}
echo "<br>";


/*
// Tisk environmentálních proměnných
echo "Environment Variables:\n";
foreach ($envVariables as $key => $value) {
	echo "$key: $value\n";
	echo "<br>";

}
 */
phpinfo();
?> 
