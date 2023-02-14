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
           <a href="mailto:  raad.srs@gmail.com"> <i class="fa-solid fa-envelope"></i></a>
            <a href="https://www.instagram.com/firas20raad/"><i class="fa-brands fa-instagram-square"></i></a>
            <a href="https://api.whatsapp.com/send?phone=96181145026"> <i class="fa-brands fa-whatsapp-square"></i></a>
        
        </div>
    </div>
    <div class="top">
        <ul>
        <li><a <?php echo "href='customer.php?email=".$_GET['email']."'";?>>Home</a></li>
        <li><a href="logout.php">Logout</a></li> 
        <li><a <?php echo "href='gallery2.php?email=".$_GET['email']."'";?>>Gallery</a></li>
        <li><a <?php echo "href='catalog2.php?email=".$_GET['email']."'";?>>Order</a></li>
        <li><a <?php echo "href='workhouse.php?email=".$_GET['email']."'";?>>Workhouse</a></li>
        <li><a <?php echo "href='profile.php?email=".$_GET['email']."'";?>>Edit Profile</a></li>
        <li><a <?php echo "href='about2.php?email=".$_GET['email']."'";?>>About</a></li>
        </ul>   
            
    </div>
</header>









<br> <br> <br>
<section id="contact-us">
        <div class="con" style="border-radius:15px">
            <div class="row">
                <div class="col-md-12">
                <br> <br>
                    <div class="block">

                        <h1 class>Contact Us</h1>
                        
                        <form action="" method="post">
                        <br> <br>
                        <label style="color:white;">Full Name</label>
                        <br>
                            <div>
                                <input style="color:black;" type="name" class="form-control" id="name" name="Name" placeholder="Full Name..." required="">
                            <br> <br>
                            </div>
                            <div>
                            <br> <br>
                            <label style="color:white;">E-mail</label>
                            <br>
                                <input style="color:black;" type="text" class="form-control" id="email" name="Email" placeholder="E-mail" required="">
                                <br> <br>
                             </div>
                             <br> <br>
                             <label style="color:white;">Write your message here...</label>
                             <br>
                                <textarea style="color:black;" type= "text" class="form-control" id="mess" rows="3" name="Message" placeholder="Write your message here..." required="" ></textarea>
                                <br> <br>
                             </div>
                             <br> <br>
                        <button style="background-color: red; color:white" id="submit" name="Submit" type="submit" value="submit" onclick="gotowhatsapp()">send your message</button>
                        <br> <br>  
                    </form>
                    </div>
                </div>
            </div>
        </div>





        <script>
function gotowhatsapp() {
    
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mess = document.getElementById("mess").value;

    var url = "https://wa.me/96181145026?text=" 
    + "Name: " + name + "%0a"
    + "Email: " + email  + "%0a"
    + "Message: " + mess  + "%0a"
    

    window.open(url, '_blank').focus();
}
</script>






        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    </section>




