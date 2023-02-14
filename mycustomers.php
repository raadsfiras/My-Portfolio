<?php    
session_start();
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raad SRS</title>
    <link rel="stylesheet" href="design.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body class="orderc">

<header>
<div class="top">
        <ul>
        <li><a href="admin.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="myprojects.php">Edit Projects</a></li>
        <li><a href="mycatalog.php">Catalog</a></li>
        </ul>  
        </div> 
    <div class="logo">
        <img src="images/loogo.jpg" width="350" height="200" style="border-radius:20px"/>
        <p style="color: white">Raad SRS For Stone Crafting & Construction</p>
        <p id="adn" style="color: white">Admin Page</p>
       
        </div>
    
        <br>
      <br> <br>
<br> <br>
<br> <br>
<br> <br>

<br> <br>
<br> <br>
<br> <br>
<br> <br>
<br> <br>



<center>
<table class="viewcust">
     <thead>
          <tr>
              <th >Full Name</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>Order-Shape</th>
              <th>Order-Amount</th>
              <th>Total</th>
          </tr>
     </thead>
     <tbody>

<?php
  



include ("conn.php");  

$q="SELECT * FROM customer, orders WHERE customer.CID = orders.CID";
$ex=mysqli_query($conn,$q)or die(mysqli_connect_error()) ;
while($row = mysqli_fetch_assoc($ex)){
    $str = $row['phoneno'];
    $whats = trim($str,"https://wa.me/961");
    echo "<tr>
    <th><a href='workhouse2.php?email=".$row['Email']."'>".$row['Name']."</th>
    <th>".$row['Email']."</th>
    <th><a href=".$row['phoneno'].">".$whats."</a></th>
    <th>".$row['Address']."</th>
    <th>".$row['Order_shape']."</th>
    <th>".$row['Order_Amount']."</th>
    <th>".$row['Total']."</th>
  </tr>";
}
 ?>
</tbody>


     
</table>
</center>


    </header>
<br> <br>
<br> <br>

 
</html>




