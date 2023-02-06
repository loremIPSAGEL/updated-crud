<?php
session_start();
require 'mainConnect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>applicant edit!</title>
  </head>
  <body>


   <div class="container mt-5">
  
    <?php include('message.php');?>
    <div class ="row"> 
        <div class ="col-md-5">
            <div class ="card">
                <div class="card-header">
                    <h4>
                        Application edit form
                        <a href="dashboard.php" class = "btn btn-danger float-end">back</a>
                    </h4>
                </div>
                <div class="card-body" >
                    
                <?php
                     if(isset($_GET['employee_id'])){

                       $employee_id= mysqli_real_escape_string($conn,$_GET['employee_id']);
                       $query = "SELECT * FROM employee_table WHERE employee_id = '$employee_id'";
                       $query_run=mysqli_query($conn,$query);
                       if(mysqli_num_rows($query_run)>0){
                        $employee_id = mysqli_fetch_array($query_run);
                        ?>
                    <form action="code.php" method="POST">
                    <input type="hidden" id= "employee_id"name ="employee_id" value = "<?=$employee_id['employee_id'];?>"class="form-control" required>
                    
                    <div class="mb-3">
                        <label >Applicant First name
                        <input type="text" id= "fname"name ="fname" value = "<?=$employee_id['firstname'];?>"class="form-control" required>
                        </label>
                        
                    </div>

                    <div class="mb-3">
                        <label >Applicant Middle name                         
                            <input type="text" id="mname" name ="mname" value = "<?=$employee_id['middlename'];?>"class="form-control"></label>
                       
                    </div>

                    <div class="mb-3">
                        <label >Applicant Last name 
                        <input type="text" id="lname" name ="lname" value = "<?=$employee_id['lastname'];?>"class="form-control" required>
                        </label>
                    </div>

                    <div class="mb-3">
                        <label >Email address
                        <input type="email" id="email" name ="email" value = "<?=$employee_id['email'];?>"class="form-control" required></label>
                        
                    </div>

                    <div class="mb-3">
                        <label >Phone number:
                        <input type="text" id="phone" name ="phone" value = "<?=$employee_id['number'];?>"class="form-control" required></label>
                        
                    </div>

                    <div class="mb-3">
                        <label >Birthdate:
                        <input type="date" id="bday" name ="bday" value = "<?=$employee_id['bday'];?>"class="form-control" required></label>
                    </div>

                      <div class="mb-3">
                        <label >Gender
                        <input type="text" id="gender" name ="gender" value = "<?=$employee_id['gender'];?>"class="form-control" required></label>
                    </div>
  

                    <div class="mb-3">
                        <label >Applicant status
                        <input type="text" id="status" name ="status" value = "<?=$employee_id['status'];?>"class="form-control" required></label>
                    </div>

                    <div class = "mb-3">
                        <button type="submit" name="update" class ="btn btn-primary float-end">EDIT</button>
                    </div>
                    </form>
                    <?php
                       }
                       else{
                        echo "no record found";
                       }
                     }
                    
                ?>
                </div>
            </div>
        </div>
    </div>
   </div>
    <h1></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>