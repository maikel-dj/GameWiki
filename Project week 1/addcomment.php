<?php
include 'functions.php';

$database = connectDb();

if(isset($_POST['naam'],$_POST['comment']))
{
    $naam = $_POST['naam'];
    $comment = $_POST['comment'];
    
    $params = [":naam" => $naam, ":comment" => $comment];

    $sql = 'INSERT INTO `comments` (naam, comment) VALUES (:naam, :comment);';
    $sth = $database->prepare($sql);
    $insert = $sth->execute($params);

    if($insert)
    {
        echo "Successvol toegevoegd<br>";

        echo "<a href='./'>Terug naar invulveld</a>";
    }
    else
    {
        echo "Er ging iets fout met het toevoegen";
    }
}

?>