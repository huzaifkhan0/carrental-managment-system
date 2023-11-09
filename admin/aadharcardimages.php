<?php
session_start();
include('includes/config.php');
error_reporting(0);
$conn = mysqli_connect("localhost","root","","carrental");
$query="SELECT * FROM `tblbooking`";
$result=mysqli_query($conn , $query);
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

</head>
<body>
    <div class="col-6 border m-2">
    <h3>Image list</h3>
        <table class="table table-bordered"> 
            <thead>
                <tr>
                  
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($fetch=mysqli_fetch_assoc($result)){
                    echo  "<tr>";
                    echo "<td><img src='admin/img/aadharcardimg/s{$fetch['tblbooking']}' width='100'></td>";
                    echo " </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>