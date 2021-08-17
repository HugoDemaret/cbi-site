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
    <body>
        <h1>Ressources</h1>
        <a class="page" href="index.php">Index</a>
        <a class="page" href="form.php">Questionnaires</a>
        <p class="information">
            Ici, vous retrouverez les différentes ressources utile en tutorat de CBI.<br>
            Vous trouverez aussi le code sources des scripts et programmes montrés.<br>
            Des liens vers des cours, des vidéos, et pleins de ressources en lignes.<br>
            <em>Notez que beaucoup de ressources peuvent être en anglais : c'est la langue de l'informatique.</em>
        </p>
        <!--Ressources universitaires-->
        <h2>Université</h2>
        <p class="ressources">Sources de l'université de Paris</p>
        <?php while ($ressourceUni = $resultUni->fetch()) : ?>
                <a class="universite" href="<?echo $ressourceUni["uri"]; ?>"><?php echo $ressourceUni["txt"]; ?><br/></a>
        <?php endwhile ?>
        <!--Ressources fiches, cours et PDF-->
        <h2>Fiches et cours</h2>
        <p class="ressources">Fiches de cours, documentation et informations relatives à Linux</p>
        <?php while ($ressourceFiches = $resultFiches->fetch()) : ?>
                <a class="fiches" href="<?echo $ressourceFiches["uri"]; ?>"><?php echo $ressourceFiches["txt"]; ?><br/></a>
        <?php endwhile ?>
        <!--Ressources tutoriels-->
        <h2>Tutoriels</h2>
        <p class="ressources">Tutoriels, explications et installation</p>
        <?php while ($ressourceTuto = $resultTuto->fetch()) : ?>
                <a class="tutoriels" href="<?echo $ressourceTuto["uri"]; ?>"><?php echo $ressourceTuto["txt"]; ?><br/></a>
        <?php endwhile ?>
        <!--Ressources code source, scripts etc-->
        <h2>Code source</h2>
        <p class="ressources">Code source des scripts montrés</p>
        <?php while ($ressourceCode = $resultCode->fetch()) : ?>
                <a class="code" href="<?echo $ressourceCode["uri"]; ?>"><?php echo $ressourceCode["txt"]; ?><br/></a>
        <?php endwhile ?>
        <!--Ressources autres-->
        <h2>Autres</h2>
        <p class="ressources">Ressources n'entrant dans aucunes des catégories précédentes</p>
        <?php while ($ressourceOther = $resultOther->fetch()) : ?>
                <a class="autres" href="<?echo $ressourceOther["uri"]; ?>"><?php echo $ressourceOther["txt"]; ?><br/></a>
        <?php endwhile ?>
    </body>
</html>