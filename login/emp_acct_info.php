<div class="panel panel-primary">
    <div class="panel-body text-left">
        <h3>Update Account Info</h3>

        <?php
        //Display Error Messages Here.
        if (!empty($em_errors)) {
            echo '<div class="alert alert-danger"><ul>';
            foreach ($em_errors as $error) {
                echo '<li>'.$error.'</li>';
            }
            echo '</ul></div>';
        }
        ?>

        <form action="login.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" name="Input_em_uname" id="Input_em_uname" placeholder="<?php echo $_SESSION['user_data']['u_name'];?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="Input_em_new_pass" id="Input_em_new_pass" placeholder="New Password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone #</label>
                        <input type="text" class="form-control" name="Input_em_phone" id="Input_em_phone" placeholder="<?php echo $_SESSION['user_data']['phone'];?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="Input_em_email" id="Input_em_email" placeholder="<?php echo $_SESSION['user_data']['email'];?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Enter Current Password to Confirm</label>
                <input type="password" class="form-control" name="Input_em_old_pass" id="Input_em_old_pass" placeholder="Current Password">
            </div>
            <button class="btn btn-primary" type="submit" name="Update_em_submit">Confirm</button>
        </form>
    </div>
</div>