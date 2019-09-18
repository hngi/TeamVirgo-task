<?php 
$host="localhost";
$username="root";
$email="";
$password="";
$db= "virgohng2";

$con = mysqli_connect("localhost","root","","","virgohng2");
mysqli_select_db($con, 'virgohng2');
if (isset($_POST['username'])) {
    $username=($_POST['username']);
        $email=($_POST['email']);
        $password=($_POST['password']);
    $regquery1="SELECT `username`,`login`,`loginpassword` FROM `logindata`";
           $regquery_run1=mysql_query($regquery1);
            mysql_num_rows($_POST($result)==1);
           $counter=0;
           
           
                $result=mysqli_query($con, $sql,'login');
                if($check==$email)
                {
                   echo "
                   <script>
                   alert('Account Already  Exist');
                   window.location.href='teamvirgo.php';
                   </script>
                   ";
                    exit();
                   
               else {


                    echo 
                    "
                        <script>
                        alert('Account Created Successfully');
                        window.location.href='teamvirgo.php';
                        </script>
                        
                    ";
                     exit();
                }
                 }
?>