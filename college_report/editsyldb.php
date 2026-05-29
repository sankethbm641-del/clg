
<?php
if(isset($_POST['editsyl']))
{
    $id=$_GET['id'];
    $sylid=$_POST['sylid'];
    $yearofissue=$_POST['yearofissue'];
    include 'dbconfig.php';
    $sql="UPDATE syllabus SET sylid='$sylid',yearofissue='$yearofissue' WHERE sylid='$id';";
     if($conn->query($sql))
      {
           echo"<script>alert('edit Inserted Sucessfully')</script>";
           echo "<meta http-equiv='refresh' content='0;veiwsyl.php'/>";
           
           }
           else{
               
           echo "<script> alert('Fail to edit data')</script>";
           echo "<meta http-equiv='refresh' content='0;veiwsyl.php'/>";
      }
      }
       else{
           header("location:addsyl.php");
           }
?>


