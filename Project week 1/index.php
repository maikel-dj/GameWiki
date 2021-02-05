<?php
    include 'functions.php';
    //roept connect database functie aan
    $database = connectDb();

    //voert sql commando uit van opvragen van comments
    $comments = $database->query("SELECT * FROM `comments`;");
    $comments->execute();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS files -->
    <link rel="stylesheet" href="CSS/index.css">

    <title>Phasmophobia.wiki</title>
</head>
<body>

    <div class="content">
        <!-- NAV -->
        <nav>
            <div class="logo">
                <img src="IMG/logo.png" alt="">
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#maps">Maps</a></li>
                <li><a href="#items">Items</a></li>
                <li><a href="#ghosts">Ghosts</a></li>
                <li><a href="#spelregels">Spelregels</a></li>
                <li><a href="#over-de-game">Over de game</a></li>
                <li><a href="signup_page.php"><?xml version="1.0" encoding="iso-8859-1"?>
                    <!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="45.532px" height="45.532px" viewBox="0 0 45.532 45.532" style="enable-background:new 0 0 45.532 45.532;"
                        xml:space="preserve">
                    <g>
                        <path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765
                            S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53
                            c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012
                            c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592
                            c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"/>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg></a></li>
            </ul>
        </nav>
        <!-- END NAV -->

        <!-- BANNER -->
        <div id="home">

            <div class="banner-container">
                <img src="IMG/logo.png" alt="Phasmophobia">
            </div>

        </div>
        <!-- END BANNER -->

        <!-- MAPS -->
        <div id="maps">

            <div class="maps-container">
                <h1>Maps</h1>
                <div class="maps-content">
                    <div class="map-list">
                        <h3>Small</h3>
                            <ul class="menu">
                                <li>Tanglewood Street House</li>
                                <li>Edgefield Street House</li>
                                <li>Ridgeview Road House</li>
                                <li>Grafton Farmhouse</li>
                                <li>Bleasdale Farmhouse</li>
                            </ul>
                        <h3>Medium</h3>
                            <ul class="menu">
                                <li>Brownstone High school</li>
                                <li>Prison</li>
                            </ul>
                        <h3>Large</h3>
                            <ul class="menu">
                                <li>Asylum</li>
                            </ul>
                    </div>

                    <!-- CONTAINER AJAX LOADER-->
                    <div class="map-load">
                    </div>

                </div>
            </div>

        </div>
        <!-- END MAPS -->

        <!-- ITEMS -->
        <div id="items">

            <div class="items-container">
                <h1>Items</h1>
            </div>
            <div class="items-content">

                <ul class="menu">
                    <li>Candle</li>
                    <li>Crucifix</li>
                    <li>EMF Reader</li>
                    <li>Flashlight</li>
                    <li>Ghost Writing Book</li>
                    <li>Glow Stick</li>
                    <li>Head Mounted Camera</li>
                    <li>Infrared Light Sensor</li>
                    <li>Lighter</li>
                    <li>Motion Sensor</li>
                    <li>Parabolic Microphone</li>
                    <li>Photo Camera</li>
                    <li>Salt Shaker</li>
                    <li>Sanity Pills</li>
                    <li>Smudge Sticks</li>
                    <li>Sound Sensor</li>
                    <li>Spirit Box</li>
                    <li>Strong Flashlight</li>
                    <li>Thermometer</li>
                    <li>Tripod</li>
                    <li>UV Flashlight</li>
                    <li>Video Camera</li>
                </ul>

                <!-- CONTAINER AJAX LOADER-->
                <div class="items-load">
                </div>

            </div>

        </div>
        <!-- END ITEMS -->

        <!-- GHOSTS -->
        <div id="ghosts">

            <div class="ghosts-container">
                <h1>Ghosts</h1>
            </div>
            <div class="ghosts-content">

                <ul class="menu">
                    <li>Spirits</li>
                    <li>Wraiths</li>
                    <li>Phantoms</li>
                    <li>Poltergeists</li>
                    <li>Banshees</li>
                    <li>Jinns</li>
                    <li>Mares</li>
                    <li>Revenants</li>
                    <li>Shades</li>
                    <li>Demons</li>
                    <li>Yureis</li>
                    <li>Oni</li>
                </ul>

                <!-- CONTAINER AJAX LOADER-->
                <div class="ghost-load">
                </div>

            </div>

        </div>
        <!-- END GHOSTS -->

        <!-- SPELREGELS -->
        <div id="spelregels">

            <div class="spelregels-container">
                <h1>Spelregels</h1>
            </div>
            <div class="spelregels-content">

                <p>The objective in Phasmophobia is actually quite simple. Get in, find clues, and figure out what the ghost is. This can be done a number of ways, using an assortment of different devices like video cameras, UV lights, and even a blank journal. We’ll go over the tools of the trade a bit later on. For now, though, let’s focus on the very basics of the game.</p>

            </div>

        </div>
        <!-- END SPELREGELS -->

        <!-- ABOUT GAME -->
        <div id="over-de-game">

            <div class="over-de-game-container">
                <h1>Over de game</h1>
            </div>
            <div class="over-de-game-content">

                <p>Phasmophobia is an indie co-op psychological horror game developed by Kinetic Games. It was released in early access on 18th September 2020 for PC with crossplay VR support. Play with up to three other players as a team of paranormal investigators and explore haunted locations filled with paranormal activity. Experience thrilling moments of gameplay as you interact with the ghosts, spirits, and other paranormal phenomena. Support your team by monitoring the location with CCTV cameras and motion sensors from the safety of the van or head inside and get your hands dirty with the ghostly activity that will get increasingly hostile as time goes on.</p>

            </div>

        </div>
        <!-- END ABOUT GAME -->

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

    </div>


    <!-- Javascript files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js"></script>
</body>
</html>