<?php session_start(); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Adrian's Blog</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/style.css">
</head>
<body>
<?php include( 'includes/header.php'); ?>
<div class="content col-md-12">
<form class="form-horizontal col-md-6" action="uploadhandler.php" method="post">
    <div class="form-group">
        <label for="inputUsername" class="col-md-2 control-label">Username</label>
        <div class="col-md-10">
            <input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <button type="submit" class="btn btn-default">Update</button>
        </div>
    </div>
</form>
<form class="form-horizontal col-md-6" action="profilepage.php" method="post" enctype="multipart/form-data">
    Select image to upload as new profile image:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input class="btn btn-default" type="submit" value="Upload File" name="submit">
</form>
    
    
<?php
$con = mysqli_connect('localhost', 'root', '', 'blog'); 
$userID = $_SESSION['userinfo']['ID'];

if(isset($_FILES['fileToUpload'])){

//create a variable to serve as the base upload directory path.  make another to append 
$target_dir = "uploads/";
$filename = $_FILES['fileToUpload']['name'];
$target_file = $target_dir.$filename;
$sql = "UPDATE users SET image='
$target_file' WHERE ID='$userID';";
//make a flag for later use to tell if we have any errors, and cannot proceed (or have no errors and can proceed
$upload_ok = true;
$extension_array = ['jpg', 'jpeg', 'png', 'gif'];
//check for various error conditions, such as if we got data from the form, if the uploaded file already exists, and whether or not the file is too big to be uploaded.



    if($_FILES['fileToUpload']['error'] > 0){
        $upload_ok = false;
        echo "There was an error with your upload.";
    }
    if(file_exists($target_dir.$filename)){
        $upload_ok = false;
        echo "This filename already exists.";
    }
    if($_FILES['fileToUpload']['size'] > 5000000){
        $upload_ok = false;
        echo "File size is too big.";   
    }
    if(in_array($_FILES['fileToUpload']['type'], $extension_array)){
        $upload_ok = true;  
    }
    if($upload_ok){
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
            echo "The file ".$_FILES['fileToUpload']['name']." has been uploaded.<br><br><br><br>";   
            echo "<img src='$target_file'/>";    
        }
        if($result = mysqli_query($con, $sql)){
            if(mysqli_affected_rows($con) > 0){
            echo "File successfuly added to database";   
            }
        }
        
        else{
            echo "Sorry, there was an error uploading your file.";   
        }          
    }
}

?>
</div>    
<?php include( 'includes/footer.php'); ?>
</body>
</html>