<?php
session_start();?>
<?php

include ('conn.php');
if(isset($_POST['submit']))
{
  $email = $pass = '';

  $email= $_POST['email'];
  $pass = $_POST['psw'];

  $sql = "SELECT * FROM `manager` WHERE `Email` = '$email' AND `Password` = '$pass' ";
  $result = mysqli_query($conn, $sql);

  $sql1 = "SELECT * FROM `customer` WHERE `Email` = '$email' AND `Password` = '$pass' ";
  $result1 = mysqli_query($conn, $sql1);

  if($result || $result1){
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        $email = $row['Email'];
        session_start();
        $_SESSION['Email'] = $email;
      }
      header("Location: admin.php?Admin=$email");
    }else if(mysqli_num_rows($result1) > 0){
      while($row = mysqli_fetch_assoc($result1)){
        $email = $row['Email'];
        session_start();
        $_SESSION['Email'] = $email;
      }
      header("Location: customer.php?email=$email");
    }else{
      header("Location: login.php?Check Password Or UserName");
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], input[type=password] {
  width: 28%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color:black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 28%;
}
button:hover {
  opacity: 0.8;
}
.lgn {
  padding:16px;

}
</style>








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
<div class="top">
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="signup.php">Sign up</a></li> 
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="catalog.php">Catalog</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
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
    </div>

</header>

<br> <br> 
<br> <br> 
<br> <br> 
<br> <br> 
<br> <br> 
<br> <br> 
<br> <br> 
<br> <br> 
  <div class="lgn">
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

    <label for="email"><h3>Email</h3></label>
    <input type="text" placeholder="Enter your Email" name="email" required>
    <br> <br> 
    <label for="psw"><h3>Password</h3></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br> <br> 
    <br></br>
    <button type="submit" name="submit" style="background-color: black ;">Login</button>
    <label> 
</form>
  </div>


<div class="flex-col-c p-t-170 p-b-40">
<span class="txt1 p-b-9">
     Don’t have an account?
</span>
<a href="signup.php" class="txt3">
Sign up now
</a>
</div>

</html>