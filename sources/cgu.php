<!DOCTYPE html>
<?php
include 'connection.php';
include 'config.php';
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
        <h1>Index</h1>
        <div class="page">
            <div id="index-link"><a class="link-page" href="index">Index</a></div>
            <div id="ressource-link"><a class="link-page" href="ressources">Ressources</a></div>
            <div id="form-link"><a class="link-page" href="form">Questionnaires</a></div>
            <div id="cgu-link"><a class="link-page" href="cgu">CGU</a></div>
        </div>
        <div id="information">
        <p>
            En vous connectant sur ce site, vous acceptez les conditions suivantes :<br/><br/><br/>
            Les IP peuvent être collectées à des fins statistiques et sécuritaire*. Les bases de données sont chiffrées, <br/>
            aucune information personnelle ne saurait vous être demandée, mis à part le mail dans les questionnaires.<br/>
            Vous avez un droit de retrait total sur vos données (non applicable dans le cas de poursuites). <br/>
            En cas de problème de sécurité (faille par exemple), veuillez me contacter. <br/><br/>
            Toute exploitation de faille sans autorisation (écrite) préalable de ma part verra votre IP bannie,<br/> 
            ainsi qu'une plainte déposée.<br/>
            Toute attaque de type DDoS (ou DoS), visant à rendre le service inaccessible, verra une plainte déposée. <br/><br/>
            <em>* : bloquage d'IP, IPTABLES et autres solutions permettant d'éviter les attaques.</em>
        </p>
    </div>
    <div id="credentials">
        <div id="cred-name"><p>Site codé et administré par <a id="contact-page" href="contact">Hugo Demaret<a></p></div><div id="date"><p>2021</p></div>
        </div>
    </body>
</html>