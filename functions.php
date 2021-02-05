<?php

function connectDb()
{
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=gamewiki', 'root', '');
        return $dbh;

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}

?>


