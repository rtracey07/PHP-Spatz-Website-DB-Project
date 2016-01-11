<div class="panel panel-primary">
    <div class="panel-body">

        <ul class="nav nav-tabs" id="myTab">
            <?php
            echo '<li '.($_SESSION['tab_status'] == 0 ? "class=\"active\"" : "").'><a data-toggle="tab" href="#confirm">Confirm Events</a></li>';
            echo '<li '.($_SESSION['tab_status'] == 1 ? "class=\"active\"" : "").'><a data-toggle="tab" href="#active">Active Events</a></li>';
            echo '<li><a data-toggle="tab" href="#past">Past Events</a></li>';
            echo '<li><a data-toggle="tab" href="#dept">Departments</a></li>';
            echo '<li '.($_SESSION['tab_status'] == 2 ? "class=\"active\"" : "").'><a data-toggle="tab" href="#emp">Add Employee</a></li>';
            ?>
        </ul>

        <div class="tab-content">
            <?php

            echo '<div id="confirm" class="tab-pane fade '.($_SESSION['tab_status'] == 0 ? "in active" : "").'">';
                require_once("admin_tabs/event_confirm.php");
            echo '</div>';
            echo'<div id="active" class="tab-pane fade '.($_SESSION['tab_status'] == 1 ? "in active" : "").'">';
                require_once("admin_tabs/event_active.php");
            echo '</div>';
            echo '<div id="past" class="tab-pane fade ">';
                require_once("admin_tabs/event_past.php");
            echo'</div>';
            echo'<div id="dept" class="tab-pane fade">';
                require_once("admin_tabs/dept_list.php");
            echo '</div>';
            echo '<div id="emp" class="tab-pane fade '.($_SESSION['tab_status'] == 2 ? "in active" : "").'">';
                require_once("admin_tabs/emp_add.php");
            echo'</div>';

            $_SESSION['tab_status'] = 0;
            ?>
        </div>

    </div>
</div>