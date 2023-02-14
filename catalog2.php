<?php
include ('conn.php');
if(isset($_POST['Submit'])){
  $email = $_GET['email'];
  $shape = $_POST['shapes'];
  $quantity = $_POST['Quantity'];

  $sql = "SELECT * FROM customer WHERE Email = '$email'";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $name  = $row['Name'];
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
<body class="orderc">
<header>
</div>
    <div class="top">
        <ul>
        <li><a <?php echo "href='customer.php?email=".$_GET['email']."'";?>>Home</a></li>
        <li><a href="logout.php">Logout</a></li> 
        <li><a <?php echo "href='gallery2.php?email=".$_GET['email']."'";?>>Gallery</a></li>
        <li><a <?php echo "href='workhouse.php?email=".$_GET['email']."'";?>>Workhouse</a></li>
        <li><a <?php echo "href='profile.php?email=".$_GET['email']."'";?>>Edit Profile</a></li>
        <li><a  <?php echo "href='contact2.php?email=".$_GET['email']."'";?>>Contact</a></li>
        <li><a <?php echo "href='about2.php?email=".$_GET['email']."'";?>>About</a></li>
        </ul>   
            
    </div> 
    <div class="logo">
        <img src="images/loogo.jpg" width="350" height="200"style="border-radius:20px"/>
        <p style="color: white">SRS For Stone Crafting & Construction</p>
        <div class="iconh">
            <a href="tel: +961 76468674"><i class="fa-solid fa-phone"></i></a>
           <a href="mailto:  raad.srs@gmail.com"> <i class="fa-solid fa-envelope"></i></a>
            <a href="https://www.instagram.com/firas20raad/"><i class="fa-brands fa-instagram-square"></i></a>
            <a href="https://api.whatsapp.com/send?phone=96181145026"> <i class="fa-brands fa-whatsapp-square"></i></a>
          
        </div>








       
</header>



<table class="table-cata">
    <tr>
<td>
<section class="stncatalog" id="stncatalog">
    
    <div class="contt">
        <div class="catalog-card">
            <div class="catalog-image">
               <img src="images/mbz.jpeg"  height="178.5px" width="250px">
            </div>
          <div class="catalog-info">
          <?php
include ("conn.php");
  $s="SELECT products.price from products where shape='Mbawaz' ";
  $ex = mysqli_query($conn, $s) or die(mysqli_connect_error());
  $r = mysqli_fetch_row($ex);
?>
             <p class="catalog-category">Mbawaz</p>
             <strong class="catalog-price">
                    <span><?php echo $r[0]."$/m"?></span>
             </strong>
            </div>
        </div>
    </div>
</section>
        <td>
        <section class="stncatalog" id="stncatalog">
    
    <div class="contt">
        <div class="catalog-card">
            <div class="catalog-image">
               <img src="images/mdk.jpeg"  height="178.5px" width="250px">
            </div>
          <div class="catalog-info">
          <?php
include ("conn.php");
  $s1="SELECT products.price from products where shape='Mad2oo2' ";
  $ex1 = mysqli_query($conn, $s1) or die(mysqli_connect_error());
  $r1 = mysqli_fetch_row($ex1);
?>
             <p class="catalog-category">Mad2oo2</p>
             <strong class="catalog-price">
                    <span><?php echo $r1[0]."$/m"?></span>
             </strong>
            </div>
        </div>
    </div>
</section>  
        </td>


        <td>
        <section class="stncatalog" id="stncatalog">
    
    <div class="contt">
        <div class="catalog-card">
            <div class="catalog-image">
               <img src="images/bik.jpeg"  height="178.5px" width="250px">
            </div>
          <div class="catalog-info">
          <?php
include ("conn.php");
  $s2="SELECT products.price from products where shape='Beek' ";
  $ex2 = mysqli_query($conn, $s2) or die(mysqli_connect_error());
  $r2 = mysqli_fetch_row($ex2);
?>
             <p class="catalog-category">Beek</p>
             <strong class="catalog-price">
                    <span><?php echo $r2[0]."$/m"?></span>
             </strong>
            </div>
        </div>
    </div>
</section>
        </td>


        <td>
        <section class="stncatalog" id="stncatalog">
    
    <div class="contt">
        <div class="catalog-card">
            <div class="catalog-image">
               <img src="images/mji.jpg"  height="178.5px" width="250px">
            </div>
          <div class="catalog-info">
          <?php
include ("conn.php");
  $s3="SELECT products.price from products where shape='Mejle' ";
  $ex3 = mysqli_query($conn, $s3) or die(mysqli_connect_error());
  $r3 = mysqli_fetch_row($ex3);
?>
             <p class="catalog-category">Mejle</p>
             <strong class="catalog-price">
                    <span><?php echo $r3[0]."$/m"?></span>
             </strong>
            </div>
        </div>
    </div>
</section> 
        </td>

    </tr>
    <tr>
<td>
<section class="stncatalog" id="stncatalog">
    
    <div class="contt">
        <div class="catalog-card">
            <div class="catalog-image">
               <img src="images/shr.jpeg"  height="178.5px" width="250px">
            </div>
          <div class="catalog-info">
          <?php
include ("conn.php");
  $s4="SELECT products.price from products where shape='Shaeere' ";
  $ex4 = mysqli_query($conn, $s4) or die(mysqli_connect_error());
  $r4 = mysqli_fetch_row($ex4);
?>
             <p class="catalog-category">Shaeere</p>
             <strong class="catalog-price">
                    <span><?php echo $r4[0]."$/m"?></span>
             </strong>
            </div>
        </div>
    </div>
</section>
        <td>
        <section class="stncatalog" id="stncatalog">
    
    <div class="contt">
        <div class="catalog-card">
            <div class="catalog-image">
               <img src="images/old.jpg"  height="178.5px" width="250px">
            </div>
          <div class="catalog-info">
          <?php
include ("conn.php");
  $s5="SELECT products.price from products where shape='Old' ";
  $ex5 = mysqli_query($conn, $s5) or die(mysqli_connect_error());
  $r5 = mysqli_fetch_row($ex5);
?>
             <p class="catalog-category">Old</p>
             <strong class="catalog-price">
                    <span><?php echo $r5[0]."$/m"?></span>
             </strong>
            </div>
        </div>
    </div>
</section>  
        </td>


        <td>
        <section class="stncatalog" id="stncatalog">
    
    <div class="contt">
        <div class="catalog-card">
            <div class="catalog-image">
               <img src="images/roof.jpg"  height="178.5px" width="250px">
            </div>
          <div class="catalog-info">
          <?php
include ("conn.php");
  $s6="SELECT products.price from products where shape='Roofs' ";
  $ex6 = mysqli_query($conn, $s6) or die(mysqli_connect_error());
  $r6 = mysqli_fetch_row($ex6);
?>
             <p class="catalog-category">Roofs</p>
             <strong class="catalog-price">
                    <span><?php echo $r6[0]."$/m"?></span>
             </strong>
            </div>
        </div>
    </div>
</section>
        </td>


        <td>
        <section class="stncatalog" id="stncatalog">
    
    <div class="contt">
        <div class="catalog-card">
            <div class="catalog-image">
               <img src="images/sclp.jpg"  height="178.5px" width="250px">
            </div>
          <div class="catalog-info">
          <?php
include ("conn.php");
  $s7="SELECT products.price from products where shape='Sculptures' ";
  $ex7 = mysqli_query($conn, $s7) or die(mysqli_connect_error());
  $r7 = mysqli_fetch_row($ex7);
?>
             <p class="catalog-category">Sculptures</p>
             <strong class="catalog-price">
                    <span><?php echo $r7[0]."$/m"?></span>
             </strong>
            </div>
        </div>
    </div>
</section> 
        </td>

    </tr>
</table>








<br> <br>
<center>
<table class="table-cat">
 
    <section id="editpro" >
    <tr>
  <td>  
            <div class="row">
                <div class="col-md-12">
               
                    <div class="block">

                        <h1 style="margin-right: 40px;" >Order</h1>
                        
 <form <?php echo "action=confirmorder.php?email=".$_GET['email']."";?>  method="post" >
                       
                    </div>    
  </td>
  <td>                      
      
                        <label style="color:white;">Select Shape</label>
                     <br>
                            <select name="shapes" id="shapes" required>
                <option value="">Select Shapes</option>

                <?php
              
              include ("conn.php");
                $q = ("select * from products order by shape asc");
                $ex = mysqli_query($conn, $q) or die(mysqli_connect_error());
                while ($list = mysqli_fetch_assoc($ex)) {
                ?>
                    <option <?php echo "value='".$list['shape']."'"; ?>id='shapeOp' >
                        <?php $shape= $list['shape'];
                        echo $shape;
                               
                        ?>
                    </option>


                <?php } ?>


            </select>
  </td>      
  <td>    
                            
                            </div>
                            <div>
                          
                            <label style="color:white; margin-left:30px">Quantity</label>
                            <br>
                                <input style="color:black; margin-left:30px" type="text" id="quantity" name="quantity" placeholder="Quantity" required >
                               
                             </div>
  </td>
 
  <td>                          
                           
                        <button style="background-color: red; color:white; margin-left:73px;" id="submit" name="submit" type="submit" value="submit">Confirm Order</button>
                        <br> <br>  
   </form>
                    </div>
                </div>
            </div>
    </section>
  </td>
  </tr>


</table>
</center>

    </html>
