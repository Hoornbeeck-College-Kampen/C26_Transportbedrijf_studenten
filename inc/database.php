<?php

//intialiseren
define('HOST', 'localhost');
define('DATABASE', 'transportbedrijf');
define('USER', 'root');
define('PASSWORD', '');
$dbconn = '';

//connectie maken
try {
    $dbconn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
} catch (exception $e) {
    $dbconn = $e;
}

//sluiten van connectie
function fnCloseDb($conn) {
    if (!$conn == false) {
        mysqli_close($conn) or die('Sluiten MySQL-db niet gelukt....');
    }
}



?>