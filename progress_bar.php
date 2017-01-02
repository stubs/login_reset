<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
}
INCLUDE "html_head.php";
?>

<body>
<?php INCLUDE "nav_bar.php"; ?>

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>This page demonstrates the use of the Bootstrap Progress bar.  The two buttons below run two different queries.  The progress bar will inform the user on....well....the progress of the query's completion.</p></br>
                <div align="center">
                    <button id="create" type="button" class="btn btn-default" onclick="showProgress()">Create Table</button>
                    <button id="drop" type="button" class="btn btn-default">Drop Table</button>
                </div>
                </br>
                <div class="progress">
                    <div id ="pb" class="progress-bar progress-bar-success" style="width: 0%">
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
