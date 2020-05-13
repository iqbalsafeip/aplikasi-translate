<?php 
    include 'koneksi.php';

    $id=  $_GET["id"];
    $Translate->delete_vocab_byId($id);