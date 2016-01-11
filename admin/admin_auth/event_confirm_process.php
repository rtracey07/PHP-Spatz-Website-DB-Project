<?php

//Query all rentals that need confirmation.
$query = 'SELECT * FROM rental_need_confirm WHERE rental_date >="'.date("Y-m-d").'" ORDER BY rental_date ASC';
$result = $link->query($query);
$i=0;

//Loop through all rentals.
while ($row = $result->fetch_assoc()){

    //Check confirm button in POST.
    if(isset($_POST['confirm_'.$i])){
        //Set rental to confirmed.
        $query = 'UPDATE rental SET rental_confirm = 1 WHERE rental_id = '.$row['rental_id'];
        $link->query($query);
    }

    //Check delete button in POST.
    if(isset($_POST['delete_'.$i])){
        //Delete rental.
        $query = 'DELETE FROM renter WHERE renter_id = (SELECT renter_id FROM rental WHERE rental_id = '
            .$row['rental_id'].')';
        $link->query($query);
    }

    $i++;
}
?>
