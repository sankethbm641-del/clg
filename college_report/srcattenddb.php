<?php
if(isset($_POST['srcattend']))
{
    $employee=$_POST['employee'];
    $branch=$_POST['branch'];
      $post=$_POST['post'];
    $instname=$_POST['instname'];
     $gender=$_POST['gender'];
    $emonth=$_POST['emonth'];
    $eyear=$_POST['eyear'];
     $astart=$_POST['astart'];
    $aend=$_POST['aend'];
      include 'dbconfig.php';
    $sql="insert into facattend(employee,branch,post,instname,gender,emonth,eyear,astart,aend) Values('$employee','$branch','$post','$instname','$gender','$emonth','$eyear','$astart','$aend');";
     if($conn->query($sql))
      {
           echo"<script>alert('Generating Sucessfully')</script>";
           echo "<meta http-equiv='refresh' content='0;genattend.php'/>";
      }
           else{
               
           echo "<script> alert('Fail to Generating')</script>";
           echo "<meta http-equiv='refresh' content='0;scrattend.php'/>";
      }
      }
       else{
           header("location:srcattend.php");
           }
?>



