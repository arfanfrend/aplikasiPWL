<?php
    $dbHost = 'localhost';
    $dbName = 'aplikasipwl';
    $dbUser = 'root';
    $dbPass = '';

    

    try {
        $con = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo (" Connection Galat => ") . $e->getMessage();
    }

