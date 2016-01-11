<?php
    require_once('../login/db_connect.php');
    require_once('rental_process.php');
    require_once('header.php');
?>
        <div class="page-header">
            <div class="jumbotron">
                <h1>SPATZ THEATRE</h1>
                <?php require_once('../navigation_bar.php'); ?>
            </div>
        </div>
        <div class="c1 container">
                    <?php require_once 'rental_box.php'; ?>
        </div>
    </body>
</html>

