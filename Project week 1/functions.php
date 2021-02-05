<?php

function connectDb()
{
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=project', 'root', '');
        return $dbh;

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

?>