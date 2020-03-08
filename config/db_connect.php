<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "once_in");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$telephone = mysqli_real_escape_string($link, $_REQUEST['Telephone']);
$message = mysqli_real_escape_string($link, $_REQUEST['Message']); 

// Attempt insert query execution
$sql = "INSERT INTO message (name, email, telephone,message) VALUES ('$name', '$email', '$telephone','$message')";
if(mysqli_query($link, $sql)){
    header('Location: ../index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>