<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Social network for developper !">
    <meta name="author" content="Lhourquin">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/pulse/bootstrap.min.css" rel="stylesheet" integrity="sha384-FnujoHKLiA0lyWE/5kNhcd8lfMILbUAZFAT89u11OhZI7Gt135tk3bGYVBC2xmJ5" crossorigin="anonymous">    <link rel="stylesheet" href="assets/css/main.css">

    <title>
    <?=
    isset($title) 
    ? $title .' - ' . WEBSITE_NAME
    : WEBSITE_NAME . ' - Simple rapide efficace !';
    
 
      ?>
    </title>
  
</head>
<body>
<?php
include('partials/_nav.php');
include('partials/_flash.php');
?>