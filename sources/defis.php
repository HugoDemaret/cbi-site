<!DOCTYPE html>
<?php
include 'connection.php';
include 'config.php';
$resultDefi = $db->query('SELECT * FROM defis');
?>
<html>
    <head>
        <title>Défis Lovelace</title>
        <meta chartset="UTF-8">
    </head>
    <style>
            @import "style.css";
    </style>
    <body>
        <h1>Défis Lovelace</h1>
        <div class="page">
            <div id="index-link"><a class="link-page" href="index">Home</a></div>
            <div id="ressource-link"><a class="link-page" href="ressources">Ressources</a></div>
            <div id="form-link"><a class="link-page" href="form">Questionnaires</a></div>
            <div id="form-link"><a class="link-page" href="defis">Défis</a></div> 
            <div id="cgu-link"><a class="link-page" href="cgu">CGU</a></div>
    </div>
    <!--Ressources des défis-->
    <div id="wrapper" style="text-align: center;">
        <h2>Défis</h2>
        <p class="ressources">Liens vers les défis</p>
        <?php while ($ressourceDefi = $resultDefi->fetch()) : ?>
                <a class="link" href="<?echo $ressourceDefi["link"]; ?>"><?php echo $ressourceDefi["description"]; ?><br/></a>
        <?php endwhile ?>
    </div>
    <div id="credentials">
        <div id="cred-name"><p>Site codé et administré par <a id="contact-page" href="contact">Hugo Demaret<a></p></div><div id="date"><p>2021</p></div>
        </div>
    </body>
</html>