<?php

require_once __DIR__ . '/Models/Media.php';
require_once __DIR__ . '/Models/Song.php';
require_once __DIR__ . '/Models/Podcast.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista file multimediali</title>
</head>

<body>

    <style>
        body {
            background-color: #171214;
            color: #CCCCCC;
        }
    </style>

    <?php

    $fotoAlLago = new Media("Foto al lago");
    $fotoAlLago->setFilesize(2);
    $fotoAlLago->setFilesizeUnit("MB");

    echo $fotoAlLago->getDetails();
    echo "<br>";

    $blue = new Song("I'm Good (Blue)", "David Guetta", "House", 3);
    $blue->setFilesize(5);
    $blue->setFilesizeUnit("MB");

    $blue->addStreamingService("Spotify");
    $blue->addStreamingService("Apple Music");

    echo $blue->getDetails();
    echo "<br>";

    $gitbar = new Podcast("Avventure Front-End", 60, 8);
    $gitbar->addStreamingService("Gitbar.it");
    echo $gitbar->getDetails();

    ?>

</body>