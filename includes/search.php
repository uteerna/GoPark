<?php
if($_GET['start'] && $_GET['end']){
    include 'connect_sql.php';
    $return_arr = array();
    $start = $_GET['start'];
    $end = $_GET['end'];
    
    $sql = "SELECT park_id,COUNT(park_id) as count FROM booking WHERE (s_time >= $start AND e_time <= $end) OR (s_time <= $end AND e_time >= $end) OR (s_time <= $start AND e_time >= $start) group by park_id ";
    $result = mysqli_query($conn,$sql);
        
    $resultCheck = mysqli_affected_rows($conn);
    
    if($resultCheck<1){
        echo json_encode('fail');
    }else{
        while($row = mysqli_fetch_array($result)){
            $park_id = $row['park_id'];
            $count = $row['count'];
            $return_arr[] = array("park_id" => $park_id,
                            "count" => $count);
        }
        echo json_encode($return_arr);
    }
}