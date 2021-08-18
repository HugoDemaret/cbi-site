<!DOCTYPE html>
<?php
include 'connection.php';
include 'config.php';
$resultForm = $db->query('SELECT * FROM ressources WHERE uri_type = "formulaire" ');
?>
<html>
    <head>
        <title>Questionnaires CBI</title>
        <meta chartset="UTF-8">
    </head>
    <style>
            @import "style.css";
    </style>
    <body>
        <h1>Questionnaires tutorat CBI</h1>
        <div class="page">
        <a class="link-page" href="index.php">Index</a>
        <a class="link-page" href="ressources.php">Ressources</a>
    </div>
    <!--Ressources questionnaires et formulaires-->
    <div id="wrapper" style="text-align: center;">
        <h2>Questionnaires</h2>
        <p class="ressources">Liens vers les questionnaires</p>
        <?php while ($ressourceForm = $resultForm->fetch()) : ?>
                <a class="link" href="<?echo $ressourceForm["uri"]; ?>"><?php echo $ressourceForm["txt"]; ?><br/></a>
        <?php endwhile ?>
    </div>
    <div id="credentials">
            <div id="cred-name"><p>Site codé et administré par Hugo Demaret</p></div><div id="date"><p>2021</p></div>
        </div>
    </body>
</html>