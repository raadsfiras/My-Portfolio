<?php 
if (isset($_POST['Submit'])){ 
$cid= $_SESSION['ID'];
$current=$_POST['currentpassword'];
$new=$_POST['newpassword'];
$cp=$_POST['confirmpassword'];


$conn =  mysqli_connect("localhost", "root", "", "srs_db") or die(mysqli_connect_error());

$s="SELECT customer.password from customer where CID='$cid'";
$ex = mysqli_query($conn, $s) or die(mysqli_connect_error());
$r = mysqli_fetch_row($ex);

if($r[0]==$current&&$new==$cp){

       $sql="UPDATE customer SET Password='$new' WHERE customer.CID='$cid' and Email='$email'" ;
       $ex = mysqli_query($conn, $sql) or die(mysqli_connect_error());
      
     
    }

else {
    echo '<script>alert("Invalid input")</script>';

}
}
?>