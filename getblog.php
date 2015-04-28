<?php

    $con = mysqli_connect('localhost', 'root', '', 'blog');
    $blogID = $_POST['blogid'];
    $sql = "SELECT * FROM post WHERE ID=$blogID";
    $results = mysqli_query($con, $sql);
   
    $outputArray = [];
        
    $html = []; 
    
    while($post_row = mysqli_fetch_assoc($results)){

    $id = $post_row['ID'];
    $title = $post_row['title'];
    $userID = $post_row['userID'];
    $category = $post_row['category'];
    $timestamp = date("F d Y", $post_row['timestamp']);
    $content = $post_row['content']; 

    $html[] = "<div id='container_div' data-user='$userID' data-id='$id'><p class='date'>$timestamp</p><h3 class='title'>$title</h3><p class='category'>$category</p><div class='content'>".nl2br($content)."</div></div><br>";
        
    }   
    
    if(mysqli_num_rows($results) > 0){
    $outputArray['success'] = true; 
    $outputArray['html'] = $html;
    }
    else  {
        $outputArray['success'] = false;
        $outputArray['message'] = "There was nothing retrieved!";
    }
    
    echo (json_encode($outputArray));



?>