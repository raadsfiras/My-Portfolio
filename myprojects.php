<?php
include ('conn.php');
if(isset($_POST['Add'])){
    
  $target = "images/".basename($_FILES['image']['name']);
  $image = $_FILES['image']['name'];
  $desc = $_POST['description'];

  $sql = "INSERT INTO `gallery`(`image`,`description` ) VALUES ('$image','$desc')";
  $result = mysqli_query($conn, $sql);

if($result && move_uploaded_file($_FILES['image']['tmp_name'], $target)){
 header ("Location: myprojects.php?Added Success");
}
}
if(isset($_POST['delete'])){

  $name = $_POST['images'];


  $query="DELETE FROM gallery WHERE image = '$name'";
  $res = mysqli_query($conn, $query);
  if($res){
    header("Location: myprojects.php?Deleted");
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
   <body class="ggwp">

     <header>
      

    <div class="top">
      <ul>
       
      <li><a href="admin.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="mycatalog.php">Catalog</a></li>
        <li><a href="mycustomers.php">Customers</a></li>
  
      </ul>   
   
     </div> 
      
      <div class="logo">
        <img src="images/loogo.jpg" width="350" height="200"style="border-radius:20px"/>
        <p style="color: white">Raad SRS For Stone Crafting & Construction</p>
        
            <p id="adn" style="color: white">Admin Page</p>    
     







    </header>

<br>
<div class="galpic">
<nav class="navtop">
    	<div> <br>
    		<h1>Upload to Gallery</h1>
       
           <form  method="POST" enctype="multipart/form-data">
           <input style="margin-right: 14px;"  type="file" name="image">
          <br>
           <button style="background-color: red; color:white; margin-left:220px; width:54px" type="submit" name="Add">Add</button>
           </form>
           <br>
           <h2 style="color: white;">Delete from Gallery </h2>
           <form method="POST">
             <select style=" margin-right:50px;" name="images">
               <?php
                include ('conn.php');
                $query = "SELECT * FROM gallery";
                $res = mysqli_query($conn, $query);
                while($row = mysqli_fetch_assoc($res)){
                echo "
                  <option value=".$row['image'].">".$row['image']."</option>
                ";
                }
               ?>
             </select>  <button style="background-color: red; color:white; margin-left:220px" type="submit" name="delete">delete</button>
           
           </form>
    	</div>
    </nav>
              </div>

           


<div class="template_container">
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