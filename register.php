
<?php
// require file
require('config/db.php');
require('includes/functions.php');
require('includes/constants.php');
    // SI LE FORMULAIRE EST SOUMIS
    if(isset($_POST['register'])){

        // SI TOUS LES CHAMLPS SONT REMPLIS
        if(not_empty(['name', 'lastName', 'pseudo', 'mail', 'genderS', 'city', 'age', 'password', 'passwordConfirm'])){

            $errors = [];

            extract($_POST);

            if(mb_strlen($pseudo) < 3){
                $errors[] = "Pseudo trop court min. 3 charactere !";
            }

            if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
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
              
            require('.sendMail.php');

                //require_once('sendMail.php');
                // ENVOIR MAIL ACTIVATION
                //$to = $mail;
                /*ob_start();
                $subject = WEBSITE_NAME . ' - activation du compte';
                $token = sha1($pseudo.$mail.$password);

                
                require('templates/emails/activation.view.php');
                $content = ob_get_clean();

                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                */
                //$senders = 'checkeboom59@gmail.com';

                //$headers = 'From :' . $senders;
               /*
                mail($to, 'inscription', "Bonjour " . $name, $headers);
                //INFROMER USER DE VOIR SA BOITE MAIL
                if(mail($to, 'inscription', "Bonjour " . $name, $headers)){
                    echo '<div class="alert alert-primary">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              mail d\'activation envoyer
          </div>';
                }else{
                    echo '<div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              mail d\'activation non envoyer !!!!!!
          </div>';
                }
                */
            }

        }else {
            $errors[] = "Veuillez remplir tout les champs !";
        }
    }

?>
<?php
require('views/register.view.php');
?>
