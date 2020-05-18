<?php
// require file
require('config/db.php');
require('includes/functions.php');
    // SI LE FORMULAIRE EST SOUMIS
    if(isset($_POST['register'])){

        // SI TOUS LES CHAMLPS SONT REMPLIS
        if(not_empty(['name', 'lastName', 'pseudo', 'mail', 'genderS', 'city', 'age', 'password', 'passwordConfirm'])){

            $errors = [];

            extract($_POST);

            if(mb_strlen($pseudo) < 3){
                $errors[] = "Pseudo trop court min. 3 charactere !";
            }

            if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                $errors[] = "Adresse email invaldie!";
            }

            if(mb_strlen($password) < 6){
                $errors[] = "Mdp trop courts !(min. 6 characthere";
            }else{
                if($password != $passwordConfirm){
                    $errors[] = "Les deux mdp ne se concorde pas!";
                }
            }

            if(is_already_in_use('pseudo', $pseudo, 'users')){
                $errors[] = "Pseudo déja utiliser";
            }

            if(is_already_in_use('mail', $mail, 'users')){
                $errors[] = "Adresse mail deja utiliser";
            }
            
            if(count($errors) == 0){
                // ENVOIR MAIL ACTIVATION

                //INFROMER USER DE VOIR SA BOITE MAIL
            }

        }else {
            $errors[] = "Veuillez remplir tout les champs !";
        }
    }

?>
<?php
require('views/register.view.php');
?>