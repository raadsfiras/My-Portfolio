<?php
session_start(); ?>
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
        <li><a <?php echo "href='customer.php?email=".$_GET['email']."'";?>>Home</a></li>
        <li><a href="logout.php">Logout</a></li> 
        <li><a <?php echo "href='gallery2.php?email=".$_GET['email']."'";?>>Gallery</a></li>
        <li><a <?php echo "href='catalog2.php?email=".$_GET['email']."'";?>>Order</a></li>
        <li><a <?php echo "href='workhouse.php?email=".$_GET['email']."'";?>>Workhouse</a></li>
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






<table class="tabprof">
    <tr>
        <td class="eprof">
<section id="changeprofile">
        <div class="cp" style="border-radius:15px">
            <div class="row">
                <div class="col-md-12">
                <br>
                    <div class="block">

                        <h1 class>Edit Profile</h1>
                        
                        <form action="" method="post">
                            <?php
                            include ('conn.php');
                            $email=$_GET['email'];
                            $s="SELECT * from customer where Email='$email'";
                            $ex = mysqli_query($conn, $s);
                while($r = mysqli_fetch_assoc($ex)){
                                echo"
                        <br> 
                        <label style='color:white;'>Full Name</label>
                            <div>
                                <input style='color:black;' type='text' class='form-control' id='fullnm' name='fullname' Value='".$r['Name']."' />
                            <br><br> 
                            </div>
                            <div>
                            
                            <label style='color:white;'>Address</label>
                        <br>
                                <input style='color:black;' type='text' class='form-control' id='addr' name='address' Value='".$r['Address']."'/>
                                <br> <br> 
                             </div>
                             <div>
                            
                             <label style='color:white;'>Date of Birth</label>
                            <br>
                                <input style='color:black;' type= 'date' class='form-control' id='bod' rows='3' name='date'  Value='".$r['dob']."'/>
                                <br><br> 
                             </div>
                             <div>
                            
                             <label style=color:white;>Phone Number</label>
                             <br>
                                <input style='color:black;' type= 'tel' class='form-control' id='phnb' rows='3' name='phonenumber' Value='".$r['phoneno']."'/>
                                <br><br> 
                             </div>
                        
                        <button style='background-color:red; color:white;' id='savec' name='Apply' type='submit' >Save Changes</button>";
                    }
                            ?>

                    
                    </form>
                    </div>
                </div>
            </div>
        </div>
        </td>


<td class="pwss">
<section id="changepw">
        <div class="cp" style="border-radius:15px">
            <div class="row">
                <div class="col-md-12">
                <br> 
                    <div class="block">

                        <h1 class>Change Password</h1>
                        
                        <form action="" method="post">
                        <br> <br>
                        <label style="color:white;">Current Password</label>
                        <br>
                            <div>
                                <input style="color:black;" type="password" class="form-control" id="currpw" name="currentpassword" placeholder="Current Password..." required="">
                            <br> <br>
                            </div>
                            <div>
                            <br> 
                            <label style="color:white;">New Password</label>
                            <br>
                                <input style="color:black;" type="password" class="form-control" id="newpw" name="newpassword" placeholder="New Password" required="">
                                <br> <br>
                             </div>
                             <br> 
                             <label style="color:white;">Confirm Password</label>
                             <br>
                                <input style="color:black;" type= "password" class="form-control" id="confmpw" rows="3" name="confirmpassword" placeholder="Confirm Password" required="" >
                                <br> 
                             </div>
                             <br> 
                        <button style="background-color: red; color:white" id="submit" name="Submit" type="submit">Save</button>
                        <br> <br>  
                    </form>
                    </div>
                </div>
            </div>
        </div>
        </td>
        </tr>
        </table>



</html>
<?php 
include ("conn.php");
if (isset($_POST['Submit'])){ 
    
    $current=$_POST['currentpassword'];
    $new=$_POST['newpassword'];
    $cp=$_POST['confirmpassword'];
    $email=$_GET['email'];

    $query = "SELECT Email, Password FROM customer WHERE Email ='$email'";
    $result = mysqli_query($conn, $query);
    if($row = mysqli_fetch_assoc($result)){
        $main = $row['Password'];
        if($main == $current && $new == $cp){
    $sql="UPDATE customer SET Password='$new' WHERE Email='$email'" ;
           $ex = mysqli_query($conn, $sql);
           if($ex){
               echo '<script>alert("Successfully Changed")</script>';
           }
}else{
    echo '<script>alert("Invalid Inputs")</script>';
}
    }
          
    }
if(isset($_POST['Apply'])){
    $email = $_GET['email'];
    $name = $_POST['fullname'];
    $address = $_POST['address'];
    $birth = $_POST['date'];
    $phone = $_POST['phonenumber'];

    $query = "UPDATE `customer` SET `Name` = '$name', `Address`= '$address', `phoneno` = '$phone', `dob` = '$birth' WHERE `Email` = '$email'";
    $result = mysqli_query($conn, $query);
   
   
}

?>