<?php
include 'connect_sql.php';

$sql = "SELECT * FROM parking" ;
$result = mysqli_query($conn,$sql);
$parkings = array();
$resultCheck = mysqli_affected_rows($conn);

class Parking{
    public $park_id;
    public $park_name;
    public $park_address;
    public $park_total;
    public $available;
}
while($row = mysqli_fetch_assoc($result)){
    $parking = new Parking();
    $parking->park_id = $row['park_id'];
    $parking->park_name = $row['park_name'];
    $parking->park_address = $row['park_address'];
    $parking->park_total = $row['park_total'];
    $parkings[]=$parking;
    
 }
 
?>

       