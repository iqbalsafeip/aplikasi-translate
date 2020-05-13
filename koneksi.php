<?php 
        $servername = "localhost";
        $username = "root";
        $password = '';
        $databasename = 'sunda_translate';

    include 'action.php';

    $Translate = new Translate;

    $Translate->set_db_info($servername, $username, $password, $databasename)->db_connect();
    // Create connection
