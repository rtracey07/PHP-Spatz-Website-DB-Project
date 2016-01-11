<?php

//Get All departments query.
$query = 'SELECT * FROM department';
$dept_result = $link->query($query);

$dept_count = 0;

//Loop through all departments.
while($dept_row=$dept_result->fetch_assoc()){

    //Get all employees from current department (using view).
    $query = 'SELECT * FROM employee_by_dept WHERE dept_id = '.$dept_row['dept_id'];
    $emp_result = $link->query($query);

    //Store Dept name, for tab in window.
    $_SESSION['dept'.$dept_count]['dept_name'] = $dept_row['dept_name'];

    $emp_count=0;

    //Loop through all departmental employees.
    while($emp_row=$emp_result->fetch_assoc()){

        //Store employee info.
        $_SESSION['dept'.$dept_count]['emp'.$emp_count]['fname'] = $emp_row['emp_fname'];
        $_SESSION['dept'.$dept_count]['emp'.$emp_count]['lname'] = $emp_row['emp_lname'];
        $_SESSION['dept'.$dept_count]['emp'.$emp_count]['job'] = $emp_row['job_title'];


        $_SESSION['dept'.$dept_count]['emp'.$emp_count]['wage'] = $emp_row['hourly_wage'];
        $_SESSION['dept'.$dept_count]['emp'.$emp_count]['phone'] = $emp_row['emp_phone'];
        $_SESSION['dept'.$dept_count]['emp'.$emp_count]['email'] = $emp_row['emp_email'];

        //Check for edit button pressed in POST.
        if(isset($_POST['edit_'.$dept_count.'_'.$emp_count])) {
            $_SESSION['edit_id'] = $emp_row['emp_id'];
            $_SESSION['session_id'] = 'admin_edit';
        }

        $emp_count++;
    }
    //Track # of entries per department for future loop.
    $_SESSION['dept'.$dept_count]['emp_count'] = $emp_count;
    $dept_count++;
}
?>