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
        <title>Tutorat CBI</title>
        <meta chartset="UTF-8">
    </head>
    <style>
            @import "style.css";
    </style>
    <body>
        <h1>Ressources</h1>
        <div class="page">
                <div id="index-link"><a class="link-page" href="index">Index</a></div>
                <div id="ressource-link"><a class="link-page" href="ressources">Ressources</a></div>
                <div id="form-link"><a class="link-page" href="form">Questionnaires</a></div>
                <div id="cgu-link"><a class="link-page" href="cgu">CGU</a></div>
        </div>
        <!--Ressources universitaires-->
        <div id="wrapper" class="container">
                <div id="fiches" class="col">
                <h2>Université</h2>
                <p class="col ressources">Sources de l'université de Paris</p><br/>
                <?php while ($ressourceUni = $resultUni->fetch()) : ?>
                        <a class="link" href="<?echo $ressourceUni["uri"]; ?>"><?php echo $ressourceUni["txt"]; ?><br/></a>
                <?php endwhile ?>
                </div>
                <!--Ressources fiches, cours et PDF-->
                <div id="fiches" class="col">
                <h2>Fiches et cours</h2>
                <p class="ressources">Fiches de cours, documentation et informations relatives à Linux</p><br/>
                <?php while ($ressourceFiches = $resultFiches->fetch()) : ?>
                        <a class="link" href="<?echo $ressourceFiches["uri"]; ?>"><?php echo $ressourceFiches["txt"]; ?><br/></a>
                <?php endwhile ?>
                </div>
                <!--Ressources tutoriels-->
                <div id="tutoriel" class="col">
                <h2>Tutoriels</h2>
                <p class="ressources">Tutoriels, explications et installations</p><br/>
                <?php while ($ressourceTuto = $resultTuto->fetch()) : ?>
                        <a class="link" href="<?echo $ressourceTuto["uri"]; ?>"><?php echo $ressourceTuto["txt"]; ?><br/></a>
                <?php endwhile ?>
                </div>
                <!--Ressources code source, scripts etc-->
                <div id="code" class="col">
                <h2>Code source</h2>
                <p class="ressources">Code source des scripts montrés</p><br/>
                <?php while ($ressourceCode = $resultCode->fetch()) : ?>
                        <a class="link" href="<?echo $ressourceCode["uri"]; ?>"><?php echo $ressourceCode["txt"]; ?><br/></a>
                <?php endwhile ?>
                </div>
                <!--Ressources autres-->
                <div id ="other" class="col">
                <h2>Autres</h2>
                <p class="ressources">Ressources n'entrant dans aucunes des catégories précédentes</p><br/>
                <?php while ($ressourceOther = $resultOther->fetch()) : ?>
                        <a class="link" href="<?echo $ressourceOther["uri"]; ?>"><?php echo $ressourceOther["txt"]; ?><br/></a>
                <?php endwhile ?>
                </div>
        </div>
        <div id="credentials">
                <div id="cred-name"><p>Site codé et administré par <a id="contact-page" href="contact">Hugo Demaret<a></p></div><div id="date"><p>2021</p></div>
        </div>
    </body>
</html>