<?php include 'dati.php' ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/master.css">
    <title>Dischi</title>
</head>
<body>
    <div id="root">

       <?php 
        foreach ($database as $value) { ?>
            <div class="card-container" >
                <div class="card" >
                    <div class="front" style='background-image: url(<?= $value[poster] ?>)' >
                    </div>
                    <div class="back">
                        <span>Title: <?= $value[title] ?> </span>
                        <span>Author: <?= $value[author] ?> </span>
                        <span>Year: <?= $value[year] ?></span>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>

    </div>


</body>
</html>