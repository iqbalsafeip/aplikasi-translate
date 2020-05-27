<?php 

$servername = "localhost";
$username = "root";
$password = '';
$databasename = 'sunda_translate';

include 'Translate.php';

$Translate = new Translate;

// Create connection
$Translate->set_db_config($servername, $username, $password, $databasename)->db_connect();
