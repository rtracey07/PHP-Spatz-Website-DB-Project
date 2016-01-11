<div class="panel panel-primary">
    <div class="panel-heading text-center">
        <h3><?php echo $_SESSION['user_data']['f_name'].' '.$_SESSION['user_data']['l_name']; ?></h3></div>
    <div class="panel-body text-left">

        <h3 class="text-left">Position</h3>
        <table class="table table-striped">
            <tbody>
            <?php
            echo '<tr><td>Job Title:</td><tr></tr>';
            echo '<tr></tr><td>'.$_SESSION['user_data']['job_title'].'</td></tr>';
            echo '<tr><td>Hourly Wage:</td><tr></tr>';
            echo '<tr></tr><td>$'.$_SESSION['user_data']['hourly_wage'].'</td></tr>';
            ?>
            </tbody>
        </table>

        <h3 class="text-left">Contact Info</h3>
        <table class="table table-striped">
            <tbody>
            <?php
            echo '<tr><td>Phone:</td><tr></tr>';
            echo '<tr></tr><td>'.$_SESSION['user_data']['phone'].'</td></tr>';
            echo '<tr><td>Email:</td><tr></tr>';
            echo '<tr></tr><td>'.$_SESSION['user_data']['email'].'</td></tr>';
            ?>
            </tbody>
        </table>
        <form action="login.php" method="post">
            <button type="submit" name="log_out" class="btn btn-primary">Log Out</button>
        </form>
    </div>
</div>
