<?php session_start();?>
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
<body>
<header>
</div>
    <div class="top">
        <ul>
        <li><a <?php echo "href='catalog2.php?email=".$_GET['email']."'";?>>Back</a></li>
        </ul>   
            
    </div> 
    <div class="logo">
        <img src="images/loogo.jpg" width="350" height="200"style="border-radius:20px"/>
        <p style="color: white">Raad SRS For Stone Crafting & Construction</p>
        <div class="iconh">
            <a href="tel: +961 76468674"><i class="fa-solid fa-phone"></i></a>
           <a href="mailto: raad.srs@gmail.com"> <i class="fa-solid fa-envelope"></i></a>
            <a href="https://www.instagram.com/firas20raad/"><i class="fa-brands fa-instagram-square"></i></a>
            <a href="https://api.whatsapp.com/send?phone=96181145026"> <i class="fa-brands fa-whatsapp-square"></i></a>
          
        </div>

   

</header>


 

<br> <br> <br>
<section id="contact-us">
<div class="con">
<center>
 
</center>
<br>   <br>  
  
  
<h2><span id="totalPrice"></span></h2> 
 <form method="POST">
 <h2><b>
 <?php 





include ('conn.php');

if (isset($_POST['submit'])) {
$email =  $_SESSION['Email'] ;

$shape=$_POST['shapes'];
$amount=$_POST['quantity'];


$sql ="SELECT products.price FROM products WHERE shape='$shape'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$price=$row[0];

$total=$price*$amount;

echo "For ".$shape."<br>Price/m= ".$price."<br>And Quantity= ".$amount."<br>Total Price: ".$total;

$sql1 ="SELECT customer.CID FROM customer WHERE Email='$email'";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_row($result1);
$cid=$row1[0];

$sq ="INSERT INTO `orders`( `Order_shape`, `Order_Amount`, `Total`,`CID`) 
VALUES ('$shape','$amount','$total','$cid')";
$resu = mysqli_query($conn, $sq);



}
?>
<br> <br>
<br> <br>
<br> <br>
<br> <br>
<br> <br>
<br> <br>
<P style="color:azure"> <?php echo "ORDER ACCEPTED";?> </P>