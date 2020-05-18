<?php
require('includes/constants.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Activation du compte</h1>
    <p>Pour activer votre compte cliquer sur le lien ci dessous</p>
    <a href="<?= WEBSITE_URL.'/activation.php?p='.$pseudo. '&amp;token='.$token?>">Lien d'activation</a>
</body>
</html>