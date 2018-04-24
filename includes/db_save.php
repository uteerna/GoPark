<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gopark");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$park_name = mysqli_real_escape_string($link, $_REQUEST['park_name']);
$park_address = mysqli_real_escape_string($link, $_REQUEST['park_address']);
$park_total = mysqli_real_escape_string($link, $_REQUEST['park_total']);

// attempt insert query execution
$sql = "INSERT INTO parking (park_name, park_address, park_total) VALUES ('$park_name', '$park_address', '$park_total')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>