<?php session_start() ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Adrian's Blog</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="stylesheets/style.css">
</head>

<body>
    <div class="container">
        <?php include('includes/header.php'); ?>
        <div class="blogpost">

        </div>
        <?php include('includes/aside.php'); ?>
        <?php include('includes/footer.php'); ?>
    </div>
</body>

</html>