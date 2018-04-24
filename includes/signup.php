<?php
#check if the button has been clicked
if(isset($_POST['submit'])){
 
    include_once 'connect_sql.php';
    $first = mysqli_real_escape_string($conn,$_POST['firstName']);
    $last = mysqli_real_escape_string($conn,$_POST['lastName']);
    $email = mysqli_real_escape_string($conn,$_POST['regEmail']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']); 

    //error handles
    //check for empy field
    if(empty($first) || empty($last) || empty($email) || empty($phone) || empty($pwd)){
        header("location: ../index.php?signup=empty");
        exit();
    }else{
        //check if input value are valid
        if(!preg_match("/^[a-zA-z]*$/",$first ) || !preg_match("/^[a-zA-z]*$/",$last )){
            header("location: ../index.php?signup=invalid");
            exit(); 
        }
        else{
            //check if email id valid
            if(false){
                header("location: ../index.php?signup=invalidEmail");
                exit(); 
            }else{
                $sql = "SELECT * FROM customer WHERE email='$email'";
                $result = mysqli_query($conn,$sql);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck >0){
                    header("location: ../index.php?signup=emailExist");
                    exit(); 
                }else{
                    //secure password before saving by hashing
                    $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
                    //Insert the user into the database
                    $sql ="INSERT INTO customer (FirstName , LastName, Email,
                             Phone, Pass) VALUES ('$first','$last','$email','$phone','$hashedPwd')";
                    $result = mysqli_query($conn,$sql);
                    $resultCheck = mysqli_num_rows($result);
                    if($resultCheck != 1)
                    {
                      header("location: ../index.php?signup=dbfail");
                      exit();
                    }else{
                      header("location: ../index.php?signup=success");
                      exit();
                    }
                }
            }
        }
    }
}else{
    #if user directly enter th php take them back to index
    header("location: ../index.php");
    exit();
}