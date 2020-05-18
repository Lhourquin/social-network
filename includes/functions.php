<?php


    // check if all filds not empty    
    if(!function_exists('not_empty')){
        function not_emtpy($fields = []){
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
        function is_already_is_use($field, $value, $table){
            global $db;

            $query = $db->prepare('SLECT id FORM $table WHERE $field = ?');
            $query->execute([$value]);

            $count = $query->rowCount();

            $query->closeCursor();

            return $count;
        }
    }