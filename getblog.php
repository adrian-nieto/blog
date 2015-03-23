<?php
if(isset($_POST['blogid'])){
    $blogID = $_POST['blogid'];
   echo ($blogID);
}
else{
    print "post not set";   
}
?>