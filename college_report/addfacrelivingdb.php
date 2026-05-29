<?php
if(isset($_POST['addfacreliving']))
{
    $employee=$_POST['employee'];
    $branch=$_POST['branch'];
      $post=$_POST['post'];
     $gender=$_POST['gender'];
     $eplace=$_POST['eplace'];
    $emonth=$_POST['emonth'];
    $eyear=$_POST['eyear'];
     $edate=$_POST['edate'];
      include 'dbconfig.php';
    $sql="insert into relivingorder (employee,branch,post,gender,eplace,emonth,eyear,edate) Values('$employee','$branch','$post','$gender','$eplace','$emonth','$eyear','$edate');";
     if($conn->query($sql))
      {
           echo"<script>alert('Generating Sucessfully')</script>";
           echo "<meta http-equiv='refresh' content='0;genreliving.php'/>";
      }
      
           else{
          echo $sql;
           echo "<script> alert('Fail to Generating')</script>";
          // echo "<meta http-equiv='refresh' content='0;addfacreliving.php'/>";
      }
      }
       else{
           header("location:addfacreliving.php");
           }
?>



