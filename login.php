<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Adrian's Blog | Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
</head>

<body>
    <?php include( 'includes/header.php'); ?>
    <div class="container">
        <form class="form-horizontal col-md-6" action="loginpage.php" method="post">
            <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                    <input type="email" name="useremail" class="form-control" id="inputEmail" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-md-2 control-label">Password</label>
                <div class="col-md-10">
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                </div>
            </div>
        </form>
    </div>
    <?php include( 'includes/footer.php'); ?>
</body>

</html>