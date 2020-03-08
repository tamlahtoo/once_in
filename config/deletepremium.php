<?php

include 'database.php';
$cheks = implode("','", $_POST['checkbox']);
$sql = "delete from premium where id in ('$cheks')";
$result = mysqli_query($link,$sql) or die(mysql_error());
if($result){
	header('Location: ../adminhome.php');
}


?>