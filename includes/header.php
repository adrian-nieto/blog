<div class="col-md-12">
    <header>
        <h1>Welcome to Adrian's Blog!</h1>
        <ul class="col-md-12">
            <li class="col-md-2 col-md-offset-2"><a href="index.php">Home</a>
            </li>
            <?php
                if(isset($_SESSION['userinfo'])){
                    echo "<li class='col-md-2'><a href='logout.php'>Logout</a></li>";
                }
                else{
                    echo "<li class='col-md-2'><a href='login.php'>Login</a></li>";
                }
                ?>
            <li class="col-md-2"><a href="registration.php">Sign Up</a>
            </li>
            <li class="col-md-2"><a href="createpost.php">Post</a>
            </li>
        </ul>
    </header>
</div>