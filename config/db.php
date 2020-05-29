<?php

require('connect.php');
// Database connection
try {
    $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME , DB_USER, DB_PASSWORD);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {
    die('Imposible de se connecter à la base de donnée. ' . $e->getMessage());
}
