
<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<h1>Reservation sent successfully!</h1>";
    echo "<p>Thank you for your reservation.</p>";

} else {
    echo "Invalid request!";
}

?>
