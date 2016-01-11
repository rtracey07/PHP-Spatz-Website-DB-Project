<?php

//Remove unwanted characters from String.
function clean($string){
    $string = htmlentities($string);
    $string = htmlspecialchars($string);
    return $string;
}

//Set default values to clear.
$r_fname = $r_lname = $r_group = $r_phone = $r_email = '';
$e_name = '';
$e_type = $e_duration = $e_date = 0;
$errors = array();

    //Submit Pressed.
    if (isset($_POST['r_submit'])) {

        //Check Renter First Name.
        if (empty($_POST['Input_r_fname']))
            $errors['Input_r_fname'] = 'First Name';
        else
            $r_fname = clean($_POST['Input_r_fname']);

        //Check Renter Last Name.
        if (empty($_POST['Input_r_lname']))
            $errors['Input_r_lname'] = 'Last Name';
        else
            $r_lname = clean($_POST['Input_r_lname']);


        //Check Renter Group.
        if (empty($_POST['Input_r_gname']))
            $errors['Input_r_gname'] = 'Group Name';
        else
            $r_group = clean($_POST['Input_r_gname']);

        //Check Renter Phone #.
        if (empty($_POST['Input_r_phone']))
            $errors['Input_r_phone'] = 'Phone #';
        else
            $r_phone = clean($_POST['Input_r_phone']);

        //Check Renter Email.
        if (empty($_POST['Input_r_email']))
            $errors['Input_r_email'] = 'Email';
        else
            $r_email = clean($_POST['Input_r_email']);

        //Check Event Name.
        if (empty($_POST['Input_e_name']))
            $errors['Input_e_name'] = 'Event Name';
        else
            $e_name = clean($_POST['Input_e_name']);

        //Check Event Type.
        $e_type = $_POST['Input_e_type'];

        //Check Evnet Date.
        if(empty($_POST['Input_e_date']))
            $errors['Input_e_date'] = 'Event Date';
        else
            $e_date = $_POST['Input_e_date'];

        //Check Event Duration.
        if (empty($_POST['Input_e_duration']))
            $errors['Input_e_duration'] = 'Event Duration';
        else
            $e_duration = clean($_POST['Input_e_duration']);

        //If No Errors in checks.
        if(empty($errors)){

            //Begin Transaction.
            $link->query("START TRANSACTION");

            //Create new Renter query.
            $query = 'INSERT INTO renter VALUES ( "'.$r_fname.'", "'.$r_lname.'", "'.$r_group.'", "'.$r_phone.'", "'.$r_email.'", NULL)';
            $q1 = $link->query($query);

            //Create new Rental query.
            $query = 'INSERT INTO rental VALUES ( "'.$e_date.'", "'.$e_name.'", '.$e_duration.', (SELECT max(renter_id) FROM renter),'.$e_type.', 0, NULL)';
            $q2 = $link->query($query);

            //Duplicate Event.
            if($link->errno == 1452)
                $errors['failed_to_add'] = 'A rental request for your event already exists in the system.';
            //Duplicate Date.
            if($link->errno == 1062)
                $errors['failed_to_add'] = 'The date "'.$e_date.'" is unavailable';

            //If Both are Successful then commit.
            if($q1 && $q2){
                $link->query("COMMIT WORK");
                $_SESSION['is_rental_submit'] = true;
            }

            //Else, rollback on work and display error.
            else {
                $link->query("ROLLBACK");
                $_SESSION['is_rental_submit'] = false;
                if(empty($errors))
                    $errors['failed_to_add'] = 'The Form failed to submit. Please try again.';
            }
        }
    }
    else
        $_SESSION['is_rental_submit'] = false;
?>
