<!DOCTYPE html>
<?php
include 'connection.php';
include 'config.php';
$resultForm = $db->query('SELECT * FROM ressources WHERE uri_type = "formulaire" ');
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
        <h1>Questionnaires tutorat CBI</h1>
        <div class="page">
            <div id="index-link"><a class="link-page" href="index.php">Index</a></div>
            <div id="ressource-link"><a class="link-page" href="ressources.php">Ressources</a></div>
            <div id="form-link"><a class="link-page" href="form.php">Questionnaires</a></div>
            <div id="cgu-link"><a class="link-page" href="cgu.php">CGU</a></div>
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
        <div id="cred-name"><p>Site codé et administré par <a id="contact-page" href="contact.php">Hugo Demaret<a></p></div><div id="date"><p>2021</p></div>
        </div>
    </body>
</html>