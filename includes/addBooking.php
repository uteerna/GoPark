<?php
    session_start();
    include_once 'connect_sql.php';
    $cust_id = (int)$_SESSION['Cust_id'];
    $park_id = (int)$_POST['park_id'];
    $s_time = str_replace(':','',$_POST['s_time']);
    $e_time =str_replace(':','',$_POST['e_time']);
    $reg_no = mysqli_real_escape_string($conn,$_POST['reg_no']);
    $price = (int)$_POST['price'];
    if($s_time>2400)
    {
        $s_time = $s_time/100;
    }
    if($e_time>2400)
    {
        $e_time = $e_time/100;
    }
    $sql1 = "SELECT COUNT(reg_no) as count_reg FROM booking WHERE  ((s_time >= $s_time AND e_time <= $e_time) OR (s_time <= $e_time AND e_time >= $e_time) OR (s_time <= $s_time AND e_time >= $s_time)) AND reg_no='$reg_no'";
    $result1 = mysqli_query($conn,$sql1);


    $resultCheck = mysqli_affected_rows($conn);
    $row = mysqli_fetch_array($result1);
    $count = $row[0];

    if($count==0){
        $sql ="INSERT INTO booking (Cust_id , park_id, s_time,
        e_time, reg_no, price) VALUES ($cust_id,$park_id,$s_time,$e_time,'$reg_no',$price)";
        $result = mysqli_query($conn,$sql);

        $resultCheck = mysqli_num_rows($result);
        echo "<script>
        alert('Booking Confirmed');
        </script>"; 
        header("location: ../index.php?msg=Booking Confirmed");
        exit();
     }
     else{
       echo "<script>
       window.location.href=' ../index.php?error=parking record exists';
       alert('Parking record exists');
       </script>";
       exit();
     }
