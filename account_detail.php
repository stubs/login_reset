<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
}

INCLUDE 'html_head.php';
if(isset($_GET['status'])){
    $status = $_GET['status'];}
else{
    $status = '';}
$user_id = $_SESSION['user_id'];

?>
<!--<p><?php print("$user_id"); ?></p>-->

<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Update Password</h3>
        </div>
        <div class="panel-body">
            <form action="pw_update.php" enctype="multipart/form-data" method='post'>
                <p>Current Password:</p>
                <input type="text" name="currentpw" /><p></p>
                <br /><br />
                New Password:<p></p>
                <input type="text" name="newpw" /><p></p>
                <br />
                Confirm New Password:<p></p>
                <input type="text" name="confnewpw" /><p></p>
                <br />
                <input type="submit" value="Submit" />
                <?php
                    if ($status == 1){print("Incorrect value for current password.");}
                    if ($status == 2){print("New password too short. Please input a password of at least 6 characters in length.");}
                    if ($status == 3){print("Passwords do not match.");}
                    if ($status == 4){print("Password updated successfully.");}
                    if ($status == 5){print("Undefined Error : Please contact xxxx@example.com for help.");}
                ?>
            </form>
        </div>
    </div>
</div>

</body>
</html>
