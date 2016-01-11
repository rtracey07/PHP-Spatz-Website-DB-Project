<?php
if(isset($_POST['log_out']))
    $_SESSION['session_id'] = 'none';

if(isset($_POST['submit'])) {

    //If columns aren't empty.
    if(!empty($_POST['In_username']) && !empty($_POST['In_password'])){

        //Get username & password from entry.
        $user_name = $_POST['In_username'];
        $password = $_POST['In_password'];

        //Clean up Strings.
        $user_name = stripcslashes($user_name);
        $user_name = mysqli_real_escape_string($link, $user_name);
        $password = stripcslashes($password);
        $password = mysqli_real_escape_string($link, $password);

        //Encrypt entered password.
        $password = sha1($password);

        //Query list of employess for matching username and password.
        $query = 'SELECT * FROM employee WHERE u_name = "'.$user_name.'" AND password = "'.$password.'"';
        $result = mysqli_query($link, $query);
        $count = mysqli_num_rows($result);

        //If a match is found, Success.
        if($count==1){

            //Load in associated data to session.
            $rows = mysqli_fetch_assoc($result);
            $_SESSION['user_data']['u_name'] = $rows["u_name"];
            $_SESSION['user_data']['f_name'] = $rows["emp_fname"];
            $_SESSION['user_data']['l_name'] = $rows["emp_lname"];
            $_SESSION['user_data']['email'] = $rows["emp_email"];
            $_SESSION['user_data']['phone'] = $rows["emp_phone"];
            $_SESSION['user_data']['emp_id'] = $rows["emp_id"];

            //Assign session id based on administrative status. This'll make admin available to those with clearance.
            if($rows['is_admin'])
                $_SESSION['session_id'] = 'admin';
            else
                $_SESSION['session_id'] = 'employee';

            //Get info from corresponding job entry.
            $query = 'SELECT job_title, hourly_wage FROM job WHERE job_id = '.$rows["job_id"];
            $result = mysqli_query($link, $query);
            $rows = mysqli_fetch_assoc($result);

            //Load in associated job info to session.
            $_SESSION['user_data']['job_title'] = $rows['job_title'];
            $_SESSION['user_data']['hourly_wage'] = $rows['hourly_wage'];
        }
        else {
            $_SESSION['session_id'] = 'none';
        }
    }
}
?>