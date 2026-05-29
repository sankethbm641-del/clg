
<?php
if(isset($_POST['editsub']))
{
    $id=$_GET['id'];
    $subcode=$_POST['subcode'];
     $subtype=$_POST['subtype'];
     $subname=$_POST['subname'];
      $branchname=$_POST['branchname'];
       $sem=$_POST['sem'];
    include 'dbconfig.php';
    $sql="UPDATE subject SET subcode='$subcode',subtype='$subtype',subname='$subname',branchname='$branchname',sem='$sem' WHERE subcode='$id';";
     if($conn->query($sql))
      {
           echo"<script>alert('edit Inserted Sucessfully')</script>";
           echo "<meta http-equiv='refresh' content='0;viewsub.php'/>";
           
           }
           else{
               
           echo "<script> alert('Fail to edit data')</script>";
           echo "<meta http-equiv='refresh' content='0;vie  wsub.php'/>";
      }
      }
       else{
           header("location:addsub.php");
           }
?>


