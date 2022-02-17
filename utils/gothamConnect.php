<?php

try {
    $dbconnect = new PDO(
        'mysql:host=localhost:8889,
                     dbname=gotham',
        'root',
        'root'
    );
} catch (PDOException $exception) {
    print print "Erreur !: " . $exception->getMessage() . "<br/>";
    die();
}
