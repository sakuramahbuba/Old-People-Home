<?php
include('include/login_check.php'); 
include('include/connect.php');
$sql="SELECT employee_id, employee_name, employee_adrs,employee_contact FROM employee ORDER BY employee_id ASC";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color:  #87CEEB;}

#customers tr:hover {background-color: #ddd ;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #6A5ACD;
    color: white;
}
 #foo {
    position: fixed;
    bottom: 0;
    right: 0;
  }
</style>
    <title>old home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/pos.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <img class="logo" src="pictures/cst.png">
        </div>  
    </div>
    
    <div class="container">     
        <table id="customers">
            <tr> 
               <th>Employee ID</th>
                <th>Employee Name</th>
                <th>Employee Address</th>
                   <th>Employee Contact</th>
            
             </tr>  
              <?php
            while($data=$result->fetch_object())
            {
                 $id=$data->employee_id; 
                $name=$data->employee_name; 
                $adrs=$data->employee_adrs;
                  $con=$data->employee_contact;
                ?>
                <tr> 
               <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $adrs ?></td>
                <td><?php echo $con ?></td>

                <td><a href="update_employee.php?sid=<?php echo $id;?>"><button type="button" class="btn btn-primary">Edit</button></a></td></a></td>
                <td><a href="delete_employee.php?did=<?php echo $id;?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr>
            
                <?php                             
                }
                ?>
        </table>
            </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="manager_control.php">Back to Menu</a>
            </div>
        </div>  
        <br/>
    </div> 
    
</body>
</html>