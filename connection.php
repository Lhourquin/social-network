<?php
session_start();
// require file
require('config/db.php');
require('includes/functions.php');
require('includes/constants.php');
    // SI LE FORMULAIRE EST SOUMIS
    if(isset($_POST['connection'])){

        // SI TOUS LES CHAMLPS SONT REMPLIS
        if(not_empty(['user', 'password'])){
            extract($_POST);

            $query = $db->prepare("SELECT idUser FROM users 
                                   WHERE (pseudo = :user OR mail = :user) 
                                   AND password = :password
                                   AND active = '1'");

            $query->execute([
                'user' => $user,
                'password' => sha1($password)
            ]);

            $userHasBeenFound = $query->rowCount();

            if($userHasBeenFound){
                redirect('profile.php');
            }else{
                set_flash('Your Pseudo/Mail or Password is incorrect.', 'danger');
                save_input_data();
            }
        }
            
    }else {
        clear_input_data();
    }
?>
<?php
require('views/connection.view.php');
?>