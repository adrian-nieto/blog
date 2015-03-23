<?php
    $con = mysqli_connect('localhost', 'root', '', 'blog');
    $sql = 'SELECT * FROM post ORDER BY ID desc';
    $results = mysqli_query($con, $sql);
   
    $outputArray = [];//make an output array
        
    $html = []; //make an variable to hold our html output, set it to a blank string

    while($post_row = mysqli_fetch_assoc($results)){

    $id = $post_row['ID'];
    $title = $post_row['title'];
    $userID = $post_row['userID'];
    $category = $post_row['category'];
    $timestamp = $post_row['timestamp'];
    $content = $post_row['content']; 

    $html[] = "<div id='container_div' data-user='$userID' data-id='$id'><p class='date'>$timestamp</p><h3 class='title'>$title</h3><p class='category'>$category</p><div class='content'>".nl2br($content)."</div></div><a href='?' data-id='$id' id='readMore'>Read more...</a><br>";
        
    }

    if(mysqli_num_rows($results) > 0){
        $outputArray['success'] = true; 
        $outputArray['html'] = $html;
    }
    else  
    {
        $outputArray['success'] = false;
        $outputArray['message'] = "There was nothing retrieved!";
        
    }
    echo (json_encode($outputArray)); //json encode the output array and echo it
?>  