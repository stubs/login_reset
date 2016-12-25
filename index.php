<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
}
$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Stub | User Login</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!-- Bootstrap -->
    </head>

    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Stub</a>
                    <ul class="nav navbar-nav">
                        <li role="presentation"><a href="index.php">Home</a></li>
                        <li role="presentation"><a href="progress_bar.php">Progress Bar</a></li>
                        <li role="presentation"><a href="account_detail.php">Account Settings</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <div class="container">
                <h1>Welcome! </br><small>...press buttons and stuff</small></h1>
            </div>
        </div>

        <div class="col-md-9">
            <h1 class="page_header" style="border-bottom: 1px solid #eee; line-height: inherit;">README</h1>
            <div class='readme'>
                <p>This repo implements a login page & password reset with php.  The "Account Setting" link in the navbar is also functional.
            Users will be able to change their own passwords (provided their current password matches the user's password in a PostgreSQL database
            on the backend, and their new password choice meets certain criteria).</p>
            </div>
        </div>
        <div class="col-md-3"></div>












    </body>
</html>
