<?php

include 'functions.php';
//roept connect database functie aan
$database = connectDb();

//voert sql commando uit van opvragen van wiki artikel data
$maps = $database->query("SELECT * FROM `maps`");
$maps->execute();

//voert sql commando uit van opvragen van comments
$comments = $database->query("SELECT * FROM `comments`");
$comments->execute();
?>

<!DOCTYPE html>
<html lang="en">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/index.css">

    <title>Phasmophobia</title>
</head>
<body>
    <nav>
        <div class="logo">
            logo
        </div>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Maps</a></li>
            <li><a href="">Equipment</a></li>
            <li><a href="">Ghosts</a></li>
            <li><a href="">Spelregels</a></li>
            <li><a href="">Over de game</a></li>
        </ul>
    </nav>



    <div class="banner-container">
        <img src="IMG/logo.png" alt="Phasmophobia">
    </div>
    
	<h2>Reacties op artikel:</h2>

    <?php
//loopt over alle comments die opgehaald zijn
while ($row = $comments->fetch(PDO::FETCH_ASSOC))
{   
    //waarde krijgt variablen en worden weergeven op wegpagina
    $name = $row['naam'];
    $commenttext = $row['comment'];
    echo "<html><h3>".$name."</h1></html>";
    echo "<html><h4>".$commenttext."</h1></html>";
}
?>

    

    <h4>Laat uw reactie achter:</h4>

    <form method="POST" action="addcomment.php">
    <h4>Naam</h4>
    <input type='text' name='naam'> <br>

    <h4>Uw reactie</h4>
    <input type='text' name='comment'> <br>
    <input type='submit'><br>
    </form>



<?php
//loopt over alle opgehaalde artikelen van database
while ($row = $maps->fetch(PDO::FETCH_ASSOC))
{
    //slaat alle waarden op als variablen
    $tanglewood = $row['tanglewood'];
    $edgefield = $row['edgefield'];
    $ridgeview = $row['ridgeview'];
    $grafton = $row['grafton'];
    $bleasdale = $row['bleasdale'];
    $brownstone = $row['brownstone'];
    $prison = $row['prison'];
    $asylum = $row['asylum'];
}
?>


</body>
</html>
