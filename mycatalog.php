<?php session_start()?>
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
       
        <li><a href="admin.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="myprojects.php">Edit Projects</a></li>
        <li><a href="mycustomers.php">Customers</a></li>
  
      </ul>   
   
     </div> 
      
      <div class="logo">
        <img src="images/loogo.jpg" width="350" height="200"style="border-radius:20px"/>
        <p style="color: white">Raad SRS For Stone Crafting & Construction</p>
        
            <p id="adn" style="color: white">Admin Page</p>    
     







    </header>

    <br> <br> <br>
    <br> <br> <br> <br>
    <section id="editpro">
    <div class="con" style="border-radius:15px">
            <div class="row">
                <div class="col-md-12">
                <br> <br>
                    <div class="block">

                        <h1 >Edit Prices</h1>
                        
                        <form action="" method="post">
                        <br> <br>
                        <label style="color:white;">Select Shape</label>
                        <br>
                            <div>
                            <select name="shapes" id="shapes" required>
                <option >Select Shapes</option>

                <?php
              
              include ("conn.php");
                $q = ("select * from products order by shape asc");
                $ex = mysqli_query($conn, $q) or die(mysqli_connect_error());
                while ($list = mysqli_fetch_assoc($ex)) {
                ?>
                    <option value="<?php echo $list['shape']; ?>">
                        <?php echo $list['shape'];

                        ?>
                    </option>


                <?php } ?>

            </select>
                            <br> <br>
                            </div>
                            <div>
                            <br> <br>
                            <label style="color:white;">Price</label>
                            <br>
                                <input style="color:black;" type="text" id="price" name="price" placeholder="price" required>
                                <br> <br>
                             </div>
                            
                             <br> <br>
                        <button style="background-color: red; color:white" id="submit" name="Submit" type="submit" value="submit">Submit</button>
                        <br> <br>  
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




</html>










<?php 
include ("conn.php");
if (isset($_POST['Submit'])){

$shape=$_POST['shapes'];
$price=$_POST['price'];


       $sql="UPDATE products SET price='$price' WHERE products.shape='$shape' " ;
       $ex = mysqli_query($conn, $sql) or die(mysqli_connect_error());
       if($ex){
           header("Location: mycatalog.php?Done");
       }
       
}
     

?>