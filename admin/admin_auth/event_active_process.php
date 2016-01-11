<?php

$query = 'SELECT * FROM rental_confirmed WHERE rental_date >="'.date("Y-m-d").'" ORDER BY rental_date ASC';
$result = $link->query($query);
$i=0;
while ($row = $result->fetch_assoc()){
    if(isset($_POST['remove_confirm_'.$i])){
        $query = 'UPDATE rental SET rental_confirm = 0 WHERE rental_id = '.$row['rental_id'];
        $link->query($query);
        $_SESSION['tab_status'] = 1;
    }
    $i++;
}
?>
