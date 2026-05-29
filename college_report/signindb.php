<?php
if(isset($_POST['index']))
{
   $aid=$_POST['aid']; 
   $password=$_POST['password'];
   include 'dbconfig.php';
   $sql="select * from adminsignin where aid='$aid'  and password='$password';";
   $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                session_start();
                $_SESSION['aid']=$aid;
                $_SESSION['password']=$password;
                echo"<meta http-equiv='refresh' content='0;mainpage.php'/>";
            }
   else
   {
        echo "<script>alert('Signin Incomlete')</script>";
        
                echo "<meta http-equiv='refresh' content='0;index.php'/>";
   }
}

?>