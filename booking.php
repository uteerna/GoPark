<?php

if($_GET['park_id'] ){
    include 'includes/connect_sql.php';
    $return_arr = array();
    $park_id = $_GET['park_id'];
    
    
    $sql = "SELECT * FROM parking WHERE park_id=$park_id";
    $result = mysqli_query($conn,$sql);
        
    $resultCheck = mysqli_affected_rows($conn);
    
    if($resultCheck<1){
        echo json_encode('fail');
    }else{
        while($row = mysqli_fetch_array($result)){
            $park_id = $row['park_id'];
            $park_name = $row['park_name'];
            $park_address = $row['park_address'];
            $return_arr[] = array("park_id" => $park_id,
                            "park_name" => $park_name,
                            "park_address"=>$park_address);
        }
        echo json_encode($return_arr);
    }
}

   
   

      