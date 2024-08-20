<?php
session_start();
$dbhost = "localhost";
$dbuser = "trackingquickksh_portaldbuser";
$dbpass = "X#&o@jhpAhr9";
$db = "trackingquickksh_portal";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

$stripeApiKey = "sk_test_51PDVEyCs4G4QqMriBzRmMsJXh5fqXx50eJm3sM1C1OIKLiUpzA2qcFfUGaCmBMYWJcdPEH791UeBrodRhHXNKxMw00ImPJ7sE2";
?>