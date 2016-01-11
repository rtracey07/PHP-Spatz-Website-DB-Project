<form action="admin.php" method="post">
<h3 class="text-left">Departments</h3>
<ul class="nav nav-tabs">
<?php
    $i = 0;

    while($i < $dept_count) {
        if ($i == 0)
            echo '<li class="active">';
        else
            echo '<li>';

        echo '<a data-toggle="tab" href="#dept_table'.$i.'">'.$_SESSION['dept'.$i]['dept_name'].'</a></li>';
        $i++;
    }
?>
</ul>
<div class="tab-content">
    <?php
    $i = 0;
    while ($i <$dept_count){

        if ($i == 0)
            echo '<div id="dept_table'.$i.'" class="tab-pane active fade in">';
        else
            echo '<div id="dept_table'.$i.'" class="tab-pane fade">';

        echo '<table class="table table-striped">';
        echo '<thead><tr><th>First Name</th><th>Last Name</th><th>Position</th><th>Wage</th><th>Phone</th><th>Email</th><th>Edit</th></tr></thead>';
        echo '<tbody>';

        $j=0;
        while ($j < $_SESSION['dept'.$i]['emp_count']){
            echo '<tr>';
            echo '<td>'.$_SESSION['dept'.$i]['emp'.$j]['fname'].'</td>';
            echo '<td>'.$_SESSION['dept'.$i]['emp'.$j]['lname'].'</td>';
            echo '<td>'.$_SESSION['dept'.$i]['emp'.$j]['job'].'</td>';
            echo '<td>$'.$_SESSION['dept'.$i]['emp'.$j]['wage'].''.$_SESSION['dept'.$i]['emp'.$j]['phone'].'</td>';
            echo '<td>'.$_SESSION['dept'.$i]['emp'.$j]['phone'].'</td>';
            echo '<td>'.$_SESSION['dept'.$i]['emp'.$j]['email'].'</td>';
            echo '<td><button type="submit" name="edit_'.$i.'_'.$j.'" class="btn btn-primary">Edit</button></td>';
            echo '</tr>';

            $j++;
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        $i++;
    }
    ?>
</div>
</form>
