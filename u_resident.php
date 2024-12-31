<?php
include('include/login_check.php'); 
include('include/connect.php');
$sql="SELECT residents_info.id, residents_info.name , residents_info.sex,residents_info.age,residents_info.location, residents_info.contact_of_gurdian FROM residents_info";


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
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <img class="logo" src="pictures/box3.jpg" >
        </div>  
    </div>

    
    <div class="container">     
        <table id="customers">
            <tr> 
               <th>ID</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Age</th>
                <th>Location</th>
                <th>Contact of Guardian</th>
             </tr>

            <?php
            while($data=$result->fetch_object())
            {
                $id=$data->id; 
                $name=$data->name; 
                $sex=$data->sex; 
                $age=$data->age; 
                $location=$data->location; 
                $contact_of_gurdian=$data->contact_of_gurdian;
                ?>
                <tr> 
               <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $sex ?></td>
                <td><?php echo $age ?></td>
                <td><?php echo $location ?></td>
                <td><?php echo $contact_of_gurdian ?></td>
                

                <td><a href="u_resident.php?id=<?php echo $id;?>"> <button type="button" class="btn btn-primary">Edit</button></a></td>
                <td><a href="delete_resident.php?id=<?php echo $id;?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr>
            
                <?php                             
                }
                ?>
        </table>
    </div>
<br>
<br>
<br>
<br>
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