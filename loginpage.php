<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', '', 'blog');
        //error check email
        if($_POST['useremail'] == ''){
            $errorArray['useremail'] = "There is no email";
        } else {
            //store, sanitize and validate email
            $useremail = $_POST['useremail'];
            $useremail = filter_var($useremail, FILTER_SANITIZE_EMAIL);
        }
        //error check password
        if($_POST['password'] == ''){
         $errorArray['password'] = "There is no password";   
        } else{
            $password = sha1($_POST['password']);
        }
        //query database for userEmail and password
        $sql = "SELECT * FROM users WHERE userEmail='$useremail' AND password='$password'";
        $results = mysqli_query($con, $sql);

        if(mysqli_num_rows($results) > 0){
            $userinfo = mysqli_fetch_assoc($results);
            $_SESSION['userinfo'] = $userinfo;
            header('Location: index.php');
        }
        else{
            //user was not found in database
            $errorArray['loginError'] = "Username/Password is incorrect";
            echo json_encode($errorArray);
            header('Location: login.php');
        }

?>