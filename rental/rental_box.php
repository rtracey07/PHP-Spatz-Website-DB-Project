<div class="panel panel-primary">
    <div class="panel-heading text-left"><h3>Rental Form</h3></div>
    <div class="panel panel-body">

        <h3>Thank You For Choosing The Spatz</h3>
        <p>
            The Spatz Theatre is a multi-functional, 780-seat performance space designed to provide exceptional
            theatrical and musical experiences for Citadel High Students and the greater Halifax community. It
            also provides a valuable space for public lectures, theatre and musical productions.
        </p>
        <p>
            Below you'll find all the information needed to get your rental started. Complete this form and hit the
            submit button at the end of the page. Please note: this form is not a rental contract. After we receive
            this form we will contact you to finalize your rental.
        </p>
        <?php
        if (!empty($errors)) {
            echo '<div class="alert alert-danger"><ul>';
            echo '<b> The Following Entries must be filled:</b><br>';
            foreach ($errors as $error) {
                echo '<li>'.$error.'</li>';
            }
            echo '</ul></div>';
        }
        else if($_SESSION['is_rental_submit']) {
            echo '<div class="alert alert-success"><ul>';
            echo '<h4>Rental Request Submitted!</h4><br>';
            echo '<p>We will email you once the request has been processed.</p>';
            echo '</div>';
        }
        ?>
        <?php require_once('rental_form.php'); ?>
    </div>
</div>