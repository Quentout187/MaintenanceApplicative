<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="base.css">
        <title>Epsi v2</title>
    </head>
    <body>
        <div class="mise_en_page">
            <div class="fond_pour_affichage">
                <?php
                    include 'assets/header.php';
                ?>
                <img class="photoProfile" src="image/vianney.jpg"/>
                <img class="photoProfile" src="upload/Quentin.png"/>
                <p>16/20 facilement modifiable</p>
                <p>Vianney DRS</p>
                <p>William Dourlens et Téo Fiminski</p>
                <bouton><a class="bouton_upload" href="upload.php">-> Upload un fichier <-</a></bouton>
                <?php
                    include 'assets/footer.php';
                ?>
            </div>
        </div>
    </body>
</html>