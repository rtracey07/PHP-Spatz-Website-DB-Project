<div class="panel panel-primary">

    <?php
    $query = 'SELECT * FROM employee WHERE emp_id ='.$_SESSION['edit_id'];
    $result = $link->query($query);
    $edit_row = $result->fetch_assoc();
    ?>

    <div class="panel-heading"><h3>Edit <?php echo $edit_row['emp_fname'];?> <?php echo $edit_row['emp_lname'];?></h3></div>
    <div class="panel-body">
        <form action="admin.php" method="post">
            <div class="row">
                <div class = "col-md-3">
                    <label>Select Job</label>
                    <select class="form-control" name="Edit_em_job" id="Edit_em_job">
                        <?php
                        $query = 'SELECT job_title, job_id FROM job';
                        $result_job = $link->query($query);

                        while($job_row = $result_job->fetch_assoc()){
                            if($edit_row['job_id'] == $job_row['job_id'])
                                echo '<option selected="selected" value="'.$job_row['job_id'].'">'.$job_row['job_title'].'</option>';
                            else
                                echo '<option value="'.$job_row['job_id'].'">'.$job_row['job_title'].'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class = "col-md-3">
                    <label>Make Admin</label>
                    <select class="form-control" name="Edit_em_admin" id="Edit_em_admin">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                </div>
                <div class = "col-md-2">
                    <br>
                    <button type="submit" name="em_update_submit" class="btn btn-primary btn-success">Update Employee</button>
                </div>
                <div class = "col-md-2">
                    <br>
                    <button type="submit" name="em_delete_submit" class="btn btn-primary btn-danger">Delete Employee</button>
                </div>
                <div class = "col-md-2">
                    <br>
                    <button type="submit" name="em_back_submit" class="btn btn-primary ">Return to Menu</button>
                </div>
            </div>
        </form>
    </div>
</div>
