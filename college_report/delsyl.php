    <?php
    include 'header.php';
    include 'dbconfig.php';
    $sylid=$_GET['sylid'];
    $sql="DELETE FROM syllabus WHERE sylid='$sylid';";
      if($conn->query($sql))
           {
           echo"<script>alert('Delete Inserted Sucessfully')</script>";
           echo "<meta http-equiv='refresh' content='0;veiwsyl.php'/>";
           }
           else{
           echo "<script> alert('Fail to delete data')</script>";
           echo "<meta http-equiv='refresh' content='0;veiwsyl.php'/>";
           }
           ?>