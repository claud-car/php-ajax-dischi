<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "dati.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/master.css">
    <title>Document</title>
</head>
<body>
        <h1>SpotiClaudiofy</h1>
        <div class="selection">
        <label class="">Select the genre</label>
        <select  class="" name="disks"
        placeholder="Seleziona il genere musicale">
            <option value="All">All</option>
            <option value="Rock">Rock</option>
            <option value="Metal">Metal</option>
            <option value="Jazz">Jazz</option>
            <option value="Pop">Pop</option>
        </select>
        </div>
        <div class="container">
            <?php 
            foreach ($dischi as $key => $disco) { ?>
                <div class="card">
                    <div class="img">
                        <img src='<?= $disco["poster"] ?>' alt="">
                    </div>
                    <div class="card-title">
                        <p>Title: <?= $disco["title"] ?></p>
                        <span>Author: <?= $disco["author"] ?></span>
                    </div>
                    <div class="card-info">
                        <p>Genre: <?= $disco["genre"] ?></p>
                        <span>Year: <?= $disco["year"] ?></span>
                    </div>
                </div>
            <?php 
            } ?>      
        </div>
</body>
</html>