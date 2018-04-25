<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "gopark");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$park_id = mysqli_real_escape_string($link, $_REQUEST['park_id']);
//$park_address = mysqli_real_escape_string($link, $_REQUEST['park_address']);
//$park_total = mysqli_real_escape_string($link, $_REQUEST['park_total']);

// attempt insert query execution
$sql = "DELETE FROM parking where park_id = $park_id";
if(mysqli_query($link, $sql)){
    // echo "Records deleted successfully.";
    header("location: RecordDelete.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>