<?php
if(isset($_POST['blogid'])){
    $blogID = $_POST['blogid'];
   var_dump ($blogID);
}
else{
    print "post not set";   
}
?>