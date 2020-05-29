<?php
session_start();
require('config/db.php');
require('includes/functions.php');

if(!empty($_GET['p']) && is_already_in_use('pseudo' , $_GET['p'], 'users') && !empty($_GET['token'])){
    $pseudo = $_GET['p'];
    $token = $_GET['token'];

    $query = $db->prepare('SELECT mail, password FROM users WHERE pseudo = ?');
    $query->execute([$pseudo]);

 

    $data = $query->fetch(PDO::FETCH_OBJ);
   // die($token);
    $token_verif = sha1($pseudo.$data->mail.$data->password);
    
    if($token == $token_verif){
        $query = $db->prepare('UPDATE users SET active = "1" WHERE pseudo = ?');
        $query->execute([$pseudo]);
        redirect('login.php');
    }else {
        set_flash('paramettre invalide', 'danger');
        redirect('index.php');
    }
}else {
    redirect('index.php');
}