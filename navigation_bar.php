<nav class="navbar navbar-default">
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li><a href="http://localhost:8888/CS2141-Project/index.php">Home</a></li>
            <li><a href="http://localhost:8888/CS2141-Project/about/about.php">About</a></li>
            <li><a href="http://localhost:8888/CS2141-Project/rental/rental.php">Rental Form</a></li>
            <li><a href="http://localhost:8888/CS2141-Project/login/login.php">Employee Login</a></li>
            <?php
                if ($_SESSION['session_id'] == 'admin' || $_SESSION['session_id'] == 'admin_edit')
                    echo '<li><a href="http://localhost:8888/CS2141-Project/admin/admin.php">Admin</a></li>';
                else
                    echo '<li><a href="http://localhost:8888/CS2141-Project/admin/admin.php"'
                        .' class ="not-active">Admin</a></li>';
            ?>
        </ul>
    </div>
</nav>
