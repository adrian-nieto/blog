<?php
$con = mysqli_connect('localhost', 'root', '', 'blog');

$id = addslashes($_REQUEST['id']);
echo $id;

$image = mysqli_query($con, "SELECT * FROM images WHERE `ID`=$id;");
$image = mysqli_fetch_assoc($image);
echo $image;
$image = $image['image'];

header('Content-Type: image/png');

echo $image;
?>