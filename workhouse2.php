<?php
include ('conn.php');

if(isset($_POST['submit'])){

  $email = $_GET['email'];
  $desc = $_POST['description'];
  $amount = $_POST['amount'];
  $status = $_POST['status'];
  $date = $_POST['date'];

  $sql = "SELECT CID FROM customer WHERE Email = '$email'";
  $res = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($res)){
    $id = $row['CID'];
  $query = "INSERT INTO `payments`(`description`, `date`, `amount`, `Status`, `CID`) VALUES ('$desc','$date','$amount','$status', '$id')";
  $result = mysqli_query($conn,$query);
  if($result){
    header("Location: workhouse2.php?email=".$email."&Done");
  }
  }
}
if(isset($_POST['add'])){
    
  $email = $_GET['email'];
  $target = "images/".basename($_FILES['image']['name']);
  $image = $_FILES['image']['name'];
  $desc = $_POST['descriptionfor'];
  $dateof = $_POST['datefor'];
  $q1 = "SELECT CID FROM customer WHERE Email = '$email'";
  $r = mysqli_query($conn, $q1);
  while($row = mysqli_fetch_assoc($r)){
    $id = $row['CID'];
  $sql1 = "INSERT INTO `workhouse`(`dateofpic`, `description`, `image`, `CID`) VALUES ('$dateof','$desc','$image','$id')";
  $res1 = mysqli_query($conn, $sql1);

if($res1 && move_uploaded_file($_FILES['image']['tmp_name'], $target)){
 header ("Location: workhouse2.php?email=".$email."&Added");
}
  }
}
if(isset($_POST['delete'])){

  $name = $_POST['images'];
  $email = $_GET['email'];


  $q2 = "SELECT CID FROM customer WHERE Email = '$email'";
  $r2 = mysqli_query($conn, $q2);
  while($row = mysqli_fetch_assoc($r2)){
    $id = $row['CID'];
  $query="DELETE FROM workhouse WHERE image = '$name' AND CID = '$id'";
  $res = mysqli_query($conn, $query);
  if($res){
    header("Location: workhouse2.php?email=".$email."&Deleted");
  }
}
}
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
   <body style="height: 850px;">

     <header>
      

    <div class="top">
      <ul>
       
 
        <li><a href="mycustomers.php">Back</a></li>
  
      </ul>   
   
     </div> 
      
      <div class="logo">
        <img src="images/loogo.jpg" width="350" height="200"style="border-radius:20px"/>
        <p style="color: white">Raad SRS For Stone Crafting & Construction</p>
        
            <p id="adn" style="color: white">Admin Page</p>    
     





       
    </header>



  <center>
<table style="padding:5px;">
    <tr>
        <td class="workh">
<section id="custworkhouse">
        <div class="custtab" style="border-radius:15px">

            <h1><legend style="color: white;"><B>
              <?php
              include ('conn.php');
              $email = $_GET['email'];

              $sql = "SELECT Name FROM customer WHERE Email = '$email'";
              $res = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($res)){
                echo "Mr/Mrs. ".$row['Name']."";
              }
?>
            </B></legend></h1>
            <hr style="color: white; align-self:center" >
       
       
       
            <h2 style="color: black;"><B>Payment History:</B></h2>
            <form  method="POST" enctype="multipart/form-data">
           <input style="margin:auto;"  type="text" name="description" placeholder="Description"><br> <br>
           <input  type="number"  name="amount" placeholder="Price" required><br>
           <h3>Status</h3><select name="status">
             <option>Paid</option>
             <option>UnPaid</option>
           </select><br><br>
           <input  style="margin:auto;"  type="date"  name="date" required><br><br>
           <button style="background-color: red; color:white; margin:auto " type="submit" name="submit">Submit</button>
           </form> 
        </div>
     <td>
         <section class="ww">
        <table class="viewr">
     <thead>
          <tr>
              <th>Description</th>
              <th>Price</th>
              <th>Status</th>
              <th>Date</th>
            
            </tr>
           
        </thead>
        <tbody>
          <?php
          include ('conn.php');
          $email = $_GET['email'];
          $sql = "SELECT * FROM customer, payments WHERE  customer.CID = payments.CID AND customer.Email='$email'";
          $res = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($res)){
        echo "<tr>
              <th>".$row['description']."</th>
              <th>".$row['amount']."</th>
              <th>".$row['status']."</th>
              <th>".$row['date']."</th>
            
            </tr>";
          }
            ?>
        </tbody>
</table>
</section>
</td>
</tr>
</table>
</center>

<br><hr style="margin-right: 0px;"><br>










<div style="margin-left:475px" class="workpic">
<nav class="navtop">
    	<div>  
    		<h1 style="margin-left:63px;">Upload to Gallery</h1>
       <center>
           <form  method="POST" enctype="multipart/form-data">
           <input style="margin-left: 76px;"  type="file" name="image"><br> <br>
           <input  type="text"  name="descriptionfor" placeholder="Description" required><br><br>
           <input  type="date"  name="datefor" required>
           <button style="background-color: red; color:white; " type="submit" name="add"> Add</button>
           </form>
           <h2 style="color: white;">Delete Pictures </h2>
           <form method="POST">
             <select style=" margin:auto" name="images">
               <?php
                include ('conn.php');
                $email = $_GET['email'];
                $query = "SELECT * FROM workhouse, customer WHERE customer.CID = workhouse.CID AND customer.Email = '$email'";
                $res = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($res)){
                echo "
                  <option value=".$row['image'].">".$row['image']."</option>
                ";
                }
               ?>
             </select><br>
           <button style="background-color: red; color:white; margin-left:0px; margin-top:5px" type="submit" name="delete">delete</button>
           </form>
            </center> 
    	</div>
    </nav>
              </div>



 <?php
include ('conn.php');
if(isset($_POST['add'])){
    
  $target = "images/".basename($_FILES['image']['name']);
  $image = $_FILES['image']['name'];
  $desc = $_POST['description'];
  $date = $_POST['dateofpic'];

  $sql = "INSERT INTO `workhouse`(`image`,`description`, `dateofpic` ) VALUES ('$image','$desc','$date')";
  $result = mysqli_query($conn, $sql);

if($result && move_uploaded_file($_FILES['image']['tmp_name'], $target)){
 
  
if(isset($_POST['delet'])){

  $name = $_POST['images'];


  $query="DELETE FROM workhouse WHERE image = '$name'";
  $res = mysqli_query($conn, $query);
  if($res){
  }
}
}
}
?>



   </body>
</html>
