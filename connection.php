<?php
session_start();
// require file
include('filters/guest_filter.php');
require('config/db.php');
require('includes/functions.php');
require('includes/constants.php');
    // SI LE FORMULAIRE EST SOUMIS
    if(isset($_POST['connection'])){

        // SI TOUS LES CHAMLPS SONT REMPLIS
        if(not_empty(['identifiant', 'password'])){
            extract($_POST);

            $query = $db->prepare("SELECT idUser, pseudo FROM users 
                                   WHERE (pseudo = :identifiant OR mail = :identifiant) 
                                   AND password = :password
                                   AND active = '1'");

            $query->execute([
                'identifiant' => $identifiant,
                'password' => sha1($password)
            ]);

            $userHasBeenFound = $query->rowCount();

            if($userHasBeenFound){

                $user = $query->fetch(PDO::FETCH_OBJ);
                
                $_SESSION['user_id'] = $user->idUser;
                $_SESSION['pseudo'] = $user->pseudo;
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