<?php 
$host="localhost";
$username="root";
$password="";
$db= "virgohng";

$con = mysqli_connect("localhost","root","","virgohng");
mysqli_select_db($con, 'virgohng');
if (isset($_POST['username'])) {
    $uname=$_POST['username'];
    $password=$_POST['password'];
    mysql_num_rows($_POST($result)==1);
    $sql = "SELECT * from loginform where username='".$uname."' and password='".$password."' limit 1";
    $result=mysqli_query($con, $sql);
 
 	echo "You have entered an Incorrect Password";
      exit();}

    else
    	{
    		echo  "You have successfully logged in ";
  exit();
}

   
     

?>