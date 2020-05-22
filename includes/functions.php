<?php


    // check if all filds not empty    
    if(!function_exists('not_empty')){
        function not_empty($fields = []){
            if(count($fields) != 0){
                foreach($fields as $field){
                    if(empty($_POST[$field]) || trim(($_POST[$field])) == false){
                        return false;
                    }
                }

                return true;
            }
        }
    }

    // check if data does'nt already use
    if(!function_exists('is_already_in_use')){
        function is_already_in_use($field, $value, $tables){
            global $db;

            $query = $db->prepare("SELECT idUser FROM $tables WHERE $field = ?");
            $query->execute([$value]);

            $count = $query->rowCount();

            $query->closeCursor();

            return $count;
        }
    }

    // SET FLASH
    if(!function_exists('set_flash')){
        function set_flash($message , $type = 'info'){
            $_SESSION['notification']['message'] = $message;
            $_SESSION['notification']['type'] = $type;
        }
    }

    // REDIRECT
    if(!function_exists('redirect')){
        function redirect($page){
            header('Location: ' . $page);
            exit();
        }
    }
