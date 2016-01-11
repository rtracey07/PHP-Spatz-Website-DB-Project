<?php
    require_once('../login/db_connect.php');
    require_once('admin_edit_emp_process.php');
    require_once('admin_auth/new_emp_process.php');
    require_once('table_data.php');
    require_once('admin_auth/event_confirm_process.php');
    require_once('admin_auth/event_active_process.php');
    require_once('header.php');

?>
<div class="page-header">
    <div class="jumbotron">
        <h1>SPATZ THEATRE</h1>
        <?php require_once('../navigation_bar.php'); ?>
    </div>
</div>
<div class="c1 container">
    <?php
    if ($_SESSION['session_id'] == 'admin')
        require_once ('admin_box.php');
    else if ($_SESSION['session_id'] == 'admin_edit')
        require_once ('admin_edit_emp.php');
    ?>

</div>
</body>

</html>

