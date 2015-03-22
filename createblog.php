<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'blog');
   
$errorArray = []; //create an array for error messages
$outputArray = []; //create an array for output

if(isset($_POST)){
    $timestamp = time();
    if($_POST['title'] == ''){
        $errorArray['title'] = "There is no title!";
    }
    if($_POST['category'] == ''){
        $errorArray['date'] = "There is no category!";
    }
    if($_POST['content'] == ''){
        $errorArray['content'] = "There is no content!";
    }

    if(empty($errorArray)){
        
        $query = ' INSERT INTO post (`title`, `category`, `content`, `userID`) VALUES (';
        $query .= '"'.$_POST['title'].'",';
        $query .= '"'.$_POST['category'].'",';
        $query .= '"'.$_POST['content'].'",';
        $query .='"'.$_SESSION['userinfo']['ID'].'");';
        $result = mysqli_query($con, $query);
    
       
        if(!$result){
            $errorArray[] = mysqli_error($con);
            $errorArray[] = "There was an error adding to database";
        } 
    }

    if(count($errorArray) == 0){
            mysqli_close($con);
            header('Location: index.php');
            $outputArray['success'] = true;
            $outputArray['message'] = "Files uploaded successfuly!";
        } else{
        $outputArray['success'] = false;
        $outputArray['message'] = "There were errors!";
        $outputArray['errors'] = $errorArray; 
    }
}

else{
    $outputArray['success'] = false; 
    $outputArray['message'] = "Post was not set!"; 
}
    echo (json_encode($outputArray));
?>