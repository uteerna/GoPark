<?php

session_start();
if(isset($_POST['submit'])){

    include 'connect_sql.php';
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);

    //check if empty
    if(empty($email) || empty($pwd)){
        header("location: ../index.php?signup=empty");
        exit();
    }else{
        
        $sql = "SELECT * FROM customer WHERE email='$email'";
        $result = mysqli_query($conn,$sql);
        
        $resultCheck = mysqli_affected_rows($conn);
        
        if($resultCheck<1){
            header("location: ../index.php?signup=emailnotexist");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                //dehashing password
                $hashedPwdCheck = password_verify($pwd,$row['Pass']); 
                if($hashedPwdCheck == false){
                    header("location: ../index.php?signup=wrongpassword");
                    exit();
                }elseif($hashedPwdCheck == true){
                    //log in the user
                    $_SESSION['Cust_id'] = $row['Cust_id'];
                    $_SESSION['Cust_first'] = $row['FirstName'];
                    $_SESSION['Cust_last'] = $row['LastName'];
                    $_SESSION['Cust_email'] = $row['Email'];
                    $_SESSION['Cust_phone'] = $row['Phone'];
                    $_SESSION['Cust_pwd'] = $row['Pass'];
                    header("location: ../index.php");
                    exit();
                }
            }
        }
    }
}else{
    header("location: ../index.php?signup=error");
     exit();
}