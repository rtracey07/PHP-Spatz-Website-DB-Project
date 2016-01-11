<?php

//Return to Admin home screen.
if(isset($_POST['em_back_submit'])){
    $_SESSION['session_id'] = 'admin';
}

//Delete Employee and Return to Admin home screen.
elseif (isset($_POST['em_delete_submit'])){
    $query = 'DELETE FROM employee WHERE emp_id ='.$_SESSION['edit_id'];
    $link->query($query);
    $_SESSION['session_id'] = 'admin';
}

//Update Employee and REturn to Admin home screen.
elseif (isset($_POST['em_update_submit'])){
    $query = 'UPDATE employee SET job_id = '.$_POST['Edit_em_job'].', is_admin = '.$_POST['Edit_em_admin'].' WHERE emp_id ='.$_SESSION['edit_id'];
    $link->query($query);
    $_SESSION['session_id'] = 'admin';
}
?>