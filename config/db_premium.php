<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "once_in");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$gown = mysqli_real_escape_string($link, $_REQUEST['gown']);
$suit = mysqli_real_escape_string($link, $_REQUEST['suit']);
$room = mysqli_real_escape_string($link, $_REQUEST['room']);
$floral = mysqli_real_escape_string($link, $_REQUEST['floral']); 
$guest = mysqli_real_escape_string($link, $_REQUEST['guest']); 
$music = mysqli_real_escape_string($link, $_REQUEST['music']); 
$date1 = strtr($_REQUEST['date'], '/', '-');
$date2 = date('Y-m-d', strtotime($date1));
$name = mysqli_real_escape_string($link, $_REQUEST['name']); 
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']); 



// Attempt insert query execution
$sql = "INSERT INTO premium (gown, suit, room, floral, guest, music, date,name,phone) VALUES ('$gown', '$suit', '$room','$floral', $guest, '$music', '$date2','$name','$phone')";
if(mysqli_query($link, $sql)){
	echo "successful";
    header('Location: ../index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>