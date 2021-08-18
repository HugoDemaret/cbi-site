<!DOCTYPE html>
<?php
include 'connection.php';
include 'config.php';
$resultUni = $db->query('SELECT * FROM ressources WHERE uri_type = "universite" ');
$resultFiches = $db->query('SELECT * FROM ressources WHERE uri_type = "fiches" ');
$resultTuto = $db->query('SELECT * FROM ressources WHERE uri_type = "tutoriel" ');
$resultCode = $db->query('SELECT * FROM ressources WHERE uri_type = "code" ');
$resultOther = $db->query('SELECT * FROM ressources WHERE uri_type = "other" ');
?>
<html>
    <head>
        <title>Ressources CBI</title>
        <meta chartset="UTF-8">
    </head>
    <style>
            @import "style.css";
    </style>
    <body>
        <h1>Ressources</h1>
        <div class="page">
                <a class="link-page" href="index.php">Index</a>
                <a class="link-page" href="form.php">Questionnaires</a>
        </div>
        <p class="information">
            Ici, vous retrouverez les différentes ressources utiles en tutorat de CBI.<br>
            Vous trouverez aussi le code sources des scripts et programmes montrés.<br>
            Des liens vers des cours, des vidéos, et pleins de ressources en lignes.<br>
            <em>Notez que beaucoup de ressources peuvent être en anglais : c'est la langue de l'informatique.</em>
        </p>
        <!--Ressources universitaires-->
        <div id="wrapper" class="container">
                <div id="fiches" class="col">
                <h2>Université</h2>
                <p class="col ressources">Sources de l'université de Paris</p>
                <?php while ($ressourceUni = $resultUni->fetch()) : ?>
                        <a class="link" href="<?echo $ressourceUni["uri"]; ?>"><?php echo $ressourceUni["txt"]; ?><br/></a>
                <?php endwhile ?>
                </div>
                <!--Ressources fiches, cours et PDF-->
                <div id="fiches" class="col">
                <h2>Fiches et cours</h2>
                <p class="ressources">Fiches de cours, documentation et informations relatives à Linux</p>
                <?php while ($ressourceFiches = $resultFiches->fetch()) : ?>
                        <a class="link" href="<?echo $ressourceFiches["uri"]; ?>"><?php echo $ressourceFiches["txt"]; ?><br/></a>
                <?php endwhile ?>
                </div>
                <!--Ressources tutoriels-->
                <div id="tutoriel" class="col">
                <h2>Tutoriels</h2>
                <p class="ressources">Tutoriels, explications et installation</p>
                <?php while ($ressourceTuto = $resultTuto->fetch()) : ?>
                        <a class="link" href="<?echo $ressourceTuto["uri"]; ?>"><?php echo $ressourceTuto["txt"]; ?><br/></a>
                <?php endwhile ?>
                </div>
                <!--Ressources code source, scripts etc-->
                <div id="code" class="col">
                <h2>Code source</h2>
                <p class="ressources">Code source des scripts montrés</p>
                <?php while ($ressourceCode = $resultCode->fetch()) : ?>
                        <a class="link" href="<?echo $ressourceCode["uri"]; ?>"><?php echo $ressourceCode["txt"]; ?><br/></a>
                <?php endwhile ?>
                </div>
                <!--Ressources autres-->
                <div id ="other" class="col">
                <h2>Autres</h2>
                <p class="ressources">Ressources n'entrant dans aucunes des catégories précédentes</p>
                <?php while ($ressourceOther = $resultOther->fetch()) : ?>
                        <a class="link" href="<?echo $ressourceOther["uri"]; ?>"><?php echo $ressourceOther["txt"]; ?><br/></a>
                <?php endwhile ?>
                </div>
        </div>
    </body>
</html>