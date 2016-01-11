<?php
    require_once('db_connect.php');
    require_once('login_process.php');
    require_once('emp_update_process.php');
    require_once('header.php');
?>
<div class="page-header">
    <div class="jumbotron">
        <h1>SPATZ THEATRE</h1>
        <?php require_once('../navigation_bar.php'); ?>
    </div>
</div>
<div class="c1 container">
    <div class="row">
        <div class="col-sm-4">
            <?php
                if($_SESSION['session_id'] == 'employee' || $_SESSION['session_id'] == 'admin' || $_SESSION['session_id'] == 'admin_edit')
                    require_once('logged_in_box.php');
                else
                    require_once 'login_box.php'; ?>
        </div>
        <div class="col-sm-8">
            <?php
            if($_SESSION['session_id'] == 'employee' || $_SESSION['session_id'] == 'admin' || $_SESSION['session_id'] == 'admin_edit') {
                require_once('info_logged_in_box.php');
                require_once('emp_acct_info.php');
            }
            else
                require_once('info_login_box.php');
            ?>
        </div>
    </div>
</div>
</body>

</html>


