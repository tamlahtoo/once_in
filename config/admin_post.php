<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "once_in");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$tag = mysqli_real_escape_string($link, $_REQUEST['tag']);
$text = mysqli_real_escape_string($link, $_REQUEST['text']);
// Attempt insert query execution
$sql = "INSERT INTO posts (tag,text) VALUES ('$tag', '$text')";
if(mysqli_query($link, $sql)){
    header('Location: ../adminblog.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>