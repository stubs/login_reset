<?php
session_start();

INCLUDE 'functions/functions.php';
INCLUDE 'resources/db.php';


$user_email = $_POST['Email'];
$loginpassword = $_POST['Password'];
$user_query = "select * from users where email = '$user_email'";
$pg_query_result = pg_query($db, $user_query);
$user_id = pg_result($pg_query_result, 0, 0);
$email = pg_result($pg_query_result, 2);
$salt = pg_result($pg_query_result, 3);
$hash_pw = pg_result($pg_query_result, 4);
$hash_chk = get_hash_pw($loginpassword, $salt);

$_SESSION['user_id'] = $user_id;

if($hash_chk == $hash_pw){
    header('Location: index.php');
}
else{
    header('Location: login.php?loginerror=1');
}

?>
