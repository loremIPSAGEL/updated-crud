<?php
session_start();
require 'mainConnect.php';
require 'editCode.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>AOE Management</title>
  <link rel="stylesheet" href="app/css/head-bar.css">
  <link rel="stylesheet" href="app/css/side-navigation-bar.css">
  <link rel="stylesheet" href="app/css/styles.css">
  <link rel="stylesheet" href="header.css">
  <link href ="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" relstyle ="stylesheet">
  

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <!--Boxicons-NPM-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!--DATA TABLESSS-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">


     <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script defer src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
     <script defer src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
     <script defer src="script.js"></script>
     <!--DATA TABLESSS-->
</head>

<body>

  


  <div class="container mt-5">
    <?php include ('message.php')?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>EMPLOYEE INFORMATION
                            <a href="regForm.php"class="btn btn-primary float-end">add applicants</a>
                    </h4>
                </div>
                <div class="card-body">
                  
                <table class="table">
                    <thead>
                      <tr>
                        <th> Employee ID</th>
                        <th>Firstname</th>
                        <th>Last name</th>
                        <th>email</th>
                        <th>Employee Status</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                       $query = "SELECT * FROM employee_table";
                       
                       
                       
                       
                       $query_run= mysqli_query($conn,$query);

                       if(mysqli_num_rows($query_run)>0){
                        foreach($query_run as $employee_table){
                          ?>
                          <tr>
                            <td><?= $employee_table['employee_id'];?></td>
                            <td><?= $employee_table['firstname'];?></td>
                            <td><?= $employee_table['lastname'];?></td>
                            <td><?= $employee_table['email'];?></td>
                            <td><?= $employee_table['status'];?></td>
                            <td>
                             
                              <a href="viewButton.php?employee_id=<?=$employee_table['employee_id'];?>" class="btn btn-primary">View</a>
                              <a href="editButton.php?employee_id=<?=$employee_table['employee_id'];?>" class="btn btn-success btn-sm">Edit</a>
                              
                              
                              <form action="editCode.php" method="POST" class="d-inline">
                              <button type ="submit" name="delete" value="<?=$employee_table['employee_id']; ?>"class ="btn btn-danger btn-sm">Delete</button>
                              </form>
                            </td>
                          </tr>
                          <?php
                        }
                       }
                       else{
                          echo "<h5>No Record Found</h5>";
                       }
                      ?>
                     
                    </tbody>
                  </table>
                  <script src="https://code.jquery.com/jquery-3.6.3.min.js" 
                          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" 
                          crossorigin="anonymous"></script>

                  <script src ="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
                  <script>
                  $(document).ready (function(){
                    $('.table').DataTable();

                  });
                  </script>
                </div>
            </div>
        </div>
    </div>
  </div>







  <main class="contentbody">

  </main>




 
  
 <!--Boxicons-Script-->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

 <!--Bootstrap-JS-requisites-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" 
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" 
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" 
          crossorigin="anonymous"></script>

     
  

</body>

</html>