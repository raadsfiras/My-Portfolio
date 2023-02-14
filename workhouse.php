
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
<body class="ggwp">
<header>
</div>
    <div class="top">
        <ul>
        <li><a <?php echo "href='customer.php?email=".$_GET['email']."'";?>>Home</a></li>
        <li><a href="logout.php">Logout</a></li> 
        <li><a <?php echo "href='gallery2.php?email=".$_GET['email']."'";?>>Gallery</a></li>
        <li><a <?php echo "href='catalog2.php?email=".$_GET['email']."'";?>>Order</a></li>
        <li><a <?php echo "href='profile.php?email=".$_GET['email']."'";?>>Edit Profile</a></li>
        <li><a  <?php echo "href='contact2.php?email=".$_GET['email']."'";?>>Contact</a></li>
        <li><a <?php echo "href='about2.php?email=".$_GET['email']."'";?>>About</a></li>
        

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
   

<br><br><br><br><br><br><br>

  
<section class="ww">
        <table style="margin-left:550px;" class="viewr">
     <thead>
          <tr>
              <th>Description</th>
              <th>Amount</th>
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
       




<div class="template_container" style="margin-left:40px">
    <h2 style="color:white">View My Workhouse</h2>  
    <ul style="margin: 0 50px;float:left;">

       <li> <?php 
                   include ('conn.php');
                   $email = $_GET['email'];

  $sql = "SELECT CID FROM customer WHERE Email = '$email'";
  $res = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($res)){
                   $query = "SELECT * FROM workhouse, customer WHERE workhouse.CID = customer.CID AND customer.Email = '$email'";
                   $res = mysqli_query($conn, $query);
                   while($row = mysqli_fetch_assoc($res)){
                   echo "
                   <p style='color:white'>".$row['description']." - ".$row['dateofpic']."</p>
           <img class='oo';
                     ' src='images/".$row['image']."'>  
          
                     ";
                   }
                }
                  ?></li>

</html>