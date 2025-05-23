<?php

// Credentials

define("DB_SERVER", "localhost");       // IP Address
define("DB_USER", "root");              // Username
define("DB_PASS", "");                  // Password
define("DB_NAME", "cms");               // Database to be used

?>

<!-- 
This Guide demonstrates the five fundamentals steps of database interaction using PHP.

Credentials

1. Create a database Connection
$connection = mysqli_connect($bdhost, $dbuser, $dbpass, $dbname);

2. Perform database query
$query = "SELECT * FROM subjects";
$result_set = mysqli_query($connection, $query);

3. Use returned data (if any)
while($subject = mysqli_fetch_assoc($result_set)) {
    echo $subject["menu_name"] . "<br />";
}

4. Release returned data
mysqli_free_result($result_set);

5.CLase database connection
mysqli_close($connection);
-->