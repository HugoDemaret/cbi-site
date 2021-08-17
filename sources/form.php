<!DOCTYPE html>
<?php
include 'connection.php';
include 'config.php';
$resultForm = $db->query('SELECT * FROM ressources WHERE uri_type = "formulaire" ');
?>
<html>
    <head>
        <title>Questionnaires</title>
        <meta chartset="UTF-8">
    </head>
    <body>
        <h1>Questionnaires tutorat CBI</h1>
        <a class="page" href="index.php">Index</a>
        <a class="page" href="ressources.php">Ressources</a>
        <!--Ressources questionnaires et formulaires-->
        <h2>Questionnaires</h2>
        <p class="ressources">Liens vers les questionnaires</p>
        <?php while ($ressourceForm = $resultForm->fetch()) : ?>
                <a class="universite" href="<?echo $ressourceForm["uri"]; ?>"><?php echo $ressourceForm["txt"]; ?><br/></a>
        <?php endwhile ?>
    </body>
</html>