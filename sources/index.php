<!DOCTYPE html>
<?php
include 'connection.php';
include 'config.php';
?>
<html>
    <head>
        <title>Lovelace</title>
        <meta chartset="UTF-8">
    </head>
    <style>
            @import "style.css";
    </style>
    <body>
        <h1>Home</h1>
        <div class="page">
            <div id="index-link"><a class="link-page" href="index">Home</a></div>
            <div id="ressource-link"><a class="link-page" href="ressources">Ressources</a></div>
            <div id="form-link"><a class="link-page" href="form">Questionnaires</a></div>
            <div id="form-link"><a class="link-page" href="defis">Défis</a></div> 
            <div id="cgu-link"><a class="link-page" href="cgu">CGU</a></div>
        </div>
        <div id="information">
        <p>
            Ce site regroupe les ressources du tutorat de CBI, ainsi que les défis Lovelace<br>
            Vous trouverez aussi le code sources des scripts et programmes montrés, ainsi que les corrections des défis<br>
            Des liens vers des cours, des vidéos, et pleins de ressources en lignes.<br>
            <em>Notez que beaucoup de ressources peuvent être en anglais : c'est la langue de l'informatique.</em>
        </p>
    </div>
    <div id="credentials">
            <div id="cred-name"><p>Site codé et administré par <a id="contact-page" href="contact">Hugo Demaret<a></p></div><div id="date"><p>2021</p></div>
        </div>
    </body>
</html>