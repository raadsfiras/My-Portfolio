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
        <li><a href="index.php">Home</a></li> 
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Sign up</a></li> 
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




        

        
</header>



<br>  <br>    <br>    <br>    <br>    <br>    <br>   <br>    <br>   

<!--in gallery.php-->
<div class="template_container">
    <h2 style="color:white; margin-right:420px">View Projects</h2>  
    <ul style="margin: 0 50px;float:left;">

       <li> <?php 
                   include ('conn.php');
                   $query = "SELECT image, description FROM gallery";
                   $res = mysqli_query($conn, $query);
                   while($row = mysqli_fetch_assoc($res)){
                   echo " 
           <img class='oo';
                     ' src='images/".$row['image']."'>   
                     ";
                   }
                  ?></li>
    </ul>
                </div>




</body>

















</html>