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
    <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#detail_textarea'
        });
    </script>
    <form class="form-horizontal col-md-6">
        <div class="form-group">
            <label for="blogTitle" class="col-md-2 control-label">Title</label>
            <div class="col-md-10">
                <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Title">
            </div>
        </div>
        <div class="form-group">
            <label for="blogCategory" class="col-md-2 control-label">Category</label>
            <div class="col-md-10">
                <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Category">
            </div>
        </div>
    </form>
    <form class="form-horizontal col-md-10 col-md-offset-1" id="textareaform">
        <textarea class="form-control" rows="8" name="editor" id='detail_textarea'>

        </textarea>
        <button type="button" value="submit" class="btn btn-default" id="form_submit_button">Submit</button>
    </form>
    <?php include( 'includes/footer.php'); ?>
</body>

</html>