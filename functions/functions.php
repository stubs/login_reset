<?php

function get_hash_pw($password,$key){
    return hash("sha256", $password . $key);
}

?>
