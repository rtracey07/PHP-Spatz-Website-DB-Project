<?php
$query = 'SELECT * FROM rental_confirmed WHERE rental_date >="'.date("Y-m-d").'" ORDER BY rental_date ASC';
$result = $link->query($query);
?>

<h3 class="text-left">Confirmed Events</h3>
<form action="admin.php" method="post">
<table class="table table-striped">
    <thead>
    <tr>
        <th>Event</th>
        <th>Type</th>
        <th>Date</th>
        <th>Length</th>
        <th>Group</th>
        <th>Contact</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Remove</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $count = 0;
    while($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<td>'.array_values($row)[0].'</td>';
        echo '<td>'.array_values($row)[1].'</td>';
        echo '<td>'.array_values($row)[2].'</td>';
        echo '<td class="text-right">'.array_values($row)[3].'</td>';
        echo '<td>'.array_values($row)[4].'</td>';
        echo '<td>'.array_values($row)[5].'</td>';
        echo '<td>'.array_values($row)[6].'</td>';
        echo '<td>'.array_values($row)[7].'</td>';
        echo '<td><button type="submit" name="remove_confirm_'.$count.'" class="btn btn-primary">Remove</button></td>';
        echo '</tr>';
        $count++;
    }
    ?>
    </tbody>
</table>
</form>
