<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "once_in");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$package = mysqli_real_escape_string($link, $_REQUEST['package']);
$text = mysqli_real_escape_string($link, $_REQUEST['text']);
$image_link = mysqli_real_escape_string($link, $_REQUEST['image_link']);
// Attempt insert query execution
$sql = "INSERT INTO music (package,text,image_link) VALUES ('$package', '$text','$image_link')";
if(mysqli_query($link, $sql)){
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>