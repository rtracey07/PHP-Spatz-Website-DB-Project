<h3 class="text-left">Add Employee</h3>
<?php
if (!empty($add_errors)) {
    echo '<div class="alert alert-danger"><ul>';
    echo '<b> The Following Entries must be fixed:</b><br>';
    foreach ($add_errors as $error) {
        echo '<li>'.$error.'</li>';
    }
    echo '</ul></div>';
}
else if($_SESSION['is_emp_add_submit']) {
    echo '<div class="alert alert-success"><ul>';
    echo '<h4>New Employee Added!</h4><br>';
    echo '</div>';
}
?>
<form action="admin.php" method="post">
    <div class="row">
    <div class="col-md-5">
        <label>First Name</label><input type="text" class="form-control" name="add_emp_fname" id="add_emp_fname" placeholder="First Name" value="<?php echo $new_fname;?>">
    </div>
        <div class="col-md-1"></div>
    <div class="col-md-5">
        <label>Phone</label><input type="text" class="form-control" name="add_emp_phone" id="add_emp_phone" placeholder="###-###-####" value="<?php echo $new_phone;?>">
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col-md-5">
        <label>Last Name</label><input type="text" class="form-control" name="add_emp_lname" id="add_emp_lname" placeholder="Last Name" value="<?php echo $new_lname;?>">
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <label>Email</label><input type="email" class="form-control" name="add_emp_email" id="add_emp_email" placeholder="example@email.com" value="<?php echo $new_email;?>">
    </div>
    </div>
    <br><br>

    <div class="row">
        <div class = "col-md-5">
            <label>Position</label>
            <select class="form-control" name="add_emp_job" id="add_emp_job">
                <?php
                $query = 'SELECT job_title, job_id FROM job';
                $result_job = $link->query($query);

                while($job_row = $result_job->fetch_assoc()){
                    echo '<option value="'.$job_row['job_id'].'">'.$job_row['job_title'].'</option>';
                }
                ?>
            </select>
        </div>
    </div>

    <br><br>

    <div class="row">
        <div class="col-md-5">
            <label>Username</label><input type="text" class="form-control" name="add_emp_uname" id="add_emp_uname" placeholder="Username" value="<?php echo $new_uname;?>">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <label>Password</label><input type="password" class="form-control" name="add_emp_pass" id="add_emp_pass" placeholder="Password">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-5">
            <label>Make Admin</label>
            <select class="form-control" name="add_emp_admin" id="add_emp_admin">
                <option selected = "selected" value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <label>Confirm Password</label><input type="password" class="form-control" name="add_confirm_pass" id="add_cofirm_pass" placeholder="Confirm Password">
        </div>
    </div>
    <br>
    <div class="row">
        <div class = "col-md-2">
            <button type="submit" name="em_add_submit" id="em_add_submit" class="btn btn-primary">Add Employee</button>
        </div>
    </div>
</form>
