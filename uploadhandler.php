<?php 
    session_start();
    $errorArray = [];
    //if post set then register user to blog db
    if(isset($_POST)){
        $con = mysqli_connect('localhost', 'root', '', 'blog');
        
        if($_POST['username'] == ''){
            $errorArray['username'] = "There is no username";
        } else {
            //store and sanitize username
            $username = $_POST['username'];
            $username = htmlentities($username);
            $username = stripslashes($username);
            $ID = $_SESSION['userinfo']['ID'];
        }
            $sql = "UPDATE users SET userName='$username' WHERE ID=$ID;";
        
        
        $results = mysqli_query($con, $sql);
        //if user was added successfully redirect to login page
        if(mysqli_affected_rows($con) > 0){
            header("Location: profilepage.php");
        }
        else{
            //user was not added into db
            print " There was a problem with the registration! ";
            $errorArray[] = mysqli_error($con);
            echo json_encode($errorArray);
        }
    }
?>