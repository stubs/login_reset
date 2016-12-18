<?php
session_start();
INCLUDE 'resources/db.php';
INCLUDE 'functions/functions.php';

$user_id = $_SESSION['user_id'];
$curpass = $_POST['currentpw'];
$newpass = $_POST['newpw'];
$confnewpw = $_POST['confnewpw'];
$salt = '4Mma0wd2To3fi346j';
$hash_pw = get_hash_pw($curpass, $salt);
$pw_query = "select hash_password from users where hash_password = '$hash_pw'";
$pw_query_result = pg_query($db, $pw_query);
$user_pass = pg_result($pw_query_result, 0);


if($hash_pw != $user_pass){
    header("Location: account_detail.php?status=1");
}
else{
    if(strlen($newpass) < 6){
        header("Location: account_detail.php?status=2");
    }
    else{
        if($newpass != $confnewpw){
            header("Location: account_detail.php?status=3");
        }
        else{
            if($hash_pw == $user_pass and strlen($newpass) > 5 and $newpass == $confnewpw){
                $new_hash = get_hash_pw($newpass, $salt);
                $update_query = "update users set hash_password = '$new_hash', updated_time = now() where id = '$user_id'";
                pg_query($db, $update_query);
                header("Location: account_detail.php?status=4");
            }
            else{header("Location: account_detail.php?status=5");}
        }
    }
}

?>
