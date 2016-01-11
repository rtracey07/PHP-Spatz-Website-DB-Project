<?php

//Zero out values.
$add_errors = array();
$new_fname = $new_lname = $new_phone = $new_email = $new_uname = $new_pass ='';

//If submit button is set in POST.
if(isset($_POST['em_add_submit'])){

    //Switch the tab focus to employee tab.
    $_SESSION['tab_status'] = 2;

    //Check New First Name.
    if(empty($_POST['add_emp_fname']))
        $add_errors['fname'] = 'First Name';
    else
        $new_fname = $_POST['add_emp_fname'];

    //Check New Last Name.
    if(empty($_POST['add_emp_lname']))
        $add_errors['lname'] = 'Last Name';
    else
        $new_lname = $_POST['add_emp_lname'];

    //Check New Phone #.
    if(empty($_POST['add_emp_phone']))
        $add_errors['phone'] = 'Phone Number';
    else
        $new_phone = $_POST['add_emp_phone'];

    //Check New Email.
    if(empty($_POST['add_emp_email']))
        $add_errors['email'] = 'Email';
    else
        $new_email = $_POST['add_emp_email'];

    //Add job and admin status (these have default values, no need to check empty).
    $new_job = $_POST['add_emp_job'];
    $new_admin = $_POST['add_emp_admin'];

    //Check New Username.
    if(empty($_POST['add_emp_uname']))
        $add_errors['uname'] = 'Username';
    else
        $new_uname = $_POST['add_emp_uname'];

    //Check New Password and Password Confirmation.
    if(empty($_POST['add_emp_pass']) || empty($_POST['add_confirm_pass']))
        $add_errors['pass'] = 'Password';
    else if ($_POST['add_emp_pass'] != $_POST['add_confirm_pass'])
        $add_errors['pass'] = 'Password Confirm Does Not Match';
    else
        $new_pass = sha1($_POST['add_emp_pass']);

    //If No Errors above.
    if(empty($add_errors)){

        //Insert Query.
        $query = 'INSERT INTO employee VALUES( "'.$new_fname.'", "'.$new_lname.'", "'
            .$new_uname.'", "'.$new_pass.'", "'.$new_phone.'", "'
            .$new_email.'", '.$new_job.', NULL, '.$new_admin.')';
        $link->query($query);

        //Check for Successful submit.
        if($link->errno == 0)
            $_SESSION['is_emp_add_submit'] = true;

        //Username duplicate.
        else if($link->errno == 1062)
            $add_errors['duplicate'] = 'Username unavailable';

    }
    else
        $_SESSION['is_emp_add_submit'] = false;

}
else
    $_SESSION['is_emp_add_submit'] = false;

?>