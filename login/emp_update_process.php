<?php

//Remove unwanted characters from String.
function clean($string){
    $string = htmlentities($string);
    $string = htmlspecialchars($string);
    return $string;
}

$em_errors = array();

//Submit Pressed.
if (isset($_POST['Update_em_submit'])) {

    if(!empty($_POST['Input_em_old_pass'])) {

        $old_pass = $_POST['Input_em_old_pass'];
        $old_pass = sha1($old_pass);

        //Get Data Matching Username and Password Entry.
        $query = 'SELECT * FROM employee WHERE emp_id = '
            .$_SESSION['user_data']['emp_id'].' AND password = "'.$old_pass.'"';
        $result = $link->query($query);
        $rows = mysqli_num_rows($result);

        //If query returned 1 result, then username and password was a match.
        if($rows == 1) {

            //Check New User Name.
            if (!empty($_POST['Input_em_uname'])) {
                $query = 'UPDATE employee SET u_name ="'
                    .$_POST['Input_em_uname'].'" WHERE emp_id ='.$_SESSION['user_data']['emp_id'];
                $link->query($query);
                if ($link->errno != 0)
                    $em_errors['uname_fail'] = 'Failed to update Username.';
                else
                    $_SESSION['user_data']['u_name'] = $_POST['Input_em_uname'];
            }

            //Check New Password.
            if (!empty($_POST['Input_em_new_pass'])) {
                $new_pass = $_POST['Input_em_new_pass'];
                $new_pass = sha1($new_pass);
                $query = 'UPDATE employee SET password ="'
                    .$new_pass.'" WHERE emp_id ='.$_SESSION['user_data']['emp_id'];
                $link->query($query);
                if ($link->errno != 0)
                    $em_errors['pass_fail'] = 'Failed to update Password.';
            }

            //Check New Phone #
            if (!empty($_POST['Input_em_phone'])) {
                $query = 'UPDATE employee SET emp_phone ="'
                    .$_POST['Input_em_phone'].'" WHERE emp_id ='.$_SESSION['user_data']['emp_id'];
                $link->query($query);
                if ($link->errno != 0)
                    $em_errors['phone_fail'] = 'Failed to update Phone #.';
                else
                    $_SESSION['user_data']['phone'] = $_POST['Input_em_phone'];
            }

            //Check New Email
            if (!empty($_POST['Input_em_email'])) {
                $query = 'UPDATE employee SET emp_email ="'
                    .$_POST['Input_em_email'].'" WHERE emp_id ='.$_SESSION['user_data']['emp_id'];
                $link->query($query);
                if ($link->errno != 0)
                    $em_errors['email_fail'] = 'Failed to update Email.';
                else
                    $_SESSION['user_data']['email'] = $_POST['Input_em_email'];
            }

        }else
            $em_errors['old_pass_error'] = 'Current Password is Incorrect.';
    } else
        $em_errors['old_pass_error'] = 'Enter Current Password to Update.';
}
?>
