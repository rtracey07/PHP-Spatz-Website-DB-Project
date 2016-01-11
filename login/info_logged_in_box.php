<div class="panel panel-primary">
    <div class="panel-body">
        <?php

        //Get employee's schedule, starting at current date.
        $query = 'SELECT rental_name, rent_type_name, rental_date FROM all_shift_view WHERE emp_id = '
            .$_SESSION['user_data']['emp_id'].' AND rental_date >= "'.date('Y-m-d').'" ORDER BY rental_date ASC';
        $result = $link->query($query);
        ?>

        <h3 class="text-left">Upcoming Shifts</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Event Name</th>
                <th>Event Type</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($row = $result->fetch_assoc()){
                echo '<tr>';
                echo '<td>'.array_values($row)[0].'</td>';
                echo '<td>'.array_values($row)[1].'</td>';
                echo '<td>'.array_values($row)[2].'</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>