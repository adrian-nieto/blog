<div class="col-md-12">
    <header>
        <h1>Welcome to Adrian's Blog!</h1>
        <ul>
            <li><a href="index.php">Home</a>
            </li>
            <?php
                if(isset($_SESSION['userinfo'])){
                    echo "<li><a href='logout.php'>Logout</a></li>";
                }
                else{
                    echo "<li><a href='login.php'>Login</a></li>";
                }
                ?>
            <li><a href="registration.php">Sign Up</a>
            </li>
            <li><a href="createpost.php">Post</a>
            </li>
        </ul>
    </header>
</div>