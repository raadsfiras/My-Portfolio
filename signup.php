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
<body>
<header> 
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
    <div class="top">
        <ul>
        <li><a href="index.php">Home</a></li> 
        <li><a href="login.php">Login</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="catalog.php">Catalog</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        </ul>   
            
    </div>
</header>

<br> <br><br>

    <div class="signup-box" style="border-radius:15px">
    <br> <br>
      <h1>Sign Up</h1>
     
      <form action="signup.php" method="post" >
        
        <label style="color:white;">Full Name</label>  <br>
        <input type="text" name="Name" placeholder="Full Name..." required/>     

         <br><br>

        <label style="color:white;">Address</label><br>
        <input type="text" name="Address" placeholder="Address..." required/>

        <br><br>

        <label style="color:white;">Email</label><br>
        <input type="email" name= "Email" placeholder="Email..." required/>

        <br><br>

        <label style="color:white;">Password</label><br>
        <input type="password"name="Password" placeholder="Password..." required/>

        <br><br>

        <label style="color:white;">Confirm Password</label><br>
        <input type="password"name="ConfirmPassword" placeholder="Confirm Password..." required/>

        <br><br>

        <label style="color:white;">Gender</label><br>
        <div class="Gender">
            <select name="Gender" id="Gender"  required>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option> </select></div>
                  <br>


        <label style="color:white;">Date of birth</label><br>
        <input type="date"name="Dob" placeholder="" required/>

        <br><br>

        <label style="color:white;">Phone number </label> <br>
        <input type="int"name="Phonenumber" placeholder="Phone Number..." required />

        <br><br>

        <input type="submit" style="background-color: red; color:white" value="Submit" name="submit"/>

        <br><br>
        <br><br>

      </form>
     
    </div>

    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
      
    </p>

</body>
</html>


<?php
 if (isset($_POST['submit'])){ 

    $name =  $_POST['Name'];
    $add  =  $_POST['Address'];
    $e    =  $_POST['Email'];
    $pass =  $_POST['Password'];
    $conf =  $_POST['ConfirmPassword'];
    $g    =  $_POST['Gender'];
    $dob  =  $_POST['Dob'];
    $pn   =  "https://wa.me/961".$_POST['Phonenumber']."";
  
    if($pass==$conf)
	{
        include ("conn.php");
     
        $sql= "INSERT INTO Customer(Name,Email,dob,Address,phoneno,Password,Gender) VALUES ('$name','$e','$dob','$add','$pn','$pass','$g')";
       
        $result=mysqli_query($conn,$sql)or die(mysqli_connect_error()) ;
  
        if($result){
            header("Location: login.php?Registered Successfully");
          }
    }

else
{
echo '<script>alert("Password does not match")</script>';
}


}?>
