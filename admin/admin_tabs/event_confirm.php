<?php
$query = 'SELECT * FROM rental_need_confirm WHERE rental_date >="'.date("Y-m-d").'"';
$result = $link->query($query);
?>

<h3 class="text-left">Need Confirmation</h3>
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
        <th>Confirm</th>
        <th>Delete</th>
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
        echo '<td><button type="submit" name="confirm_'.$count.'" class="btn btn-primary">Confirm</button></td>';
        echo '<td><button type="submit" name="delete_'.$count.'" class="btn btn-primary">Delete</button></td>';
        echo '</tr>';
        $count++;
    }
    ?>
    </tbody>
</table>
</form>
