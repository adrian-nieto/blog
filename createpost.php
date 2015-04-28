<?php session_start() ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Adrian's Blog | Post</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="stylesheets/style.css">
    <script src="js/main.js"></script>
</head>

<body>
    <?php include( 'includes/header.php'); ?>
    <div class="container">
        <form  action="createblog.php" method="post" class="form-horizontal col-md-6">
            <div class="form-group">
                <label for="blogTitle" class="col-md-2 control-label">Title</label>
                <div class="col-md-10">
                    <input type="text" name="title" class="form-control" id="inputUsername" placeholder="Title">
                </div>
            </div>
            <div class="form-group">
                <label for="blogCategory" class="col-md-2 control-label">Category</label>
                <div class="col-md-10">
                    <input type="text" name="category" class="form-control" id="inputUsername" placeholder="Category">
                </div>
            </div>
            <div class="form-group" id="textareaform">
                <label for="blogContent" class="col-md-2 control-label">Content</label>
                <div class="col-md-10">
                    <textarea class="form-control" rows="8" name="content"></textarea>
                </div>
            </div>
            <button type="submit" name="submitbutton" value="submit" class="btn btn-default" id="form_submit_button">Submit</button>
        </form>
    </div>
    <?php include( 'includes/footer.php'); ?>
</body>

</html>