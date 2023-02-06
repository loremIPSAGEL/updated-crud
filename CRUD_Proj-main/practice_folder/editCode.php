<?php
session_start();
require 'mainConnect.php';

if(isset($_POST['delete'])){
   $employee_id  = mysqli_real_escape_string($con, $_POST['delete']);
   $query = "DELETE FROM employee_id WHERE employee_id= '$employee_id' ";
   $query_run = mysqli_query($conn,$query);
   if($query_run){
      $_SESSION['message'] = "deleted  Successfully";
      header("Location: dashboard.php");
      exit(0);
   }
   else{
      $_SESSION['message'] = "Applicant Not EDITED ";
      header("Location: dashboard.php");
      exit(0);
   }
}

if(isset($_POST['update'])){
    $employee_id  = mysqli_real_escape_string($conn, $_POST['employee_id']);
    $firstname         = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename         = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname         = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email         = mysqli_real_escape_string($conn, $_POST['email']);
    $number         = mysqli_real_escape_string($conn, $_POST['number']);
    $bday          = mysqli_real_escape_string($conn, $_POST['bday']);
    $gender         = mysqli_real_escape_string($conn, $_POST['gender']);
    $status        = mysqli_real_escape_string($conn, $_POST['status']);


    $query = "UPDATE  employee_id SET firstname = '$firstname' , middlename = '$middlename' , lastname = '$lastname' , email = '$email' , 
                         number = '$number' , bday = '$bday', gender = '$gender' , status= '$status'
                         WHERE employee_id = '$employee_id' ";
                         
                         
                         $query_run = mysqli_query($conn,$query);
     
                         if($query_run){
                            $_SESSION['message'] = "EDITED  Successfully";
                            header("Location: dashboard.php");
                            exit(0);
                         }
                         else{
                            $_SESSION['message'] = "Applicant Not EDITED ";
                            header("Location: regForm.php");
                            exit(0);
                         }
}


if(isset($_POST['save'])){
    $employee_id  = mysqli_real_escape_string($conn, $_POST['employee_id']);
    $firstname         = mysqli_real_escape_string($conn, $_POST['firstname']);
    $middlename         = mysqli_real_escape_string($conn, $_POST['middlename']);
    $lastname         = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email         = mysqli_real_escape_string($conn, $_POST['email']);
    $number         = mysqli_real_escape_string($conn, $_POST['number']);
    $bday          = mysqli_real_escape_string($conn, $_POST['bday']);
    $gender         = mysqli_real_escape_string($conn, $_POST['gender']);
    $status = "New";

 $query = "INSERT INTO employee_table (firstname, middlename, lastname, email, number, address, bday, gender, status)
  VALUES ('$firstname', '$middlename', '$lastname', '$email', '$number', '$address', '$bday', '$gender','$status')";


     $query_run = mysqli_query($conn,$query);
     
     if($query_run){
        $_SESSION['message'] = "Applicant Created Successfully";
        header("Location: index2.php");
        exit(0);
     }
     else{
        echo "Applicant Not Created ";
        header("Location: student-create.php");
        exit(0);
     }
}
?>