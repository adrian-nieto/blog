<?php 
    //if post set then register user to blog db
    if(isset($_POST){
        $con = mysqli_connect('localhost', 'root', '', 'blog');
        //store and sanitize username
        $username = $_POST['username'];
        $username = htmlentities($username);
        $username = stripslashes($username);
        //store, sanitize and validate email
        $useremail = $_POST['useremail'];
        $useremail = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($useremail, FILTER_VALIDATE_EMAIL) === false) {
             echo("$useremail is a valid email address");
        } else {
             echo("$useremail is not a valid email address");
        }
        $password = sha1($_POST['password']);

        $sql = "INSERT INTO users (`userName`, `userEmail`, `password`) VALUES ($username, $useremail, $password";
        $results = mysqli_query($con, $sql);
        //if user was added successfully redirect to login page
        if(mysqli_affected_rows($results) > 0){
            header('Location: login.php');
        }
        else{
            //user was not added into db
            print "There was a problem with your registration!";
        }
    }

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Adrian's Blog</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
</head>

<body class="container">
    <?php include( 'includes/header.php'); ?>
    <h3>Sign up!</h3>
    <form class="form-horizontal col-md-6" action="registration.php" method="post">
        <div class="form-group">
            <label for="inputUsername" class="col-md-2 control-label">Username</label>
            <div class="col-md-10">
                <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-md-2 control-label">Email</label>
            <div class="col-md-10">
                <input type="email" name="useremail" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="col-md-2 control-label">Password</label>
            <div class="col-md-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn btn-default">Register</button>
            </div>
        </div>
    </form>
    <?php include( 'includes/footer.php'); ?>
</body>

</html>