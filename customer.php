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
<div class="top">
        <ul>
        <li><a href="logout.php">Logout</a></li> 
        <li><a <?php echo "href='gallery2.php?email=".$_GET['email']."'";?>>Gallery</a></li>
        <li><a <?php echo "href='catalog2.php?email=".$_GET['email']."'";?>>Order</a></li>
        <li><a <?php echo "href='workhouse.php?email=".$_GET['email']."'";?>>Workhouse</a></li>
        <li><a <?php echo "href='profile.php?email=".$_GET['email']."'";?>>Edit Profile</a></li>
        <li><a  <?php echo "href='contact2.php?email=".$_GET['email']."'";?>>Contact</a></li>
        <li><a <?php echo "href='about2.php?email=".$_GET['email']."'";?>>About</a></li>
        </ul>  
        </div> 
    <div class="logo">
        <img src="images/loogo.jpg" width="350" height="200" style="border-radius:20px"/>
        <p style="color: white">Raad SRS For Stone Crafting & Construction</p>

        <div class="iconh">
            <a href="tel: +961 76468674"><i class="fa-solid fa-phone"></i></a>
           <a href="mailto: raad.srs@gmail.com"> <i class="fa-solid fa-envelope"></i></a>
            <a href="https://www.instagram.com/firas20raad/"><i class="fa-brands fa-instagram-square"></i></a>
            <a href="https://api.whatsapp.com/send?phone=96181145026"> <i class="fa-brands fa-whatsapp-square"></i></a>
            
        </div>
        </div>
    
        <br>
      



<table class="tabh">
    <tr>
        <td >
        <p class="proj">View Projects </p>
        </td>
        <td align="center">
        <p class="stonecatalog">Order Catalog</p> 
        </td>
        <td align="center">
        <p class="mwh">My Workhouse</p> 
        </td>

    </tr>  
    <tr>
        <td class="im4">
             <a <?php echo "href='gallery2.php?email=".$_GET['email']."'";?>> <img class="rgal" src="images/walppaper.jpeg" ></a> 
        </td>

        <td class="im5">
             <a <?php echo "href='catalog2.php?email=".$_GET['email']."'";?>> <img class="rgal" src="images/stn.jpg"   ></a>
        </td>
        <td class="im6">
             <a <?php echo "href='workhouse.php?email=".$_GET['email']."'";?>> <img class="rgal" src="images/mwhpic.jpeg"   ></a>
        </td>
    </tr> 
</table>


</header>





</body>







</html>