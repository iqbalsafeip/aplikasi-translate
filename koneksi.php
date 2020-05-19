<?php 
    $servername = "localhost";
    $username = "root";
    $password = '';
    $databasename = 'sunda_translate';

    include 'Translate.php';

    $Translate = new Translate;

    $Translate->set_db_config($servername, $username, $password, $databasename)->db_connect();
    // Create connection
