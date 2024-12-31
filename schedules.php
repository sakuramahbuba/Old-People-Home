<?php
include('include/login_check.php'); 
include('include/connect.php');
$sql="SELECT * FROM schedules";
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
    <title>Old Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/pos.css">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>

<body>
    <div class="container">
        <div class="row">
            <img class="logo" src="pictures/ppl.png">
        </div>  
    </div>
    
    <div class="container">     
        <table id="customers">
            <tr> 
               <th>Time</th>
                <th>Activities</th>
                
            </tr>  
            <?php
            while($data=$result->fetch_object())
            {
                 $time=$data->time; 
                $activities=$data->activities; 
                 
                ?>
                <tr> 
               <td><?php echo $time ?></td>
                <td><?php echo $activities ?></td>
              
                
                </tr>
            
                <?php                             
                }
                ?>
        </table>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            <button type="button" class="btn " style="float: right;">
                <a href="manager_control.php">Back to Menu</a>
            </div>
        </div>  
        <br/>
    </div> 
    
</body>
</html>