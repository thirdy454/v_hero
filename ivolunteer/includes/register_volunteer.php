<?php
if(isset($_POST["Signup_volunteer"])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $email = $_POST['email'];
	$password = $_POST['password'];

    require_once '../db_conn/db_con.php';
    
    $hashedpwd9x3 = password_hash($password, PASSWORD_DEFAULT);

    $sql9x3 = "INSERT INTO users (name,address,age,email_adress,password) VALUES ('$name','$address','$age', '$email', '$hashedpwd9x3')";
    
    $stmt9x3 = mysqli_stmt_init($connection_xy2);
      
      //to enter the data from data base
       if(!mysqli_stmt_prepare($stmt9x3, $sql9x3)){
       header("location: ../home.php?error=stmtfailed");
       exit();
       }
           mysqli_stmt_execute($stmt9x3);
           mysqli_stmt_close($stmt9x3);
           header("location: ../login.php?error=noneerrorsuccessfuysignup");
           exit();
      
  
      }
      else{
          header("Location: ../signup.php");
          exit();
      }     
      
  